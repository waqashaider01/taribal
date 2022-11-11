@extends('frontend.layouts.main')
@section('main-container')

<div id="content" class="site-content">
    <div class="page-header dtable text-center header-transparent pheader-portfolio">
        <div class="dcell">
            <div class="container">
                <!--<h1 class="page-title">Portfolio</h1>-->
                <!-- <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="{{url("/")}}">Home</a></li>
                            <li class="active">Portfolio Grid Masonry</li>
                        </ul>     -->
            </div>
        </div>
    </div>
</div>
<section class="our-portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center theratio-align-center">
                <div class="ot-heading is-dots">
                    <span>[ our portfolio ]</span>
                    <h2 class="main-heading">Some of Our Works</h2>
                </div>
                <div class="space-40"></div>
                <div class="project-filter-wrapper">
                    <ul class="project_filters">
                        <li><a href="#" data-filter="*" class="selected btn-details">All<span
                                    class="filter-count"></span></a></li>
                        <li><a class="btn-details" href="#" data-filter=".category-14">Architecture<span
                                    class="filter-count"></span></a></li>
                        <li><a class="btn-details" href="#" data-filter=".category-15">Interior Design<span
                                    class="filter-count"></span></a></li>
                        <li><a class="btn-details" href="#" data-filter=".category-20">Interior Decoration<span
                                    class="filter-count"></span></a></li>
                        <li><a class="btn-details" href="#" data-filter=".category-19">Landscape<span
                                    class="filter-count"></span></a></li>
                        <li><a class="btn-details" href="#" data-filter=".category-19">Hardscape<span
                                    class="filter-count"></span></a></li>
                    </ul>
                    <div class="projects-grid pf_3_cols style-1 img-scale w-auto">
                        <div class="grid-sizer"></div>
                        <div class="project-item category-19 ">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{url("/portfolio-left")}}">
                                        <img src="images/projects-grid/project1.jpg" alt="">
                                    </a>
                                    <div class="overlay">
                                        <h5>Stylish Family Appartment</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{url("/portfolio-left")}}">Stylish Family
                                                Appartment</a></h5>
                                        <p class="portfolio-cates"><a href="#">Interior</a></p>
                                    </div>
                                    <a class="overlay" href="{{url("/portfolio-left")}}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-item category-14 ">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{url("/portfolio-left")}}">
                                        <img src="images/projects-grid/project2.jpg" alt="">
                                    </a>
                                    <div class="overlay">
                                        <h5>Minimal Guests House</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{url("/portfolio-left")}}">Minimal Guests
                                                House</a></h5>
                                        <p class="portfolio-cates">
                                            <a href="#">Decor</a>
                                            <a href="#">Interior</a>
                                        </p>
                                    </div>
                                    <a class="overlay" href="{{url("/portfolio-left")}}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-item category-15 ">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{url("/portfolio-left")}}">
                                        <img src="images/projects-grid/project3.jpg" alt="">
                                    </a>
                                    <div class="overlay">
                                        <h5>Art Family Residence</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{url("/portfolio-left")}}">Art Family
                                                Residence</a></h5>
                                        <p class="portfolio-cates"><a href="#">Architecture</a></p>
                                    </div>
                                    <a class="overlay" href="{{url("/portfolio-left")}}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-item category-20 ">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{url("/portfolio-left")}}">
                                        <img src="images/projects-grid/project4.jpg" alt="">
                                    </a>
                                    <div class="overlay">
                                        <h5>Private House in Spain</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{url("/portfolio-left")}}">Private House in
                                                Spain</a></h5>
                                        <p class="portfolio-cates"><a href="#">Furniture</a></p>
                                    </div>
                                    <a class="overlay" href="{{url("/portfolio-left")}}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-item category-19 ">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{url("/portfolio-left")}}">
                                        <img src="images/projects-grid/project5.jpg" alt="">
                                    </a>
                                    <div class="overlay">
                                        <h5>Modern Villa in Belgium</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{url("/portfolio-left")}}">Modern Villa in
                                                Belgium</a></h5>
                                        <p class="portfolio-cates"><a href="#">Furniture</a></p>
                                    </div>
                                    <a class="overlay" href="{{url("/portfolio-left")}}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-item category-14 ">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{url("/portfolio-left")}}">
                                        <img src="images/projects-grid/project6.jpg" alt="">
                                    </a>
                                    <div class="overlay">
                                        <h5>Minimalistic Style Appartment</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{url("/portfolio-left")}}">Minimalistic Style
                                                Appartment</a></h5>
                                        <p class="portfolio-cates"><a href="#">Furniture</a><a href="#">interior</a></p>
                                    </div>
                                    <a class="overlay" href="{{url("/portfolio-left")}}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-item category-15">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{url("/portfolio-left")}}">
                                        <img src="images/projects-grid/project7.jpg" alt="">
                                    </a>
                                    <div class="overlay">
                                        <h5>Luxury Bathroom Interior</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{url("/portfolio-left")}}">Luxury Bathroom
                                                Interior</a></h5>
                                        <p class="portfolio-cates"><a href="#">decor</a><a href="#">Furniture</a></p>
                                    </div>
                                    <a class="overlay" href="{{url("/portfolio-left")}}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-item category-14">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{url("/portfolio-left")}}">
                                        <img src="images/projects-grid/project8.jpg" alt="">
                                    </a>
                                    <div class="overlay">
                                        <h5>Loft Kitchen Interior</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{url("/portfolio-left")}}">Loft Kitchen
                                                Interior</a></h5>
                                        <p class="portfolio-cates"><a href="#">architecture</a></p>
                                    </div>
                                    <a class="overlay" href="{{url("/portfolio-left")}}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-item category-19">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{url("/portfolio-left")}}">
                                        <img src="images/projects-grid/project9.jpg" alt="">
                                    </a>
                                    <div class="overlay">
                                        <h5>White Italian Villa</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5><a class="title-link" href="{{url("/portfolio-left")}}">White Italian
                                                Villa</a></h5>
                                        <p class="portfolio-cates"><a href="#">decor</a></p>
                                    </div>
                                    <a class="overlay" href="{{url("/portfolio-left")}}"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-block text-center">
                        <a href="portfolio-five-column-wide.html" class="btn-loadmore octf-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection