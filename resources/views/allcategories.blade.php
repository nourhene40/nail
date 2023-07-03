<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>marketplace</title>

    <meta name="keywords" content="Marketplace ecommerce responsive " />
    <meta name="description" content="zahou marketplace &amp; ecommerce responsive ">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.png">

    <!-- WebFont.js --> 
    <script>
        WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700,800'] }
        };
        ( function ( d ) {
            var wf = d.createElement( 'script' ), s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore( wf, s );
        } )( document );
    </script>

    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2"
            crossorigin="anonymous">
    <link rel="preload" href="assets/fonts/wolmart87d5.woff?png09e" as="font" type="font/woff" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.min.css">
</head>

<body class="about-us">
    <div class="page-wrapper">
        <!-- Start of Header -->
        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <p class="welcome-msg"></p>
                    </div>
                    <div class="header-right">
                        <div class="dropdown">
                            
                            <div class="dropdown-box">
                               
                            </div>
                        </div>
                        <!-- End of DropDown Menu -->

                      
                        <!-- End of Dropdown Menu -->
                        <span class="divider d-lg-show"></span>
                    
                        <a href="faq" class="d-lg-show">FAQs </a>
                        
                        <a href="coming-soon" class="d-lg-show">Coming Soon</a>
                        <a href="contact-us" class="d-lg-show">Contact  Us</a>
                    
                        <a href="aboutus" class="d-lg-show"> About  Us </a>
                        
                        <a href="become-a-vendor" class="d-lg-show">Become A Vendor </a>
                        
                        @auth

                        <a href="" class="d-lg-show">
                            {{Auth::user()->prenom}}
                        </a>

                       

                        <a class="d-lg-show" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                        @else
                        <a href="register" class="d-lg-show">Sign up</a>
                        

                        @endauth
                        
                        

                    </div>
                </div>
            </div>
            <!-- End of Header Top -->

            <div class="header-middle">
                <div class="container">
                    <div class="header-left mr-md-4">
                        <a href="#" class="mobile-menu-toggle  w-icon-hamburger" aria-label="menu-toggle">
                        </a>
                        <a href="demo1.html" class="logo ml-lg-0">
                            <img src="assets/images/cart/market.png" alt="logo" width="144" height="45" />
                        </a>
                      
                    </div>
                    <div class="header-right ml-4">
                        <div class="header-call d-xs-show d-lg-flex align-items-center">
                            <a href="tel:#" class="w-icon-call"></a>
                            <div class="call-info d-lg-show">
                                <h4 class="chat font-weight-normal font-size-md text-normal ls-normal text-light mb-0">
                                    <a href="mailto:#" class="text-capitalize">Live Chat</a> or :</h4>
                                <a href="tel:#" class="phone-number font-weight-bolder ls-50">71870025</a>
                            </div>
                        </div>
                        @if(auth()->user()?->role == 'client')
                        <a class="compare label-down link d-xs-show" href="compare">
                            <i class="w-icon-compare"></i>
                            <span class="compare-label d-lg-show">Compare</span>
                        </a>@endif
                        @if(auth()->user()?->role == 'client')
                        <div class="dropdown cart-dropdown cart-offcanvas mr-0 mr-lg-2">
                            <div class="cart-overlay"></div>
                            <a href="#" class="cart-toggle label-down link">
                                <i class="w-icon-cart">
                                    
                                </i>
                                <span class="cart-label">Cart</span>
                            </a>
                            @endif
                            <div class="dropdown-box">
                                <div class="cart-header">
                                    <span>Shopping Cart</span>
                                    <a href="#" class="btn-close">Close<i class="w-icon-long-arrow-right"></i></a>
                                </div>
                                
                                <div class="products">
                                    @foreach(Cart::getContent() as $item)

                                    <div class="product product-cart">
                                        <div class="product-detail">
                                            <a href="product-default.html" class="product-name">{{$item->name}}</a>
                                            <div class="price-box">
                                                <span class="product-quantity">{{$item->quantity}}</span>
                                                <span class="product-price">{{$item->quantity * $item->price}} TND</span>
                                            </div>
                                        </div>
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="storage/{{$item->image}}" alt="product" width="84"
                                                    height="94" />
                                            </a>
                                        </figure>
                                        <button class="btn btn-link btn-close" aria-label="button">
                                            
                                        </button>
                                    </div>
                                    @endforeach
                                </div>
                              

                                <div class="cart-total">
                                    <label>Subtotal:</label>
                                    <span class="price">{{ Cart::getTotal() }} TND</span>
                                </div>

                                <div class="cart-action">
                                    <a href="cart" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                                    <a href="checkout" class="btn btn-primary  btn-rounded">Checkout</a>
                                </div>
                            </div>
                            <!-- End of Dropdown Box -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Header Middle -->

            <div class="header-bottom sticky-content fix-top sticky-header">
                <div class="container">
                    <div class="inner-wrap">
                        <div class="header-left">
                            <div class="dropdown category-dropdown has-border" data-visible="true">
                                <a href="#" class="category-toggle" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="true" data-display="static"
                                    title="Browse Categories">
                                    <i class="w-icon-category"></i>
                                    <span>Browse Categories</span>
                                </a>

                                <div class="dropdown-box">
                                    <ul class="menu vertical-menu category-menu">
                                        <li>
                                            <a >
                                                <i class="w-icon-tshirt2"></i>Fashion
                                            </a>
                                           
                                        </li>
                                        <li>
                                            <a >
                                                <i class="w-icon-home"></i>Home & Garden
                                            </a>
                                           
                                        </li>
                                        <li>
                                            <a >
                                                <i class="w-icon-electronics"></i>Electronics
                                            </a>
                                          
                                        </li>
                                        <li>
                                            <a >
                                                <i class="w-icon-furniture"></i>Furniture
                                            </a>
                                           
                                        </li>
                                        <li>
                                            <a >
                                                <i class="w-icon-heartbeat"></i>Healthy & Beauty
                                            </a>
                                        </li>
                                        <li>
                                            <a >
                                                <i class="w-icon-gift"></i>Gift Ideas
                                            </a>
                                        </li>
                                        <li>
                                            <a >
                                                <i class="w-icon-gamepad"></i>Toy & Games
                                            </a>
                                        </li>
                                        <li>
                                            <a >
                                                <i class="w-icon-ice-cream"></i>Cooking
                                            </a>
                                        </li>
                                        <li>
                                            <a >
                                                <i class="w-icon-ios"></i>Smart Phones
                                            </a>
                                        </li>
                                        <li>
                                            <a >
                                                <i class="w-icon-camera"></i>Cameras & Photo
                                            </a>
                                        </li>
                                        <li>
                                            <a >
                                                <i class="w-icon-ruby"></i>Accessories
                                            </a>
                                        </li>
                                        <li>
                                      
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <nav class="main-nav">
                                <ul class="menu active-underline">
                                    <li>
                                        <a href="/">Home</a>
                                    </li>
                                    <li>
                                        @if(auth()->user()?->role == 'vendeur') <a href="dashvendeurp">shopping</a>@endif
                                    </li>
                                    <li>
                                        @if(auth()->user()?->role == 'vendeur' || auth()->user()?->role == 'client'|| auth()->user()?->role == 'admin')  <a href="chaqueevendeur">products</a> @endif
                                    </li>
                                    <li>
                                       @if(auth()->user()?->role == 'admin')  <a href="partenaire">partener</a> @endif
                                    </li>

                                    <li>
                                        @if(auth()->user()?->role == 'vendeur' || auth()->user()?->role == 'client')  <a href="chaqueevendeur">products</a> @endif
                                    </li>
                                    <li>
                                        <a href="allcategories">Product Category</a>
                                    </li>
                                   
                                    <li>
                                        <a href="store">vendors</a>
                                    </li>
                                    
                                    
                                    
                                         
                                        
                                    
                                  
                                    
                                </ul>
                            </nav>
                        </div>
                       
                    </div>
                </div>
            </div>
        </header>
        <!-- End of Header -->


        <!-- Start of Main -->
        <main class="main">
            <!-- Start of Page Header -->
            <div class="page-header" style="background-color:#9eddb8;">
                <h1 class="page-title">Product Categories</h1>
               
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav mb-10 pb-1">
                
            </nav>
            <!-- End of Breadcrumb -->

                    <section class="category-masonry-section mb-10">
                        <h4 class="title title-center mb-7"></h4>
                        <div class="category-grid show-code-action">
                           @foreach ($donnee as $donnee)
                               
                          
                            <div class="grid-item1">
                                <div class="category category-banner category-absolute overlay-zoom overlay-dark br-sm">
                                    <a href="shop-banner-sidebar.html">
                                        <figure class="category-media">
                                           
                                            <img src="storage/{{$donnee->image}}"
                                                alt="Category Banner" width="5" height="5" />
                                        </figure>
                                        <div class="category-content">
                                            {{$donnee->nomcategorie}}
                                            <h4 class="category-name"></h4>
                                        </div>
                                        
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </section>

                   
                    <!-- End of Element Section -->
                </div>
                <!-- End of Container -->
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->

        <!-- Start of Footer -->
        