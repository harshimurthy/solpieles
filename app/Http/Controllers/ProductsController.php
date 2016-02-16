<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Product;
use App\Lang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        
    public function index(Product $products, Lang $lang)
    { 
        $products = $products->whereLang($lang->lang)->get();

        return view('products.index', ['products'=>$products, 'lang' =>$lang, 'shrink'=>true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(Product $product, Lang $lang)
    {
        if (!view()->exists("products.partials.".$product->slug)) {

            return redirect()->route('products.index')
                ->withWarning("Unable to find details for product [$product->name]!");
        }

        $products = $product->whereLang($lang->lang)->get();

        return view('products.show',  ['product'=>$product->slug, 'products'=>$products, 'lang' =>$lang, 'shrink'=>true]);
    }

    public function destroy(Product $product)
    {
        return $product;
    }

 
}
