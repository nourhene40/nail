@extends('theeme')

@section('abcd')
        <!-- End of Header -->


        <!-- Start of Main -->
        <main class="main mb-10 pb-1">
            <!-- Start of Breadcrumb -->
         
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="page-content">
                <div class="container">
                    <div class="row gutter-lg">
                        <div class="main-content">
                            <div class="product product-single row">
                                <div class="col-md-6 mb-6">
                                    <div class="product-gallery product-gallery-sticky product-gallery-vertical">
                                        <div class="swiper-container product-single-swiper swiper-theme nav-inner"
                                            data-swiper-options="{
                                            'navigation': {
                                                'nextEl': '.swiper-button-next',
                                                'prevEl': '.swiper-button-prev'
                                            }
                                        }">
                                            <div class="swiper-wrapper row cols-1 gutter-no">
                                                <div class="swiper-slide">
                                                    <figure class="product-image">
                                                        <img src="assets/images/products/vertical_thumb/1-800x900.jpg"
                                                            data-zoom-image="assets/images/products/vertical_thumb/1-800x900.jpg"
                                                            alt="Electronics Black Wrist Watch" width="800"
                                                            height="900">
                                                    </figure>
                                                </div>
                                                <div class="swiper-slide">
                                                    <figure class="product-image">
                                                        <img src="assets/images/products/vertical_thumb/2-800x900.jpg"
                                                            data-zoom-image="assets/images/products/vertical_thumb/2-800x900.jpg"
                                                            alt="Electronics Black Wrist Watch" width="488"
                                                            height="549">
                                                    </figure>
                                                </div>
                                                <div class="swiper-slide">
                                                    <figure class="product-image">
                                                        <img src="assets/images/products/vertical_thumb/3-800x900.jpg"
                                                            data-zoom-image="assets/images/products/vertical_thumb/3-800x900.jpg"
                                                            alt="Electronics Black Wrist Watch" width="800"
                                                            height="900">
                                                    </figure>
                                                </div>
                                                <div class="swiper-slide">
                                                    <figure class="product-image">
                                                        <img src="assets/images/products/vertical_thumb/4-800x900.jpg"
                                                            data-zoom-image="assets/images/products/vertical_thumb/4-800x900.jpg"
                                                            alt="Electronics Black Wrist Watch" width="800"
                                                            height="900">
                                                    </figure>
                                                </div>
                                            </div>
                                            <button class="swiper-button-next"></button>
                                            <button class="swiper-button-prev"></button>
                                            <a href="#" class="product-gallery-btn product-image-full"><i
                                                    class="w-icon-zoom"></i></a>
                                        </div>
                                        <div class="product-thumbs-wrap swiper-container" data-swiper-options="{
                                            'navigation': {
                                                'nextEl': '.swiper-button-next',
                                                'prevEl': '.swiper-button-prev'
                                            },
                                            'breakpoints': {
                                                '992': {
                                                    'direction': 'vertical',
                                                    'slidesPerView': 'auto'
                                                }
                                            }
                                        }">
                                            <div class="product-thumbs swiper-wrapper row cols-lg-1 cols-4 gutter-sm">
                                                <div class="product-thumb swiper-slide">
                                                    <img src="assets/images/products/vertical_thumb/1-800x900.jpg"
                                                        alt="Product Thumb" width="800" height="900">
                                                </div>
                                                <div class="product-thumb swiper-slide">
                                                    <img src="assets/images/products/vertical_thumb/2-800x900.jpg"
                                                        alt="Product Thumb" width="800" height="900">
                                                </div>
                                                <div class="product-thumb swiper-slide">
                                                    <img src="assets/images/products/vertical_thumb/3-800x900.jpg"
                                                        alt="Product Thumb" width="800" height="900">
                                                </div>
                                                <div class="product-thumb swiper-slide">
                                                    <img src="assets/images/products/vertical_thumb/4-800x900.jpg"
                                                        alt="Product Thumb" width="800" height="900">
                                                </div>
                                            </div>
                                            <button class="swiper-button-prev"></button>
                                            <button class="swiper-button-next"></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 sticky-sidebar-wrapper mb-4 mb-md-6">
                                    <div class="product-details sticky-sidebar" data-sticky-options="{'minWidth': 767}">
                                        <h1 class="product-title">Professsional Camera Set</h1>
                                        <div class="product-bm-wrapper">
                                            <figure class="brand">
                                                <img src="assets/images/products/brand/brand-2.jpg" alt="Brand"
                                                    width="105" height="48" />
                                            </figure>
                                           
                                        </div>

                                        <hr class="product-divider">

                                     

                                        <div class="product-short-desc lh-2">
                                            With technological evolution we are witnessing a very important revolution in electronics. Consumers find themselves in difficult situations when choosing a desired product
                                        </div>

                                        <hr class="product-divider">

                                       

                                        <div class="social-links-wrapper">
                                            <div class="social-links">
                                                <div class="social-icons social-no-color border-thin">
                                                    <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                                    <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                                    <a href="#"
                                                        class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                                    <a href="#" class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                                    <a href="#"
                                                        class="social-icon social-youtube fab fa-linkedin-in"></a>
                                                </div>
                                            </div>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab tab-nav-boxed tab-nav-underline product-tabs mt-3">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a href="#product-tab-description" class="nav-link active">Description</a>
                                    </li>
                                   
                                    <li class="nav-item">
                                        <a href="#product-tab-reviews" class="nav-link">Customer Reviews </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="product-tab-description">
                                        <div class="row mb-4">
                                            <div class="col-md-6 mb-5">
                                                <h4 class="title tab-pane-title font-weight-bold mb-2">Detail</h4>
                                                <p class="mb-4"></p>
                                                <ul class="list-type-check">
                                                    <li>This description matches the minimal design of the product by emphasizing the subtle elegance of this teapot, and avoids lengthy descriptions of its aesthetic that might over-sell its simple design.
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                            <div class="col-md-6 mb-5">
                                                <div class="banner banner-video product-video br-xs">
                                                    <figure class="banner-media">
                                                        <a href="#">
                                                            <img src="assets/images/products/aa.jpg"
                                                                alt="banner" width="610" height="300"
                                                                style="background-color: #bebebe;">
                                                        </a>
                                                        <a class="btn-play-video btn-iframe"
                                                            href="assets/video/vv.mp4"></a>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row cols-md-3">
                                            <div class="mb-3">
                                                <h5 class="sub-title font-weight-bold"><span class="mr-3">1.</span>Free
                                                    Shipping &amp; Return</h5>
                                                <p class="detail pl-5">We offer free shipping for products on orders
                                                    above 50$ and offer free delivery for all orders in US.</p>
                                            </div>
                                            <div class="mb-3">
                                                <h5 class="sub-title font-weight-bold"><span>2.</span>Free and Easy
                                                    Returns</h5>
                                                <p class="detail pl-5">We guarantee our products and you could get back
                                                    all of your money anytime you want in 30 days.</p>
                                            </div>
                                            <div class="mb-3">
                                                <h5 class="sub-title font-weight-bold"><span>3.</span>Special Financing
                                                </h5>
                                                <p class="detail pl-5">Get 20%-50% off items over 50$ for a month or
                                                    over 250$ for a year with our special credit card.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="product-tab-vendor">
                                        <div class="row mb-3">
                                            <div class="col-md-6 mb-4">
                                                <figure class="vendor-banner br-sm">
                                                    <img src="assets/images/products/vendor-banner.jpg"
                                                        alt="Vendor Banner" width="610" height="295"
                                                        style="background-color: #353B55;" />
                                                </figure>
                                            </div>
                                            <div class="col-md-6 pl-2 pl-md-6 mb-4">
                                                <div class="vendor-user">
                                                    <figure class="vendor-logo mr-4">
                                                        <a href="#">
                                                            <img src="assets/images/products/vendor-logo.jpg"
                                                                alt="Vendor Logo" width="80" height="80" />
                                                        </a>
                                                    </figure>
                                                    <div>
                                                        <div class="vendor-name"><a href="#">Jone Doe</a></div>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 90%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                            <a href="#" class="rating-reviews">(32 Reviews)</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="vendor-info list-style-none">
                                                    <li class="store-name">
                                                        <label>Store Name:</label>
                                                        <span class="detail">OAIO Store</span>
                                                    </li>
                                                    <li class="store-address">
                                                        <label>Address:</label>
                                                        <span class="detail">Steven Street, El Carjon, CA 92020, United
                                                            States (US)</span>
                                                    </li>
                                                    <li class="store-phone">
                                                        <label>Phone:</label>
                                                        <a href="#tel:">1234567890</a>
                                                    </li>
                                                </ul>
                                                <a href="vendor-dokan-store.html"
                                                    class="btn btn-dark btn-link btn-underline btn-icon-right">Visit
                                                    Store<i class="w-icon-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <p class="mb-5"><strong class="text-dark"></strong>
                                        </p>
                                        <p class="mb-2"><strong class="text-dark"></strong> 
                                        </p>
                                    </div>
                                    <div class="tab-pane" id="product-tab-reviews">
                                        <div class="row mb-4">
                                            <div class="col-xl-4 col-lg-5 mb-4">
                                                <div class="ratings-wrapper">
                                                    <div class="avg-rating-container">
                                                        <h4 class="avg-mark font-weight-bolder ls-50">3.3</h4>
                                                        <div class="avg-rating">
                                                            <p class="text-dark mb-1">Average Rating</p>
                                                            <div class="ratings-container">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 60%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="ratings-value d-flex align-items-center text-dark ls-25">
                                                        <span
                                                            class="text-dark font-weight-bold">66.7%</span>Recommended<span
                                                            class="count">(2 of 3)</span>
                                                    </div>
                                                    <div class="ratings-list">
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 100%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                            <div class="progress-bar progress-bar-sm ">
                                                                <span></span>
                                                            </div>
                                                            <div class="progress-value">
                                                                <mark>70%</mark>
                                                            </div>
                                                        </div>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 80%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                            <div class="progress-bar progress-bar-sm ">
                                                                <span></span>
                                                            </div>
                                                            <div class="progress-value">
                                                                <mark>30%</mark>
                                                            </div>
                                                        </div>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 60%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                            <div class="progress-bar progress-bar-sm ">
                                                                <span></span>
                                                            </div>
                                                            <div class="progress-value">
                                                                <mark>40%</mark>
                                                            </div>
                                                        </div>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 40%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                            <div class="progress-bar progress-bar-sm ">
                                                                <span></span>
                                                            </div>
                                                            <div class="progress-value">
                                                                <mark>0%</mark>
                                                            </div>
                                                        </div>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 20%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                            <div class="progress-bar progress-bar-sm ">
                                                                <span></span>
                                                            </div>
                                                            <div class="progress-value">
                                                                <mark>0%</mark>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-7 mb-4">
                                                <div class="review-form-wrapper">
                                                    <h3 class="title tab-pane-title font-weight-bold mb-1">Submit Your
                                                        Review</h3>
                                                    <p class="mb-3">Your email address will not be published. Required
                                                        fields are marked *</p>
                                                        <form class="form" action="/addfeedback" method="post">
                                                            @csrf
                                                        <div class="rating-form">
                                                            <label for="rating">Your Rating Of our Products :</label>
                                                            <span class="rating-stars">
                                                                <a class="star-1" href="#">1</a>
                                                                <a class="star-2" href="#">2</a>
                                                                <a class="star-3" href="#">3</a>
                                                                <a class="star-4" href="#">4</a>
                                                                <a class="star-5" href="#">5</a>
                                                            </span>
                                                            <select name="rating" id="rating" required=""
                                                                style="display: none;">
                                                                <option value="">Rate…</option>
                                                                <option value="5">Perfect</option>
                                                                <option value="4">Good</option>
                                                                <option value="3">Average</option>
                                                                <option value="2">Not that bad</option>
                                                                <option value="1">Very poor</option>
                                                            </select>
                                                        </div>
                                                        <textarea cols="30" rows="6"
                                                            placeholder="Write Your Review Here..." class="form-control"
                                                            id="review" name="message"></textarea>
                                                        <div class="row gutter-md">
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Your Name" id="nom" name="nom">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Your Email" id="email" name="email">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" class="custom-checkbox"
                                                                id="save-checkbox">
                                                            <label for="save-checkbox">Save my name, email, and website
                                                                in this browser for the next time I comment.</label>
                                                        </div>
                                                        
                                                        <button type="submit" class="btn btn-dark">Submit
                                                            Review</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                       
                                    </div>
                                </div>
                            </div>
                           
                           
                        </div>
                        <!-- End of Main Content -->
                        <aside class="sidebar product-sidebar sidebar-fixed right-sidebar sticky-sidebar-wrapper">
                            <div class="sidebar-overlay"></div>
                            <a class="sidebar-close" href="#"><i class="close-icon"></i></a>
                            <a href="#" class="sidebar-toggle d-flex d-lg-none"><i class="fas fa-chevron-left"></i></a>
                            <div class="sidebar-content scrollable">
                                <div class="sticky-sidebar">
                                    <div class="widget widget-icon-box mb-6">
                                        <div class="icon-box icon-box-side">
                                            <span class="icon-box-icon text-dark">
                                                <i class="w-icon-truck"></i>
                                            </span>
                                            <div class="icon-box-content">
                                                <h4 class="icon-box-title">Free Shipping & Returns</h4>
                                                <p>For all orders over $99</p>
                                            </div>
                                        </div>
                                        <div class="icon-box icon-box-side">
                                            <span class="icon-box-icon text-dark">
                                                <i class="w-icon-bag"></i>
                                            </span>
                                            <div class="icon-box-content">
                                                <h4 class="icon-box-title">Secure Payment</h4>
                                                <p>We ensure secure payment</p>
                                            </div>
                                        </div>
                                        <div class="icon-box icon-box-side">
                                            <span class="icon-box-icon text-dark">
                                                <i class="w-icon-money"></i>
                                            </span>
                                            <div class="icon-box-content">
                                                <h4 class="icon-box-title">Money Back Guarantee</h4>
                                                <p>Any back within 30 days</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Widget Icon Box -->

                                    <div class="widget widget-banner mb-9">
                                        <div class="banner banner-fixed br-sm">
                                            <figure>
                                                <img src="assets/images/shop/banner3.jpg" alt="Banner" width="266"
                                                    height="220" style="background-color: #1D2D44;" />
                                            </figure>
                                            <div class="banner-content">
                                                <div class="banner-price-info font-weight-bolder text-white lh-1 ls-25">
                                                    40<sup class="font-weight-bold">%</sup><sub
                                                        class="font-weight-bold text-uppercase ls-25">Off</sub>
                                                </div>
                                                <h4
                                                    class="banner-subtitle text-white font-weight-bolder text-uppercase mb-0">
                                                    Ultimate Sale</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Widget Banner -->

                                    <div class="widget widget-products">
                                        <div class="title-link-wrapper mb-2">
                                            <h4 class="title title-link font-weight-bold">More Products</h4>
                                        </div>

                                        <div class="swiper nav-top">
                                            <div class="swiper-container swiper-theme nav-top" data-swiper-options="{
                                                'slidesPerView': 1,
                                                'spaceBetween': 20,
                                                'navigation': {
                                                    'prevEl': '.swiper-button-prev',
                                                    'nextEl': '.swiper-button-next'
                                                }
                                            }">
                                                <div class="swiper-wrapper">
                                                    <div class="widget-col swiper-slide">
                                                        <div class="product product-widget">
                                                            <figure class="product-media">
                                                                <a href="#">
                                                                    <img src="assets/images/shop/13.jpg" alt="Product"
                                                                        width="100" height="113" />
                                                                </a>
                                                            </figure>
                                                            <div class="product-details">
                                                                <h4 class="product-name">
                                                                    <a >Smart Watch</a>
                                                                </h4>
                                                                <div class="ratings-container">
                                                                  
                                                                </div>
                                                                <div class="product-price"></div>
                                                            </div>
                                                        </div>
                                                        <div class="product product-widget">
                                                            <figure class="product-media">
                                                                <a >
                                                                    <img src="assets/images/shop/14.jpg" alt="Product"
                                                                        width="100" height="113" />
                                                                </a>
                                                            </figure>
                                                            <div class="product-details">
                                                                <h4 class="product-name">
                                                                    <a href="#">Sky Medical Facility</a>
                                                                </h4>
                                                                <div class="ratings-container">
                                                                  
                                                                        <span class="tooltiptext tooltip-top"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="product-price"></div>
                                                            </div>
                                                        </div>
                                                        <div class="product product-widget">
                                                            <figure class="product-media">
                                                                <a >
                                                                    <img src="assets/images/shop/15.jpg" alt="Product"
                                                                        width="100" height="113" />
                                                                </a>
                                                            </figure>
                                                            <div class="product-details">
                                                                <h4 class="product-name">
                                                                    <a href="#">Black Stunt Motor</a>
                                                                </h4>
                                                                <div class="ratings-container">
                                                                 
                                                                        <span class="tooltiptext tooltip-top"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="product-price"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-col swiper-slide">
                                                        <div class="product product-widget">
                                                            <figure class="product-media">
                                                                <a >
                                                                    <img src="assets/images/shop/16.jpg" alt="Product"
                                                                        width="100" height="113" />
                                                                </a>
                                                            </figure>
                                                            <div class="product-details">
                                                                <h4 class="product-name">
                                                                    <a href="#">Skate Pan</a>
                                                                </h4>
                                                                <div class="ratings-container">
                                                                
                                                                        <span class="tooltiptext tooltip-top"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="product-price"></div>
                                                            </div>
                                                        </div>
                                                        <div class="product product-widget">
                                                            <figure class="product-media">
                                                                <a >
                                                                    <img src="assets/images/shop/17.jpg" alt="Product"
                                                                        width="100" height="113" />
                                                                </a>
                                                            </figure>
                                                            <div class="product-details">
                                                                <h4 class="product-name">
                                                                    <a >Modern Cooker</a>
                                                                </h4>
                                                                <div class="ratings-container">
                                                                    
                                                                        <span class="tooltiptext tooltip-top"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="product-price"></div>
                                                            </div>
                                                        </div>
                                                        <div class="product product-widget">
                                                            <figure class="product-media">
                                                                <a >
                                                                    <img src="assets/images/shop/18.jpg" alt="Product"
                                                                        width="100" height="113" />
                                                                </a>
                                                            </figure>
                                                            <div class="product-details">
                                                                <h4 class="product-name">
                                                                    <a >CT Machine</a>
                                                                </h4>
                                                                <div class="ratings-container">
                                                              
                                                                        <span class="tooltiptext tooltip-top"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="product-price"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="swiper-button-next"></button>
                                                <button class="swiper-button-prev"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <!-- End of Sidebar -->
                    </div>
                </div>
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->

        <!-- Start of Footer -->
        @endsection