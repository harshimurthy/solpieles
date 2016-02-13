<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $products = [
    	[
    		'name' => 'asdfad',
    		'slug' => null,
    		'lang' => 'es',
    	],
    ];

    public function productToObject()
    {
    	$products = (object)$this->products;

    	foreach ($products as $product) {
    		# code...
    	}


    }
}
