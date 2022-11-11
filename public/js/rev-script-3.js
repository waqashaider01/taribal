(function ($) {
	
    'use strict';	
			var tpj=jQuery;
			var revapi26;
			tpj(document).ready(function() {
				if(tpj("#rev_slider_3").revolution == undefined){
					revslider_showDoubleJqueryError("#rev_slider_3");
				}else{
					revapi26 = tpj("#rev_slider_3").show().revolution({
						sliderType:"standard",
						jsFileLocation:"revolution/js/",
						sliderLayout:"fullwidth",
						dottedOverlay:"none",
						delay:9000,
						navigation: {
							keyboardNavigation:"off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"off",
 							mouseScrollReverse:"default",
							onHoverStop:"off",
							touch:{
								touchenabled:"on",
								touchOnDesktop:"off",
								swipe_threshold: 75,
								swipe_min_touches: 50,
								swipe_direction: "horizontal",
								drag_block_vertical: false
							},
							
							arrows: {
								style: "nav-home-3",
								enable: true,
								hide_onmobile: true,
						        hide_under: 0,
						        hide_over: 9999,
						        hide_delay: 200,
						        hide_delay_mobile: 1200,
								hide_onleave: false,
								left: {
									h_align: "center",
									v_align: "bottom",
									h_offset: 28,
									v_offset: 0
								},
								right: {
									h_align: "center",
									v_align: "bottom",
									h_offset: 98,
									v_offset: 0
								}
							},
							bullets: {
								enable:true,
								hide_onmobile:false,
								style:"hesperiden",
								
								hide_onleave:false,
								direction:"horizontal",
								h_align:"center",
								v_align:"bottom",
								h_offset:0,
								v_offset:60,
								space:5,
								tmp:''
							}							
						},
						responsiveLevels:[1240,1024,778,480],
						visibilityLevels:[1240,1024,778,480],
						gridwidth:[1723,1024,768,480],
						gridheight:[860,506,630,600],
						lazyType:"none",
						parallax: {
							type:"scroll",
							origo:"slidercenter",
							speed:2000,
							levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
						},
						shadow:0,
						spinner:"off",
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,
						shuffle:"off",
						autoHeight:"off",
						fullScreenAutoWidth:"off",
						fullScreenAlignForce:"off",
						fullScreenOffsetContainer: "",
						fullScreenOffset: "0",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
						}
					});
				}
			});	/*ready*/

})(jQuery);