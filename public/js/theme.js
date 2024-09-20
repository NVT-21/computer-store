(function($){
"use strict"; // Start of use strict
$(function() {
	//Croll To Div
	$(".list-tab-scroll li a").on('click',function(event){		
		event.preventDefault();
		$(this).parent().siblings().removeClass('active');
		$(this).parent().addClass('active');
		$('html,body').animate({scrollTop:$(this.hash).offset().top-50}, 1000);
	});
	//Banner Close
	$('.btn-close-banner').on('click',function(event){
		event.preventDefault();
		$(this).parent().slideUp();
	});
	//Mini Cart
	$('body').on('click',function(event){
		$(this).removeClass('overlay');
		$('.mini-cart-box.aside-box').removeClass('active');
	});
	$('.mini-cart-box.aside-box .mini-cart-link').on('click',function(event){
		event.preventDefault();
		event.stopPropagation();
		$('body').addClass('overlay');
		$(this).parent().addClass('active');
		$(this).next().height($(window).height());
	});
	//Full Mega Menu
	if($('.full-mega-menu').length>0){
		$('.main-nav').each(function(){
			if($('body').attr('dir')=="rtl"){
				var nav_os = ($(window).width() - ($(this).offset().left + $(this).outerWidth()));
				var par_os = ($(window).width() - ($(this).parents('.container,.container-fluid').offset().left + $(this).parents('.container,.container-fluid').outerWidth()));
				var nav_right = nav_os - par_os - 15;
				$(this).find('.full-mega-menu').css('margin-right','-' + nav_right + 'px');
			}else{
				var nav_os = $(this).offset().left;
				var par_os = $(this).parents('.container,.container-fluid').offset().left;
				var nav_left = nav_os - par_os - 15;
				$(this).find('.full-mega-menu').css('margin-left','-' + nav_left + 'px');
			}
		});
	}
	//Menu Fixed
	if($(window).width()>767){
		$('body').on('click',function(event){
			$('.menu-fixed').removeClass('active');
		});
		$('.btn-menu-fixed').on('click',function(event){
			event.preventDefault();
			event.stopPropagation();
			$('body').addClass('overlay');
			$(this).parent().addClass('active');
			$(this).next().height($(window).height());
		});
	}
	//Qty Up-Down
	$('.detail-qty').each(function(){
		$(this).find('.qty-up').on('click',function(event){
			event.preventDefault();
			var qtyval = parseInt($(this).parent().find('.qty-val').text(),10);
			qtyval=qtyval+1;
			$(this).parent().find('.qty-val').text(qtyval);
		});
		$(this).find('.qty-down').on('click',function(event){
			event.preventDefault();
			var qtyval = parseInt($(this).parent().find('.qty-val').text(),10);
			qtyval=qtyval-1;
			if(qtyval>1){
				$(this).parent().find('.qty-val').text(qtyval);
			}else{
				qtyval=1;
				$(this).parent().find('.qty-val').text(qtyval);
			}
		});
	});
	//Filter Price
	if($('.range-filter').length>0){
		$('.range-filter').each(function(){
			$(this).find( ".slider-range" ).slider({
				range: true,
				min: 0,
				max: 8000,
				values: [ 500, 5000 ],
				slide: function( event, ui ) {
					$(this).parents('.range-filter').find( ".amount" ).html('<span class="min-price">$'+ui.values[ 0 ]+'</span>' + ' - ' + '<span class="max-price">$' + ui.values[ 1 ]+'</span>');
				}
			});
			$(this).find( ".amount" ).html('<span class="min-price">$' +$(this).find( ".slider-range" ).slider( "values", 0 )+'</span>' + ' - ' + '<span class="max-price">$' +$(this).find( ".slider-range" ).slider( "values", 1 )+'</span>');
		});
	}
	//Toggle Class
	if($('.list-attr').length>0){
		$('.list-attr a').on('click',function(event){
			event.preventDefault();
			$(this).toggleClass('active');
		});
	}
	//Tag Toggle
	if($('.toggle-tab').length>0){
		$('.toggle-tab').each(function(){
			$(this).find('.item-toggle-tab.active .toggle-tab-content').show();
			$(this).find('.toggle-tab-title').on('click',function(event){
				if($(this).next().length>0){
					event.preventDefault();
					$(this).parent().siblings().removeClass('active');
					$(this).parent().addClass('active');
					$(this).parents('.toggle-tab').find('.toggle-tab-content').slideUp();
					$(this).next().stop(true,false).slideDown();
				}
				
			});
		});
	}
	//Hover Active
	if($('.box-hover-active').length>0){
		$('.box-hover-active').each(function(){
			$(this).find('.item-hover-active').on('mouseover',function(){
				$(this).parents('.box-hover-active').find('.item-hover-active').removeClass('active');
				$(this).addClass('active');
			});
			$(this).on('mouseout',function(){
				$(this).find('.item-hover-active').removeClass('active');
				$(this).find('.item-active').addClass('active');
			});
		});
	}
	//Popup Wishlist
	$('.wishlist-link').on('click',function(event){
		event.preventDefault();
		$('.wishlist-mask').fadeIn();
		var counter = 5;
		var popup;
		popup = setInterval(function() {
			counter--;
			if(counter < 0) {
				clearInterval(popup);
				$('.wishlist-mask').hide();
			} else {
				$(".wishlist-countdown").text(counter.toString());
			}
		}, 1000);
	});
	//Menu Responsive
	$('.toggle-mobile-menu').on('click',function(event){
		event.preventDefault();
		$(this).parents('.main-nav').toggleClass('active');
	});
	//Animate
	if($('.wow').length>0){
		new WOW().init();
	}
	//Product Quick View
	if($('.quickview-link').length>0){
		$('.quickview-link').fancybox({
			afterLoad: function () {
				detail_gallery();
			}
		});	
	}
	//Light Box
	if($('.fancybox').length>0){
		$('.fancybox').fancybox();	
	}
	if($('.fancybox-media').length>0){
		$('.fancybox-media').attr('rel', 'media-gallery').fancybox({
			openEffect : 'none',
			closeEffect : 'none',
			prevEffect : 'none',
			nextEffect : 'none',
			arrows : false,
			helpers : {
				media : {},
				buttons : {}
			}
		});
	}
	if($('.fancybox-buttons').length>0){
		$('.fancybox-buttons').fancybox({
			openEffect  : 'none',
			closeEffect : 'none',

			prevEffect : 'none',
			nextEffect : 'none',

			closeBtn  : false,

			helpers : {
				title : {
					type : 'inside'
				},
				buttons	: {}
			},

			afterLoad : function() {
				this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
			}
		});
	}
	//Custom ScrollBar
	if($('.mcustom-scroll').length>0){
		$('.mcustom-scroll').each(function(){
			$(this).mCustomScrollbar({
				scrollButtons:{
					enable:true
				}
			});
		});
	}
	//Back To Top
	$('.scroll-top').on('click',function(event){
		event.preventDefault();
		$('html, body').animate({scrollTop:0}, 'slow');
	});
	//Box Hover Dir
	$('.box-hover-dir').each( function() {
		$(this).hoverdir(); 
	});
	//Background Image
	if($('.banner-background').length>0){
		$('.banner-background').each(function(){
			var b_url = $(this).attr("data-image");
			$(this).css('background-image','url("'+b_url+'")');	
		});
	}
	//Box Parallax	
	if($('.parallax').length>0){
		$('.parallax').each(function(){
			var p_url = $(this).attr("data-image");
			$(this).css('background-image','url("'+p_url+'")');	
		});
	}
	//Count Down Master
	if($('.countdown-master').length>0){
		$('.countdown-master').each(function(){
			$(this).FlipClock(65100,{
		        clockFace: 'HourlyCounter',
		        countdown: true,
		        autoStart: true,
		    });
		});
	}
	//Switch Register
	$('.login-to-register').on('click',function(event){
		event.preventDefault();
		$(this).toggleClass('login-status');
		if($(this).hasClass('login-status')){
			$(this).text($(this).attr('data-login'));
			$(this).parents('.register-content-box').find('.block-login').hide();
			$(this).parents('.register-content-box').find('.block-register').show();
		}else{
			$(this).text($(this).attr('data-register'));
			$(this).parents('.register-content-box').find('.block-login').show();
			$(this).parents('.register-content-box').find('.block-register').hide();
		}
	});
});
//Offset Menu
function offset_menu(){
	if($(window).width()>767){
		$('.main-nav .sub-menu').each(function(){
			var wdm = $(window).width();
			var wde = $(this).width();
			var offset = $(this).offset().left;
			var tw = offset+wde;
			if(tw>wdm){
				$(this).addClass('offset-right');
			}
		});
	}else{
		return false;
	}
}
//Fixed Header
function fixed_header(){
	if($('.header-ontop').length>0){
		if($(window).width()>1023){
			var ht = $('#header').height();
			var st = $(window).scrollTop();
			if(st>ht){
				$('.header-ontop').addClass('fixed-ontop');
			}else{
				$('.header-ontop').removeClass('fixed-ontop');
			}
		}else{
			$('.header-ontop').removeClass('fixed-ontop');
		}
	}
} 
//Slider Background
function background(){
	$('.bg-slider .item-slider').each(function(){
		var src=$(this).find('.banner-thumb a img').attr('src');
		$(this).css('background-image','url("'+src+'")');
	});	
}
//After Action
function afterAction(){
	
	$('.banner-slider .owl-item').each(function(){
		var check = $(this).hasClass('active');
		if(check==true){
			$(this).find('.animated').each(function(){
				var anime = $(this).attr('data-animated');
				$(this).addClass(anime);
			});
		}else{
			$(this).find('.animated').each(function(){
				var anime = $(this).attr('data-animated');
				$(this).removeClass(anime);
			});
		}
	});
	
	var owl = this;
	var visible = this.owl.visibleItems;
	var first_item = visible[0];
	var last_item = visible[visible.length-1];
	this.$elem.find('.owl-item').removeClass('first-item');
	this.$elem.find('.owl-item').removeClass('last-item');
	this.$elem.find('.owl-item').eq(first_item).addClass('first-item');
	this.$elem.find('.owl-item').eq(last_item).addClass('last-item');
	
	//Custom Paginav
	if($('.question-slider').length>0){
		$('.question-slider').each(function(){
			var self = $(this);
			var current = self.find('.owl-item.active').index()+1;
			var total = self.find('.owl-item').length;
			self.find('.current-item').text(current);
			self.find('.total-item').text(total);
		})
	}
}
function slick_animated(){
	$('.banner-slick .item-slider').each(function(){
		var check = $(this).hasClass('slick-active');
		if(check==true){
			$(this).find('.animated').each(function(){
				var anime = $(this).attr('data-animated');
				$(this).addClass(anime);
			});
		}else{
			$(this).find('.animated').each(function(){
				var anime = $(this).attr('data-animated');
				$(this).removeClass(anime);
			});
		}
	});
}
//Detail Gallery
function detail_gallery(){
	if($('.detail-gallery').length>0){
		$('.detail-gallery').each(function(){
			var self = $(this);
			var data = self.find(".carousel").data();
			self.find(".carousel").jCarouselLite({
				btnNext: self.find(".next"),
				btnPrev: self.find(".prev"),
				speed: 800,
				visible:data.visible,
				vertical:data.vertical,
			});
			//Elevate Zoom
			self.find('.mid img').elevateZoom({
				zoomType: "lens",
				lensShape: "square",
				lensSize: 100,
				borderSize:1,
				containLensZoom:true
			});
			self.find(".carousel a").on('click',function(event) {
				event.preventDefault();
				$(this).parents('.detail-gallery').find(".carousel a").removeClass('active');
				$(this).addClass('active');
				var z_url =  $(this).find('img').attr("src");
				$(this).parents('.detail-gallery').find(".mid img").attr("src", z_url);
				$('.zoomLens').css('background-image','url("'+z_url+'")');
			});
			//Control Thumb
			var max = self.find('.carousel li').length - 1;
			var active = self.find('.carousel li a.active').parent();
			var index = self.find('.carousel li a.active').parent().index();
			self.find(".next").on('click',function(event) {
				event.preventDefault();
				if(index == max){
					index = 0;
				}else{
					index = index + 1;
				}
				self.find('.carousel li a').removeClass('active');
				self.find('.carousel li').eq(index).find('a').addClass('active');
				active = self.find('.carousel li a.active').parent();
				var z_url =  active.find('img').attr("src");
				$(this).parents('.detail-gallery').find(".mid img").attr("src", z_url);
				$('.zoomLens').css('background-image','url("'+z_url+'")');
			});	
			self.find(".prev").on('click',function(event) {
				event.preventDefault();
				if(index == 0){
					index = max;
				}else{
					index = index - 1;
				}
				self.find('.carousel li a').removeClass('active');
				self.find('.carousel li').eq(index).find('a').addClass('active');
				active = self.find('.carousel li a.active').parent();
				var z_url =  active.find('img').attr("src");
				$(this).parents('.detail-gallery').find(".mid img").attr("src", z_url);
				$('.zoomLens').css('background-image','url("'+z_url+'")');
			});	
		});
	}
}
//Fix Detail Info
function detail_fixed(){
	if($(window).width()>767){
		if($('.detail-fixed-info').length>0){
			var ot = $('.detail-fixed-info').offset().top;
			var sh = $('.detail-fixed-info').height();
			var height = $('.detail-info').map(function (){
				return $(this).height();
			}).get();
			var dh = Math.max.apply(null, height);
			var st = $(window).scrollTop();
			var top = $(window).scrollTop() - ot;
			if(st>ot&&st<ot+sh-dh){
				$('.detail-fixed-info').addClass('onscroll');
				$('.detail-fixed-info.onscroll .detail-info').css('top',top+'px');
			}else if(st<ot){
				$('.detail-info').css('top',0);
			}else{
				$('.detail-fixed-info').removeClass('onscroll');
			}
		}
	}else{
		$('.detail-info').css('top',0);
	}
}
//Menu Responsive
function menu_responsive(){
	if($(window).width()<768){
		if($('.btn-toggle-mobile-menu').length>0){
			return false;
		}else{
			$('.main-nav li.menu-item-has-children,.main-nav li.has-mega-menu').append('<span class="btn-toggle-mobile-menu"></span>');
			$('.main-nav .btn-toggle-mobile-menu').on('click',function(event){
				$(this).toggleClass('active');
				$(this).prev().stop(true,false).slideToggle();
			});
		}
	}else{
		$('.btn-toggle-mobile-menu').remove();
		$('.main-nav .sub-menu,.main-nav .mega-menu').slideDown();
	}
}
//Document Ready
jQuery(document).ready(function(){
	//Menu Responsive
	menu_responsive();
	//Detail Gallery
	detail_gallery();
	//Offset Menu
	offset_menu();
	//Fixed Detail
	detail_fixed();
});
//Window Load
jQuery(window).on('load',function(){ 
	//Pre Load
	$('body').removeClass('preload'); 
	//Owl Carousel
	if($('.wrap-item').length>0){
		$('.wrap-item').each(function(){
			var data = $(this).data();
			$(this).owlCarousel({
				addClassActive:true,
				stopOnHover:true,
				lazyLoad:true,
				itemsCustom:data.itemscustom,
				autoPlay:data.autoplay,
				transitionStyle:data.transition, 
				paginationNumbers:data.paginumber,
				beforeInit:background,
				afterAction:afterAction,
				navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
			});
		});
	}
	//Trigger Slider
	$('.control-slider .prev').on('click', function(e){
		e.preventDefault();
		$('.control-slider .wrap-item').trigger('owl.prev');
	});
	$('.control-slider .next').on('click', function(e){
		e.preventDefault();
		$('.control-slider .wrap-item').trigger('owl.next');
	});
	//Parallax Slider
	if($('.parallax-slider').length>0){
		$(window).scroll(function() {
			var ot = $('.parallax-slider').offset().top;
			var sh = $('.parallax-slider').height();
			var st = $(window).scrollTop();
			var top = (($(window).scrollTop() - ot) * 0.5) + 'px';
			if(st>ot&&st<ot+sh){
				$('.parallax-slider .item-slider').css({
					'background-position': 'center ' + top
				});
			}else{
				$('.parallax-slider .item-slider').css({
					'background-position': 'center 0'
				});
			}
		});
	}
	//Time Countdown
	if($('.time-countdown').length>0){
		$(".time-countdown").each(function(){
			var data = $(this).data(); 
			$(this).TimeCircles({
				fg_width: data.width,
				bg_width: 0,
				text_size: 0,
				circle_bg_color: data.bg,
				time: {
					Days: {
						show: data.day,
						text: data.text[0],
						color: data.color,
					},
					Hours: {
						show: data.hou,
						text: data.text[1],
						color: data.color,
					},
					Minutes: {
						show: data.min,
						text: data.text[2],
						color: data.color,
					},
					Seconds: {
						show: data.sec,
						text: data.text[3],
						color: data.color,
					}
				}
			}); 
		});
	}
	//List Item Masonry 
	if($('.list-item-masonry').length>0){
		$('.list-item-masonry').masonry({
			itemSelector: '.item-masonry',
		});
	}
});
//Window Resize
jQuery(window).on('resize',function(){
	offset_menu();
	fixed_header();
	menu_responsive();
	//Fixed Detail
	detail_fixed();
});
//Window Scroll
jQuery(window).on('scroll',function(){
	//Scroll Top
	if($(this).scrollTop()>$(this).height()){
		$('.scroll-top').addClass('active');
	}else{
		$('.scroll-top').removeClass('active');
	}
	//Fixed Header
	fixed_header();
	//Fixed Detail
	detail_fixed();
});
})(jQuery); // End of use strict