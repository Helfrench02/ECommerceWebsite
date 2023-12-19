<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;

class AdminController extends Controller
{
    public function view_category()
    {
      $data= Category::all();
        return view('admin.category',compact('data'));
    }


    public function add_category(Request $request)
    {
      $data = new Category;

      $data->category_name=$request->category_name;

      $data->save();

      return redirect()->back()->with('message','Category Added Successfully');
    }

    public function delete_category($id)
    {
      $data = Category::find($id);
      $data->delete();
      return redirect()->back()->with('message','Category Successfully Deleted');
    }

    public function view_product()
    {
      $category =  Category::all();
        return view('admin.product', compact('category'));
    }

    public function add_product(Request $request)
    {
      $product = new Product;

      $product->title=$request->title;
      $product->description=$request->description;

     $image=$request->image;
      $imagename = time().'.'.$image->getClientOriginalExtension();
      $request->image->move('product_image',$imagename);
      $product->image=$imagename;

      $product->category=$request->category;
      $product->quantity=$request->quantity;
      $product->price=$request->price;
      $product->discount_price=$request->discount_price;

      $product->save();

      return redirect()->back()->with('message','Product Added Successfully');
    }

    public function show_product()
    {
      $data= Product::all();
        return view('admin.product_list',compact('data'));
    }

    
    public function delete_product($id)
    {
      $data = Product::find($id);
      $data->delete();
      return redirect()->back()->with('message','Product Successfully Deleted');
    }

    public function edit_product($id)
    {
      $data = Product::find($id);
      $category = Category::all();
    return view('admin.edit_product',compact('data', 'category'));
    }

    public function edit_product_confirm(Request $request, $id)
    {
      $product = Product::find($id);
      $product->title=$request->title;
      $product->description=$request->description;


     $image=$request->image;
     if($image)
     {
      $imagename = time().'.'.$image->getClientOriginalExtension();
      $request->image->move('product_image',$imagename);
      $product->image=$imagename;
     }
      $product->category=$request->category;
      $product->quantity=$request->quantity;
      $product->price=$request->price;
      $product->discount_price=$request->discount_price;

      $product->save();

      return redirect()->back()->with('message','Product updated Successfully');
    }
    
    
    
}
