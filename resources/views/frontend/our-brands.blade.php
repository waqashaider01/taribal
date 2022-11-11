@extends('frontend.layouts.main')
@section('main-container')

    
        <div id="content" class="site-content">
            <div class="page-header dtable text-center header-transparent pheader-faq">
                <div class="dcell">
                    <div class="container">
                        <h1 class="page-title">Our Brands</h1>
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="{{url("/")}}">Home</a></li>
                            <li class="active">Shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="shop-catalog">
            <div class="container">
                <div class="row">
                    <div class="widget-area primary-sidebar col-lg-3 col-md-12 col-sm-12">
                        <aside id="search-2" class="widget widget_search">
                            <form role="search" method="get" id="search-form" class="search-form">
                                <input type="search" class="search-field" placeholder="Search…" value="" name="s">
                                <button class="search-submit" type="submit" value="Search"><i class="ot-flaticon-search"></i></button>
                            </form>
                        </aside>
                        <aside class="widget widget_categories">
                            <h5 class="widget-title">Categories</h5>
                            <ul>
                                <li><a href="#">Accessories</a> <span class="count">(2)</span></li>
                                <li><a href="#">Furniture</a> <span class="count">(6)</span></li>
                                <li><a href="#">Lightingh</a> <span class="count">(5)</span></li>
                            </ul>
                        </aside>
                        <aside class="widget widget_products">
                            <h5 class="widget-title">Popular</h5>
                            <ul class="popular-product clearfix">
                                <li class="clearfix">
                                    <div class="thumb">
                                        <a href="{{url('/single-product')}}"><img src="images/product/product1.jpg" alt=""></a>
                                    </div>
                                    <div class="entry-header">
                                        <span class="product-title"><a href="{{url('/single-product')}}">Grey Velvet Chair</a></span>
                                        <div class="star-rating">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                        <span class="price-product"><span class="amount"><span>$</span>225</span></span>
                                    </div>
                                </li>

                                <li class="clearfix">
                                    <div class="thumb">
                                        <a href="{{url('/single-product')}}"><img src="images/product/product7.jpg" alt=""></a>
                                    </div>
                                    <div class="entry-header">
                                        <span class="product-title"><a href="{{url('/single-product')}}">Natural Pouffe</a></span>
                                        <div class="star-rating">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                        <span class="price-product">
                                            <del><span class="amount"><span>$</span>175</span></del>
                                            <ins><span class="amount"><span>$</span>145</span></ins>
                                        </span>
                                    </div>
                                </li>

                                <li class="clearfix">
                                    <div class="thumb">
                                        <a href="{{url('/single-product')}}"><img src="images/product/product9.jpg" alt=""></a>
                                    </div>
                                    <div class="entry-header">
                                        <span class="product-title"><a href="{{url('/single-product')}}">Velvet Teal Blue</a></span>
                                        <div class="star-rating">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                        <span class="price-product"><span class="amount"><span>$</span>195</span></span>
                                    </div>
                                </li>
                            </ul>
                        </aside>
                        <aside class="widget woocommerce widget_price_filter">
                            <h5 class="widget-title">Filter by price</h5>
                            <form method="get">
                                <div class="price_slider_wrapper">
                                    <div class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all move"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all"></span>
                                    </div>
                                    <div class="price_slider_amount">
                                        <div class="ot-button">
                                            <a href="#" class="octf-btn octf-btn-dark "> Filter</a>
                                        </div>
                                        <div class="price_label">
                                            Price: <span class="from">$80 </span> — <span class="to">$530</span>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </form>
                        </aside>
                        <aside class="widget widget_tag_cloud">
                            <h5 class="widget-title">Tags</h5>
                            <div class="tagcloud">
                                <a href="#">art</a>
                                <a href="#">furniture</a>
                                <a href="#">house</a>
                                <a href="#">interior</a>
                                <a href="#">livingroom</a>
                                <a href="#">trends</a>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-9 col-md-12 order-first order-lg-last mb-lg-0 mb-5">
                        <p class="woocommerce-result-count">Showing 1–9 of 12 results</p>
                        <form class="woocommerce-ordering" method="get">
                            <select name="orderby" class="orderby" aria-label="Shop order">
                                    <option value="menu_order" selected="selected">Default sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by latest</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                            </select>
                            <input type="hidden" name="paged" value="1">
                        </form>
                        <div class="product">
                            <div class="row">
                                <div class="col-lg-4 co-md-6 col-sm-6 first">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <a href="{{url('/single-product')}}">
                                                <img src="images/product/product1.jpg" class="" alt="">
                                            </a>
                                            <div class="wrapper-add-to-cart">
                                                <div class="add-to-cart-inner">
                                                    <a href="{{url("/cart-page")}}" class="octf-btn octf-btn-dark">Add to cart </a>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="woocommerce-loop-product__title"><a href="single=product.html">Grey Velvet Chair</a></h2>
                                        <div class="star-rating">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                        <span class="price-product"><span class="amount"><span>$</span>250</span></span>
                                    </div>
                                </div>
                                <div class="col-lg-4 co-md-6 col-sm-6 mid">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <a href="{{url('/single-product')}}">
                                                <img src="images/product/product2.jpg" class="" alt="">
                                            </a>
                                            <div class="wrapper-add-to-cart">
                                                <div class="add-to-cart-inner">
                                                    <a href="{{url("/cart-page")}}" class="octf-btn octf-btn-dark">Add to cart </a>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="woocommerce-loop-product__title"><a href="single=product.html">Cement Coffee Table</a></h2>
                                        <span class="price-product"><span class="amount"><span>$</span>525</span></span>
                                    </div>
                                </div>
                                <div class="col-lg-4 co-md-6 col-sm-6 last">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <a href="{{url('/single-product')}}">
                                                <img src="images/product/product3.jpg" class="" alt="">
                                            </a>
                                            <div class="wrapper-add-to-cart">
                                                <div class="add-to-cart-inner">
                                                    <a href="{{url("/cart-page")}}" class="octf-btn octf-btn-dark">Add to cart </a>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="woocommerce-loop-product__title"><a href="single=product.html">Metal Coffee Table</a></h2>
                                        <span class="price-product"><span class="amount"><span>$</span>145</span></span>
                                    </div>
                                </div>
                                <div class="col-lg-4 co-md-6 col-sm-6 first">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <a href="{{url('/single-product')}}">
                                                <img src="images/product/product4.jpg" class="" alt="">
                                            </a>
                                            <div class="wrapper-add-to-cart">
                                                <div class="add-to-cart-inner">
                                                    <a href="{{url("/cart-page")}}" class="octf-btn octf-btn-dark">Add to cart </a>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="woocommerce-loop-product__title"><a href="single=product.html">White Dining Chair</a></h2>
                                        <span class="price-product"><span class="amount"><span>$</span>135</span></span>
                                    </div>
                                </div>
                                <div class="col-lg-4 co-md-6 col-sm-6 mid">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <a href="{{url('/single-product')}}">
                                                <img src="images/product/product5.jpg" class="" alt="">
                                            </a>
                                            <div class="wrapper-add-to-cart">
                                                <div class="add-to-cart-inner">
                                                    <a href="{{url("/cart-page")}}" class="octf-btn octf-btn-dark">Add to cart </a>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="woocommerce-loop-product__title"><a href="single=product.html">Blue Velvet Dining Chair</a></h2>
                                        <span class="price-product"><span class="amount"><span>$</span>235</span></span>
                                    </div>
                                </div>
                                <div class="col-lg-4 co-md-6 col-sm-6 last">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <a href="{{url('/single-product')}}">
                                                <span class="onsale">Sale!</span>
                                                <img src="images/product/product6.jpg" class="" alt="">
                                            </a>
                                            <div class="wrapper-add-to-cart">
                                                <div class="add-to-cart-inner">
                                                    <a href="{{url("/cart-page")}}" class="octf-btn octf-btn-dark">Add to cart </a>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="woocommerce-loop-product__title"><a href="single=product.html">Wooden Table Lamp</a></h2>
                                        <span class="price-product">
                                            <del><span class="amount"><span>$</span>155</span></del>
                                            <ins><span class="amount"><span>$</span>125</span></ins>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-4 co-md-6 col-sm-6 first">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <a href="{{url('/single-product')}}">
                                                <span class="onsale">Sale!</span>
                                                <img src="images/product/product7.jpg" class="" alt="">
                                            </a>
                                            <div class="wrapper-add-to-cart">
                                                <div class="add-to-cart-inner">
                                                    <a href="{{url("/cart-page")}}" class="octf-btn octf-btn-dark">Add to cart </a>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="woocommerce-loop-product__title"><a href="single=product.html">Natural Pouffe</a></h2>
                                        <div class="star-rating">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                        <span class="price-product">
                                            <del><span class="amount"><span>$</span>175</span></del>
                                            <ins><span class="amount"><span>$</span>145</span></ins>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-4 co-md-6 col-sm-6 mid">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <a href="{{url('/single-product')}}">
                                                <img src="images/product/product8.jpg" class="" alt="">
                                            </a>
                                            <div class="wrapper-add-to-cart">
                                                <div class="add-to-cart-inner">
                                                    <a href="{{url("/cart-page")}}" class="octf-btn octf-btn-dark">Add to cart </a>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="woocommerce-loop-product__title"><a href="single=product.html">Lacquer Tall Side Table</a></h2>
                                        <span class="price-product"><span class="amount"><span>$</span>95</span></span>
                                    </div>
                                </div>
                                <div class="col-lg-4 co-md-6 col-sm-6 last">
                                    <div class="product-item">
                                        <div class="product-media">
                                            <a href="{{url('/single-product')}}">
                                                <img src="images/product/product9.jpg" class="" alt="">
                                            </a>
                                            <div class="wrapper-add-to-cart">
                                                <div class="add-to-cart-inner">
                                                    <a href="{{url("/cart-page")}}" class="octf-btn octf-btn-dark">Add to cart </a>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="woocommerce-loop-product__title"><a href="single=product.html">Velvet Teal Blue</a></h2>
                                        <div class="star-rating">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                        <span class="price-product"><span class="amount"><span>$</span>195</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="page-pagination text-center mt-3 none-style">
                            <li><a class="prev page-numbers" href="#"><i class="ot-flaticon-left-arrow"></i></a></li>
                            <li><a class="page-numbers" href="#">1</a></li>
                            <li><span aria-current="page" class="page-numbers current">2</span></li>
                            <li><a class="page-numbers" href="#">3</a></li>
                            <li><a class="next page-numbers" href="#"><i class="ot-flaticon-right-arrow"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>



@endsection
