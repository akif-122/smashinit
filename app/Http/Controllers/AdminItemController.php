<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Item;
use App\Models\ItemExtra;
use App\Models\ItemExtraDetail;

class AdminItemController extends Controller
{
    public function index()
    {
        $items = Item::whereHas('category')->get();
        return view('admin.modules.item.index',compact('items'));
    }
    public function create()
    {
        $categories = Category::where('status', 1)->get();
        return View::make('admin.modules.item.create', compact('categories'));
    }
    public function edit($id)
    {
        $item = Item::findOrFail($id);
        $categories = Category::where('status', 1)->get();
        return View::make('admin.modules.item.edit', compact('item','categories'));
    }
    public function save(Request $request)
    {
       //dd($request);
       $item = new Item();
       $item->category_id = $request->category_id;
       $item->title = $request->title;
       $item->price = $request->price;
       $item->description = $request->description;

         // Handle main image upload
       if ($request->hasFile('image')) {
            $mainImage = $request->file('image');
            $mainImageName = 'item_' . time() . '.' . $mainImage->getClientOriginalExtension();
            $mainImagePath = 'item_images/' . $mainImageName; // Change the folder structure as needed
            $mainImage->move(public_path('item_images'), $mainImageName);
            $item->image = $mainImageName;
        }

        $item->save();
        if($request->category_as_extra_count)
        {
            foreach($request->category_as_extra_count as $e)
            {
                $item_extra = new ItemExtra();
                $item_extra->item_id = $item->id;
                $item_extra->section_order = $request->category_as_extra_order[$e];
                $item_extra->is_category = 1;
                $item_extra->category_id = $request->category_as_extra[$e];
                $item_extra->type = $request->extra_type[$e];
                $item_extra->save();
            }
        }
        if($request->manual_extra_section_count)
        {
            foreach($request->manual_extra_section_count as $e)
            {
                $item_extra = new ItemExtra();
                $item_extra->item_id = $item->id;
                $item_extra->section_order = $request->manual_extra_section_order[$e];
                $item_extra->title = $request->manual_extra_section_title[$e];
                $item_extra->type = $request->manual_extra_type[$e];
                $item_extra->save();

                foreach($request->manual_extra_details_count[$e] as $dc)
                {
                    $item_extra_detail = new ItemExtraDetail();
                    $item_extra_detail->extra_item_id = $item_extra->id;
                    $item_extra_detail->title = $request->manual_extra_title[$e][$dc];
                    $item_extra_detail->price = $request->manual_extra_price[$e][$dc];
                    $img = 'manual_extra_image.'.$e.'.'.$dc;
                    if ($request->hasFile($img)) {
                        $mainImage = $request->file($img);
                        $mainImageName = 'item_detail_image_' . time() . '_' . Str::random(10) . '.' . $mainImage->getClientOriginalExtension();

                        $mainImagePath = 'item_detail_images/' . $mainImageName; // Change the folder structure as needed
                        $mainImage->move(public_path('item_detail_images'), $mainImageName);
                        $item_extra_detail->image = $mainImageName;
                    }

                    $item_extra_detail->save();
                }
            }
        }

        return redirect()->back()->with(['success' => 'Item Created Successfully']);

    }
   
   public function delete($id)
   {
     $item = Item::findOrFail($id);
     $item->delete();
     $extras = ItemExtra::where('item_id',$id)->get();
     foreach($extras as $extra)
     {
         $extra_details = ItemExtraDetail::where('extra_item_id',$extra->id)->get();
         foreach($extra_details as $d)
         {
           $d->delete();
         }
         $extra->delete();
     }
     return redirect()->back();
   }
   
    public function image_delete(Request $request)
    {
        $productId = $request->input('productId');

        // Get the product by ID
        $product = Product::find($productId);

        if (!$product) {
            return response()->json(['message' => 'Product not found.'], 404);
        }

        // Delete the image from storage
        $imagePath = 'product_images/' . $product->main_image;

        if (Storage::exists($imagePath)) {
            Storage::delete($imagePath);
        }

        // Update the product in the database
        $product->main_image = null;
        $product->save();

        return response()->json(['message' => 'Image deleted successfully.']);
    }
    public function image_multiple_delete(Request $request)
    {
        $imageId = $request->input('imageId');

        // Get the product by ID
        $image = ProductImage::find($imageId);

        if (!$image) {
            return response()->json(['message' => 'Image not found.'], 404);
        }

        // Delete the image from storage
        $imagePath = 'product_images/' . $image->image;

        if (Storage::exists($imagePath)) {
            Storage::delete($imagePath);
        }

        // Update the image in the database
        $image->delete();

        return response()->json(['message' => 'Image deleted successfully.']);
    }
}
