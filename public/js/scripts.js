( function( $ ) {

    $('.woocommerce-form-coupon-toggle .showcoupon').on("click", function(){
        $(this).toggleClass( "active" );
        if ($(this).hasClass( "active" )) {
            $('.woocommerce-form-coupon').stop(true, true).slideDown();
        }else{
            $('.woocommerce-form-coupon').stop(true, true).slideUp();
        }
    });
    /* --------------------------------------------------
    * sticky header
    * --------------------------------------------------*/
	$('.header-static .is-fixed').parent().append('<div class="header-clone"></div>');
	$('.header-clone').height($('#site-header .is-fixed').outerHeight());
	$('.header-static .header-clone').hide();	
	$(window).on("scroll", function(){
		var site_header = $('#site-header').outerHeight() + 1;	
			
		if ($(window).scrollTop() >= site_header) {	    	
			$('.site-header .is-fixed').addClass('is-stuck');	
			$('.header-static .header-clone').show();	
		}else {
			$('.site-header .is-fixed').removeClass('is-stuck');		              
			$('.header-static .header-clone').hide();
		}
	});    /* --------------------------------------------------
    * mobile menu
    * --------------------------------------------------*/
    $('.mmenu_wrapper li:has(ul)').prepend('<span class="arrow"><i class="ot-flaticon-next"></i></span>');
    $(".mmenu_wrapper .mobile_mainmenu > li span.arrow").on('click',function() {
        $(this).parent().find("> ul").stop(true, true).slideToggle()
        $(this).toggleClass( "active" ); 
    });
	
	$( "#mmenu_toggle" ).on('click', function() {
		$(this).toggleClass( "active" );
		$(this).parents('.header_mobile').toggleClass( "open" );
		if ($(this).hasClass( "active" )) {
			$('.mobile_nav').stop(true, true).slideDown(100);
		}else{
			$('.mobile_nav').stop(true, true).slideUp(100);
		}		
	});

    /* ========================================== 
    Search on Header
    ========================================== */
    $('.toggle_search').on("click", function(){
        $(this).toggleClass( "active" );
        $('.h-search-form-field').toggleClass('show');
        if ($(this).find('i').hasClass( "ot-flaticon-search" )) {
            $('.toggle_search > i').removeClass( "ot-flaticon-search" ).addClass("ot-flaticon-close-1");
        }else{
            $('.toggle_search > i').removeClass( "ot-flaticon-close-1" ).addClass("ot-flaticon-search");
        }
        $('.h-search-form-inner > form > input.search-field').focus();
    });

    var element = $('#panel-btn'),
    sidebar = $('#side-panel');

    function panel_handler() {
        var isActive = !element.hasClass('active');

        element.toggleClass('active', isActive);
        sidebar.toggleClass('side-panel-open', isActive);
        $('body').toggleClass('side-panel-active', isActive);
        return false;
    }

    $('#panel-btn, .side-panel-close, .panel-overlay').on('click', panel_handler);


  /* --------------------------------------------------
  * mobile menu
  * --------------------------------------------------*/
        var element = $('#mmenu-toggle'),
            mmenu   = $('#mmenu-wrapper');

        function mmenu_handler() {
            var isActive = !element.hasClass('active');

            element.toggleClass('active', isActive);
            mmenu.toggleClass('mmenu-open', isActive);
            $('body').toggleClass('mmenu-active', isActive);
            return false;
        }

        $('#mmenu-toggle, .mmenu-close, .mmenu-overlay').on('click', mmenu_handler);

        $('.mmenu-wrapper li:has(ul)').prepend('<span class="arrow"><i class="ot-flaticon-next"></i></span>');
        $(".mmenu-wrapper .mobile_mainmenu > li span.arrow").on('click',function() {
            $(this).parent().find("> ul").stop(true, true).slideToggle()
            $(this).toggleClass( "active" ); 
        });

    /* Counter */
    $(window).on('scroll', function() {
        $('.ot-counter').each(function() {
            var pos_y   = $(this).offset().top - window.innerHeight;
            var $this   = $(this).find('span.num'),
                countTo = $this.attr('data-to'),
                during  = parseInt( $this.attr('data-time') ),
                topOfWindow = $(window).scrollTop();

            if ( pos_y < topOfWindow ) {    
                $({
                    countNum: $this.text()
                }).animate({
                    countNum: countTo
                },
                {
                    duration: during,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(this.countNum);
                    }
                });
            }
        });

        $('.ot-counter2').each(function() {
            var pos_y   = $(this).offset().top - window.innerHeight;
            var $this   = $(this).find('span.num'),
                countTo = $this.attr('data-to'),
                during  = parseInt( $this.attr('data-time') ),
                topOfWindow = $(window).scrollTop();

            if ( pos_y < topOfWindow ) {    
                $({
                    countNum: $this.text()
                }).animate({
                    countNum: countTo
                },
                {
                    duration: during,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(this.countNum);
                    }
                });
            }
        });
        
        $('.ot-progress').each(function() {
            var pos_y = $(this).offset().top;
            var value = $(this).find(".progress-bar").data('percent');
            var topOfWindow = $(window).scrollTop();
            if (pos_y < topOfWindow + 900) {
                $(this).find(".progress-bar").css({
                    'width': value
                }, "slow");
            }
        });

        $('.ot-progress:not([data-processed])').each(function() {
            var bar = $(this),
                line = bar.find(".progress-bar"),
                progressEnd = bar.data('percent'),
                percent = bar.find('.ppercent');
            var scrollTop = $(document).scrollTop() + $(window).height();

            if ( scrollTop >  bar.offset().top +  bar.height() ) {
                bar.attr("data-processed", "true");
                line.css("width", (bar.outerWidth() * (progressEnd / 100)) + "px");

                for (var i = 0; i <= 50; i++) {
                    (function (count) {
                        setTimeout(function () {
                            percent.html(Math.round((progressEnd / 50) * count) + "%");
                        }, 30 * count);
                    })(i);
                }
            }
        });

        $('.ot-progress[data-processed]').each(function () {
            var bar = $(this);
            var line = bar.find(".progress-bar");
            var progressEnd = parseInt(bar.data('percent'));

            line.css("width", (bar.outerWidth() * (progressEnd / 100)) + "px");
        
        });

        $('.circle-progress').each(function() {
            var bar_color = $(this).data('color');
            var bar_hei   = $(this).data('height');
            var bar_size  = $(this).data('size');
            var pos_y = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            if (pos_y < topOfWindow + 900) {
                $(this).find('.inner-bar').easyPieChart({
                    barColor: bar_color,
                    trackColor: false,
                    scaleColor: false,
                    lineCap: 'square',
                    lineWidth: bar_hei,
                    size: bar_size,
                    animate: 1000,
                    onStart: $.noop,
                    onStop: $.noop,
                    easing: 'easeOutBounce',
                    onStep: function(from, to, percent) {
                        $(this.el).find('.percent').text(Math.round(percent)) + '%';
                    }
                });
            }
        });
    });

    $('.ot-accordions').each( function () {
        var selector = $(this),
            content = selector.find('.acc-content'),
            header  = selector.find('.acc-toggle');

        header.off("click");

        header.each(function(){
            if ($(this).data('default') == 'yes') {
                $(this).next().addClass('active').slideDown(300);
                $(this).parent().addClass('current');
            }
        });

        header.on('click', function(e){
            e.preventDefault();
            var $this = $(this);

            $this.next().toggleClass('active').slideToggle(300);
            $this.parent().toggleClass('current');
            content.not($this.next()).slideUp(300);
            header.not($this).parent().removeClass('current');
        });
    });

    $('.ot-tabs').each(function() {
        var selector = $(this),
            tabs     = selector.find('.tabs-heading li'),
            content  = selector.find('.tab-content');
        tabs.first().addClass('current');
        content.first().addClass('current');

        tabs.on( 'click', function(){
            var tab_id = $(this).attr('data-tab');
            $(this).siblings().removeClass('current');
            $(this).parents('.ot-tabs').find('.tab-content').removeClass('current');
            $(this).addClass('current');
            $("#"+tab_id).addClass('current');
        });
    });

    $('.service-box').each( function(){
        var selector = $(this),
            imgPopup = selector.find('.image-box > div');
        selector.lightGallery({
            selector: imgPopup,
            share: false,
            pager: false,
        });
    });

    $('.team-wrap').each( function(){
        var selector = $(this).find('.team-social > span');
        selector.on('click', function(){
            $(this).parent().toggleClass('active');
        });
    });

    $('.ot-process[data-tab]').each(function(){
        var selector = $(this);
        selector.find('.process_nav li').first().addClass('current');
        selector.find('.process-des div.process-des-item').hide();
        selector.find('.process-des div.process-des-item').first().show();
        selector.find('.process_nav li').on( 'click', function(){
            $(this).parent().find('li').removeClass('current');
            $(this).addClass('current');
            $(this).parents('.ot-process').find('.process-des div.process-des-item').hide();

            var index = $(this).index();
            $(this).parents('.ot-process').find('.process-des div.process-des-item:eq(' + index + ')').fadeIn(300);
        });
    });

    $('.ot-countdown').each( function(){
        var selector = $(this),
            date     = selector.data('date'),
            zone     = selector.data('zone'),
            day      = selector.data('day'),
            days     = selector.data('days'),
            hour     = selector.data('hour'),
            hours    = selector.data('hours'),
            min      = selector.data('min'),
            mins     = selector.data('mins'),
            second   = selector.data('second'),
            seconds  = selector.data('seconds');
        selector.countdown({
            date: date,
            offset: zone,
            day: day,
            days: days,
            hour: hour,
            hours: hours,
            minute: min,
            minutes: mins,
            second: second,
            seconds: seconds
        }, function () {
            alert('Done!');
        });
    });

    $(window).on('load resize', function(){
        var
        hero = $('#hero-section'),
        heroContent = hero.find('.hero-content'),
        contentHeight = heroContent.height(),
        sliderHeight = $(window).height(),
        headerHeight = $('#site-header-wrap').height();

        if ( $('body').hasClass('header-sticky') )
            headerHeight = headerHeight / 2;

        var contentMargin = (sliderHeight - contentHeight - headerHeight) / 2;

        hero.css({ height: sliderHeight + "px" });

        heroContent.css({ 
           "margin-top" : headerHeight + contentMargin + "px",
           "margin-bottom": contentMargin + "px"
        });
    })

    if ( $().vegas ) {
        $("#hero-section").each(function() {
            var
            $this = $(this),
            number = $this.data('number'),
            number = parseInt(number),
            effect = $this.data('effect'),
            i = 1,
            slides = [];

            while ( i <= number ) {
                slides.push( {src:$this.data('image-'+i)} );
                i++;
            }

            $this.vegas({
                slides: slides,
                overlay: true,
                transition: effect
            });
        });
    }

    $('a.scroll-target').on('click', function(e) {
        var $anchor = $(this);
        $('html, body').animate({
            scrollTop: $($anchor.attr('href')).offset().top-0
        });
        e.preventDefault();
    });

    /* Meeage Box */
    $('.message-box > i').on( 'click', function() {
        $(this).parent().fadeOut();
    });

    
    /*Gallery Post*/
    $(".gallery-post").owlCarousel({
        items:1,
        nav:true,
        dots: false,
        auto: true,
        loop:true,
        navText: ['<i class="ot-flaticon-left-arrow"></i>', '<i class="ot-flaticon-right-arrow"></i>'],
        responsive: []
    });

    $(".simple-slide").owlCarousel({
        items:2,
        nav:true,
        dots: false,
        auto: true,
        loop:true,
        navText: ['<i class="ot-flaticon-left-arrow"></i>', '<i class="ot-flaticon-right-arrow"></i>'],
        responsive:{
            1000:{
                items:2
            },
            767:{
                nav:false,
                dots: true,
                items:1
            },
            0:{
                nav:false,
                dots: true,
                items:1
            }
        }
    });

     $(".ot-testimonials-slider-s1").owlCarousel({
        nav:false,
        dots: true,
        loop:true,
        margin: 30,
        navText: ['<i class="ot-flaticon-left-arrow"></i>', '<i class="ot-flaticon-right-arrow"></i>'],
        responsive:{
            1000:{
                items:2
            },
            767:{
                items:1
            },
            0:{
                items:1
            }
        }
     });

     $(".testi-col-3").owlCarousel({
        nav:false,
        dots: true,
        loop:true,
        margin: 30,
        navText: ['<i class="ot-flaticon-left-arrow"></i>', '<i class="ot-flaticon-right-arrow"></i>'],
        responsive:{
            1000:{
                items:3
            },
            767:{
                items:1
            },
            0:{
                items:1
            }
        }
     });

     $(".testimonials-slide-2").owlCarousel({
        nav:true,
        dots: false,
        loop:true,
        navText: ['<i class="ot-flaticon-left-arrow"></i>', '<i class="ot-flaticon-right-arrow"></i>'],
        responsive:{
            1000:{
                items:1
            },
            767:{
                items:1
            },
            0:{
                items:1
            }
        }
     });

     $(".team-slider").owlCarousel({
        nav:false,
        dots: true,
        loop:true,
        navText: ['<i class="ot-flaticon-left-arrow"></i>', '<i class="ot-flaticon-right-arrow"></i>'],
        responsive:{
            1200:{
                items:5
            },
            767:{
                items:2
            },
            0:{
                items:1
            }
        }
     });

     $(".clients-slide").owlCarousel({
        nav:false,
        dots: false,
        loop:true,
        margin: 140,
        item: 'center',
        navText: ['<i class="ot-flaticon-left-arrow"></i>', '<i class="ot-flaticon-right-arrow"></i>'],
        responsive:{
            1600:{
                items:6
            },
            1200:{
                margin: 60,
                items:6
            },
            767:{
                margin: 60,
                items: 4
            },
            0:{
                margin: 100,
                items:2
            }
        }
     });

     $(".clients-slide-medium").owlCarousel({
        nav:false,
        dots: false,
        loop:true,
        margin: 100,
        item: 'center',
        navText: ['<i class="ot-flaticon-left-arrow"></i>', '<i class="ot-flaticon-right-arrow"></i>'],
        responsive:{
            1600:{
                items:6
            },
            1200:{
                margin: 60,
                items:6
            },
            767:{
                margin: 60,
                items: 4
            },
            0:{
                margin: 100,
                items:2
            }
        }
     });

     $(".project-slider").owlCarousel({
        nav:false,
        dots: true,
        loop:true,
        margin: 30,
        navText: ['<i class="ot-flaticon-left-arrow"></i>', '<i class="ot-flaticon-right-arrow"></i>'],
        responsive:{
            1200:{
                items:3
            },
            767:{
                items:2
            },
            0:{
                items:1
            }
        }
     });

     $(".project-slider-4item").owlCarousel({
        nav:false,
        dots: false,
        loop:true,
        navText: ['<i class="ot-flaticon-left-arrow"></i>', '<i class="ot-flaticon-right-arrow"></i>'],
        responsive:{
            1200:{
                items:4
            },
            767:{
                items:2
            },
            0:{
                items:1
            }
        }
     });

     $('.single-product').owlCarousel({
        items: 1,
        loop: true,
        dots: false,
        callbacks: true,
        URLhashListener: true,
        autoplayHoverPause: true,
        startPosition: 'URLHash'
    });


    /* --------------------------------------------------
    * image gallery
    * --------------------------------------------------*/
    $('.image-gallery').each( function(){
        var selector = $(this),
            popup   = selector.find('.gallery-icon > a');
        popup.append('<a href="#" class="overlay"><i class="ot-flaticon-add"></i></a>');
        selector.lightGallery({
            selector: popup,
            share: false,
            pager: false,
        });
    });

    $('.single-product .item').each( function(){
        var selector = $(this),
            imgPopup = selector.find(' > a');
        selector.lightGallery({
            selector: imgPopup,
            share: false,
            showThumbByDefault: false,
            pager: false,
        });
    });
    /* --------------------------------------------------
    * popup video
    * --------------------------------------------------*/
    var video_popup = $('.video-popup');
    if (video_popup.length > 0 ) {
        video_popup.each( function(){
            $(this).lightGallery({
                selector: '.video-popup > a',
            });
        } )
    }

    /* --------------------------------------------------
    * related projects
    * --------------------------------------------------*/
    $('.portfolio-related-posts').each( function () {
        var selector = $(this);
        new Swiper( selector, {
            slidesPerView: 3,
            loop: false,
            speed: 600,
            watchOverflow: true,
            spaceBetween: 30,
            pagination: {
                el: '.octf-swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                360: {
                    slidesPerView: 1,
                    slidesPerGroup: 1,
                },
                768: {
                    slidesPerView: 2,
                    slidesPerGroup: 1,
                },
                1024: {
                    slidesPerView: 3,
                    slidesPerGroup: 1,
                    pagination: {
                        clickable: true,
                    },
                },
            }
        });
    });


    /* --------------------------------------------------
    * filter projects
    * --------------------------------------------------*/
    function updateFilter() {
    $(window).load( function () {
        $('.project_filters a').each(function() {
            var data_filter = this.getAttribute('data-filter');
            var num = $(this)
                .closest('.project-filter-wrapper')
                .find('.project-item')
                .filter(data_filter).length;
            $(this)
                .find('.filter-count')
                .text( num );
            if ( num != 0 && $(this).hasClass('empty') ) {
                $(this).removeClass('empty');
            }
        });
        });
    }
    $(window).load( function () {
    $('.project-filter-wrapper').each( function(){
        var $container = $(this).find('.projects-grid'); 
        $container.isotope({ 
            itemSelector : '.project-item', 
            animationEngine : 'css',
            masonry: {
                columnWidth: '.grid-sizer'
            },
            layoutMode: 'fitRows',
        });

        var $optionSets  = $(this).find('.project_filters'),
            $optionLinks = $optionSets.find('a');

        $optionLinks.on('click', function(){
            var $this = $(this);

            if ( $this.hasClass('selected') ) {
                return false;
            }
            var $optionSet = $this.parents('.project_filters');
                $optionSet.find('.selected').removeClass('selected');
                $this.addClass('selected');

            var selector = $(this).attr('data-filter');
                $container.isotope({ 
                    filter: selector 
                });
            return false;
        });
        /* popup gallery */
        if( $container.hasClass('img-popup') ){
            $('.img-popup').lightGallery({
                selector: '.projects-thumbnail',
                share: false,
                pager: false,
                thumbnail: false
            });
        }
        /* count filters */
        updateFilter();
    });
        });


    /* --------------------------------------------------
    * back to top
    * --------------------------------------------------*/
    if ($('#back-to-top').length) {
	    var scrollTrigger = 500, // px
	        backToTop = function () {
	            var scrollTop = $(window).scrollTop();
	            if (scrollTop > scrollTrigger) {
	                $('#back-to-top').addClass('show');
	            } else {
	                $('#back-to-top').removeClass('show');
	            }
	        };
	    backToTop();
	    $(window).on('scroll', function () {
	        backToTop();
	    });
	    $('#back-to-top').on('click', function (e) {
	        e.preventDefault();
	        $('html,body').animate({
	            scrollTop: 0
	        }, 700);
	    });	
	}



} )( jQuery );

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
