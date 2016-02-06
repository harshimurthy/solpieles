<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    protected $products = [
        'raw-hides-salted',
        'pasdfaf asfa sdfa sfasd f'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        
    public function index()
    { 
        return view('products.index', ['products'=>$this->products, 'shrink'=>true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($sub_view)
    {
        if (!view()->exists("products.partials.".$sub_view)) {

            $sub_view = str_replace(['-','_'], ' ', $sub_view);

            return redirect()->route('products.index')
                ->withWarning("Unable to find details for product [$sub_view]!");
        }

        return view('products.show',  ['sub_view'=>$sub_view, 'products'=>$this->products, 'shrink'=>true]);
    }

 
}
