@extends('theeme')

@section('abcd')
        <!-- End of Header -->

        <!-- Start of Main -->
        <main class="main cart">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb shop-breadcrumb bb-no">
                        <li class="active"><a href="cart.html">Shopping Cart</a></li>
                        <li><a href="checkout">Checkout</a></li>
                      
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of PageContent -->
            <div class="page-content">
                <div class="container">
                    <div class="row gutter-lg mb-10">
                        <div class="col-lg-8 pr-lg-4 mb-6">
                            <table class="shop-table cart-table">
                                <thead>
                                    <tr>
                                        <th class="product-name"><span></span></th>
                                        <th></th>
                                        <th class="product-price"><span>Price</span></th>
                                        <th class="product-quantity"><span>Quantity</span></th>
                                        
                                        <th class="product-subtotal"><span>Option</span> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cartItems as $item)

                                    <tr>
                                        <td class="product-thumbnail">
                                            <div class="p-relative">
                                                <a href="product-default.html">
                                                    <figure>
                                                        <img src="storage/{{$item->image}}" alt="product"
                                                            width="300" height="338">
                                                    </figure>
                                                </a>
                                                <button type="submit" class="btn btn-close"></button>
                                            </div>
                                        </td>
                                        <td class="product-name">
                                            <a href="product-default.html">
                                                {{$item->name}}
                                            </a>
                                        </td>
                                        <td class="product-price"><span class="amount">{{$item->price}}</span></td>
                                        <td class="product-quantity">
                                       <form action="{{ route('cart.update')}}" method="POST">
                                            @csrf
                                            <input hidden type="hidden" name="id" value="{{$item->id}}"/>
                                            @if($item->quantity>$item->dispo)
                                                <h6 style="color:red
                                                "> we have just {{$item->dispo}} avaible</h6>
                                             @endif
                                            <div class="input-group">
                                           

                                                <input class="form-control" type="number"  max="100000" value="{{$item->quantity}}" name="quantity"/>
                                                {{--<button class="quantity-plus w-icon-plus"></button>
                                                <button class="quantity-minus w-icon-minus"></button>--}}
                                            </div>
                                            <button type="submit" calss="btn btn-sm">Update</button>
                                        </form>
                                        </td>
                                        <td class="hidden text-right md:table-cell">
                                            <form action="{{ route('cart.remove') }}" method="POST">
                                              @csrf
                                              <input type="hidden" value="{{ $item->id }}" name="id">
                                              <button class="px-4 py-2 text-white bg-red-600">x</button>
                                          </form>
                                            
                                          </td>
                                        <td class="product-subtotal">
                                            <span class="amount"></span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="cart-action mb-6">
                                <a href="/" class="btn btn-dark btn-rounded btn-icon-left btn-shopping mr-auto"><i class="w-icon-long-arrow-left"></i>Continue Shopping</a>
                                <form action="{{ route('cart.clear') }}" method="POST">
                                    @csrf
                                    
                                <button type="submit" class="btn btn-rounded btn-default btn-clear" name="clear_cart" value="Clear Cart">Clear Cart</button> 
                                </form>
                            </div>

                     
                        </div>
                        <div class="col-lg-4 sticky-sidebar-wrapper">
                            <div class="sticky-sidebar">
                                <div class="cart-summary mb-4">
                                    <h3 class="cart-title text-uppercase">Cart Totals</h3>
                                    <div class="cart-subtotal d-flex align-items-center justify-content-between">
                                        <label class="ls-25">Subtotal</label>
                                        <span>{{ Cart::getTotal() }}</span>
                                    </div>

                                    <hr class="divider">

                                    <ul class="shipping-methods mb-2">
                                        
                                        
                                        </form>
                                    </div>

                                    <hr class="divider mb-6">
                                    <div class="order-total d-flex justify-content-between align-items-center">
                                        <label>Total</label>
                                        <span class="ls-50">{{ Cart::getTotal() }}</span>
                                    </div>
                                    
                                    <a href="checkout"
                                        class="btn btn-block btn-dark btn-icon-right btn-rounded  btn-checkout">
                                        Proceed to checkout<i class="w-icon-long-arrow-right"></i></a>
                                        

                                            
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="nom" value="{{Auth::user()->name}}">
                    </div>
                </div>
            </div>
            <!-- End of PageContent -->
        </main>
        <!-- End of Main -->

        <!-- Start of Footer -->
        @endsection
       