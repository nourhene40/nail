@extends('theeme')

@section('abcd')
        <!-- End of Header -->
 

        <!-- Start of Main -->
        <main class="main">
            <!-- Start of Page Header -->
            <div class="page-header" style="background-color:#83ace9;">
                <div class="container" style="background-color:#83ace9;">
                    <h1 class="page-title">Compare</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="page-content mb-10 pb-2">
                <div class="container">
                    <div class="compare-table">
                        <div class="compare-row cols-xl-5 cols-lg-4 cols-md-3 cols-2 compare-products">
                            <div class="compare-col compare-field">Product</div>
                            @if(!empty($data))
                            @foreach($data as $item)
                            <div class="compare-col compare-product">
                                <a href="{{ URL('compare/'.$item->id) }}" class="btn remove-product"><i class="w-icon-times-solid"></i></a>
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="storage/{{$item->image}}" alt="Product" width="228"
                                                height="257" />
                                        </a>
                                        <div class="product-action-vertical">
                                           
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name"><a href="product-default.html">{{$item->nomproduit}}</a></h3>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                            {{--
                            <div class="compare-col compare-product">
                                <a href="#" class="btn remove-product"><i class="w-icon-times-solid"></i></a>
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/products/elements/2.jpg" alt="Product" width="228"
                                                height="257" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name"><a href="product-default.html">Summer Sport Shoes</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="compare-col compare-product">
                                <a href="#" class="btn remove-product"><i class="w-icon-times-solid"></i></a>
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/products/elements/3.jpg" alt="Product" width="228"
                                                height="257" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name"><a href="product-default.html">Charming Design
                                                Watch</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="compare-col compare-product">
                                <a href="#" class="btn remove-product"><i class="w-icon-times-solid"></i></a>
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/products/elements/4-1.jpg" alt="Product" width="228"
                                                height="257" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name"><a href="product-default.html">Populated Gaming
                                                Mouse</a></h3>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <!-- End of Compare Products -->
                        <div class="compare-row cols-xl-5 cols-lg-4 cols-md-3 cols-2 compare-price">
                           
                            <div class="compare-col compare-field">Price</div>
                            @if(!empty($data))
                            @foreach($data as $item)
                            <div class="compare-col compare-value">
                                <div class="product-price">
                                    <span class="new-price">{{$item->prix}}</span>
                                </div>
                            </div>
                            @endforeach
                            @endif
                            {{--
                            <div class="compare-col compare-value">
                                <div class="product-price">
                                    <span class="new-price">$86.00</span>
                                    <span class="old-price">$120.00</span>
                                </div>
                            </div>
                            <div class="compare-col compare-value">
                                <div class="product-price">
                                    <span class="new-price">$30.00</span>
                                </div>
                            </div>
                            <div class="compare-col compare-value">
                                <div class="product-price">
                                    <span class="new-price">$236.00</span>
                                </div>
                            </div> --}}
                        </div>
                        <!-- End of Compare Price -->
                       {{-- <div class="compare-row cols-xl-5 cols-lg-4 cols-md-3 cols-2 compare-availability">
                            <div class="compare-col compare-field">Availability</div>
                            <div class="compare-col compare-value">In stock</div>
                            <div class="compare-col compare-value">In stock</div>
                            <div class="compare-col compare-value">In stock</div>
                            <div class="compare-col compare-value">In stock</div>
                        </div>
                        --}}
                        <!-- End of Compare Availability -->
                        <div class="compare-row cols-xl-5 cols-lg-4 cols-md-3 cols-2 compare-description">
                            <div class="compare-col compare-field">description</div>
                            @if(!empty($data))
                            @foreach($data as $item)
                            <div class="compare-col compare-value">
                                <ul class="list-style-none list-type-check">
                                    <li></li>
                                    <li>{{$item->description}}</li>
                                    
                                </ul>
                            </div>
                            @endforeach
                            @endif
                           
                           
                        
                        </div>
                        <!-- End of Compare Description -->
                        {{--<div class="compare-row cols-xl-5 cols-lg-4 cols-md-3 cols-2 compare-reviews">
                            <div class="compare-col compare-field">Ratings &amp; Reviews</div>
                            <div class="compare-col compare-rating">
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 80%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="#" class="rating-reviews">(3 Reviews)</a>
                                </div>
                            </div>
                            <div class="compare-col compare-rating">
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="#" class="rating-reviews">(5 Reviews)</a>
                                </div>
                            </div>
                            <div class="compare-col compare-rating">
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="#" class="rating-reviews">(8 Reviews)</a>
                                </div>
                            </div>
                            <div class="compare-col compare-rating">
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 80%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="#" class="rating-reviews">(3 Reviews)</a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Compare Reviews -->
                        <div class="compare-row cols-xl-5 cols-lg-4 cols-md-3 cols-2 compare-category">
                           

                            <div class="compare-col compare-field">Category</div>
                            @if(!empty($data))
                            @foreach($data as $item)

                            <div class="compare-col compare-value">{{$item->description}}</li></div>
                            @endforeach
                            @endif  
                        </div>
                       
                        <!-- End of Compare Category -->
                     
                        <!-- End of Compare Meta -->
                                                    {{--
<div class="compare-row cols-xl-5 cols-lg-4 cols-md-3 cols-2 compare-color">
                            <div class="compare-col compare-field">Color</div>
                            <div class="compare-col compare-value">
                                <span class="swatch" style="background-color: #ff0000;" ></span>
                                <span class="swatch" style="background-color: #00ff00;" ></span>
                                <span class="swatch" style="background-color: #0000ff;" ></span>
                                <span class="swatch" style="background-color: #ECEC23;" ></span>
                            </div>
                            <div class="compare-col compare-value">
                                <span class="swatch" style="background-color: #000000;" ></span>
                                <span class="swatch" style="background-color: #C0C0C0;" ></span>
                                <span class="swatch" style="background-color: #808080;" ></span>
                                <span class="swatch" style="background-color: #0080C0;" ></span>
                            </div>
                            <div class="compare-col compare-value">
                                <span class="swatch" style="background-color: #000000;" ></span>
                                <span class="swatch" style="background-color: #95E8E8;" ></span>
                                <span class="swatch" style="background-color: #FA0AF3;" ></span>
                                <span class="swatch" style="background-color: #0A4BFA;" ></span>
                            </div>
                            <div class="compare-col compare-value">
                                <span class="swatch" style="background-color: #000000;" ></span>
                                <span class="swatch" style="background-color: #0000A0;" ></span>
                                <span class="swatch" style="background-color: #42FDF9;" ></span>
                                <span class="swatch" style="background-color: #9BA3A4;" ></span>
                            </div>
                        </div>
                        <!-- End of Compare Color -->
                        <div class="compare-row cols-xl-5 cols-lg-4 cols-md-3 cols-2 compare-size">
                            <div class="compare-col compare-field">Size</div>
                            <div class="compare-col compare-value">Medium, Small</div>
                            <div class="compare-col compare-value">Large, Medium</div>
                            <div class="compare-col compare-value">Small</div>
                            <div class="compare-col compare-value">Medium</div>
                        </div>
                        <!-- End of Compare Size -->
                        <div class="compare-row cols-xl-5 cols-lg-4 cols-md-3 cols-2 compare-brand">
                            <div class="compare-col compare-field">Brand</div>
                            <div class="compare-col compare-value">Apple</div>
                            <div class="compare-col compare-value">New Balance</div>
                            <div class="compare-col compare-value">Apple</div>
                            <div class="compare-col compare-value">Green Grass</div>
                        </div>
                        <!-- End of Compare Brand -->
                    </div>
                </div> --}}
                <!-- End of Compare Table -->
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->

        <!-- Start of Footer -->
        @endsection