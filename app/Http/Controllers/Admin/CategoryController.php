<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category=Category::all();
        return view('admin.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $category=new Category;
          if($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images/categories'), $imageName);
            $category->image='images/categories/'.$imageName;
          }
          $category->name=$request->input('name');
          $category->slug=$request->input('slug');
          $category->description=$request->input('description');
          $category->meta_title=$request->input('meta_title');
          $category->meta_descrip=$request->input('meta_descrip');
          $category->meta_keywords=$request->input('meta_keywords');
          $category->status=$request->input('status') ==True?'1':'0';
          $category->popular=$request->input('popular') ==True?'1':'0';
          $category->save();
          return redirect()->back()->with('status','category added successfuly');

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id )
    {
        $category=Category::find($id);
        if($category->image)
        {
            $path=$category->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $category->delete();
            return redirect('categories')->with('status','category deleted successfuly');
        }
    }
}
