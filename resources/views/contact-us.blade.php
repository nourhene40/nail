@extends('theeme')

@section('abcd')
        <!-- End of Header -->


        <!-- Start of Main -->
        <main class="main">
            <!-- Start of Page Header -->
            <div class="page-header" style="background-color:#e9ac83;">
                <div class="container" style="background-color:#e9ac83;">
                    <h1 class="page-title mb-0">Contact Us</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
         
            <!-- End of Breadcrumb -->

            <!-- Start of PageContent -->
            <div class="page-content contact-us">
                <div class="container">
                    <section class="content-title-section mb-10"> <br>
                        <h3 class="title title-center mb-3">Contact
                            Information
                        </h3>
                        <p class="text-center"></p>
                    </section>
                    <!-- End of Contact Title Section -->

                    <section class="contact-information-section mb-10">
                        <div class=" swiper-container swiper-theme " data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 1,
                            'breakpoints': {
                                '480': {
                                    'slidesPerView': 2
                                },
                                '768': {
                                    'slidesPerView': 3
                                },
                                '992': {
                                    'slidesPerView': 4
                                }
                            }
                        }">
                            <div class="swiper-wrapper row cols-xl-4 cols-md-3 cols-sm-2 cols-1">
                                <div class="swiper-slide icon-box text-center icon-box-primary">
                                    <span class="icon-box-icon icon-email">
                                        <i class="w-icon-envelop-closed"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title">E-mail Address</h4>
                                        <p>hello@zahou-tech.com</p>
                                    </div>
                                </div>
                                <div class="swiper-slide icon-box text-center icon-box-primary">
                                    <span class="icon-box-icon icon-headphone">
                                        <i class="w-icon-headphone"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title">Phone Number</h4>
                                        <p>50123738</p>
                                    </div>
                                </div>
                                <div class="swiper-slide icon-box text-center icon-box-primary">
                                    <span class="icon-box-icon icon-map-marker">
                                        <i class="w-icon-map-marker"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title">Address</h4>
                                        <p>Lac Tunis</p>
                                    </div>
                                </div>
                                <div class="swiper-slide icon-box text-center icon-box-primary">
                                    <span class="icon-box-icon icon-fax">
                                        <i class="w-icon-fax"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title">FAX</h4>
                                        <p>71780025</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End of Contact Information section -->

                    <hr class="divider mb-10 pb-1">

                    <section class="contact-section">
                        <div class="row gutter-lg pb-3">
                            <div class="col-lg-6 mb-8">
                                <h4 class="title mb-3">People usually ask these</h4>
                                <div class="accordion accordion-bg accordion-gutter-md accordion-border">
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#collapse1" class="collapse">How can I cancel my order?</a>
                                        </div>
                                        <div id="collapse1" class="card-body expanded">
                                            <p class="mb-0">
                                                Select the check box of the item that you want to remove from the order. To cancel the entire order, select all of the items. Select Cancel selected items in this order when finished.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#collapse2" class="expand">Why is my registration delayed?</a>
                                        </div>
                                        <div id="collapse2" class="card-body collapsed">
                                            <p class="mb-0">
                                                esolve Device or App Registration Issues. You may come across problems registering your device or application due to outdated software or incorrect account credentials.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#collapse3" class="expand">What do I need to buy products?</a>
                                        </div>
                                        <div id="collapse3" class="card-body collapsed">
                                            <p class="mb-0">
                                                Whether you're shopping around for things that'll make your day-to-day life easier or just trying to reduce clutter around the house, there are tons of useful products on Zahou
                                            </p>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#collapse4" class="expand">How can I track an order?</a>
                                        </div>
                                        <div id="collapse4" class="card-body collapsed">
                                            <p class="mb-0">
                                                Go to Your Orders. Go to the order you want to track. Select Track Package next to your order. Select See all updates to view delivery updates.      
                                            </p>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#collapse5" class="expand">How can I get money back?</a>
                                        </div>
                                        <div id="collapse5" class="card-body collapsed">
                                            <p class="mb-0">
                                                When returning an item, you can choose your preferred refund method in the Returns Center
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-8">
                                <h4 class="title mb-3">Send Us a Message</h4>
                                <form class="form" action="/addcontact" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="username">Your Name</label>
                                        <input type="text" id="username" name="nom"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="email_1">Your Email</label>
                                        <input type="email" id="email_1" name="email"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Your Message</label>
                                        <textarea id="message" name="message" cols="30" rows="5"
                                            class="form-control"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-dark btn-rounded">Send Now</button>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- End of Contact Section -->
                </div>

                <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
                
                <!-- End Map Section -->
            </div>
            <!-- End of PageContent -->
        </main>
        <!-- End of Main -->

        <!-- Start of Footer -->
        @endsection 