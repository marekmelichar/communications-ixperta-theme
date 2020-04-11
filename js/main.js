(function ($) {
	$(document).ready(function () { // wait for DOM



		$(window).on('load', function () {
			equalheight('.little_call_to_actions_cols .blue-text');
			// equalheight('#why_connect_with_us .bg_color_stripe_repeater .heading .head');
			equalheight('.reference-tiles__tile h2');
			equalheight('#about_us .about_us_tile .content');
			// equalheight('#about_us .about_us_tile .content');
			equalheight('.row [class*="col"] .argument');

			// equalheight('[id*="products"] .heading');
		})







		// kontakty = about_us section when tiles are enabled by checkbox in admin
		const about_us = $('#about_us.show_tiles')
		const about_us_tiles = $('#about_us .about_us_tiles')
		const about_us_tiles_height = about_us_tiles.outerHeight()

		about_us.css({
			marginTop: 36 + about_us_tiles_height / 2,
			paddingTop: 0
		})

		about_us_tiles.css({
			marginTop: - (about_us_tiles_height / 2),
			marginBottom: 1.5 + 'rem'
		})





		

		// put icon in front of breadcrumbs
		$('#breadcrumbs').prepend(`
			<svg id="home_icon" xmlns="http://www.w3.org/2000/svg" width="20.193" height="18" viewBox="0 0 20.193 18">
				<defs>
					<style>
						#home_icon .a{fill:#707070;}
					</style>
				</defs>
				<g transform="translate(0.001 -27.797)">
					<g transform="translate(-0.001 27.798)">
						<g transform="translate(0 0)">
							<path class="a" d="M19.977,34.907,10.406,27.9a.525.525,0,0,0-.62,0L.214,34.907a.525.525,0,0,0,.62.847L10.1,28.972l9.262,6.781a.525.525,0,0,0,.62-.847Z" transform="translate(0.001 -27.798)"/>
						</g>
					</g>
					<g transform="translate(2.226 35.872)">
						<path class="a" d="M71.667,232.543a.525.525,0,0,0-.525.525v8.351h-4.2V236.86a2.623,2.623,0,0,0-5.247,0v4.559H57.5v-8.351a.525.525,0,0,0-1.049,0v8.876a.525.525,0,0,0,.525.525h5.246a.524.524,0,0,0,.523-.484.4.4,0,0,0,0-.041V236.86a1.574,1.574,0,0,1,3.148,0v5.083a.386.386,0,0,0,0,.04.524.524,0,0,0,.523.484h5.246a.525.525,0,0,0,.525-.525v-8.876A.525.525,0,0,0,71.667,232.543Z" transform="translate(-56.452 -232.543)"/>
					</g>
				</g>
			</svg>
		`)










		// $( ".primary-menu .menu-item-has-children" ).hover(
		//   function() {
		//     $(this).find("ul.sub-menu").fadeIn(300);
		//     // $(this).addClass( "hover" );
		//   }, function() {
		//     $(this).find("ul.sub-menu").fadeOut(300);
		//     // $(this).removeClass( "hover" );
		//   }
		// );











		// if(navigator.userAgent.indexOf('MSIE') !== -1 || navigator.appVersion.indexOf('Trident/') > 0){
		//   /* Microsoft Internet Explorer detected in. */
		//   $('body').addClass('isIE')
		//   $('.single-pagecareer figure').addClass('d-block')
		// } else {
		//
		// }















		// INIT behavior of header

		var header = $('.header')
		// var headerHeight = $('.header').height()
		var top = $(window).scrollTop()
		var top_info_navbar_repeater_height = $('#top_info_navbar_repeater').height()

		if (top < top_info_navbar_repeater_height) {
			header.css({
				'display': 'block',
				'top': top_info_navbar_repeater_height + 1
			})
		} else {

		}

		// on SCROLL behavior of header

		var delta = 0

		$(window).scroll(function (event) {

			// console.log("You've scrolled " + $(window).scrollTop() + " pixels");

			// var header = $('.header')
			var top = $(window).scrollTop()
			var top_info_navbar_repeater_height = $('#top_info_navbar_repeater').height()

			if (top < top_info_navbar_repeater_height) {
				header.css({
					'display': 'block',
					'top': top_info_navbar_repeater_height + 1
				})
			}

			var deltaBefore
			var deltaAfter

			deltaBefore = delta
			delta = top
			deltaAfter = delta

			if (deltaAfter > deltaBefore) {

				header.addClass('hide')
				header.removeClass('show')

			} else {

				header.removeClass('hide')
				header.addClass('show')

			}

			if (deltaAfter < top_info_navbar_repeater_height) {
				header.removeClass('hide')
				header.removeClass('show')
			}

		});










		// ------------------------- Init padding of Body ---------------------------------

		$('body').css({
			paddingTop: $('.header').outerHeight() + $('#top_info_navbar_repeater').outerHeight()
		})













		// ------------------------- anchor smooth scroll animation ---------------------------------

		$(function () {
			$('.page a[href*=\\#]:not([href=\\#])').click(function () {
				if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {

					var target = $(this.hash);

					target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

					if (target.length) {
						$('html,body').animate({
							scrollTop: target.offset().top - $("header").outerHeight()
						}, 1000);

						return false;
					}
				}
			});
		});














		// ------------------------- back to top + header shrink ---------------------------------

		$(window).on('scroll', function () {

			// back to top
			var scrollTrigger = 100
			var scrollTop = $(window).scrollTop();

			if (scrollTop >= scrollTrigger) {
				$('#back-to-top').addClass('show');
			} else {
				$('#back-to-top').removeClass('show');
			}
		})





















		// ============================================================================ SLIDE-OUT HELP IN SIDEBAR, DESKTOP
		// $('#helpWidget h2').on('click', function () {
		// 	$('#helpWidget').toggleClass('opened')
		// })

		// $('#helpWidget .close').on('click', function () {
		// 	$('#helpWidget').removeClass('opened')
		// })

		// ============================================================================ SLIDE-OUT HELP IN MOBILE
		// $('#helpWidgetMobile h2').on('click', function() {
		//   $('#helpWidgetMobile').toggleClass('opened')
		// })
		//
		// $('#helpWidgetMobile .close').on('click', function() {
		//   $('#helpWidgetMobile').removeClass('opened')
		// })

		// ============================================================================ NAVI
		// if (window.innerWidth < 768) {
		// 	// $('#navbarTogglerMainNavigation').addClass('collapse')
		// } else {
		// 	// $('#navbarTogglerMainNavigation').removeClass('collapse')
		// }















		// SEARCH
		var search = $('.search-icon')
		var searchForm = $('.search-form')

		search.on('click', function () {
			searchForm.toggleClass('open')
		})











		// mobile menu_id

		var hamburger = $('.hamburger .mobile-menu-trigger')
		var mobile_menu = $('.hamburger .primary-menu')
		var close_mobile_menu = $('.hamburger .mobile-menu-close')

		hamburger.on('click', function () {
			$('.hamburger').toggleClass('open')
		})

		close_mobile_menu.on('click', function () {
			$('.hamburger').toggleClass('open')
		})

		// $('.hamburger.open .primary-menu a').on('click', function(e) {
		// 	e.preventDefault()
		// })

		var mobileMenuDropdown = $('#mobile_menu .menu-item-has-children');
		mobileMenuDropdown.prepend("\n      <svg id=\"dropdown_sipka\" xmlns=\"http://www.w3.org/2000/svg\" width=\"12.87\" height=\"8.693\" viewBox=\"0 0 12.87 8.693\">\n      \t<defs>\n      \t\t<style>\n      \t\t\t#dropdown_sipka2 .a {\n      \t\t\t\tfill: #fff;\n      \t\t\t\tfill-rule: evenodd;\n      \t\t\t}\n      \t\t</style>\n      \t</defs><path class=\"a\" d=\"M12.87,0,6.436,8.693,0,0Z\"/></svg>\n    ");

		var mobileMenuDropdownToggle = $('#mobile_menu .menu-item-has-children #dropdown_sipka');

		mobileMenuDropdownToggle.on('click', function (e) {
			e.preventDefault();

			$(this).parent().toggleClass('open')
			$(this).parent().siblings().removeClass('open')

			// $('#mobile_menu .menu-item-has-children').toggleClass('open');
			// $('#menu-mobile-menu-2 .menu-item-has-children').unbind('mouseenter mouseleave')
			// $('#menu-mobile-menu-2 .menu-item-has-children').off('hover')
			// $('#menu-mobile-menu-2 .menu-item-has-children').unbind()
		});














		// REFERENCES

		// desktop
		if (window.innerWidth > 960) {

			$('[id*="references"] .references__logos .col:first-child').addClass('active')

			$('[id*="references"] .references__logos').slick({
				dots: false,
				arrows: true,
				infinite: true,
				speed: 300,
				autoplay: true,
				autoplaySpeed: 4000,
				slidesToShow: 4,
				prevArrow: $('[id*="references"] .prevArrow'),
				nextArrow: $('[id*="references"] .nextArrow')
			})
		}

		// tablet
		if (window.innerWidth >= 768 && window.innerWidth < 960) {

			$('[id*="references"] .references__logos .col:first-child').addClass('active')

			$('[id*="references"] .references__logos').slick({
				dots: false,
				arrows: false,
				infinite: true,
				speed: 300,
				autoplay: true,
				autoplaySpeed: 1000,
				slidesToShow: 2
			})

		}

		// medium / large phone
		if (window.innerWidth < 768 && window.innerWidth > 320) {

			$('[id*="references"] .references__logos .col:first-child').addClass('active')

			$('[id*="references"] .references__logos').slick({
				dots: false,
				arrows: false,
				infinite: true,
				speed: 300,
				autoplay: true,
				autoplaySpeed: 1000,
				slidesToShow: 1
			})

		}

		// small phone
		if (window.innerWidth <= 320) {

			$('[id*="references"] .references__logos .col:first-child').addClass('active')

			$('[id*="references"] .references__logos').slick({
				dots: false,
				arrows: false,
				infinite: true,
				speed: 300,
				autoplay: true,
				autoplaySpeed: 1000,
				slidesToShow: 1
			})

		}






		// contact page custom checkbox

		// var label = $('.page .wpcf7 .wpcf7-list-item')
		// label.append('<span class="checkmark"></span>')








		// REFERENCES FULL - GALLERY

		const images = $('.wp-block-gallery a')
		const imagesArr = Array.prototype.slice.call(images);

		imagesArr.forEach(img => {
			$(img).attr('data-lightbox', 'reference_full_lightbox')
		})









		// TWEAK FOR BLOG TILES = go to data-link href, because we can not have a href on parent element wrapping the_tags(), it would destroy the html markup

		// function openInNewTab(url) {
		//   var win = window.open(url, '_blank');
		//   win.focus();
		// }



		// let tile = $('#tiles_of_posts .tile');
		//
		// $(tile).on('click mouseup', e => {
		//
		//   e.preventDefault();
		//
		//   const url = $(e.target).data('link')
		//
		//   if( e.which == 2 ) {
		//     // openInNewTab($(e.target).data('link'))
		//     window.open(url, '_blank').focus()
		//   } else {
		//     window.location.href = url
		//   }
		// })








		// const tiles = $('#tiles_of_posts .tile .bg-img')
		//
		// for (var i = 0; i < tiles.length; i++) {
		//
		//   $(tiles[i]).on('click mouseup', e => {
		//
		//     e.preventDefault();
		//
		//     const url = $(e.target).data('link')
		//     console.log(url);
		//
		//     if( e.which == 2 ) {
		//       // window.open(url, '_blank').focus()
		//     } else {
		//       // window.location.href = url
		//     }
		//   })
		// }










    

    // $('#products .bg_color_stripe_repeater .row').slick({
    //   dots: false,
    //   arrows: true,
    //   infinite: true,
    //   speed: 300,
    //   autoplay: true,
    //   autoplaySpeed: 4000,
    //   slidesToShow: 5,
    //   prevArrow: $('#products .prevArrow'),
    //   nextArrow: $('#products .nextArrow')
    // })

    // equalheight('#products img');

		// PRODUCTS

		// // desktop
		// if (window.innerWidth > 960) {

		// 	// $('#products .bg_color_stripe_repeater .row .col:first-child').addClass('active')

		// 	$('#products .bg_color_stripe_repeater .row').slick({
		// 		dots: false,
		// 		arrows: true,
		// 		infinite: true,
		// 		speed: 300,
		// 		autoplay: true,
		// 		autoplaySpeed: 4000,
		// 		slidesToShow: 5,
		// 		prevArrow: $('#products .prevArrow'),
		// 		nextArrow: $('#products .nextArrow')
		// 	})
		// }

		// // tablet
		// if (window.innerWidth >= 768 && window.innerWidth < 960) {

		// 	// $('#products .bg_color_stripe_repeater .row .col:first-child').addClass('active')

		// 	$('#products .bg_color_stripe_repeater .row').slick({
		// 		dots: false,
		// 		arrows: false,
		// 		infinite: true,
		// 		speed: 300,
		// 		autoplay: true,
		// 		autoplaySpeed: 1000,
		// 		slidesToShow: 2
		// 	})

		// }

		// // medium / large phone
		// if (window.innerWidth < 768 && window.innerWidth > 320) {

		// 	// $('#products .bg_color_stripe_repeater .row .col:first-child').addClass('active')

		// 	$('#products .bg_color_stripe_repeater .row').slick({
		// 		dots: false,
		// 		arrows: false,
		// 		infinite: true,
		// 		speed: 300,
		// 		autoplay: true,
		// 		autoplaySpeed: 1000,
		// 		slidesToShow: 1
		// 	})

		// }

		// // small phone
		// if (window.innerWidth <= 320) {

		// 	// $('#products .bg_color_stripe_repeater .row .col:first-child').addClass('active')

		// 	$('#products .bg_color_stripe_repeater .row').slick({
		// 		dots: false,
		// 		arrows: false,
		// 		infinite: true,
		// 		speed: 300,
		// 		autoplay: true,
		// 		autoplaySpeed: 1000,
		// 		slidesToShow: 1
		// 	})

		// }










		// even width/height of child page tiles
		const tileImg = $('.child-page__tile .tile-img')
		const tileImgAfter = $('.child-page__tile .tile-img-overlay')
		const width = tileImg.width()
		tileImg.height(width)
		tileImgAfter.height(width)








		// const whyconnectwithus = $('[id*="whyconnectwithus-"]')
		// const contactaboutus = $('[id*="contactaboutus-"]')
		// // console.log(whyconnectwithus.closest(contactaboutus))
		// // console.log(contactaboutus.closest(whyconnectwithus))
		// // contactaboutus.prev(whyconnectwithus).css({ "marginTop": 0 })

		// console.log(whyconnectwithus.next(contactaboutus));
		
		// $(whyconnectwithus.next(contactaboutus)).css({ "marginTop": 0 })







	})
})(jQuery, window);
