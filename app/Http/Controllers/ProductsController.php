<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Image;
use App\Lang;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{



    public function __construct() {
        $this->middleware("authorization:staff", ['except'=>['showProducts', 'showProduct']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        
    public function index(Product $products, Lang $lang, Request $request)
    { 
        $products = $products->with('images')->paginate(10);

        if ($request->input('lang')) {
            $products = $products->appends(['lang'=>$request->input('lang')]);
        }        

        return view('products.admin.index', ['products'=>$products]);
    }

    /**
     * display the form to create a product
     * @param  Product $product
     * @return view           
     */ 
    public function create(Product $product)
    {
        return view('products.admin.create', compact('product'));
    }

    /**
     * store the product to the database
     * @param  Product $product 
     * @param  Request $request 
     * @return [type]           
     */ 
    public function store(Product $product, Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:5|unique:products',
            'lang' => 'required',
        ]);

        $product->create($request->all());

        return redirect()->route('admin.products.index')
            ->withSuccess("Product $product->name has been created!");
        
    }

    /**
     * show a single product details
     * @param  Product $product 
     * @return [type]           
     */
    public function show(Product $product)
    {
        return view('products.admin.show', compact('product'));
    }

    /**
     * show the edit form for current product
     * @param  Product $product [description]
     * @return [type]           [description]
     */
    public function edit(Product $product)
    {
        return view('products.admin.edit', compact('product'));
        
    }

    /**
     * save the updates for current product
     * @param  Product $product 
     * @param  Request $request 
     * @return [type]           
     */
    public function update(Product $product, Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:5',
            'lang' => 'required',
        ]);

        $product->update($request->all());

        return redirect()->route('admin.products.index')
            ->withSuccess("Product $product->name has been updated!");

    }

    /**
     * destroy the current product
     * @param  Product $product 
     * @return [type]           
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.products.index')
            ->withWarning("You just removed product $product->name");
    }

    public function products($products, $lang)
    {
        return $products->whereLang($lang->lang)->paginate(5);
    }

    /**
     * Show all products
     * @param  Product $products Product model
     * @param  Lang    $lang     Lang model
     * @return [type]            view(products.index)
     */
    public function showProducts(Product $products, Lang $lang)
    {
        $products = $this->products($products, $lang);

        return view('products.index', ['products'=>$products, 'lang' =>$lang, 'shrink'=>true]);
    }

    /**
     * Show a single product
     * @param  string  $slug   
     * @param  Product $product 
     * @param  Lang    $lang    
     * @return view           products.show
     */
    public function showProduct($slug, Product $product, Lang $lang)
    {
        $product = $product->whereSlug($slug)->firstOrFail();

        $products = $this->products($product, $lang);

        return view('products.show',  ['product'=>$product, 'products'=>$products, 'lang' =>$lang, 'shrink'=>true]);
    }

    public function showProduct_Old($slug, Product $product, Lang $lang)
    {
        $product = $product->whereSlug($slug)->firstOrFail();

        if (!view()->exists("products.partials.".$product->slug)) {

            return redirect()->route('products.index')
                ->withWarning("Unable to find details for product [$product->name]!");
        }

        $products = $this->products($product, $lang);

        return view('products.show',  ['product'=>$product->slug, 'products'=>$products, 'lang' =>$lang, 'shrink'=>true]);
    }

    public function editImages($slug, Product $product, Image $images)
    {
        $product = $product->whereSlug($slug)->with('images')->firstOrFail();

        $images = $images->get();

        return view('products.admin.edit_images', compact('product', 'images'));
    }

    public function updateImages($slug, Product $product, Image $images, Request $request)
    {
        $product = $product->whereSlug($slug)->with('images')->firstOrFail();

        $product->images()->sync((array)$request->input('images_list'));

        return redirect()->back()
            ->withSuccess("Images for product $product->name has been updated!");
    }

 
}
