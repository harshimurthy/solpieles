<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
    private $localPath = 'images/products/'; // local folder where the file will be loaded to

    public function __construct() {
        $this->middleware("authorization:staff", ['except'=>[]]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Image $images)
    {
        $images = $images->with('products')->paginate(15);

        return view('images.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Image $image)
    {
        return view('images.create', compact('image'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Image $image)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required|image|max:60000',
            'tags' => 'required'
        ]);

        $extendedName = $this->storeImage($request);
        
        if (!$extendedName) {
            return redirect()->route('admin.images.create')
                ->withDanger("File was not saved.");
           
        }

        $image->name = $request->input('name');
        $image->tags = $request->input('tags');
        $image->path = $extendedName;
        $image->size = File::size($extendedName);

        $image->save();

        return redirect()->route('admin.images.show', $image->id)
            ->withSuccess("Image $image->name has been saved.");
            

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        return view('images.show', compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit(Image $image)
    {
        return view('images.edit', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        $this->validate($request, [
            'name' => 'required',
            // 'image' => 'required|image|max:60000',
            'tags' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $this->validate($request, [
                'image' => 'required|image|max:60000',
            ]);

            $extendedName = $this->storeImage($request);

            if (!$extendedName) {
                return redirect()->route('admin.images.edit', $image->id)
                    ->withDanger("Crap. File was not saved.");
            }

            $image->path = $extendedName;
            $image->size = File::size($extendedName);
            
        }
        
        $image->name = $request->input('name');
        $image->tags = $request->input('tags');
        
        $image->save();

        return redirect()->route('admin.images.show', $image->id)
            ->withSuccess("Image $image->name has been updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Image $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        File::delete($image->path);
        
        $image->delete();


        return redirect()->route('admin.images.index')
            ->withWarning("You just removed image $image->name");
    }

    /**
     * Save the image to the given path
     * @param  collection $request 
     * @return string or false    
     */
    public function storeImage($request)
    {
        $file = $request->file('image');
        $localPath = $this->localPath; // local folder where the file will be loaded to
        $fileName = sha1($request->input('name')); // $fileName = str_random(40); //username sha1ed, so it is unique
        $extension = "." . $file->getClientOriginalExtension(); // $fileName = str_random(40); //username sha1ed, so it is unique
        $extendedName = $localPath . $fileName . $extension;

        $img = File::get($file);

        if(File::put($extendedName, $img)) {
            return $extendedName;                        
        }

        return false;
    }
}
