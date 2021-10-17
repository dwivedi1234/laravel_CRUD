<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function index()
    {
        # code...
        return view('welcome');
    }
    public function store(Request $request)
    {
        # code...
        $validated = $request->validate([
            // 'name' => 'required|unique:products',
            'name' => 'required',

            'email' => 'required|email',
            'price' => 'required|digits:3',
            'description' => 'required',
        ]);
      

        

        $product = new Product;
        $product->name        = $request->name;
        $product->price       = $request->price;
        $product->description = $request->description;
        if ($request->image) {
            # code...
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $image_path = public_path('/images/');
            $image->move($image_path, $name);

            $product->image = $name;
        }

        $product->save();

        return redirect()->route('allProducts');
     
    }
    public function allProducts()
    {
        # code...
        $product = Product::get();
        return view('allproducts',compact('product'));
    }
    public function editProducts($id)
    {
        # code...
        $product = Product::find($id);
        return view('editProduct',compact('product'));
    }
    public function updateProducts(Request $request, $id)
    {
        # code...
        $product = Product::find($id);


        $product->name        = $request->name;
        $product->price       = $request->price;
        $product->description = $request->description;

        



        $product->image = "image.png";
        $product->save();


        return redirect()->route('allProducts');
    }
    public function deleteProduct($id)
    {
        # code...
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('allProducts');

    }
}
