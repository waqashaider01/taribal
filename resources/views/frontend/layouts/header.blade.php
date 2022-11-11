<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>TRIBAL-XTC</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon-32.png" />
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ url('css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ url('css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ url('css/owl.theme.css') }}" />
    <link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ url('css/lightgallery.css') }}" />
    <link rel="stylesheet" href="{{ url('css/woocommerce.css') }}" />
    <link rel="stylesheet" href="{{ url('css/royal-preload.css') }}" />
    <!-- <link rel="stylesheet" href="{{ url('css/home-form.css') }}" /> -->


    <link rel="stylesheet" href="style.css" />
    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/settings.css">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/navigation.css">
</head>

<body class="royal_preloader">
    <div id="page" class="site">
        <header id="site-header" class="site-header header-transparent">
            <!-- Main Header start -->
            <div class="octf-main-header is-fixed">
                <div class="octf-area-wrap">
                    <div class="container-fluid octf-mainbar-container">
                        <div class="octf-mainbar">
                            <div class="octf-mainbar-row octf-row">
                                <div class="octf-col logo-col no-padding justify-content-center">
                                    <div id="site-logo" class="site-logo">
                                        <a href="{{url('/')}}">
                                            <img src="{{url('images/Logo-White.png')}}" alt="Theratio" class="">
                                            <p class="text-uppercase website_name justify-content-center d-flex">
                                                Tribal-xtc</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="octf-col menu-col no-padding">
                                    <nav id="site-navigation" class="main-navigation">
                                        <ul class="menu">
                                            <li class=" ">
                                                <a href="{{url('/')}}">Home</a>
                                            </li>
                                            <li class=""><a href="{{url('/about')}}">About Us</a></li>

                                            <li class="menu-item-has-children">
                                                <a href="{{ url('/our-services') }}">Services</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{url('/servcies-detail-1')}}">Architecture</a></li>
                                                    <li><a href="{{url('/servcies-detail-2')}}">Interior Design</a></li>
                                                    <li><a href="{{url('/servcies-detail-3')}}">Interior Decoration</a>
                                                    </li>
                                                    <li><a href="{{url('/servcies-detail-4')}}">Landscap</a></li>
                                                    <li><a href="{{url('/servcies-detail-5')}}">Hardscap</a></li>
                                                    <li><a href="{{ url('/servcies-detail-6') }}">Construction Project Management</a></li>
                                                </ul>
                                            </li>

                                            <li class=""><a href="{{url('/portfolio-masonry')}}">Portfolio</a></li>

                                            <li class="menu-item-has-children">
                                                <a href="#">Our Brands</a>
                                                <ul class="sub-menu">

                                                    <li><a href="https://www.cubix.com.co/">Cubix</a></li>
                                                    <li><a href="https://www.luxemael.com">Luxemael</a></li>
                                                    <li><a href="{{url('/')}}">COCO BARN</a></li>
                                                    <li><a href="{{url('/')}}">FiKA</a></li>
                                                </ul>
                                            </li>



                                            <li><a href="{{url('/Contact')}}">Contact Us</a></li>
                                            </li>


                                            {{-- <ul class="sub-menu">
                                                    <li><a href="{{url('/single-product')}}">Single Product</a></li>
                                            <li><a href="{{url('checkout-page')}}">Checkout Page</a></li>

                                        </ul> --}}
                                        {{-- <li><a href="{{url('/CartPage')}}">Cart Page</a></li> --}}






                                        </li>
                                        </ul>
                                        </li>


                                        </ul>
                                    </nav>
                                </div>
                                <div class="octf-col cta-col text-right no-padding">
                                    <!-- Call To Action -->
                                    <div class="octf-btn-cta">

                                        <!-- <div class="octf-cart octf-cta-header">
                                            <a class="cart-contents" href="{{url('/cart-page')}}"
                                                title="View your shopping cart">
                                                <i class="ot-flaticon-shopping-bag"></i>
                                                <span class="count">2</span>
                                            </a>

                                            <div class="site-header-cart">
                                                <div class="widget woocommerce widget_shopping_cart">
                                                    <div class="widget_shopping_cart_content">
                                                        <ul
                                                            class="woocommerce-mini-cart cart_list product_list_widget ">
                                                            <li class="woocommerce-mini-cart-item mini_cart_item">
                                                                <a class="remove remove_from_cart_button"
                                                                    href="#">×</a>
                                                                <a href="{{url('/single-product')}}"><img
                                                                        src="images/product/product9.jpg" class=""
                                                                        alt="">Velvet Teal Blue</a>
                                                                <span class="quantity">1 × <span
                                                                        class="amount"><bdi><span>$</span>195</bdi></span></span>
                                                            </li>
                                                            <li class="woocommerce-mini-cart-item mini_cart_item">
                                                                <a class="remove remove_from_cart_button"
                                                                    href="#">×</a>
                                                                <a href="{{url('/single-product')}}"><img
                                                                        src="images/product/product7.jpg" class=""
                                                                        alt="">Natural Pouffe</a>
                                                                <span class="quantity">1 × <span
                                                                        class="amount"><bdi><span>$</span>145</bdi></span></span>
                                                            </li>
                                                        </ul>

                                                        <p class="woocommerce-mini-cart__total total">
                                                            <strong>Subtotal:</strong> <span
                                                                class="amount"><bdi><span>$</span>340</bdi></span>
                                                        </p>
                                                        <p class="woocommerce-mini-cart__buttons buttons">
                                                            <a href="{{url('/cart-page')}}" class="button wc-forward">View
                                                                cart</a>
                                                            <a href="{{url('checkout-page')}}"
                                                                class="button checkout wc-forward">Checkout</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->

                                        <div class="octf-search octf-cta-header">
                                            <div class="toggle_search octf-cta-icons">
                                                <i class="ot-flaticon-search"></i>
                                            </div>
                                            <!-- Form Search on Header -->
                                            <div class="h-search-form-field collapse">
                                                <div class="h-search-form-inner">
                                                    <form role="search" method="get" class="search-form">
                                                        <input type="search" class="search-field" placeholder="SEARCH..." value="" name="s">
                                                        <button type="submit" class="search-submit"><i class="ot-flaticon-search"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="octf-sidepanel octf-cta-header">
                                            <div class="site-overlay panel-overlay"></div>
                                            <div id="panel-btn" class="panel-btn octf-cta-icons">
                                                <i class="ot-flaticon-menu"></i>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_mobile">
                <div class="container-fluid">
                    <div class="octf-mainbar-row octf-row">
                        <div class="octf-col">
                            <div class="mlogo_wrapper clearfix">
                                <div class="mobile_logo">
                                    <a href="{{url('/')}}">
                                        <img src="{{url('images/Logo-White.png')}}" alt="Theratio">
                                        <p class="text-uppercase mobile_website_name justify-content-center d-flex">
                                            Tribal-xtc</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="octf-col justify-content-end">
                            <div class="octf-search octf-cta-header">
                                <div class="toggle_search octf-cta-icons">
                                    <i class="ot-flaticon-search"></i>
                                </div>
                                <!-- Form Search on Header -->
                                <div class="h-search-form-field collapse">
                                    <div class="h-search-form-inner">
                                        <form role="search" method="get" class="search-form">
                                            <input type="search" class="search-field" placeholder="SEARCH..." value="" name="s">
                                            <button type="submit" class="search-submit"><i class="ot-flaticon-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="octf-menu-mobile octf-cta-header">
                                <div id="mmenu-toggle" class="mmenu-toggle">
                                    <button><i class="ot-flaticon-menu"></i></button>
                                </div>
                                <div class="site-overlay mmenu-overlay"></div>
                                <div id="mmenu-wrapper" class="mmenu-wrapper on-right">
                                    <div class="mmenu-inner">
                                        <a class="mmenu-close" href="#"><i class="ot-flaticon-right-arrow"></i></a>
                                        <div class="mobile-nav">
                                            <ul id="menu-main-menu" class="mobile_mainmenu none-style">

                                                <li class=" ">
                                                    <a href="{{url('/')}}">Home</a>

                                                </li>
                                                <li class=""><a href="{{url('/about')}}">About Us</a></li>

                                                <li class="menu-item-has-children">
                                                <a href="{{ url('/our-services') }}">Services</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{url('/servcies-detail-1')}}">Architecture</a></li>
                                                    <li><a href="{{url('/servcies-detail-2')}}">Interior Design</a></li>
                                                    <li><a href="{{url('/servcies-detail-3')}}">Interior Decoration</a>
                                                    </li>
                                                    <li><a href="{{url('/servcies-detail-4')}}">Landscap</a></li>
                                                    <li><a href="{{url('/servcies-detail-5')}}">Hardscap</a></li>
                                                    <li><a href="{{ url('/servcies-detail-6') }}">Construction Project Management</a></li>
                                                </ul>
                                            </li>

                                            <li class=""><a href="{{url('/portfolio-masonry')}}">Portfolio</a></li>

                                            <li class="menu-item-has-children">
                                                <a href="#">Our Brands</a>
                                                <ul class="sub-menu">

                                                    <li><a href="{{url('/')}}">Cubix</a></li>
                                                    <li><a href="{{url('/')}}">Luxemael</a></li>
                                                    <li><a href="{{url('/')}}">COCO BARN</a></li>
                                                    <li><a href="{{url('/')}}">FiKA</a></li>
                                                </ul>
                                            </li>



                                            <li><a href="{{url('/Contact')}}">Contact Us</a></li>
                                            </li>
                                               

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div id="side-panel" class="side-panel">
            <a href="#" class="side-panel-close"><i class="ot-flaticon-close-1"></i></a>
            <div class="side-panel-block">
                <div class="side-panel-wrap">
                    <div class="the-logo d-flex justify-content-center">
                        <a href="{{url('/')}}">
                            <img src="{{url('images/Logo-White.png')}}" alt="Theratio">
                            <p class="text-uppercase website_name justify-content-center d-flex">Tribal-xtc</p>
                        </a>
                    </div>
                    <div class="ot-heading">
                        <h2 class="main-heading">Our Gallery</h2>
                    </div>
                    <div class="image-gallery">
                        <div id="gallery-1" class="gallery galleryid-102 gallery-columns-3 gallery-size-thumbnail">
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8701e24" data-elementor-lightbox-title="p4-gallery1" href="images/gallery1.jpg">
                                        <img src="images/gallery-small-1.jpg" class="" alt="">
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8701e24" data-elementor-lightbox-title="p4-gallery1" href="images/gallery2.jpg">
                                        <img src="images/gallery-small-2.jpg" class="" alt="">
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8701e24" data-elementor-lightbox-title="p4-gallery1" href="images/gallery3.jpg">
                                        <img src="images/gallery-small-3.jpg" class="" alt="">
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8701e24" data-elementor-lightbox-title="p4-gallery1" href="images/gallery4.jpg">
                                        <img src="images/gallery-small-4.jpg" class="" alt="">
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8701e24" data-elementor-lightbox-title="p4-gallery1" href="images/gallery5.jpg">
                                        <img src="images/gallery-small-5.jpg" class="" alt="">
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8701e24" data-elementor-lightbox-title="p4-gallery1" href="images/gallery6.jpg">
                                        <img src="images/gallery-small-6.jpg" class="" alt="">
                                    </a>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <div class="ot-heading ">
                        <h2 class="main-heading">Contact Info</h2>
                    </div>
                    <div class="side-panel-cinfo">
                        <ul class="panel-cinfo">
                            <li class="panel-list-item">
                                <span class="panel-list-icon"><i class="ot-flaticon-place"></i></span>
                                <span class="panel-list-text">164-T, Street# 06, Phase II, DHA. Lahore. Pakistan</span>
                            </li>
                            <li class="panel-list-item">
                                <span class="panel-list-icon"><i class="ot-flaticon-mail"></i></span>
                                <span class="panel-list-text">info@tribal-xtc.com</span>
                            </li>
                            <li class="panel-list-item">
                                <span class="panel-list-icon"><i class="ot-flaticon-phone-call"></i></span>
                                <span class="panel-list-text">+92 324 4000655</span>
                            </li>
                        </ul>
                    </div>
                    <div class="side-panel-social">
                        <ul>
                            <!-- <li><a href="http://twitter.com" target="_self"><i class="fab fa-twitter"></i></a></li> -->
                            <li><a href="https://www.facebook.com/profile.php?id=100065509989157" target="_self"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="http://linkedin.com" target="_self"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="https://instagram.com/tribal_xtc?igshid=YmMyMTA2M2Y=" target="_self"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>