jQuery(document).ready(function ($) {
	/**
	 * Sticky widget
	 */

	const widget = $('.karaten-widget-wrap');
	if (widget.length) {
		const widgetTop = widget.offset().top;

		$(window).scroll(function () {
			let scrollTop = $(window).scrollTop();
			if (scrollTop >= widgetTop) {
				widget.addClass('widget-sticky');
			} else {
				widget.removeClass('widget-sticky');
			}
		});
	}

	if ($('div').is('.kareten-review-slider')) {
		$('.kareten-review-slider').slick({
			dots: true,
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			prevArrow:
				'<button type="button" class="slick-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>',
			nextArrow:
				'<button type="button" class="slick-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>',
			appendDots: '.kareten-review-slider-block',
		});
	}
});
