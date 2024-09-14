<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\OrderItemExtra;
use App\Models\Item;

class AdminOrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin.modules.order.index',compact('orders'));
    }
    public function details($id)
    {
      $order = Order::findOrFail($id);
      return view('admin.modules.order.details',compact('order'));
    
    
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
   public function status_change($id,Request $request)
   {
     $order = Order::findOrFail($id);
     $order->status = $request->status;
     $order->save();
     return redirect()->back();
     
   }
   
   
}
