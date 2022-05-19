<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductsController extends Controller
{
    public function index(){
        return view('createProducts');
    }

    public function store(Request $request){


        $data = $request->only('name', 'description', 'price' );

        if ($request->hasFile('image') && $request->image->isValid()){
            $imagePatch = $request->image->store('products');
            $data['image'] = $imagePatch;
        }

        $products = new Products;

        $products->create($data);
    }
}
