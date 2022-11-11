@extends('frontend.layouts.main')

@section('main-container')
<div id="page" class="site">


    <div id="content" class="site-content">
        <div class="page-header dtable text-center header-transparent pheader-service-detail1">

            <div class="dcell">
                <div class="container">
                    <h1 class="page-title my-service-title my-custom-style">“Architecture should speak of its time and <br> place, but
                        yearn
                        for timelessness” <br><span style="font-size:25px;">- Frank Gehry</span>
                    </h1>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/our-services') }}">Our Services</a></li>
                        <li class="active">Design & Planning</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="services-single">
        <div class="container">
            <div class="row">
                <div class="widget-area col-lg-3 col-md-12">
                    <div class="widget widget_nav_menu">
                        <ul class="services-menu">
                            <li class="current-menu-item"><a><span>01</span> - PRE-DESIGN</a></li>
                            <li><a><span>02</span> - SCHEMATIC DESIGN</a></li>
                            <li><a><span>03</span> - DESIGN DEVELOPMENT</a></li>
                            <li><a><span>04</span> - CONSTRUCTION &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DOCUMENTS</a></li>
                            <li><a><span>05</span> - BUILDING PERMITTING</a></li>
                            <li><a><span>06</span> - BIDDING & NEGOTIATION</a></li>
                            <li><a><span>07</span> - CONSTRUCTION &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADMINISTRATION</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="services-detail-content">
                        <div class="ot-heading ">
                            <span>[ what we offer ]</span>
                            <h2 class="main-heading">Architecture</h2>
                        </div>
                        <p>The interior design of your dream begins with a concept that is reflected in the blueprints,
                            project plans, in 3D visualizations. It is possible to make any place more interesting,
                            attractive and functional, for this it is worth to trust the real professionals and then the
                            money will not be spent in a vain.</p>
                        <div class="simple-slide owl-theme owl-carousel">
                            <div class="item"style="height:500px; width:435px; background-color:#dddeee">
                                <img src="images/ar_slide2.jpeg" alt="" style="height:570px; object-fit:cover;">
                            </div>
                            <div class="item"style="height:500px; width:435px;  background-color:#dddeee">
                                <img src="" alt="">
                            </div>
                            
                            <div class="item"style="height:500px; width:435px; background-color:#dddeee">
                                <img src="images/ar_slide5.jpg" alt="" style="height:570px; object-fit:cover;">
                            </div>
                            <div class="item"style="height:500px; width:435px; object-fit:cover; background-color:#dddeee">
                                <img src="" alt="">
                            </div>
                        </div>
                        <p>In design, we bring characteristics of the natural world into built spaces, such as water,
                            greenery, and natural light, or elements like wood and stone. Encouraging the use of natural
                            systems and processes in design allows for exposure to nature, and in turn, these design
                            approaches improve health and wellbeing. There are a number of possible benefits, including
                            reduced heart rate variability and pulse rates, decreased blood pressure, and increased
                            activity in our nervous systems, to name a few.</p>
                        <p>Over time, our connections to the natural world diverged in parallel with technological
                            developments. Advances in the 19th and 20th centuries fundamentally changed how people
                            interact with nature. Sheltered from the elements, we spent more and more time indoors.
                            Today, the majority of people spend almost 80-90% of their time indoors, moving between
                            their homes and workplaces. As interior designers embrace biophilia.</p>
                        <img src="images/architecture_bottom_img.jpeg" class="detail-img" alt="">
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
                                                        "You will never fake the feeling of being in such a place. The live minimalism
                                                        base on the natural materials & alive unprocessed."
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
                                                        "You will never fake the feeling of being in such a place. The live minimalism
                                                        base on the natural materials & alive unprocessed."
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
                                                        "You will never fake the feeling of being in such a place. The live minimalism
                                                        base on the natural materials & alive unprocessed."
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