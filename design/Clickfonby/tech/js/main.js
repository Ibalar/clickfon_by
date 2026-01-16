/*
==================================================================================
* Template:  	 Osoon - Coming Soon HTML Template
* Written by: 	 Harnish Design - (http://www.harnishdesign.net)
* Description:   Main Custom Script File
==================================================================================
*/

(function ($) {
	"use strict";

// Preloader
$(window).on('load', function () {
	$('.lds-ellipsis').fadeOut(); // will first fade out the loading animation
	$('.preloader').delay(333).fadeOut('slow'); // will fade out the white DIV that covers the website.
	$('body').delay(333);
});

// Header Sticky
$(window).on('scroll',function() {
	var stickytop = $('#header.sticky-top .bg-transparent');
	var stickytopslide = $('#header.sticky-top-slide');
	
	if ($(this).scrollTop() > 1){
		stickytop.addClass("sticky-on-top");
		stickytop.find(".logo img").attr('src',stickytop.find('.logo img').data('sticky-logo'));
	}
	else {
		stickytop.removeClass("sticky-on-top");
		stickytop.find(".logo img").attr('src',stickytop.find('.logo img').data('default-logo'));
	}
	
	if ($(this).scrollTop() > 180){
		stickytopslide.find(".primary-menu").addClass("sticky-on");
		stickytopslide.find(".logo img").attr('src',stickytopslide.find('.logo img').data('sticky-logo'));
	}
	else{
		stickytopslide.find(".primary-menu").removeClass("sticky-on");
		stickytopslide.find(".logo img").attr('src',stickytopslide.find('.logo img').data('default-logo'));
	}
});

// Sections Scroll
$('.smooth-scroll').on('click', function() {
	event.preventDefault();
    var sectionTo = $(this).attr('href');
	$('html, body').stop().animate({
      scrollTop: $(sectionTo).offset().top - 50}, 1500, 'easeInOutExpo');
});


/*---------------------------------------------------
    Primary Menu
----------------------------------------------------- */
// Dropdown show on hover
$('.primary-menu:not(.navbar-overlay):not(.navbar-expand-none) ul.navbar-nav li.dropdown').on("mouseover", function() {
	if ($(window).width() > 991) {
		$(this).find('> .dropdown-menu').stop().slideDown('fast');
		$(this).on('mouseleave', function() {
			$(this).find('> .dropdown-menu').stop().css('display', 'none'); 
		});
		
	// When dropdown going off to the out of the screen.
	$('.primary-menu ul.navbar-nav > li.dropdown > .dropdown-menu').each(function() {
		var menu = $('#header .primary-menu > div').offset();
		var dropdown = $(this).parent().offset();
		if ($("html").attr("dir") == 'rtl') {
			var rd = ($(window).width() - (dropdown.left + $(this).parent().outerWidth()));
			var i = (rd + $(this).outerWidth()) - (menu.left + $('#header .primary-menu > div').outerWidth());
		}else{
			var i = (dropdown.left + $(this).outerWidth()) - (menu.left + $('#header .primary-menu > div').outerWidth());
		}
		if (i > 0) {
			if ($("html").attr("dir") == 'rtl') {
				$(this).css('margin-right', '-' + (i) + 'px');
			}else{
				$(this).css('margin-left', '-' + (i) + 'px');
			}
		}
	});
	}
});

$(function () {
    $(".dropdown li").on('mouseenter mouseleave', function (e) {
		if ($(window).width() > 991) {
			if ($('.dropdown-menu', this).length) {
				var elm = $('.dropdown-menu', this);
				var off = elm.offset();
				var l = off.left;
				var w = elm.width();
				var docW = $(window).width();
				var lr = ($(window).width() - (off.left + elm.outerWidth())); //offset right
				if ($("html").attr("dir") == 'rtl') {
					var isEntirelyVisible = (lr + w + 30 <= docW);
				}else{
					var isEntirelyVisible = (l + w + 30 <= docW);
				}
				if (!isEntirelyVisible) {
					$(elm).addClass('dropdown-menu-end');
					$(elm).parents('.dropdown:first').find('> a.dropdown-toggle > .arrow').addClass('arrow-end');
				} else {
					$(elm).removeClass('dropdown-menu-end');
					$(elm).parents('.dropdown:first').find('> a.dropdown-toggle > .arrow').removeClass('arrow-end');
				}
			}
		}
    });
});

// DropDown Arrow
$('.primary-menu').find('a.dropdown-toggle').append($('<i />').addClass('arrow'));

// Mobile Collapse Nav
$('.primary-menu .dropdown-toggle[href="#"], .primary-menu .dropdown-toggle[href!="#"] .arrow').on('click', function(e) {
	if ($('nav').hasClass('navbar-overlay') && $('nav').hasClass('navbar-expand-none')) {
			var ww = 4000;
		}else{
			var ww = 991;
	}
	if ($(window).width() < (ww)) {
        e.preventDefault();
        var $parentli = $(this).closest('li');
        $parentli.siblings('li').find('.dropdown-menu:visible').slideUp();
        $parentli.find('> .dropdown-menu').stop().slideToggle();
        $parentli.siblings('li').find('a .arrow.show').toggleClass('show');
		$parentli.find('> a .arrow').toggleClass('show');
	}
});

// Mobile Menu
$('.navbar-toggler').on('click', function() {
	$(this).toggleClass('show');
	$('#header.sticky-top-slide').find(".primary-menu").toggleClass("show");
});
$('.navbar-nav a:not(.dropdown-toggle)').on('click', function() {
    $('.navbar-collapse, .navbar-toggler').removeClass('show');
});

// Overlay Menu
$('.navbar-overlay .collapse').on('show.bs.collapse hide.bs.collapse', function(e) {
    e.preventDefault();
}),
$('.navbar-overlay [data-bs-toggle="collapse"]').on('click', function(e) {
   e.preventDefault();
   $($(this).data('bs-target')).toggleClass('show');
})

/*------------------------------------
    WOW animation
-------------------------------------- */
$(".wow").each(function() {
 if ($(window).width() > 767) {
   var wow = new WOW({
     boxClass: 'wow',
     animateClass: 'animated',
     offset: 0,
     mobile: false,
     live: true
   });
  new WOW().init();
 }
});

/*------------------------------------
    Parallax Mouse Move
-------------------------------------- */
$("#scene").each(function() {
	var scene = document.getElementById('scene');
	var parallaxInstance = new Parallax(scene);
});

/*------------------------------------
    YTPlayer YouTube Background
-------------------------------------- */

$(".player").each(function () {
    $(this).mb_YTPlayer();
});

/*------------------------
   tooltips
-------------------------- */
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})

