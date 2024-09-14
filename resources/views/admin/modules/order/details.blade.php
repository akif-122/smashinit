@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ORDER SUMMARY</h5>
                <div class="row">

                    <div class="col-md-12 ms-auto">
                        <h2 class="card-title mt-4">General Info</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <td><strong>Customer Name:</strong></td>
                                    <td>{{$order->user->name}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Customer Email:</strong></td>
                                    <td>{{$order->user->email}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Order Unique #:</strong></td>
                                    <td>{{$order->order_number}}</td>
                                </tr>
                                 <tr>
                                    <td><strong>Order Total:</strong></td>
                                    <td>&pound;{{number_format($order->total,2)}}</td>
                                </tr>
                                 <tr>
                                    <td><strong>Shipping Price:</strong></td>
                                    <td>&pound;{{number_format($order->shipping_price,2)}}</td>
                                </tr>
                                 <tr>
                                    <td><strong>Total Price:</strong></td>
                                    <td><strong>&pound;{{number_format($order->total_price,2)}}</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>Payment Method:</strong></td>
                                    <td>{{$order->payment_method}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Payment Status:</strong></td>
                                    <td>{{$order->payment_status == 1 ? 'Paid' : 'Not Paid'}}</td>
                                </tr>
                              
                                <tr>
                                    <td><strong>Address:</strong></td>
                                    <td>{{$order->user->address}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Apartment:</strong></td>
                                    <td>{{$order->user->state}}</td>
                                </tr>
                                <tr>
                                    <td><strong>City:</strong></td>
                                    <td>{{$order->user->city}}</td>
                                </tr>
                                <tr>
                                    <td><strong>PostCode:</strong></td>
                                    <td>{{$order->user->zip}}</td>
                                </tr>
                                
                                <tr>
                                    <td><strong>Order Notes:</strong></td>
                                    <td>{{$order->notes}}</td>
                                </tr>
                            </table>
                        </div>


                    </div>
                </div>
                <hr>
               <div class="col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h5 class="mb-0 text-white">Your Cart (4 items)</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table product-overview">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Product info</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Total (Quantity + Extras)</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($order->order_items as $item)
                                            <tr>
                                                <td width="150"><img src="{{ asset('item_images/' . $item->item->image) }}" width="80"></td>
                                                <td width="550">
                                                    <h2 class="font-500">{{$item->item->title}}</h2>
                                                    <p>
                                                      @if(count($item->order_item_extras) > 0 )
                                                        <strong>Extras:</strong><br>
                                                          @foreach($item->order_item_extras as $extra)
                                                              @php
                                                              $detail = \App\Models\ItemExtraDetail::where('id',$extra->extra_id)->first();
                                                              
                                                              @endphp
                                                              
                                                              @if($detail)
                                                                @if($detail->price >0 )
                                                                  <span>{{$detail->title}} x {{$extra->quantity}}  = <strong>&pound;{{number_format($extra->price * $extra->quantity,2)}}</strong></span> <br>
                                                                @else
                                                                <span>{{$detail->title}}  </span> <br>
                                                                @endif
                                                              @endif
                                                              
                                                          @endforeach
                                                      @endif
                                                    
                                                    </p>
                                                </td>
                                                <td>&pound;{{number_format($item->price,2)}}</td>
                                                <td width="70">
                                                   {{$item->quantity}} 
                                                </td>
                                                <td>&pound;{{number_format($item->total,2)}}</td>
                                                
                                                
                                            </tr>
                                            @endforeach
                                            <tr>
                                              <td></td>
                                            <td></td>
                                            
                                            <td></td>
                                            <td><h5>Order Total </h5></td>
                                            <td><h5>&pound;{{number_format($order->total,2)}}</h5></td>
                                            </tr>
                                             <tr>
                                              <td></td>
                                            <td></td>
                                            
                                            <td></td>
                                            <td><h5>Shipping </h5></td>
                                            <td><h5>&pound;{{number_format($order->shipping_price,2)}}</h5></td>
                                            </tr>
                                             <tr>
                                              <td></td>
                                            <td></td>
                                            
                                            <td></td>
                                            <td><h5> Total </h5></td>
                                            <td><h5>&pound;{{number_format($order->total_price,2)}}</h5></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <hr>
                                    
                                </div>
                            </div>
                        </div>
                    </div>



            </div>
        </div>
    </div>
</div>
@endsection
