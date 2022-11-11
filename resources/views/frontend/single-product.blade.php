@extends('frontend.layouts.main')
@section('main-container')


        <div id="content" class="site-content">
            <div class="page-header dtable text-center header-transparent pheader-faq">
                <div class="dcell">
                    <div class="container">
                        <h1 class="page-title">Product Details</h1>
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="{{url("/")}}">Home</a></li>
                            <li><a href="{{url("/shop")}}">Shop</a></li>
                            <li class="active">Product Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <section class="shop-single">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-4 mb-lg-0 text-center align-self-center">
                        <div class="product-slide">
                            <div class="single-product owl-carousel owl-theme">
                                <div class="item" data-hash="zero">
                                    <img src="images/product/product1.jpg" alt="">
                                    <a href="images/product/product1.jpg" class="link-image-action"><i class="ot-flaticon-search"></i></a>
                                </div>
                                <div class="item" data-hash="one">
                                    <img src="images/product/product1-2.jpg" alt="">
                                    <a href="images/product/product1-2.jpg" class="link-image-action"><i class="ot-flaticon-search"></i></a>
                                </div>
                                <div class="item" data-hash="two">
                                    <img src="images/product/product1-3.jpg" alt="">
                                    <a href="images/product/product1-3.jpg" class="link-image-action"><i class="ot-flaticon-search"></i></a>
                                </div>
                                <div class="item" data-hash="three">
                                    <img src="images/product/product1-4.jpg" alt="">
                                    <a href="images/product/product1-4.jpg" class="link-image-action"><i class="ot-flaticon-search"></i></a>
                                </div>
                            </div>
                            <div class="nav-img">
                                <div class="item">
                                    <div>
                                        <a class="" href="#zero">
                                            <img src="images/product/product1.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div>
                                        <a class="" href="#one">
                                            <img src="images/product/product1-2.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div>
                                        <a class="" href="#two">
                                            <img src="images/product/product1-3.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div>
                                        <a class="" href="#three">
                                            <img src="images/product/product1-4.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="summary entry-summary">
                            <h2 class="single-product-title">Grey Velvet Chair</h2>
                            <div class="single-product-rating">
                                <div class="star-rating">
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<span class="count">1</span> customer review)</a>
                                </div>
                            </div>
                            <span class="single-price price-product"><span class="amount"><span>$</span>225</span></span>
                            <p>Dark grey velvet accent chair has a clean, curvy shape and makes a great standalone piece, perfect for the bedroom or a neglected corner.</p>
                            <p>The chair has a slightly inclined back, rounded arms, a fixed seat cushion and slender ballerina legs in solid wood. Exclusive to Habitat, the chair is uphol stered in easy-care polyester velvet and comes in a choice of current and classic colours.</p>
                            <form class="cart" method="post">
                                <div class="single-quantity">
                                    <label class="screen-reader-text">Boost Your Business quantity</label>
                                    <input type="number" id="quantity" class="input-text qty text" step="1" min="1" name="quantity" value="1" title="Qty" placeholder="">
                                </div>
                                <button type="submit" name="add-to-cart" class="octf-btn single_add_to_cart_button button alt">Add to cart</button>
                            </form>
                            <div class="product_meta">
                                <span class="sku_wrapper">SKU: <span class="sku">124221</span></span>
                                <span class="posted_in">Category: <a href="#">Accessories</a></span>
                                <span class="tagged_as">Tags: <a href="#"> interior</a>, <a href="#">trends</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-70"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="ot-tabs tab-single-product text-center">
                            <ul class="tabs-heading unstyle">
                                <li class="tab-link current" data-tab="tab-1">Description</li>
                                <li class="tab-link" data-tab="tab-2">Review <span>(01)</span></li>
                            </ul>
                            <div id="tab-1" class="tab-content current">
                                <p>With its gentle round edges, high reclined back and sumptuous padding, the foam-filled seat cushion invites you to relax and wind down in style. This elegant and luxurious design is finished with brass coloured metal legs for a contemporary, lighter-than-air look, which makes it ideal for smaller spaces. Exclusive to Habitat and available in a choice of colours, the Celine chair is upholstered in durable polyester velvet and its seat cushion has piping to maintain.</p>
                            </div>
                            <div id="tab-2" class="tab-content">
                                <div class="review-comment">
                                    <ol class="review-comment-list">
                                        <li class="comment-item">
                                            <div class="comment-wrap">
                                                <div class="avatar-author-review">
                                                    <img src="images/product/author-review.jpg" alt="" class="review-avatar">
                                                </div>
                                                <div class="review-rating">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </div>
                                                <div class="review-comment-content">
                                                    <div class="comment-meta">
                                                        <h6 class="comment-author">Tom Black </h6>
                                                        <span class="comment-time"> - May 28, 2020</span>
                                                    </div>
                                                    <div class="comment-text">
                                                        <p>Nice product !</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                                <div class="review-form">
                                    <span class="comment-reply-title">Add a review </span>
                                    <form class="review-comment-form">
                                        <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                                        <div class="comment-form-rating">
                                            <label>Your rating <span class="required">*</span></label>
                                            <div class="review-comment-rating mb-3">
                                                <span><i class="far fa-star"></i></span>
                                                <span><i class="far fa-star"></i></span>
                                                <span><i class="far fa-star"></i></span>
                                                <span><i class="far fa-star"></i></span>
                                                <span><i class="far fa-star"></i></span>
                                            </div>
                                        </div>
                                        <p class="comment-form-author">
                                            <input id="author" name="author" type="text" value="" size="30" placeholder="Name *" required="">
                                        </p>
                                        <p class="comment-form-email">
                                            <input id="email" name="email" type="text" value="" size="30" placeholder="Email *" required="">
                                        </p>
                                        <p class="comment-form-comment">
                                            <textarea id="comment" name="comment" cols="45" rows="8" placeholder="Comment *" required=""></textarea>
                                        </p>
                                        <p class="form-submit">
                                            <input name="submit" type="submit" id="submit" class="octf-btn" value="Submit">
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center mb-2">
                        <h2 class="relate-product-title">Related Products</h2>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="product-item">
                            <div class="product-media">
                                <a href="{{url("/single-product")}}">
                                    <span class="onsale">Sale!</span>
                                    <img src="images/product/product7.jpg" class="" alt="">
                                </a>
                                <div class="wrapper-add-to-cart">
                                    <div class="add-to-cart-inner">
                                        <a href="{{url('/cart-page')}}" class="octf-btn octf-btn-primary">Add to cart </a>
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
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="product-item">
                            <div class="product-media">
                                <a href="{{url("/single-product")}}">
                                    <img src="images/product/product2.jpg" class="" alt="">
                                </a>
                                <div class="wrapper-add-to-cart">
                                    <div class="add-to-cart-inner">
                                        <a href="{{url('/cart-page')}}" class="octf-btn octf-btn-primary">Add to cart </a>
                                    </div>
                                </div>
                            </div>
                            <h2 class="woocommerce-loop-product__title"><a href="single=product.html">Cement Coffee Table</a></h2>
                            <span class="price-product"><span class="amount"><span>$</span>525</span></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="product-item">
                            <div class="product-media">
                                <a href="{{url("/single-product")}}">
                                    <img src="images/product/product4.jpg" class="" alt="">
                                </a>
                                <div class="wrapper-add-to-cart">
                                    <div class="add-to-cart-inner">
                                        <a href="{{url('/cart-page')}}" class="octf-btn octf-btn-primary">Add to cart </a>
                                    </div>
                                </div>
                            </div>
                            <h2 class="woocommerce-loop-product__title"><a href="single=product.html">White Dining Chair</a></h2>
                            <span class="price-product"><span class="amount"><span class="">$</span>135</span></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="product-item">
                            <div class="product-media">
                                <a href="{{url("/single-product")}}">
                                    <img src="images/product/product11.jpg" class="" alt="">
                                </a>
                                <div class="wrapper-add-to-cart">
                                    <div class="add-to-cart-inner">
                                        <a href="{{url('/cart-page')}}" class="octf-btn octf-btn-primary">Add to cart </a>
                                    </div>
                                </div>
                            </div>
                            <h2 class="woocommerce-loop-product__title"><a href="single=product.html">Wooden Floor Lamp</a></h2>
                            <span class="price-product"><span class="amount"><span class="">$</span>95</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>



@endsection