/*------------------------
   Scroll to top
-------------------------- */
$(function () {
		$(window).on('scroll', function(){
			if ($(this).scrollTop() > 400) {
				$('#back-to-top').fadeIn();
			} else {
				$('#back-to-top').fadeOut();
			}
		});
		});
$('#back-to-top').on("click", function() {
	$('html, body').animate({scrollTop:0}, 'slow');
	return false;
});


/*------------------------
   Subscribe Form
--------------------------- */
var subscribeForm = $('.subscribe-form');
var submitbtn = $('#subscribe-form-submit');
if (subscribeForm.length >= 1) {
subscribeForm.each( function(){
	var el = $(this),
		elResult = el.find('.subscribe-form-result'),
		alertType;
	el.find('form').validate({
		submitHandler: function(form) {
			elResult.hide();
			var loadingText = '<i role="status" aria-hidden="true" class="spinner-border spinner-border-sm"></i>';
			if (submitbtn.html() !== loadingText) {
				submitbtn.data('original-text', submitbtn.html());
				submitbtn.html(loadingText);
			}
			$(form).ajaxSubmit({
				target: elResult,
				dataType: 'json',
				resetForm: true,
				success: function( data ) {
					if( data.alert == 'error' ) {
						alertType = 'alert-danger';
					} else {
						alertType = 'alert-success';
					}
					elResult.addClass( 'py-2 alert ' + alertType ).html( data.message ).slideDown( 300 );
					submitbtn.html(submitbtn.data('original-text'));// reset submit button text
					setTimeout(function(){
						elResult.slideUp('slow', function(){
							$(this).removeClass( 'py-2 alert ' + alertType );
						});
					}, 5100);
				}
			});
		}
	});
});
}

/*------------------------
   Contact Form
-------------------------- */
var form = $('#contact-form'); // contact form
var submit = $('#submit-btn'); // submit button

// form submit event
form.on('submit', function (e) {
	e.preventDefault(); // prevent default form submit

	if (typeof $('#google-recaptcha-v3').val() != "undefined") {
		grecaptcha.ready(function () {
			var site_key = $('#google-recaptcha-v3').attr('src').split("render=")[1];
			grecaptcha.execute(site_key, {action: 'contact'}).then(function (token) {
				var gdata = form.serialize() + '&g-recaptcha-response=' + token;
				$.ajax({
					url: 'php/mail.php',  // form action url
					type: 'POST', 		  // form submit method get/post
					dataType: 'json', 	  // request type html/json/xml
					data: gdata, 		  // serialize form data
					beforeSend: function () {
						submit.attr("disabled", "disabled");
						var loadingText = '<span role="status" aria-hidden="true" class="spinner-border spinner-border-sm align-self-center me-2"></span>Sending.....'; // change submit button text
						if (submit.html() !== loadingText) {
							submit.data('original-text', submit.html());
							submit.html(loadingText);
						}
					},
					success: function (data) {
						submit.before(data.Message).fadeIn("slow"); // fade in response data 
						submit.html(submit.data('original-text'));// reset submit button text
						submit.removeAttr("disabled", "disabled");
						if (data.response == 'success') {
							form.trigger('reset'); // reset form
						}
						setTimeout(function () {
							$('.alert-dismissible').fadeOut('slow', function(){
								$(this).remove();
							});
						}, 3000);
					},
					error: function (e) {
						console.log(e)
					}
				});
			});
		});
	} else {
		$.ajax({
			url: 'php/mail.php', // form action url
			type: 'POST', // form submit method get/post
			dataType: 'json', // request type html/json/xml
			data: form.serialize(), // serialize form data
			beforeSend: function () {
				submit.attr("disabled", "disabled");
				var loadingText = '<span role="status" aria-hidden="true" class="spinner-border spinner-border-sm align-self-center me-2"></span>Sending.....'; // change submit button text
				if (submit.html() !== loadingText) {
					submit.data('original-text', submit.html());
					submit.html(loadingText);
				}
			},
			success: function (data) {
				submit.before(data.Message).fadeIn("slow"); // fade in response data 
				submit.html(submit.data('original-text'));// reset submit button text
				submit.removeAttr("disabled", "disabled");
				if (data.response == 'success') {
					form.trigger('reset'); // reset form
				}
				setTimeout(function () {
					$('.alert-dismissible').fadeOut('slow', function(){
						$(this).remove();
					});
				}, 3500);
				if (typeof $('#recaptcha-v2').val() != "undefined") {
					grecaptcha.reset(); // reset reCaptcha
				}
			},
			error: function (e) {
				console.log(e)
			}
		});
	}
});

})(jQuery)