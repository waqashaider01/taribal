@extends('frontend.layouts.main')
@section('main-container')


        <div id="content" class="site-content">
            <div class="page-header dtable text-center header-transparent pheader-team">
                <div class="dcell">
                    <div class="container">
                        <h1 class="page-title">Single Team</h1>
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="{{url("/")}}">Home</a></li>
                            <li><a href="{{url("/our-team")}}">Home</a></li>
                            <li class="active">Our Team</li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>

        <div class="single-team">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 text-center align-self-center mb-5 mb-lg-0">
                        <div class="team-member-img">
                            <img src="images/image1-single-team.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="team-member-info">
                            <h2>Olivia Peterson</h2>
                            <h5> [ interior designer ]</h5>
                            <ul class="member-info">
                                <li><span class="text-light">DEPARTMENT:</span> Design</li>
                                <li><span class="text-light">EXPERIENCE:</span> 15 Years</li>
                                <li><span class="text-light">EMAIL:</span> olivia.peterson@mail.com</li>
                                <li><span class="text-light">PHONE:</span> +1-800-456-478-23</li>
                            </ul>
                            <div class="list-social">
                                <ul>
                                    <li><a href="http://facebook.com" target="_self"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="http://twitter.com" target="_self"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="http://linkedin.com" target="_self"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="http://instagram" target="_self"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-team-detail">
                        <h4>Biography</h4>
                            <p>Olivia was elected to judge the 3-rd edition of Dezeen Awards. Having many years of expertise in the design of residential and public spaces — the founder and chief architect of Theratio and author of FAIN will look at the best entries from all over the world. Excited and proud of being named the best in creating offices this year — <span><strong>only 5 small workspace interiors around the world and we are among them!</strong></span> Feeling so powerful to break the boundaries and build new design. Every element of the system is made with exquisite goose down padding to ensure maximum comfort, features cushions finished with a piping that defines their profile and a distinctive aluminium strip, slightly rounded at the edges which skims the floor, in a brand new polished Brandy colour finish.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="team-feature-detail">
                                    <h6>THERATIO</h6>
                                    <p>Interior Designer, Illustrator</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="team-feature-detail">
                                    <h6>TOREX COMPANY</h6>
                                    <p>Interior Designer, Illustrator</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="team-feature-detail mb-md-0">
                                    <h6>MEDIA GROUP</h6>
                                    <p>Photographer, Designer</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="team-feature-detail mb-0">
                                    <h6>NIMKUS 2000</h6>
                                    <p>Photographer, Interior Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="ot-progress pb-3" data-percent="65" data-processed="true">
                            <div class="overflow">
                                <span class="pname f-left">interior sketch</span>
                            </div>
                            <div class="iprogress">
                                <div class="progress-bar"><span class="ppercent">65%</span></div>
                            </div>
                        </div>
                        <div class="ot-progress pb-3" data-percent="85" data-processed="true">
                            <div class="overflow"><span class="pname f-left">3D Modeling</span></div>
                            <div class="iprogress">
                                <div class="progress-bar"><span class="ppercent">85%</span></div>
                            </div>
                        </div>
                        <div class="ot-progress" data-percent="55" data-processed="true">
                            <div class="overflow"><span class="pname f-left">2D Planning</span></div>
                            <div class="iprogress">
                                <div class="progress-bar"><span class="ppercent">55%</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-team-skill">
                        <h4>Hard & Soft Skills</h4>
                            <p>The basic philosophy of our studio is to create individual, aesthetically stunning solutions for our customers by lightning-fast development of projects employing unique styles and architecture. Even if you don’t have a ready sketch of what you want – we will help you get the result you dreamed of. We can also help you create harmony out of seemingly completely incompatible elements in the interior or the exterior design. Do you want to combine classics and abstract art? Modern and retro? Love everything associated with the 1940’s? Want a solid roomy design, but don’t have much room? No problem!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-team-contact">
                        <h4>Contact Me</h4>
                            <form action="contact.php" method="post" class="comment-form">
                                <p>
                                    <span>Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
                                </p>
                                <div class="row">
                                    <p class="comment-form-author col-md-6">
                                        <input id="author" name="name" type="text" value="" size="30" placeholder="Your Name*" required="">
                                    </p>
                                    <p class="comment-form-email col-md-6">
                                        <input id="email" name="email" type="text" value="" size="30" placeholder="Your Email*" required="">
                                    </p>
                                    <p class="comment-form-url col-md-12">
                                        <input id="url" name="url" type="text" value="" size="30" placeholder="Website" required="">
                                    </p>
                                </div>
                                <p class="comment-form-comment">
                                    <textarea id="comment" name="message" cols="45" rows="8" placeholder="Message*" required=""></textarea>
                                </p>
                                <p class="form-submit mb-0">
                                    <input name="submit" type="submit" id="submit" class="octf-btn" value="Send Message"> 
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection
