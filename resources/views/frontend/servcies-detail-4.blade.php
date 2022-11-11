@extends('frontend.layouts.main')
@section('main-container')
    <div id="content" class="site-content">
        <div class="page-header dtable text-center header-transparent pheader-service-detail4">
            <div class="dcell">
                <div class="container">
                    <h1 class="page-title my-service-title my-custom-style">“Designing a landscape is about<br> connecting the body, soul and
                        mind<br> to the land itself.” <span style="font-size:25px;">- Kathryn Gustafson</span></h1>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="our-services.html">Our Services</a></li>
                        <li class="active">Furniture & Decor</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="services-single">
        <div class="container">
            <div class="row">
                <!-- <div class="widget-area col-lg-3 col-md-12">
                                <div class="widget widget_nav_menu">
                                    <ul class="services-menu">
                                        <li class="current-menu-item"><a href="{{ url('/servcies-detail-4') }}"><span>01.</span> Design &
                                                Planning</a></li>
                                        <li><a href="{{ url('/servcies-detail-2') }}"><span>02.</span> Exterior Design</a></li>
                                        <li><a href="{{ url('/servcies-detail-3') }}"><span>03.</span> Custom Solutions</a></li>
                                        <li><a href="{{ url('/servcies-detail-4') }}"><span>04.</span> Furniture & Decor</a></li>
                                        <li><a href="{{ url('/servcies-detail-5') }}"><span>05.</span> Creating Concept</a></li>
                                        <li><a href="{{ url('/servcies-detail-6') }}"><span>06.</span> Author`s Control</a></li>
                                    </ul>
                                </div>
                            </div> -->
                <div class="widget-area col-lg-3 col-md-12">
                    <div class="widget widget_nav_menu">
                        <ul class="services-menu">
                            <li class="current-menu-item"><a><span>01</span> - SOIL PREPRATION</a></li>
                            <li><a><span>02</span> - OUTDOOR PLANT</a></li>
                            <li><a><span>03</span> - INDOOR PLANTS</a></li>
                            <li><a><span>04</span> - PLANTS SPECIFICATION</a></li>
                            <li><a><span>05</span> - FERTILIZER</a></li>
                            <li><a><span>06</span> - PESTICIDES</a></li>
                            <li><a><span>07</span> - LIGHTING</a></li>
                           
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="services-detail-content">
                        <div class="ot-heading ">
                            <span>[ what we offer ]</span>
                            <h2 class="main-heading">Landscaping</h2>
                        </div>
                        <p>Tribal-XTC specializes in custom landscapes that fit your life style. Our unique design styles
                            include landscaping with low maintenance plants with interesting foliage and lovely flora, rock
                            gardens with boulders and unique stone work, dry creeks, flagstone seating areas, natural stone
                            raised beds, slates and travertine. </p>
                        <div class="simple-slide owl-theme owl-carousel">
                            <div class="item"style="height:500px;width:450px;object-fit:cover; background-color:#9f9e9e">
                                <img src="images/li1.jpeg" style="width:450px; object-fit:cover;" alt="">
                            </div>
                            <div class="item"style="height:500px;width:450px;object-fit:cover;background-color:#9f9e9e">
                                <img src="" alt="">
                            </div>
                            <div class="item"style="height:500px;width:450px;object-fit:cover;background-color:#9f9e9e">
                                <img src="images/li2.jpeg" alt="" style="width:450px;object-fit:cover;">
                            </div>
                            <div class="item"style="height:500px;width:450px;object-fit:cover; background-color:#9f9e9e">
                                <img src="" alt="">
                            </div>
                        </div>
                        <p>Our design style is generally traditional with a bit of modern Asian flair, however, we are
                            proficient in the English garden style, with its bright, even loud, colors and yet, a formal
                            feel not absent. Besides the aforementioned styles, we are well experienced and practiced in the
                            straight-line modern style that incorporates woods and stones in a relatively larger proportion.

                        </p>
                        <p>We also discuss hardscaping, shade and privacy issues, and garden focal points such as
                            fountains, waterfalls, benches, unique pottery, and plant-trees, as well as activity areas like
                            pets’ play areas, raised vegetable gardens, and especially kids play areas.</p>
                        <img src="images/li.jpeg" class="detail-img" alt="">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6 mb-3 mb-lg-0 text-center">
                                <div class="circle-progress tbottom" data-color="#939393" data-height="2" data-size="165"
                                    data-processed="true">
                                    <div class="inner-bar" data-percent="50">
                                        <span><span class="percent">50%</span></span>
                                    </div>
                                    <h4>3D modeling</h4>
                                </div>
                                <p>Studio provides a full range<br>of 3D interior modeling</p>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-3 mb-lg-0 text-center">
                                <div class="circle-progress tbottom" data-color="#939393" data-height="2" data-size="165"
                                    data-processed="true">
                                    <div class="inner-bar" data-percent="80">
                                        <span><span class="percent">80%</span></span>
                                    </div>
                                    <h4>Working Drawings</h4>
                                </div>
                                <p>Development of iperfect design<br>of the project</p>
                            </div>
                            <div class="col-lg-4 col-md-6 text-center">
                                <div class="circle-progress tbottom" data-color="#939393" data-height="2" data-size="165"
                                    data-processed="true">
                                    <div class="inner-bar" data-percent="90">
                                        <span><span class="percent">90%</span></span>
                                    </div>
                                    <h4>3d planning</h4>
                                </div>
                                <p>We provide 2D planning<br>for great visualization</p>
                            </div>
                        </div>
                        <!-- <div class="ot-heading is-dots service-testi">
                                        <span>[ testimonials ]</span>
                                        <h2 class="main-heading">What People Say</h2>
                                    </div>
                                    <div class="ot-testimonials v-light">
                                        <div class="testimonial-inner ot-testimonials-slider-s1 owl-theme owl-carousel">
                                            <div class="testi-item">
                                                <div class="ttext">
                                                    <div class="layer-behind"></div>
                                                    <span></span>
                                                    "You will never fake the feeling of being in such a place. The live minimalism base
                                                    on the natural materials & alive unprocessed."
                                                </div>
                                                <div class="t-head flex-middle">
                                                    <img src="images/testi1.png" alt="">
                                                    <div class="tinfo">
                                                        <h6>Anna Paulina</h6>
                                                        <span>Client of Company</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="testi-item">
                                                <div class="ttext">
                                                    <div class="layer-behind"></div>
                                                    <span></span>
                                                    "You will never fake the feeling of being in such a place. The live minimalism base
                                                    on the natural materials & alive unprocessed."
                                                </div>
                                                <div class="t-head flex-middle">
                                                    <img src="images/testi2.png" alt="">
                                                    <div class="tinfo">
                                                        <h6>Pablo Gusterio</h6>
                                                        <span>Client of Company</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="testi-item">
                                                <div class="ttext">
                                                    <div class="layer-behind"></div>
                                                    <span></span>
                                                    "You will never fake the feeling of being in such a place. The live minimalism base
                                                    on the natural materials & alive unprocessed."
                                                </div>
                                                <div class="t-head flex-middle">
                                                    <img src="images/testi3.png" alt="">
                                                    <div class="tinfo">
                                                        <h6>Kristina Lee</h6>
                                                        <span>Client of Company</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
