@extends('theeme')

@section('abcd')
    <!-- End of Header -->


    <!-- Start of Main -->
    <main class="main">
        <!-- Start of Breadcrumb -->

        <!-- End of Breadcrumb -->

        <!-- Start of Pgae Contetn -->
        <div class="page-content mb-8">
            <div class="container">
                <div class="row gutter-lg">
                    <aside class="sidebar left-sidebar vendor-sidebar sticky-sidebar-wrapper sidebar-fixed">
                        <!-- Start of Sidebar Overlay -->
                        <div class="sidebar-overlay"></div>
                        <a class="sidebar-close" href="#"><i class="close-icon"></i></a>
                        <div class="sidebar-content">
                            <div class="sticky-sidebar">
                                <div class="widget widget-collapsible widget-categories">
                                    <h3 class="widget-title"><span>All Categories</span></h3>
                                    <ul class="widget-body filter-items search-ul">
                                        <li>
                                            <a href="#">Clothing</a>
                                            <ul>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Babyclothes</a></li>
                                                <li><a href="#">Dressers &amp; Shirts</a></li>
                                                <li><a href="#">Jeans</a></li>
                                                <li><a href="#">Jumpers</a></li>
                                                <li><a href="#">Knitewears</a></li>
                                                <li><a href="#">Lounge &amp; Underwear</a></li>
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">T-shirts</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Cosmetics</a></li>
                                        <li><a href="#">Electronics</a></li>
                                        <li><a href="#">Furniture</a></li>
                                        <li><a href="#">Kitchen</a></li>
                                        <li><a href="#">Technologies</a></li>
                                    </ul>
                                </div>
                                <!-- End of Widget -->

                                <!-- End of Widget -->

                                <div class="widget widget-collapsible widget-search-products">
                                    <h3 class="widget-title"><span>Search Vendor Products</span></h3>
                                    <div class="widget-body">
                                        <form action="{{ url('/searchproduit') }}" method="post" class="vendor-search-form"
                                            name="nom">
                                            @csrf
                                            <input type="search" id="search_1" class="form-control"
                                                placeholder="Search products..." name="nom" required>
                                            <button type="submit" class="btn btn-rounded">Search</button>

                                        </form>

                                        <br>

                                        @if (session()->has('result'))
                                            @if (count(session()->get('result')) == 0)
                                                produit non trouvé
                                            @else
                                                @foreach (session()->get('result') as $data)
                                                    {{ $data->nom }}
                                                @endforeach
                                            @endif

                                        @endif

                                    </div>
                                </div>
                                <!-- End of Widget -->
                                <div class="widget widget-collapsible widget-products">

                                    <div class="widget widget-calendar">
                                        <h3 class="widget-title bb-no">Calendar</h3>
                                        <div class="widget-body">
                                            <div class="calendar-container"
                                                data-calendar-options="{
                                                    'dayExcerpt': 1
                                                }">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Widget -->

                                    <!-- End of Widget -->
                                </div>
                            </div>
                    </aside>
                    <!-- End of Sidebar -->

                    <div class="main-content">
                        <div class="store store-wcmp-banner">
                            <figure class="store-media">
                                <img src="assets/images/vendor/wcmp/7.jpg" alt="Vendor" width="930" height="390"
                                    style="background-color: #ECE7E3;" />
                            </figure>
                            <div class="store-content">
                                <figure class="seller-brand">
                                    <img src="assets/images/vendor/brand/1-100x100.png" alt="Brand" width="100"
                                        height="100" />
                                </figure>
                                <h4 class="store-title"> </h4>
                                <div class="seller-info-list">
                                    <div class="store-address">
                                        <i class="w-icon-map-marker"></i>
                                        {{ Auth::user()->adresse }}
                                    </div>
                                    <div class="store-phone">
                                        <a href="tel:123456789">
                                            <i class="w-icon-phone"></i>
                                            {{ Auth::user()->tel }}
                                        </a>
                                    </div>
                                    <div class="store-rating">
                                        <i class="w-icon-star-full"></i>

                                    </div>
                                    <div class="store-email">
                                        <a href="email:#">
                                            <i class="w-icon-envelope"></i>
                                            {{ Auth::user()->email }}
                                        </a>
                                    </div>
                                </div>
                                <div class="social-icons social-icons-colored border-thin">
                                    <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                    <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                    <a href="#" class="social-icon social-linkedin fab fa-linkedin"></a>
                                    <a href="#" class="social-icon social-youtube w-icon-youtube"></a>
                                    <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Store WCMP Banner -->

                        <div class="tab tab-nav-underline tab-nav-boxed type2 tab-vendor-products">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a href="#tab-1" class="nav-link active">Products</a>
                                </li>

                            </ul>



                            <form action="searchcategorie"
                                class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper">
                                <div class="select-box">
                                    <select name="name">

                                        <option value="">All Categories</option>
                                        @if ($cat !== null)
                                            @foreach ($cat as $one)
                                                <option value="{{ $one->nomcategorie }}">{{ $one->nomcategorie }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <button class="btn btn-search" type="submit"><i class="w-icon-search"></i>
                                </button>
                            </form>



                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-1">
                                    <nav class="toolbox sticky-toolbox sticky-content fix-top">
                                        <div class="toolbox-left">
                                            <a href="#"
                                                class="btn btn-primary btn-outline btn-rounded left-sidebar-toggle 
                                                    btn-icon-left d-block d-lg-none"><i
                                                    class="w-icon-category"></i><span>Filters</span></a>
                                        </div>
                                    </nav>
                                    @if (session('quantite'))
                                        <div class="alert alert-danger"
                                            style="    background-color: #ff0034;
                                                color: white;
                                                width: 279px;
                                                margin-bottom: 16px;
                                            }">
                                            {{ session('quantite') }}
                                        </div>
                                    @endif
                                    <div class="product-wrapper row cols-md-3 cols-sm-2 cols-2">
                                        @if ($donnee !== null)
                                            @foreach ($donnee as $donnee)
                                                <form method="POST" action="{{ route('cart.store') }}"
                                                    class="form-inline d-inline-block" enctype="multipart/form-data">
                                                    @csrf
                                                    {{-- <input type="number" name="quantity" placeholder="Quantité ?" class="form-control mr-2" value="{{ isset(session('basket')[$donnee->id]) ? session('basket')[$donnee->id]['quantity'] : null }}" > --}}
                                                    <input value="{{ $donnee->id }}" hidden name="id" />
                                                    <input value="{{ $donnee->nomproduit }}" hidden name="name" />
                                                    <input value="{{ $donnee->prix }}" hidden name="price" />
                                                    <input value="{{ $donnee->image }}" hidden name="image" />



                                                    @if (auth()->user()?->role == 'client')
                                                        <input name="quantity" style="width:185px;" value="1"
                                                            min="1" class="form-control mr-2" type="number" />

                                                        <button type="submit" class="btn btn-warning"
                                                            style="font-size: 12px;
                                                margin-top: 13px;
                                                margin-bottom: 15px;
                                            ">+
                                                            ADD cart</button>
                                                    @endif

                                                    <div class="product-wrap">

                                                        <div class="product text-center">
                                                            <figure class="product-media">
                                                                <a href="product-default.html">
                                                                    <img src="storage/{{ $donnee->image }}"
                                                                        alt="Product" width="300" height="338" />
                                                                </a>
                                                                <div class="product-action-vertical">

                                                                    <a href="{{ URL('compare/' . $donnee->id) }}"
                                                                        class="btn-product-icon  w-icon-compare"
                                                                        title="Compare"></a>
                                                                    {{-- btn-compare --}}

                                                                </div>
                                                            </figure>
                                                            <div class="product-details">
                                                                <h3 class="product-name">
                                                                    <a
                                                                        href="product-default.html">{{ $donnee->nomproduit }}</a><br>
                                                                    <a href="product-default.html">vendor name
                                                                        :{{ $donnee->nomvendeur }}</a><br>

                                                                    <a href="product-default.html">{{ $donnee->quantite }}
                                                                        quantite disponible</a>

                                                                </h3>

                                                                <div class="product-pa-wrapper">
                                                                    <div class="product-price">
                                                                        {{ $donnee->prix }} D
                                                </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif

                </div>

            </div>

            <div class="tab-pane" id="tab-2">
                <h4 class="title review-title pt-6 mb-0">1 review for Vendor 1</h4>
                <ul class="comments list-style-none">
                    <li class="comment">
                        <div class="comment-body">
                            <figure class="comment-avatar">
                                <img src="assets/images/agents/2-100x100.png" alt="Avatar" width="100"
                                    height="100" />
                            </figure>
                            <div class="comment-content">
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                </div>
                                <h4 class="comment-author">
                                    Johnson Doe
                                    <span class="comment-date">- March 26, 2021</span>
                                </h4>
                                <p>Great vendor with high quality products and service </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <input type="hidden" name="nom" value="{{ Auth::user()->name }}">
        </div>
        </div>
        </div>
        <!-- End of Main Content -->
        </div>
        </div>
        </div>
        <!-- End of Page Content -->
    </main>
    <!-- End of Main -->

    <!-- Start of Footer -->
@endsection
