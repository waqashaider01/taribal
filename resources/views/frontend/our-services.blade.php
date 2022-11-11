@extends('frontend.layouts.main')
@section('main-container')
    <div id="content" class="site-content">
        <div class="page-header dtable text-center header-transparent pheader-services">
            <div class="dcell">
                <div class="container">
                    <!--<h1 class="page-title">Our Services</h1>-->
                    <!--<ul id="breadcrumbs" class="breadcrumbs none-style">-->
                    <!--    <li><a href="{{ url('/') }}">Home</a></li>-->
                    <!--    <li class="active">Our Services</li>-->
                    <!--</ul>-->
                </div>
            </div>
        </div>
    </div>

    <section class="services-benefits">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-5 mb-lg-0">
                    <div class="benefits-sidebar">
                        <div class="ot-heading ">
                            <span>[ our benefits ]</span>
                            <h2 class="main-heading">Ambitious Studio with a Successful Concept & Ideas</h2>
                        </div>
                        <div class="ot-button">
                            <a href="{{ url('/portfolio-masonry') }}" class="octf-btn octf-btn-dark">View Projects</a>
                        </div>
                        
                        <div class="widget-area" style="margin-top:30px;">
                            <span style="font-size:26px; font-weight:600; color:black;">Our Services</span>
                            <div style="width:20%; height:5px; background:black; margin-top:10px; margin-bottom:10px;"></div>
                           
                             <div class="widget widget_nav_menu">
                                                    <ul class="services-menu">
                                                        <li class="current-menu-item"><a href="{{ url('/servcies-detail-1') }}"><span>01.</span> Architecture</a></li>
                                                        <li><a href="{{ url('/servcies-detail-2') }}"><span>02.</span> Interior Design</a></li>
                                                        <li><a href="{{ url('/servcies-detail-3') }}"><span>03.</span> Interior Decoration</a></li>
                                                        <li><a href="{{ url('/servcies-detail-4') }}"><span>04.</span> Landscape</a></li>
                                                        <li><a href="{{ url('/servcies-detail-5') }}"><span>05.</span> Hardscape</a></li>
                                                        <li><a href="{{ url('/servcies-detail-6') }}"><span>06.</span> Construction Project &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Management</a></li>
                                                    </ul>
                                                </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="benefits-content">
                        <div class="row mb-md-70">
                            <div class="col-md-6 col-sm-12">
                                <div class="icon-box icon-box--classic icon-box--icon-top mb-4 mb-md-0">
                                    <div class="icon-main"><span class="ot-flaticon-sphere"></span></div>
                                    <div class="content-box">
                                        <h5><a href="#" class="title-link">Customer Focus</a></h5>
                                        <p>Customers choose us for the simplicity of communication and an understanding of
                                            what it’s necessary to receive in the end.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="icon-box icon-box--classic icon-box--icon-top mb-4 mb-md-0">
                                    <div class="icon-main"><span class="ot-flaticon-measure"></span></div>
                                    <div class="content-box">
                                        <h5><a href="#" class="title-link">Professionalism</a></h5>
                                        <p>We develop a full cycle of project documentation: an outline sketch, a design
                                            project, working documentation.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="icon-box icon-box--classic icon-box--icon-top mb-4 mb-md-0">
                                    <div class="icon-main"><span class="ot-flaticon-home"></span></div>
                                    <div class="content-box">
                                        <h5><a href="#" class="title-link">Multi Experience</a></h5>
                                        <p>We provide a wide range of services, we work in different styles, we project
                                            commercial and residential properties.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="icon-box icon-box--classic icon-box--icon-top mb-0">
                                    <div class="icon-main"><span class="ot-flaticon-house"></span></div>
                                    <div class="content-box">
                                        <h5><a href="#" class="title-link">Author`s Supervision</a></h5>
                                        <p>We develop an attractive and convenient space for work and leisure time, working
                                            on units, selecting materials, manufacturers. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="space-medium bg-dark-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 mb-lg-0">
                    <div class="icon-box icon-box--bg-color icon-box--icon-left">
                        <div class="icon-main"><span class="ot-flaticon-diamond"></span></div>
                        <div class="content-box">
                            <h5>Professionalism</h5>
                            <p>Certified high-class specialists.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 mb-lg-0">
                    <div class="icon-box icon-box--bg-color icon-box--icon-left">
                        <div class="icon-main"><span class="ot-flaticon-box"></span></div>
                        <div class="content-box">
                            <h5>Experience & Skills</h5>
                            <p>Certified high-class specialists.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="icon-box icon-box--bg-color icon-box--icon-left">
                        <div class="icon-main"><span class="ot-flaticon-3d-2"></span></div>
                        <div class="content-box">
                            <h5>Customer Focus</h5>
                            <p>Certified high-class specialists.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="principes no-padding">
        <div class="row m-0">
            <div class="col-xl-6 col-lg-12 col-md-12 p-0 text-center align-self-center">
                <img src="images/ses.jpeg" alt="" height="100vh">
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 p-0 mt-5 mt-lg-0 align-self-center">
                <div class="main-principes">
                    <div class="ot-heading is-dots">
                        <span>[ main principes ]</span>
                        <h2 class="main-heading">A Sketch of Each Detail</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-4 mb-md-0">
                            <div class="process-classic">
                                <span>01</span>
                                <h6>Architecture Design</h6>
                                <p>We’re committed to building sustainable and high-quality Java solutions.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-4 mb-md-0">
                            <div class="process-classic">
                                <span>02</span>
                                <h6>Interior Design</h6>
                                <p>We’re committed to building sustainable and high-quality Java solutions.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-4 mb-md-0">
                            <div class="process-classic">
                                <span>03</span>
                                <h6>Interior Decoration</h6>
                                <p>We’re committed to building sustainable and high-quality Java solutions.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-4 mb-md-0">
                            <div class="process-classic">
                                <span>04</span>
                                <h6>Landscape Design</h6>
                                <p>We’re committed to building sustainable and high-quality Java solutions.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-4 mb-md-0">
                            <div class="process-classic">
                                <span>05</span>
                                <h6>Hardscape Design</h6>
                                <p>We’re committed to building sustainable and high-quality Java solutions.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-4 mb-md-0">
                            <div class="process-classic">
                                <span>06</span>
                                <h6>Construction Project Management</h6>
                                <p>We’re committed to building sustainable and high-quality Java solutions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center theratio-align-center">
                    <div class="ot-heading is-dots">
                        <span>[ OUR SERVICES ]</span>
                        <h2 class="main-heading">What Can We Offer</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="icon-box icon-box--bg-img icon-box--icon-top icon-box--is-line-hover icon-bg-1 text-center">
                        <div class="icon-main"><img src="images/iconbox1.2.png" alt=""></div>
                        <div class="content-box">
                            <h5><a href="{{ url('/servcies-detail-1') }}">Design & Planning</a></h5>
                            <p>We will help you to get the result you dreamed of.</p>
                        </div>
                        <div class="link-box">
                            <a href="{{ url('/servcies-detail-1') }}" class="btn-details">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div
                        class="icon-box icon-box--bg-img icon-box--icon-top icon-box--is-line-hover icon-bg-2 text-center">
                        <div class="icon-main"><img src="images/iconbox2.png" alt=""></div>
                        <div class="content-box">
                            <h5><a href="{{ url('/servcies-detail-1') }}">Custom Solutions</a></h5>
                            <p>Individual, aesthetically stunning solutions for customers.</p>
                        </div>
                        <div class="link-box">
                            <a href="{{ url('/servcies-detail-1') }}" class="btn-details">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div
                        class="icon-box icon-box--bg-img icon-box--icon-top icon-box--is-line-hover icon-bg-3 text-center">
                        <div class="icon-main"><img src="images/iconbox3.png" alt=""></div>
                        <div class="content-box">
                            <h5><a href="{{ url('/servcies-detail-1') }}">Furniture & Decor</a></h5>
                            <p>We create and produce our product design lines.</p>
                        </div>
                        <div class="link-box">
                            <a href="{{ url('/servcies-detail-1') }}" class="btn-details">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services-feature">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12 align-self-center mb-5 mb-xl-0">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div
                                class="icon-box icon-box--bg-img icon-box--icon-top icon-box--is-line-hover s2 text-center">
                                <div class="icon-main"><span class="ot-flaticon-tip"></span></div>
                                <div class="content-box">
                                    <h5>MAKING IDEA</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div
                                class="icon-box icon-box--bg-img icon-box--icon-top icon-box--is-line-hover s2 text-center">
                                <div class="icon-main"><span class="ot-flaticon-3d-1"></span></div>
                                <div class="content-box">
                                    <h5>3D MODELING</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div
                                class="icon-box icon-box--bg-img icon-box--icon-top icon-box--is-line-hover s2 text-center">
                                <div class="icon-main"><span class="ot-flaticon-type-1"></span></div>
                                <div class="content-box">
                                    <h5>PROTOTYPING</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div
                                class="icon-box icon-box--bg-img icon-box--icon-top icon-box--is-line-hover s2 text-center mb-0">
                                <div class="icon-main"><span class="ot-flaticon-house-1"></span></div>
                                <div class="content-box">
                                    <h5>PLANNING</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div
                                class="icon-box icon-box--bg-img icon-box--icon-top icon-box--is-line-hover s2 text-center mb-0">
                                <div class="icon-main"><span class="ot-flaticon-paint"></span></div>
                                <div class="content-box">
                                    <h5>DESIGNING</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 last">
                            <div
                                class="icon-box icon-box--bg-img icon-box--icon-top icon-box--is-line-hover s2 text-center mb-0">
                                <div class="icon-main"><span class="ot-flaticon-paint-1"></span></div>
                                <div class="content-box">
                                    <h5>BUILDING</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12 align-self-center">
                    <div class="feature-content">
                        <div class="ot-heading">
                            <span>[ features ]</span>
                            <h2 class="main-heading text-light">Our Philosophy in Simply and Quality Design</h2>
                        </div>
                        <div class="ot-tabs tabs-light">
                            <ul class="tabs-heading unstyle">
                                <!--<li class="tab-link current" data-tab="tab-1">awards</li>-->
                                <li class="tab-link current" data-tab="tab-1">concept</li>
                                <li class="tab-link" data-tab="tab-2">history</li>
                            </ul>
                            <!--<div id="tab-1" class="tab-content">-->
                            <!--    <ul>-->
                            <!--        <li>Best Office Interior Design in New York,, 2018</li>-->
                            <!--        <li>Between tradition and innovation, Dutch Design Week, 2017</li>-->
                            <!--        <li>CUBE project, Best Home Design List in Germany, 2015</li>-->
                            <!--        <li>International Industrial Design Award, 2015</li>-->
                            <!--    </ul>-->
                            <!--</div>-->
                            <div id="tab-1" class="tab-content current">
                                <ul>
                                    <li>Between tradition and innovation</li>
                                    <li>Best Office Interior Design</li>
                                    <li>International Industrial Design</li>
                                    <li>CUBE project, Best Home Design</li>
                                </ul>
                            </div>
                            <div id="tab-2" class="tab-content">
                                <ul>
                                    <li>Beginning Our Services, 2011</li>
                                    <li>Offering More Services</li>
                                    <li>Opening Our First Branch Office, 2013</li>
                                    <li>Expansion and Transformations, 2018</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-benefits">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-5 mb-xl-0 order-first order-md-last order-xl-first">
                    <div class="benefits-detail">
                        <div class="ot-heading">
                            <span>[ our benefits ]</span>
                            <h2 class="main-heading">Our Interior and Exterior Services</h2>
                        </div>
                        <p>The basic philosophy of our studio is to create individual, aesthetically stunning solutions for
                            our customers by lightning-fast development of projects employing unique styles.</p>
                        <div class="ot-button">
                            <a href="{{ url('/portfolio-masonry') }}" class="octf-btn octf-btn-dark">View Projects</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-5 mb-xl-0">
                    <div class="service-box text-center">
                        <div class="box-content">
                            <div class="image-box img-lgpopup">
                                <div data-src="images/oes.jpeg">
                                    <img src="images/oes.jpeg" alt="" style="height:350px; object-fit:cover; width:100%;"><span class="overlay"><i
                                            class="ot-flaticon-add"></i></span> 
                                </div>
                            </div>
                            <div class="info-box">
                                <h4>Architectural Design</h4>
                                <p>Original design project of high quality raises profit – this is proved practice
                                    customers.</p>
                                <a class="btn-details" href="{{ url('/servcies-detail-1') }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="service-box text-center">
                        <div class="box-content">
                            <div class="image-box img-lgpopup">
                                <div data-src="images/pd.jpeg">
                                    <img src="images/pd.jpeg" alt="" style="height:350px; object-fit:cover; width:100%;"><span class="overlay"><i
                                            class="ot-flaticon-add"></i></span>
                                </div>
                            </div>
                            <div class="info-box">
                                <h4>Construction Project Management</h4>
                                <p>Original design project of high quality raises profit – this is proved practice
                                    customers.</p>
                                <a class="btn-details" href="{{ url('/servcies-detail-2') }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
