@extends('layouts.master')
@include('_partials.messages')
    @section('content')
        <!--=== Slider ===-->
        @include('layouts.slider')
        <!--=== End Slider ===-->

        <!--Title Box-->        
        <div class="title-box">
            <div class="title-box-text">How Does it work?</div>
        </div>
        <!-- End Title Box -->    

        <!-- Promo Box -->    
        <div class="row">
            <div class="col-md-4">
                <div class="promo-box">
                    <i class="fa fa-cloud-upload color-blue"></i>
                    <strong>Upload</strong>
                    <p>Upload pictures of your listings</p>                
                </div>        
            </div>

            <div class="col-md-4">
                <div class="promo-box">
                    <i class="fa fa-gears color-red"></i>
                    <strong>Customize</strong>
                    <p>Customize your slideshow</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="promo-box">        
                    <i class="fa fa-share color-sea"></i>
                    <strong>Share</strong>
                    <p>Easily share you beautiful slideshow with everyone!</p>
                </div>
            </div>
        </div>
        <!-- End Promo Box -->


    <!--=== Purchase Block
    <div class="purchase">
        <div class="container">
            <div class="row">
                <div class="col-md-9 animated fadeInLeft">
                    <span>There's no better, faster or easier way to share real estate photos.</span>
                    <p>Created by a real estate agent and photograher, FullScreenPhotos.com was designed to make the process of </br/>sharing real estates photos as convenient as possible. You'll wonder what your ever did without it.</p>
                </div>            
                <div class="col-md-3 btn-buy animated fadeInRight">
                    <a href="#" class="btn-u btn-u-lg">Try it Free!</a>
                </div>
            </div>
        </div>
    </div>
    End Purchase Block -->

    <!--=== Content Part ===-->
    <div class="container content"> 
        
        <!-- Our Clients
        <div class="margin-bottom-40">
            <div id="clients-flexslider" class="flexslider home clients">
                <ul class="slides">
                    <li>
                        <a href="#">
                            <img src="assets/img/clients/hp_grey.png" alt="" /> 
                            <img src="assets/img/clients/hp.png" class="color-img" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/img/clients/igneus_grey.png" alt="" /> 
                            <img src="assets/img/clients/igneus.png" class="color-img" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/img/clients/vadafone_grey.png" alt="" /> 
                            <img src="assets/img/clients/vadafone.png" class="color-img" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/img/clients/walmart_grey.png" alt="" /> 
                            <img src="assets/img/clients/walmart.png" class="color-img" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/img/clients/shell_grey.png" alt="" /> 
                            <img src="assets/img/clients/shell.png" class="color-img" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/img/clients/natural_grey.png" alt="" /> 
                            <img src="assets/img/clients/natural.png" class="color-img" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/img/clients/aztec_grey.png" alt="" /> 
                            <img src="assets/img/clients/aztec.png" class="color-img" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/img/clients/gamescast_grey.png" alt="" /> 
                            <img src="assets/img/clients/gamescast.png" class="color-img" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/img/clients/cisco_grey.png" alt="" /> 
                            <img src="assets/img/clients/cisco.png" class="color-img" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/img/clients/everyday_grey.png" alt="" /> 
                            <img src="assets/img/clients/everyday.png" class="color-img" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/img/clients/cocacola_grey.png" alt="" /> 
                            <img src="assets/img/clients/cocacola.png" class="color-img" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/img/clients/spinworkx_grey.png" alt="" /> 
                            <img src="assets/img/clients/spinworkx.png" class="color-img" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/img/clients/shell_grey.png" alt="" /> 
                            <img src="assets/img/clients/shell.png" class="color-img" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/img/clients/natural_grey.png" alt="" /> 
                            <img src="assets/img/clients/natural.png" class="color-img" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/img/clients/gamescast_grey.png" alt="" /> 
                            <img src="assets/img/clients/gamescast.png" class="color-img" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/img/clients/everyday_grey.png" alt="" /> 
                            <img src="assets/img/clients/everyday.png" class="color-img" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/img/clients/spinworkx_grey.png" alt="" /> 
                            <img src="assets/img/clients/spinworkx.png" class="color-img" alt="" />
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        End Our Clients -->
        
        <!-- Our Testomonial -->
        <div class="row margin-bottom-30">
            <div class="col-md-6">
                <div class="tag-box tag-box-v4">
                    <h2>Beautiful Slideshows that show off your listings to potential buyers</h2>
                    <p>If you're a real estate agent, then FullScreenPhotos is your best friend. It helps you easily create  high quality slideshows to showcase your properties. FullScreenPhotos slideshows can be easily shared on all social media websites or embedded in websites.</p>
                </div>            
            </div>

            <div class="col-md-6">
                <div class="carousel slide testimonials testimonials-v1" id="testimonials-1">
                    <div class="carousel-inner">
                        <div class="item active">
                            <p>Every real estate agent should be using this product to present your listings to buyers and sellers.
                            </p>
                            <div class="testimonial-info">
                                <img alt="" src="http://gravatar.com/avatar/00000000000000000000000000000000?d=mm">
                                <span class="testimonial-author">
                                        Stacey Schick
                                </span>
                            </div>
                        </div>
                        <div class="item">
                            <p>Really great idea, nailed it, can't say that enough, spot-on.
                            </p>
                            <div class="testimonial-info">
                                <img alt="" src="http://gravatar.com/avatar/00000000000000000000000000000000?d=mm">
                                <span class="testimonial-author">
                                        Mike Miriello
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="carousel-arrow">
                        <a data-slide="prev" href="#testimonials-1" class="left carousel-control">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a data-slide="next" href="#testimonials-1" class="right carousel-control">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>            
            </div>
        </div>
        <!-- End Testomonial -->
        <hr class="margin-bottom-40">
        <!-- Tag Box
        <div class="row tag-box tag-box-v5">
            <div class="col-md-8">
                <span>Ready to get it a try? Get started for free.</span><br/>
                <small>Create a free slideshow in seconds. No Credit card required</small>
            </div>
            <div class="col-md-4">
                <p><button class="btn-u btn-u-lg btn-u-orange"> Get Started</button></p>
            </div>
        </div>
        End Tag Box -->

        <!--<div class="clearfix margin-bottom-40"></div>-->

        <!-- Our Services
        <div class="row service-v1 margin-bottom-40">
            <div class="col-md-4">
                <img alt="" src="assets/img/main/increase_leads.jpg" class="img-responsive">            
                <h2>Increase Leads</h2>
                <p>Diccusamus et iusto <strong class="color-green">odio dignissimos aucimus</strong> nditiis praesentium voluptatum deleniti atque corrupti quos dolores vero eosetaet quas molestias excepturi sint occaecati cupiditate non provident, similique animi..</p>        
            </div>
            <div class="col-md-4">
                <img alt="" src="assets/img/main/reseller.jpg" class="img-responsive">            
                <h2>Wow Your Sellers</h2>
                <p>Diccusamus et iusto <strong class="color-green">odio dignissimos aucimus</strong> nditiis praesentium voluptatum deleniti atque corrupti quos dolores vero eosetaet quas molestias excepturi sint occaecati cupiditate non provident, similique animi..</p>        
            </div>
            <div class="col-md-4">
                <img alt="" src="assets/img/main/get_more_listing.jpg" class="img-responsive">            
                <h2>Get More Listings</h2>
                <p>Diccusamus et iusto <strong class="color-green">odio dignissimos aucimus</strong> nditiis praesentium voluptatum deleniti atque corrupti quos dolores vero eosetaet quas molestias excepturi sint occaecati cupiditate non provident, similique animi..</p>        
            </div>
        </div>
        End Our Services -->

        
    </div><!--/container-->     
    @stop
