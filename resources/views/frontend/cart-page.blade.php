@extends('frontend.layouts.main')
@section('main-container')

    
        <div id="content" class="site-content">
            <div class="page-header dtable text-center header-transparent pheader-faq">
                <div class="dcell">
                    <div class="container">
                        <h1 class="page-title">Cart</h1>
                        <!-- <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="{{url("/")}}">Home</a></li>
                            <li class="active">Cart</li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>

        <section class="shop-cart">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <table class="shop-cart-table shop_table_responsive">
                            <thead>
                                <tr>
                                    <th class="product-name">Product</th>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-price-title">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Subtotal</th>
                                    <th class="product-remove">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="woocommerce-cart-form__cart-item cart_item">
                                    <td class="product-cart-item" data-title="Product">
                                        <div class="cart-item">
                                            <div class="thumb">
                                                <a href="single-product.html"><img src="images/product/product9.jpg" alt=""></a>
                                            </div>
                                            <div class="entry-header">
                                                <h6><a href="single-product.html">Velvet Teal Blue</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="actions"></td>
                                    <td class="product-price" data-title="Price"><span class="amount"><span>$</span>195</span></td>
                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="quantity">
                                            <input type="number" id="quantity" class="input-text qty text" step="1" min="0" name="cart" value="1">
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Subtotal"><span class="amount"><span>$</span>195</span></td>
                                    <td class="product-remove actions"><a href="#" class="remove"><i class="ot-flaticon-close"></i></a></td>
                                </tr>
                                <tr class="woocommerce-cart-form__cart-item cart_item">
                                    <td class="product-cart-item" data-title="Product">
                                        <div class="cart-item">
                                            <div class="thumb">
                                                <a href="single-product.html"><img src="images/product/product7.jpg" alt=""></a>
                                            </div>
                                            <div class="entry-header">
                                                <h6><a href="single-product.html">Natural Pouffe</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="actions"></td>
                                    <td class="product-price" data-title="Price"><span class="amount"><span>$</span>145</span></td>
                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="quantity">
                                            <input type="number" id="quantity_5f6c1adb942ad" class="input-text qty text" step="1" min="0" name="cart" value="1" placeholder="">
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Subtotal"><span class="amount"><span>$</span>145</span></td>
                                    <td class="product-remove actions"><a href="#" class="remove" ><i class="ot-flaticon-close"></i></a></td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="actions text-right">
                                        <div class="coupon">
                                            <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code">
                                            <button type="submit" class="octf-btn button" name="apply_coupon" value="Apply coupon">Apply Coupon</button>
                                        </div>
                                        <button type="submit" class="octf-btn button disable" disabled name="update_cart" value="Update cart">Update cart</button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <div class="cart-collaterals">
                            <div class="cart_totals">
                                <h5>Cart totals</h5>
                                <table class="shop_table">
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td data-title="Subtotal"><span class="amount"><span>$</span>340</span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td data-title="Total"><strong><span class="amount"><span>$</span>340</span></strong> </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="wc-proceed-to-checkout">
                                    <a href="{{url('checkout-page')}}" class="octf-btn checkout-button button alt wc-forward"> Proceed to checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


@endsection
