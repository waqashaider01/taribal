@extends('frontend.layouts.main')
@section('main-container')

        <div id="side-panel" class="side-panel">
            <a href="#" class="side-panel-close"><i class="ot-flaticon-close-1"></i></a>
            <div class="side-panel-block">
                <div class="side-panel-wrap">
                    <div class="the-logo">
                        <a href="{{url("/")}}">
                            <img src="images/logo-footer.svg" alt="Theratio">
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
                                <span class="panel-list-text">411 University St, Seattle, USA</span>
                            </li>
                            <li class="panel-list-item">
                                <span class="panel-list-icon"><i class="ot-flaticon-mail"></i></span>
                                <span class="panel-list-text">theratio_interior@mail.com</span>
                            </li>
                            <li class="panel-list-item">
                                <span class="panel-list-icon"><i class="ot-flaticon-phone-call"></i></span>
                                <span class="panel-list-text">+1 800 456 789 123</span>
                            </li>
                        </ul>
                    </div>
                    <div class="side-panel-social">
                        <ul>
                            <li><a href="http://twitter.com" target="_self"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="http://facebook.com" target="_self"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="http://linkedin.com" target="_self"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="http://instagram" target="_self"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="content" class="site-content">
            <div class="page-header dtable text-center header-transparent pheader-faq">
                <div class="dcell">
                    <div class="container">
                        <h1 class="page-title">Checkout</h1>
                        <!-- <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="{{url("/")}}">Home</a></li>
                            <li class="active">Checkout</li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>

        <section class="shop-cart">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="shop_checkout">
                            <div class="woocommerce-form-coupon-toggle">
                                <div class="woocommerce-info">
                                    <i class="far fa-window-maximize"></i>
                                    Have a coupon? <a class="showcoupon">Click here to enter your code</a>
                                </div>
                            </div>
                            <form class="checkout_coupon woocommerce-form-coupon" method="post">
                                <p>If you have a coupon code, please apply it below.</p>
                                <p class="form-row form-row-first">
                                    <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code" id="coupon_code" value="">
                                </p>
                                <p class="form-row form-row-last">
                                    <button type="submit" class="octf-btn button" name="apply_coupon" value="Apply coupon">Apply coupon</button>
                                </p>
                                <div class="clear"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="woocommerce-billing-fields">
                            <h3>Billing details</h3>
                            <div class="woocommerce-billing-fields__field-wrapper">
                                <div class="row">
                                    <p class="col-lg-6">
                                        <label for="billing_first_name">First name <abbr class="required" title="required">*</abbr></label>
                                        <input type="text" class="input-text" name="billing_first_name" id="billing_first_name" placeholder="" value="" autocomplete="given-name">
                                    </p>
                                    <p class="col-lg-6">
                                        <label for="billing_last_name">Last name <abbr class="required" title="required">*</abbr></label>
                                        <input type="text" class="input-text" name="billing_last_name" id="billing_last_name" placeholder="" value="" autocomplete="family-name">
                                    </p>
                                    <p class="col-lg-12">
                                        <label for="billing_company">Company name <span class="optional">(optional)</span></label>
                                        <input type="text" class="input-text " name="billing_company" id="billing_company" placeholder="" value="" autocomplete="organization">
                                    </p>
                                    <p class="col-lg-12">
                                        <label for="billing_country" class="">Country / Region <abbr class="required" title="required">*</abbr></label>
                                        <span class="woocommerce-input-wrapper"><select name="billing_country" id="billing_country" class="country_to_state country_select select2-hidden-accessible" autocomplete="country" tabindex="-1" aria-hidden="true"><option value="">Select a country / region…</option><option value="AX">Åland Islands</option><option value="AF">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="PW">Belau</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BQ">Bonaire, Saint Eustatius and Saba</option><option value="BA">Bosnia and Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo (Brazzaville)</option><option value="CD">Congo (Kinshasa)</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CW">Curaçao</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard Island and McDonald Islands</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="CI">Ivory Coast</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Laos</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="KP">North Korea</option><option value="MK">North Macedonia</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PS">Palestinian Territory</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russia</option><option value="RW">Rwanda</option><option value="ST">São Tomé and Príncipe</option><option value="BL">Saint Barthélemy</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint Lucia</option><option value="SX">Saint Martin (Dutch part)</option><option value="MF">Saint Martin (French part)</option><option value="PM">Saint Pierre and Miquelon</option><option value="VC">Saint Vincent and the Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia/Sandwich Islands</option><option value="KR">South Korea</option><option value="SS">South Sudan</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard and Jan Mayen</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syria</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom (UK)</option><option value="US">United States (US)</option><option value="UM">United States (US) Minor Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VA">Vatican</option><option value="VE">Venezuela</option><option value="VN" selected="selected">Vietnam</option><option value="VG">Virgin Islands (British)</option><option value="VI">Virgin Islands (US)</option><option value="WF">Wallis and Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select></span>
                                    </p>
                                    <p class="col-lg-12">
                                        <label for="billing_address_1" class="">Street address <abbr class="required" title="required">*</abbr></label>
                                        <input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="House number and street name" value="" autocomplete="address-line1" data-placeholder="House number and street name">
                                    </p>
                                    <p class="col-lg-12">
                                        <label for="billing_postcode" class="">Postcode / ZIP <span class="optional">(optional)</span></label>
                                        <input type="text" class="input-text " name="billing_postcode" id="billing_postcode" placeholder="" value="" autocomplete="postal-code">
                                    </p>
                                    <p class="col-lg-12">
                                        <label for="billing_city" class="">Town / City <abbr class="required" title="required">*</abbr></label>
                                        <input type="text" class="input-text " name="billing_city" id="billing_city" placeholder="" value="" autocomplete="address-level2">
                                    </p>
                                    <p class="col-lg-12">
                                        <label for="billing_phone" class="">Phone <abbr class="required" title="required">*</abbr></label>
                                        <input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="" value="" autocomplete="tel">
                                    </p>
                                    <p class="col-lg-12">
                                        <label for="billing_email" class="">Email address <abbr class="required" title="required">*</abbr></label>
                                        <input type="email" class="input-text " name="billing_email" id="billing_email">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="woocommerce-additional-fields">
                            <h3>Additional information</h3>
                            <div class="woocommerce-additional-fields__field-wrapper">
                                <p class="notes" id="order_comments_field" data-priority="">
                                    <label for="order_comments" class="">Order notes&nbsp;<span class="optional">(optional)</span></label>
                                    <span class="woocommerce-input-wrapper">
                                        <textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="order_review_heading">Your order</h3>
                        <table class="shop_table woocommerce-checkout-review-order-table">
                            <thead>
                                <tr>
                                    <th class="product-name">Product</th>
                                    <th class="product-total">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="cart_item">
                                    <td class="product-name">Velvet Teal Blue <strong class="product-quantity">× 1</strong></td>
                                    <td class="product-total"><span class="amount"><span>$</span>195</span></td>
                                </tr>
                                <tr class="cart_item">
                                    <td class="product-name">Natural Pouffe  <strong class="product-quantity">× 1</strong></td>
                                    <td class="product-total"><span class="amount"><span>$</span>145</span></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td><span class="amount"><span>$</span>340</span></td>
                                </tr>
                                <tr class="order-total">
                                    <th>Total</th>
                                    <td><strong><span class="amount"><span>$</span>340</span></strong> </td>
                                </tr>
                            </tfoot>
                        </table>
                        <div id="payment" class="woocommerce-checkout-payment">
                            <ul class="wc_payment_methods payment_methods methods">
                                <li class="woocommerce-notice woocommerce-notice--info woocommerce-info"><i class="far fa-window-maximize"></i> Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.</li>
                            </ul>
                            <div class="place-order text-right">
                                <button type="submit" class="octf-btn button alt" name="woocommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order">Place order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


@endsection
