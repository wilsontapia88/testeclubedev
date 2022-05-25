<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Products;

class ProductsController extends Controller
{

    private $products;
    public function __construct(Products $products)
    {
        $this->products = $products;
    }

    public function index(){
        $productos = $this->products->get();
        return view('listProducts', compact('productos'));
    }

    public function create(){
        return view('createProducts');
    }

    public function edit($id){
        $produto = $this->products->find($id);
        return view('editProduct', compact('produto'));
    }

    public function update(Request $request, $id){

        if(!$product = $this->products->find($id)){
            return redirect()->back();
        }

        $data = $request->only('name', 'description', 'price' );


        if ($request->hasFile('image') && $request->image->isValid()){

            

            if($product->image && Storage::exists($product->image)){
                Storage::delete($product->image);
            }

            $imagePatch = $request->image->store('products');
            $data['image'] = $imagePatch;
        }



        $product->update($data);

        return redirect()->route('products');

    }


    public function store(Request $request){
        $data = $request->only('name', 'description', 'price' );
        if ($request->hasFile('image') && $request->image->isValid()){
            $imagePatch = $request->image->store('products');
            $data['image'] = $imagePatch;
        }
        $this->products->create($data);

        return back()->withInput();
    }
}
