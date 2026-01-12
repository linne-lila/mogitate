<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function create(Request $request){
        $form = $request->all();
        Author::create($form);
        return redirect('/products');
    }

    public function catalog()
    {
        $products = Product::all();
        return view('catalog', ['products' => $products]);
    }
}
