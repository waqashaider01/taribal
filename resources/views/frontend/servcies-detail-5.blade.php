@extends('frontend.layouts.main')
@section('main-container')
<div id="content" class="site-content">
    <div class="page-header dtable text-center header-transparent" style="background-image:url('images/page-header/h.png') ;">
        <div class="dcell">
            <div class="container">
                <h4 class="page-title my-service-title my-custom-style">
                    “We Paint Your Landscape with<br> Hard Stuff in a Soft Way”<br>
                </h4>
                <!-- <h4 style="margin-top: 10px; text-align: left; margin-left: 296px;">(swimming pools.
                                                    fireplaces. pavers. patio)</h4> -->
                <!-- <ul style="margin-top: 10px; text-align: left; margin-left: 296px; color:white; font-size:1.5rem;">
                                                    <li>Swimming Pools</li>
                                                    <li>Fireplaces</li>
                                                    <li>Pavers</li>
                                                    <li>Patio</li>
                                                </ul> -->
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="our-services.html">Our Services</a></li>
                    <li class="active">Creating Concept</li>
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
                                                        <li class="current-menu-item"><a href="{{ url('/servcies-detail-5') }}"><span>01.</span> Design &
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
                        <li class="current-menu-item"><a><span>01</span> - Swimming Pools &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;And Spas</a></li>
                        <li><a><span>02</span> - Outdoor Kitchens</a></li>
                        <li><a><span>03</span> - Fountains</a></li>
                        <li><a><span>04</span> - Fireplaces & fire &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pits</a></li>
                        <li><a><span>05</span> - Pavers</a></li>
                        <li><a><span>06</span> - Patios</a></li>
                        <li><a><span>07</span> - Decks</a></li>
                        <li><a><span>08</span> - Retaining Walls</a></li>
                        <li><a><span>09</span> - Gazebos</a></li>
                        <li><a><span>10</span> - Driveways</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="services-detail-content">
                    <div class="ot-heading ">
                        <span>[ what we offer ]</span>
                        <h2 class="main-heading">Hardscape</h2>
                    </div>
                    <p>We have achieved great expertise in swimming pools and spas, pool renovations, outdoor kitchens,
                        fountains, fireplaces & fire pits, pavers, patios, decks, retaining walls, gazebos, driveways
                        along with decorative structures, driveways stone works, glass mosaic and concrete work for a
                        total fresh make-over. Our design professionals work with you on a plan that suits your
                        individual and singularly satisfying requirements, and bring it to life.</p>
                    <div class="simple-slide owl-theme owl-carousel">
                        <div class="item"style="height:550px; width:435px;object-fit:cover;">
                            <img src="images/hi3.jpeg" alt="" style="height:550px; object-fit:cover; background-color:#9f9e9e">
                        </div>
                        <div class="item"style="height:550px; width:435px;object-fit:cover;background-color:#9f9e9e">
                            <img src="" alt="" >
                        </div>
                        <div class="item"style="height:550px; width:435px;object-fit:cover;background-color:#9f9e9e">
                            <img src="images/ha2.jpeg" alt="" style="height:550px; object-fit:cover;">
                        </div>
                        <div class="item"style="height:550px; width:435px;object-fit:cover; background-color:#9f9e9e">
                            <img src="" alt="" >
                        </div>
                    </div>
                    <p>As a design-build company, we are fully capable of taking your needs and desires and turning them
                        into reality.</p>

                    <img src="images/hi2.jpeg" class="detail-img" alt="">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 mb-3 mb-lg-0 text-center">
                            <div class="circle-progress tbottom" data-color="#939393" data-height="2" data-size="165" data-processed="true">
                                <div class="inner-bar" data-percent="50">
                                    <span><span class="percent">50%</span></span>
                                </div>
                                <h4>3D modeling</h4>
                            </div>
                            <p>Studio provides a full range<br>of 3D interior modeling</p>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-3 mb-lg-0 text-center">
                            <div class="circle-progress tbottom" data-color="#939393" data-height="2" data-size="165" data-processed="true">
                                <div class="inner-bar" data-percent="80">
                                    <span><span class="percent">80%</span></span>
                                </div>
                                <h4>Working Drawings</h4>
                            </div>
                            <p>Development of iperfect design<br>of the project</p>
                        </div>
                        <div class="col-lg-4 col-md-6 text-center">
                            <div class="circle-progress tbottom" data-color="#939393" data-height="2" data-size="165" data-processed="true">
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