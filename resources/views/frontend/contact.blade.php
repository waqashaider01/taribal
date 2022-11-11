@extends('frontend.layouts.main')
@section('main-container')

<div id="content" class="site-content">
    <div class="page-header dtable text-center header-transparent page-header-contact">
        <div class="dcell">
            <div class="container">
                <!--<h1 class="page-title">Contact</h1>-->
                <!-- <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="{{url("/")}}">Home</a></li>
                            <li class="active">Contacts</li>
                        </ul> -->
            </div>
        </div>
    </div>
</div>

<section class="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center mb-5 mb-lg-0">
                <div class="contact-left">
                    <h2>Get in Touch</h2>
                    <p class="font14">Your email address will not be published. Required fields are marked *</p>
                    <form id="ajax-form" name="ajax-form" action="contact.php" method="post" class="wpcf7">
                        <div class="main-form">
                            <p>
                                <label for="name"> <span class="error" id="err-name">please enter name</span></label>
                                <input type="text" name="name" value="" size="40" class="" aria-invalid="false"
                                    placeholder="Your Name *" required>
                            </p>
                            <p>
                                <label for="email">
                                    <span class="error" id="err-email">please enter e-mail</span>
                                    <span class="error" id="err-emailvld">e-mail is not a valid format</span>
                                </label>
                                <input type="email" name="email" id="email" value="" size="40" class=""
                                    aria-invalid="false" placeholder="Your Email *" required>
                            </p>
                            <p>
                                <label for="message"></label>
                                <textarea name="message" id="message" cols="40" rows="10" class="" aria-invalid="false"
                                    placeholder="Message..." required></textarea>
                            </p>
                            <p><button type="submit" id="send" class="octf-btn">Send Message</button></p>
                           
                            <div class="clear"></div>
                            <div class="error" id="err-form">There was a problem validating the form please check!</div>
                            <div class="error" id="err-timedout">The connection to the server timed out!</div>
                            <div class="error" id="err-state"></div>
                            
                        </div>
                    </form>
                    
                    <div class="clear"></div>
                    <div id="ajaxsuccess">Successfully sent!!</div>
                    <div class="clear"></div>
                </div>
                <div class="row">
                            <div class="col-md-6"><p><a href="{{url('/commercial-form')}}"><button  class="octf-btn w-100">Comercial Quetionary</button></a></p></div>
                            <div class="col-md-6"><p><a href="{{url('/house-form')}}"><button class="octf-btn w-100">House Quetionary</button></a></p></div>
                            </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-right">
                    <div class="ot-heading">
                        <span>[ our contact details ]</span>
                        <h2 class="main-heading">Let's Start a Project</h2>
                    </div>
                    <p>Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on
                        business days. We will be happy to answer your questions.</p>
                    <div class="contact-info">
                        <i class="ot-flaticon-place"></i>
                        <div class="info-text">
                            <h6>OUR ADDRESS:</h6>
                            <p>164-T, Street# 06, Phase II, DHA. Lahore. Pakistan</p>
                        </div>
                    </div>
                    <div class="contact-info">
                        <i class="ot-flaticon-mail"></i>
                        <div class="info-text">
                            <h6>OUR MAILBOX:</h6>
                            <p><a href="mailto:theratio_interior@mail.com"> info@tribal-xtc.com</a></p>
                        </div>
                    </div>
                    <div class="contact-info">
                        <i class="ot-flaticon-phone-call"></i>
                        <div class="info-text">
                            <h6>OUR PHONE:</h6>
                            <p><a href="tel:+1 800 456 789 123">+92 324 4000655</a></p>
                        </div>
                    </div>
                    <div class="list-social">
                        <ul>
                            <!-- <li><a href="http://twitter.com" target="_self"><i class="fab fa-twitter"></i></a></li> -->
                            <li><a href="https://www.facebook.com/profile.php?id=100065509989157" target="_self"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="http://linkedin.com" target="_self"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="https://instagram.com/tribal_xtc?igshid=YmMyMTA2M2Y=" target="_self"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="contact-map">
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3402.8499068006995!2d74.40108201448166!3d31.47331475661456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391909ca768b4213%3A0x59abcf994ef61cc!2sLuxemaeL!5e0!3m2!1sen!2s!4v1664713968216!5m2!1sen!2s"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>


@endsection