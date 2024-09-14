<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\ItemExtra;
use App\Models\ItemExtraDetail;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\OrderItemExtra;
use App\Models\Category;
use App\Models\Blog;
use Illuminate\Support\Facades\Config;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{

    public function forgetPassword()
    {
        return view("frontend.modules.forget-password");
    }

    public function resetPassword()
    {
        return view("frontend.modules.reset-password");
    }

  
    
    public function index()
    {
        // GET CURRENT DAY
        $currentDay = Carbon::now()->format('l');
        
        return view('frontend.modules.index', ["currentDay"=>$currentDay]);
    }
    public function shop()
    {
        $categories = Category::where('status', 1)->get();
        return view('frontend.modules.shop', compact('categories'));
    }
    public function category_items($id)
    {
        $categories = Category::all();
        $active_category = $id;
        $items = Item::where('status', 1)->where('category_id', $id)->get();
        return view('frontend.modules.category-items', compact('categories', 'active_category', 'items'));
    }
    public function item_order_page($id)
    {

        $item = Item::findOrFail($id);
        $extras = ItemExtra::where('item_id', $id)->orderBy('section_order', 'asc')->get();
        if ($item) {

            $cart = session()->get('cart', []);
            // unset($cart[$item->id]);
            if (!isset($cart[$item->id])) {
                $cart[$item->id] = [
                    'item_id' => $item->id,
                    'title' => $item->title,
                    'price' => $item->price,
                    'quantity' => 1,
                    'total' => $item->price
                ];
            }

            session(['cart' => $cart]);
        }
        
        return view('frontend.modules.item-order-page', compact('item', 'extras'));
    }
     public function item_add_to_order(Request $request)
    {

        $item = Item::findOrFail($request->item_id);
        $extras = ItemExtra::where('item_id', $item->id)->orderBy('section_order', 'asc')->get();
        if ($item) {

            $cart = session()->get('cart', []);
            // unset($cart[$item->id]);
            if (!isset($cart[$item->id])) {
                $cart[$item->id] = [
                    'item_id' => $item->id,
                    'title' => $item->title,
                    'price' => $item->price,
                    'quantity' => $request->qty,
                    'total' => $item->price
                ];
            }

            session(['cart' => $cart]);
            $cart[$item->id]['total'] = $this->calculate_total($item->id);
            session(['cart' => $cart]);
            $totalItems = count($cart);
            $cart_total = 0;

            foreach ($cart as $itemm) {
                $cart_total += isset($itemm['total']) ? $itemm['total'] : 0;
            }

            $item_total = isset($cart[$item->id]['total']) ? $cart[$item->id]['total'] : 0;
            $itemLabel = ($totalItems === 1) ? 'item' : 'items';

            return [
                'total' => $cart_total, // Changed from $total to $cart_total
                'item_total' => $item_total,
                'total_items' => $totalItems,
                'item_label' => $itemLabel
            ];
        }
        
    }
    public function item_increment_quantity(Request $request)
    {
        $item = Item::findOrFail($request->item_id);
        if ($item) {
            $cart = session()->get('cart', []);

            if (isset($cart[$item->id])) {

                $cart[$item->id]['quantity']++;
                session(['cart' => $cart]);
                $cart[$item->id]['total'] = $this->calculate_total($item->id);
            }
            session(['cart' => $cart]);
            $totalItems = count($cart);
            $cart_total = 0;

            foreach ($cart as $itemm) {
                $cart_total += isset($itemm['total']) ? $itemm['total'] : 0;
            }

            $item_total = isset($cart[$item->id]['total']) ? $cart[$item->id]['total'] : 0;
            $itemLabel = ($totalItems === 1) ? 'item' : 'items';

            return [
                'total' => $cart_total, // Changed from $total to $cart_total
                'item_total' => $item_total,
                'total_items' => $totalItems,
                'item_label' => $itemLabel
            ];

        }
    }
    public function item_decrement_quantity(Request $request)
    {
        $item = Item::findOrFail($request->item_id);
        if ($item) {
            $cart = session()->get('cart', []);

            if (isset($cart[$item->id])) {

                $cart[$item->id]['quantity']--;
                session(['cart' => $cart]);
                $cart[$item->id]['total'] = $this->calculate_total($item->id);
            }
            session(['cart' => $cart]);

            $totalItems = count($cart);
            $cart_total = 0;

            foreach ($cart as $itemm) {
                $cart_total += isset($itemm['total']) ? $itemm['total'] : 0;
            }

            $item_total = isset($cart[$item->id]['total']) ? $cart[$item->id]['total'] : 0;
            $itemLabel = ($totalItems === 1) ? 'item' : 'items';

            return [
                'total' => $cart_total, // Changed from $total to $cart_total
                'item_total' => $item_total,
                'total_items' => $totalItems,
                'item_label' => $itemLabel
            ];

        }
    }
    public function item_remove_from_cart(Request $request)
    {
        $item = Item::findOrFail($request->item_id);
        if ($item) {
            $cart = session()->get('cart', []);

            if (isset($cart[$item->id])) {

                unset($cart[$item->id]);
                session(['cart' => $cart]);
            }
            session(['cart' => $cart]);

            $totalItems = count($cart);
            $cart_total = 0;

            foreach ($cart as $itemm) {
                $cart_total += isset($itemm['total']) ? $itemm['total'] : 0;
            }

            $item_total = isset($cart[$item->id]['total']) ? $cart[$item->id]['total'] : 0;
            $itemLabel = ($totalItems === 1) ? 'item' : 'items';

            return [
                'total' => $cart_total, // Changed from $total to $cart_total
                'item_total' => $item_total,
                'total_items' => $totalItems,
                'item_label' => $itemLabel
            ];

        }
    }
    public function item_add_extra(Request $request)
    {
       // dd($request);
        $item = Item::findOrFail($request->item_id);
        $cart = session()->get('cart', []);
         if (!isset($cart[$item->id])) {
             $cart[$item->id] = [
                              'item_id' => $item->id,
                              'title' => $item->title,
                              'price' => $item->price,
                              'quantity' => 1,
                              'total' => $item->price
                          ];
                          session(['cart' => $cart]);
                      }
        if ($item) {
            if ($request->type == 'manual_extra') {
                $extra = ItemExtraDetail::findOrFail($request->extra_detail_id);
                if ($extra) {
                    
          
                      //session(['cart' => $cart]);
                    $cart = session()->get('cart', []);
                    if (isset($cart[$item->id])) {
                        if ($request->extra_type == 1)
                            $cart[$item->id]['manual_extras'][$request->extra_id]['extra_detail_id'] = $request->extra_detail_id;
                        else
                            $cart[$item->id]['manual_extras'][$request->extra_detail_id]['extra_detail_id'] = $request->extra_detail_id;
                        // dd($cart[$item->id]);
                        session(['cart' => $cart]);
                        $cart[$item->id]['total'] = $this->calculate_total($item->id);
                        session(['cart' => $cart]);

                        $totalItems = count($cart);
                        $cart_total = 0;

                        foreach ($cart as $itemm) {
                            $cart_total += isset($itemm['total']) ? $itemm['total'] : 0;
                        }

                        $item_total = isset($cart[$item->id]['total']) ? $cart[$item->id]['total'] : 0;
                        $itemLabel = ($totalItems === 1) ? 'item' : 'items';
                        
                        return [
                            'total' => $cart_total, // Changed from $total to $cart_total
                            'item_total' => $item_total,
                            'total_items' => $totalItems,
                            'item_label' => $itemLabel
                        ];

                    }
                }
            } else if ($request->type == 'category_extra') {
                $extra = Item::findOrFail($request->extra_detail_id);
                if ($extra) {
                if (!isset($cart[$item->id])) {
                          $cart[$item->id] = [
                              'item_id' => $item->id,
                              'title' => $item->title,
                              'price' => $item->price,
                              'quantity' => 1,
                              'total' => $item->price
                          ];
                          session(['cart' => $cart]);
                      }
                    $cart = session()->get('cart', []);
                    if (isset($cart[$item->id])) {
                        if ($request->extra_type == 1)
                            $cart[$item->id]['category_extras'][$request->extra_id]['extra_detail_id'] = $request->extra_detail_id;
                        else
                            $cart[$item->id]['category_extras'][$request->extra_detail_id]['extra_detail_id'] = $request->extra_detail_id;
                        // dd($cart[$item->id]);
                        session(['cart' => $cart]);
                        $cart[$item->id]['total'] = $this->calculate_total($item->id);
                        session(['cart' => $cart]);
                        $totalItems = count($cart);
                        $cart_total = 0;

                        foreach ($cart as $itemm) {
                            $cart_total += isset($itemm['total']) ? $itemm['total'] : 0;
                        }

                        $item_total = isset($cart[$item->id]['total']) ? $cart[$item->id]['total'] : 0;
                        $itemLabel = ($totalItems === 1) ? 'item' : 'items';

                        return [
                            'total' => $cart_total, // Changed from $total to $cart_total
                            'item_total' => $item_total,
                            'total_items' => $totalItems,
                            'item_label' => $itemLabel
                        ];
                    }
                }
            }
        }

    }
    public function item_remove_extra(Request $request)
    {
        //dd($request);
        $item = Item::findOrFail($request->item_id);
        if ($item) {
            if ($request->type == 'manual_extra') {
                $extra = ItemExtraDetail::findOrFail($request->extra_detail_id);
                if ($extra) {
                    $cart = session()->get('cart', []);
                    if (isset($cart[$item->id])) {

                        if ($request->extra_type == 1) {
                            unset($cart[$item->id]['manual_extras'][$request->extra_id]);
                        } else {
                            unset($cart[$item->id]['manual_extras'][$request->extra_detail_id]);
                        }
                        // dd($cart[$item->id]);
                        session(['cart' => $cart]);
                        $cart[$item->id]['total'] = $this->calculate_total($item->id);
                        session(['cart' => $cart]);
                        $totalItems = count($cart);
                        $cart_total = 0;

                        foreach ($cart as $itemm) {
                            $cart_total += isset($itemm['total']) ? $itemm['total'] : 0;
                        }

                        $item_total = isset($cart[$item->id]['total']) ? $cart[$item->id]['total'] : 0;
                        $itemLabel = ($totalItems === 1) ? 'item' : 'items';

                        return [
                            'total' => $cart_total, // Changed from $total to $cart_total
                            'item_total' => $item_total,
                            'total_items' => $totalItems,
                            'item_label' => $itemLabel
                        ];
                    }
                }
            } else if ($request->type == 'category_extra') {
                $extra = Item::findOrFail($request->extra_detail_id);
                if ($extra) {
                    $cart = session()->get('cart', []);
                    if (isset($cart[$item->id])) {
                        if ($request->extra_type == 1) {
                            unset($cart[$item->id]['category_extras'][$request->extra_id]);
                        } else {
                            unset($cart[$item->id]['category_extras'][$request->extra_detail_id]);
                        }
                        // dd($cart[$item->id]);
                        session(['cart' => $cart]);
                        $cart[$item->id]['total'] = $this->calculate_total($item->id);
                        session(['cart' => $cart]);
                        $totalItems = count($cart);
                        $cart_total = 0;

                        foreach ($cart as $itemm) {
                            $cart_total += isset($itemm['total']) ? $itemm['total'] : 0;
                        }

                        $item_total = isset($cart[$item->id]['total']) ? $cart[$item->id]['total'] : 0;
                        $itemLabel = ($totalItems === 1) ? 'item' : 'items';

                        return [
                            'total' => $cart_total, // Changed from $total to $cart_total
                            'item_total' => $item_total,
                            'total_items' => $totalItems,
                            'item_label' => $itemLabel
                        ];
                    }
                }
            }
        }

    }
   
    public function payment(Request $request)
    {
      //dd($request);
     
        $user = User::where('email',$request->email)->first();
      if($user)
      {
        $rules = [
            'email' => 'required|email',
            'name' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'zip' => 'required|string',
            'state' => 'required|string', 
        ];

          // Custom error messages
          $messages = [
              'required' => 'The :attribute field is required.',
              'email' => 'The :attribute must be a valid email address.',
              'string' => 'The :attribute must be a string.',
              'phone.required' => 'The phone field is required.',
              'address.required' => 'The address field is required.',
              'city.required' => 'The city field is required.',
              'zip.required' => 'The zipcode field is required.',
  
          ];
        }
        
        else
        {
          $rules = [
            'email' => 'required|email|unique:users',
            'name' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'zip' => 'required|string',
            'state' => 'required|string', 
        ];

          // Custom error messages
          $messages = [
              'required' => 'The :attribute field is required.',
              'email' => 'The :attribute must be a valid email address.',
              'string' => 'The :attribute must be a string.',
              'phone.required' => 'The phone field is required.',
              'address.required' => 'The address field is required.',
  
              'city.required' => 'The city field is required.',
              'zip.required' => 'The zipcode field is required.',
  
          ];
        }
        
         // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
      
        if(!$user)
        {
          $user = new User();
          $user->email = $request['email'];
          $user->name = $request['name'];
          $user->phone = $request['phone'];
          $user->address = $request['address'];
          $user->state = $request['state'];
          $user->city = $request['city'];
          $user->zip = $request['zip'];
          $user->type = 'user';
          $user->password = Hash::make('password'); // Make sure to hash the password
          $user->save();
        }
        //dd($user);
        if ($user) {
            $cart = session()->get('cart', []);

            $order = new Order();
            $order->user_id = $user->id;
            $uniqueIdentifier = uniqid();
            $orderNumber = date('Ymd') . $uniqueIdentifier;
            $order->order_number = $orderNumber;

            $totalPrice = 0;
            foreach ($cart as $item) {
                $totalPrice += $this->calculate_total($item['item_id']);
            }
            $order->total = $totalPrice;
            $order->shipping_price = 0;
            $order->tax = 0;
            $order->total_price = $totalPrice + 0;
            $order->notes = $request['notes'];
            $order->save();

        }
        //dd($order);
        if ($order) {
            $cart = session()->get('cart', []);
            foreach ($cart as $c) {
               // dd($c);
                $item = Item::findOrFail($c['item_id']);
                  if ($item) {
                      
                      
                          $order_item = new OrderItem();
                          $order_item->order_id = $order->id;
                          $order_item->item_id = $c['item_id'];
                          $order_item->price = $c['price'];
                          $order_item->quantity = $c['quantity'];
                          $order_item->total = $c['total'];
                          $order_item->status = 1;
                          $order_item->save();
                          //dd($order_item);
                          if($order_item)
                          {
                              $extra_price_total = 0;
                              if (isset($cart[$item->id]['manual_extras'])) {
                                  foreach ($cart[$item->id]['manual_extras'] as $extra) {
                                      $extra_detail = ItemExtraDetail::findOrFail($extra['extra_detail_id']);
                                       $order_item_extra = new OrderItemExtra();
                                       $order_item_extra->order_item_id = $order_item->id;
                                       $order_item_extra->extra_id = $extra_detail->id;
                                       $order_item_extra->price = $extra_detail->price;
                                       $order_item_extra->quantity = $order_item->quantity;
                                       $order_item_extra->status = 1;
                                       $order_item_extra->save();
                                      //$extra_price_total += $extra_detail->price;
                                  }
                              }
              
                              if (isset($cart[$item->id]['category_extras'])) {
                                  foreach ($cart[$item->id]['category_extras'] as $extra) {
                                      $extra_detail = Item::findOrFail($extra['extra_detail_id']);
                                       $order_item_extra = new OrderItemExtra();
                                       $order_item_extra->order_item_id = $order_item->id;
                                       $order_item_extra->extra_id = $extra_detail->id;
                                       $order_item_extra->price = $extra_detail->price;
                                       $order_item_extra->quantity = $order_item->quantity;
                                       $order_item_extra->status = 1;
                                       $order_item_extra->save();
                                  }
                              }
                          }
                          
          
                          
                          
                      
                  }
            }
        }
       
        
        
       Stripe::setApiKey('sk_test_DHz9kzImzMWJ3Et1xmdgx7I4');
            
            $YOUR_DOMAIN = 'http://127.0.0.1:8000/'; // Change the domain to match your application
              $lineItems = [];
            
               
                $lineItems[] = [
                    'price_data' => [
                        'currency' => 'GBP',
                        'product_data' => [
                            'name' => 'Order',
                            'description' => "Items", // Add product description if available
                            
                        ],
                        'unit_amount' => intval(($order->total_price) * 100),
                    ],
                    'quantity' => 1,
                ];
            
             $checkout_session = \Stripe\Checkout\Session::create([
                'line_items' => $lineItems,
                'payment_intent_data' => [
                    'metadata' => ['order_id' => $order->id, 'order_num' => $order->order_number],
                ],
                'metadata' => ['order_id' => $order->id, 'order_num' => $order->order_number],
                'mode' => 'payment',
                'success_url' => $YOUR_DOMAIN . 'success',
                'cancel_url' => $YOUR_DOMAIN . 'cancel',
            ]);

            session(['checkout_session' => $checkout_session]);
            return redirect()->away($checkout_session->url, 303);
    }
   
    public function success(Request $request)
    {
        $checkout_session = session('checkout_session');
        $order_id = $checkout_session['metadata']['order_id'];
        $payment_method = $checkout_session['payment_method_types'][0];
        if ($order_id) {
            $order = Order::findOrFail($order_id);
            if ($order) {
                $order->payment_status = 1;
                $order->payment_method = $payment_method;
                $order->save();
            }
        }
        \Illuminate\Support\Facades\Session::forget("checkout_session");
        return view('frontend.modules.success');
    }
    public function cancel()
    {
        dd('cancel');
    }
    public function contact()
    {
        return view('frontend.modules.contact');
    } 
    public function about()
    {
        return view('frontend.modules.about');
    }
    public function blog()
    {
        $blog = Blog::findOrFail(1);
        return view('frontend.modules.blog', compact('blog'));
    }
    public function terms()
    {
        return view('frontend.modules.terms');
    }
    public function privacy_policy()
    {
        return view('frontend.modules.privacy-policy');
    }
    public function cart()
    {
        return view('frontend.modules.cart');
    }
    public function clear_cart()
    {
        session()->forget('cart');

        return redirect()->route('home');
    }
    public function checkout()
    {
        return view('frontend.modules.checkout');
    }
    public function gallery()
    {
        return view('frontend.modules.gallery');
    }
    public function thankyou()
    {
        return view('frontend.modules.thanks');
    }
     private function calculate_total($item_id)
    {
        $item = Item::findOrFail($item_id);
        if ($item) {
            $cart = session()->get('cart', []);
            if (isset($cart[$item->id])) {
                //dd($cart[$item->id]);
                $extra_price_total = 0;
                if (isset($cart[$item->id]['manual_extras'])) {
                    foreach ($cart[$item->id]['manual_extras'] as $extra) {
                        $extra_detail = ItemExtraDetail::findOrFail($extra['extra_detail_id']);
                        $extra_price_total += $extra_detail->price;
                    }
                }

                if (isset($cart[$item->id]['category_extras'])) {
                    foreach ($cart[$item->id]['category_extras'] as $extra) {
                        $extra_detail = Item::findOrFail($extra['extra_detail_id']);
                        $extra_price_total += $extra_detail->price;
                    }
                }

                $cart[$item->id]['total'] = ($item->price + $extra_price_total) * $cart[$item->id]['quantity'];
                return $cart[$item->id]['total'];
            }
        }
    }






}
