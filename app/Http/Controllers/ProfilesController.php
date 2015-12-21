<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profile;
use Image;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Profile $profiles)
    {   
        if (!auth()->user()->profile) {
            return redirect()->route('admin.profiles.create')
                ->withInfo("You have hot created a profile, please create one now.");
        }

        $profile = auth()->user()->profile;
        $profiles = $profiles->paginate(15);

        return view('profiles.show', compact('profile', 'profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Profile $profile)
    {
        $user = auth()->user();

        if (auth()->user()->profile) {
            return redirect()->route('admin.profiles.index')
                ->withWarning("You have a profile already. What are you trying to do?");
        }
        $profile->name = $user->name;

        return view('profiles.create', compact('profile'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user, Image $img)
    {
        $this->validate($request, [
            'photo' => 'image|max:4000',
            'gender' => 'required',
            'name' => 'required',
            'bio' => 'max:4500',
        ]);
        // update the user with the name given
        // store the data for the profile, associated to the current user
        // 
        $user = $user->findOrFail(auth()->user()->id);

        //Update the User name with the new value passed
        $user->name = $request->input('name');
        $user->save();


        // Save the image
        $photoPath = $this->saveImage($request, $user);

        $user->profile()->create($request->all());

        if($photoPath) {
            $user->profile->photo = $photoPath;
            $user->profile->save();
        }

        if ($request->ajax()) {
            return response()->json([
                'success' => 1, 
                'data' => $user
            ]);
        }

        return redirect()->route('admin.profiles.index')
            ->withSuccess("Your profile has been created...");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        return view('profiles.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {

        if ($profile->user_id != auth()->user()->id) {
            return redirect()->route('admin.profiles.index')
                ->withWarning("Forbidden. You can only update your own profile!?");
        }

        $profile->name = $profile->user->name;

        return view('profiles.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile, Image $img)
    {
        $this->validate($request, [
            'photo' => 'image|max:4000',
            'gender' => 'required',
            'name' => 'required',
            'bio' => 'max:4500',
        ]);

        $user = $profile->user;

        //Update the User name with the new value passed
        $user->name = $request->input('name');
        $user->save();


        // Save the image
        $photoPath = $this->saveImage($request, $user);

        $profile->update($request->all());

        $profile->photo = $photoPath;
        $profile->save();

        if ($request->ajax()) {
            return response()->json([
                'success' => 1, 
                'data' => $user
            ]);
        }

        return redirect()->route('admin.profiles.index')
            ->withSuccess("Your profile has been updated...");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Methods
     */
    public function saveImage(Request $request, User $user)
    {   
        /**
         * If not photo file passed, first we check if
         * the user is created already. If so we 
         * return the actual photo, otherwise
         * we return null;
         */
        if (!$request->hasFile('photo')) {
            if ($user->profile) {
               return $user->profile->photo;
            }
            return null;
        };
        /**
         * Copy the photo
         */
        $file = $request->file('photo');
        $localPath = 'images/profiles/'; // local folder where the image will be loaded to
        $fileName = sha1($user->id . $user->name); // $fileName = str_random(40); //username sha1ed, so it is unique
        $extension = "." . $file->getClientOriginalExtension(); // $fileName = str_random(40); //username sha1ed, so it is unique
        $extendedName = $localPath . $fileName . $extension;

        // $img = \File::get($file);

        // $save = \File::put($extendedName, $img);

        // create instance
        $img = Image::make($request->file('photo'));

        // resize only the width of the image
        $img->resize(null, 150, function($constraint){
            $constraint->aspectRatio();
        });


        $img->save($extendedName, 85);

        return $extendedName; 
    }
}
