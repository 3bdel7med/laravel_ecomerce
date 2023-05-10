<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $product=Product::all();
        return view('admin.products.index', compact('product'));;
    }
    public function api()
    {
        
        $product=Product::all();
        return response()->json(['product' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category=Category::all();
        return view('admin.products.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product=new Product;
        if($request->hasFile('image')){
          $imageName = time().'.'.$request->image->extension();  
          $request->image->move(public_path('images/products'), $imageName);
          $product->image='images/products/'.$imageName;
        }
        $product->name=$request->input('name');
        $product->cat_id=$request->input('category_id');
        $product->description=$request->input('description');
        $product->small_description=$request->input('small_description');
        $product->original_price=$request->input('original_price');
        $product->selling_price=$request->input('selling_price');
        $product->qty=$request->input('quantity');
        $product->tax=$request->input('tax');


        $product->meta_title=$request->input('meta_title');
        $product->meta_descrip=$request->input('meta_descrip');
        $product->meta_keywords=$request->input('meta_keywords');
        $product->status=$request->input('status') ==True?'1':'0';
        $product->trading=$request->input('trading') ==True?'1':'0';
        $product->save();
        return redirect()->back()->with('status','product added successfuly');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product=Product::find($id);
        if($product->image)
        {
            $path=$product->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $product->delete();
            return redirect('products')->with('status','product deleted successfuly');
        }
    }

}
