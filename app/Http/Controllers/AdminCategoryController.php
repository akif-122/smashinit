<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;
class AdminCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::where('status','>',0)->get();
        return view('admin.modules.category.index',compact('categories'));
    }
    public function create()
    {
        return view('admin.modules.category.create');
    }
    public function save(Request $request)
    {
        $category = new Category();
        $category->title = $request->title;
        if ($request->hasFile('image')) {
            $mainImage = $request->file('image');
            $mainImageName = 'category_' . time() . '.' . $mainImage->getClientOriginalExtension();
            $mainImagePath = 'category_images/' . $mainImageName; // Change the folder structure as needed
            $mainImage->move(public_path('category_images'), $mainImageName);
            $category->image = $mainImageName;
        }
        $category->status = 1;
        $category->save();
        return redirect()->route('admin.category.index')->with(['success' => 'Category Created Successfully']);
    }
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.modules.category.edit',compact('category'));
    }
    public function update(Request $request)
    {
        $category = Category::findOrFail($request->id);
        $category->title = $request->title;
        if ($request->hasFile('image')) {
            $mainImage = $request->file('image');
            $mainImageName = 'category_' . time() . '.' . $mainImage->getClientOriginalExtension();
            $mainImagePath = 'category_images/' . $mainImageName; // Change the folder structure as needed
            $mainImage->move(public_path('category_images'), $mainImageName);
            $category->image = $mainImageName;
        }
        $category->save();
        return redirect()->route('admin.category.index')->with(['success' => 'Category Updated Successfully']);
    }
    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->status = 0;
        $category->save();
        foreach($category->sub_categories as $sub)
        {
            $sub->status = 0;
            $sub->save();
        }
        $products = Product::where('category_id',$id)->get();
        foreach($products as $product)
        {
            $product->status = 0;
            $product->save();
        }
        return redirect()->back()->with(['success' => 'Category Deleted Successfully']);
    }
    public function status($id)
    {
        $category = Category::findOrFail($id);
        if($category->status == 2)
        {
            $category->status = 1;

            // $products = Product::where('category_id',$id)->get();
            // foreach($products as $product)
            // {
            //     $product->status = 1;
            //     $product->save();
            // }
        }

        else
        {
            $category->status = 2;

            // $products = Product::where('category_id',$id)->get();
            // foreach($products as $product)
            // {
            //     $product->status = 2;
            //     $product->save();
            // }
        }


        $category->save();

        return redirect()->back()->with(['success' => 'Category Status Changed Successfully']);
    }
}
