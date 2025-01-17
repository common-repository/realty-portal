(function ( $ ) {
	function rp_number_format( number, decimals, dec_point, thousands_sep ) {
		'use strict';
		number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
		var n          = !isFinite(+number) ? 0 : +number,
		    prec       = !isFinite(+decimals) ? 0 : Math.abs(decimals),
		    sep        = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
		    dec        = (typeof dec_point === 'undefined') ? '.' : dec_point,
		    s          = '',
		    toFixedFix = function ( n, prec ) {
			    var k = Math.pow(10, prec);
			    return '' + (Math.round(n * k) / k).toFixed(prec);
		    };
		s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
		if ( s[ 0 ].length > 3 ) {
			s[ 0 ] = s[ 0 ].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
		}
		if ( (s[ 1 ] || '').length < prec ) {
			s[ 1 ] = s[ 1 ] || '';
			s[ 1 ] += new Array(prec - s[ 1 ].length + 1).join('0');
		}
		return s.join(dec);
	}

	function rp_price( price ) {
		'use strict';
		var $currency_position = RP_Property.currency_position,
		    $format;
		switch ( $currency_position ) {
			case 'left' :
				$format = '%1$s%2$s';
				break;
			case 'right' :
				$format = '%2$s%1$s';
				break;
			case 'left_space' :
				$format = '%1$s&nbsp;%2$s';
				break;
			case 'right_space' :
				$format = '%2$s&nbsp;%1$s';
				break;
		}
		price = rp_number_format(price, RP_Property.num_decimals, RP_Property.decimal_sep, RP_Property.thousands_sep)
		return $format.replace('%1$s', RP_Property.currency).replace('%2$s', price);
	}

	jQuery(document).ready(function ( $ ) {
		'use strict';

		var body = $('body');

		/**
		 * Process button action property
		 */
		body.find('.rp-action-post').on('click', 'i', function ( event ) {

			/**
			 * VAR
			 */
			var $$       = $(this),
			    pprocess = $$.data('process'),
			    id       = $$.data('id');

			/**
			 * Process
			 */
			if ( 'edit' === pprocess ) {
				return;
			}

			event.preventDefault();

			if ( 'print' === pprocess ) {

				var printWindow = window.open('', RP_Property.print_label, 'width=700 ,height=842');

				$.ajax({
					url     : RP_Property.ajax_url,
					type    : 'POST',
					dataType: 'html',
					data    : {
						action     : 'rp_create_print',
						property_id: id,
						security   : RP_Property.security
					},
					success : function ( data_print ) {
						try {
							printWindow.document.write(data_print);
							printWindow.document.close();
							printWindow.focus();
						} catch ( e ) {
						}
					}
				});
				return false;
			}
		});

		/**
		 * Process slider in single property
		 */
		var RP_Property_Gallery = $('.rp-property-gallery');

		if ( RP_Property_Gallery.length > 0 ) {

			RP_Property_Gallery.each(function ( index, el ) {
				var property_gallary = $(this);

				property_gallary.find('.property-gallery-top').slick({
					slidesToShow  : 1,
					slidesToScroll: 1,
					arrows        : false,
					fade          : true,
					speed         : 300,
					infinite      : true,
					asNavFor      : property_gallary.find('.property-gallery-thumbnail-list'),
					adaptiveHeight: true
				});

				property_gallary.find('.property-gallery-thumbnail-list').slick({
					slidesToShow  : 2,
					slidesToScroll: 1,
					variableWidth : true,
					infinite      : true,
					speed         : 300,
					centerMode    : true,
					asNavFor      : property_gallary.find('.property-gallery-top'),
					dots          : false,
					focusOnSelect : true,
					arrows        : false,
					responsive    : [
						{
							breakpoint: 991,
							settings  : {
								centerMode: false
							}
						}
					]
				});

				/**
				 * Event prev/next property
				 */
				property_gallary.find('.rp-arrow-next').on('click', function () {
					property_gallary.find('.property-gallery-top').slick('slickNext');
					property_gallary.find('.property-gallery-thumbnail-list').slick('slickNext');
				});

				property_gallary.find('.rp-arrow-back').on('click', function () {
					property_gallary.find('.property-gallery-top').slick('slickPrev');
					property_gallary.find('.property-gallery-thumbnail-list').slick('slickPrev');
				});

			});

		}

		var RP_Price = $('.rp-price');
		/**
		 * Process price slider
		 */
		if ( RP_Price.length > 0 ) {

			RP_Price.each(function () {

				var price             = $(this),
				    min_price         = price.find('.price_min').data('min'),
				    max_price         = price.find('.price_max').data('max'),
				    current_min_price = price.find('.price_min').val(),
				    current_max_price = price.find('.price_max').val();

				price.find(".price-slider-range").slider({
					range  : true,
					animate: true,
					step: 100,
					min    : min_price,
					max    : max_price,
					values : [
						current_min_price,
						current_max_price
					],
					change : function ( event, ui ) {
						var ol_vl = ui.value;
						if ( ol_vl === ui.values[ 0 ] ) {
							price.find('input.price_min').val(ui.values[ 0 ]).trigger('change');
							price.find('.price-results').find('.min-price').html(rp_price(ui.values[ 0 ]));
						}

						if ( ol_vl === ui.values[ 1 ] ) {
							price.find('input.price_max').val(ui.values[ 1 ]).trigger('change');
							price.find('.price-results').find('.max-price').html(rp_price(ui.values[ 1 ]));
						}
					}
				});

			});

		}

		/**
		 * Process area slider
		 */
		var RP_Area = $('.rp-area');
		if ( RP_Area.length > 0 ) {

			RP_Area.each(function () {

				var gsearch_area     = $(this),
				    min_area         = gsearch_area.find('.area_min').data('min'),
				    max_area         = gsearch_area.find('.area_max').data('max'),
				    current_min_area = gsearch_area.find('.area_min').val(),
				    current_max_area = gsearch_area.find('.area_max').val();

				gsearch_area.find(".area-slider-range").slider({
					range  : true,
					animate: true,
					step: 10,
					min    : min_area,
					max    : max_area,
					values : [
						current_min_area,
						current_max_area
					],
					slide  : function ( event, ui ) {
						if ( ui.value === ui.values[ 0 ] ) {
							gsearch_area.find('input.area_min').val(ui.values[ 0 ]).trigger('change');
							gsearch_area.find('.area-results').find('.min-area').html(ui.values[ 0 ] + ' ' + RP_Property.area_unit);
						}

						if ( ui.value === ui.values[ 1 ] ) {
							gsearch_area.find('input.area_max').val(ui.values[ 1 ]).trigger('change');
							gsearch_area.find('.area-results').find('.max-area').html(ui.values[ 1 ] + ' ' + RP_Property.area_unit);
						}
					}

				});

			});

		}

		/**
		 * Process form advanced search property
		 */
		var RP_Advanced_Search_Property = $('.rp-advanced-search-property-form');
		if ( RP_Advanced_Search_Property.length > 0 ) {

			RP_Advanced_Search_Property.each(function () {

				var form_search_property = $(this);


				/**
				 * Process event when clicking button more filter search property
				 */
				var RP_Box_Features = $('.box-show-features');

				if ( RP_Box_Features.length > 0 ) {

					RP_Box_Features.each(function () {

						var $$ = $(this);

						$$.on('click', '.show-features', function ( event ) {
							event.preventDefault();
							form_search_property.find('.rp-box-features').slideToggle('slow');
						});

					});

				}

			});

		}

		/**
		 * Process event save search
		 */
		var rp_save_search = function () {

			if ( $('.rp-box-results-search').length > 0 ) {

				$('.rp-box-results-search').each(function () {
					var box_results_search = $(this);

					box_results_search.find('.save').click(function () {
						var button_save = $(this),
						    data_save   = button_save.data('search');

						/**
						 * Sent request save search to profile
						 */
						$.ajax({
							url       : RP_Property.ajax_url,
							type      : 'POST',
							dataType  : 'json',
							data      : {
								action  : 'rp_save_search',
								security: RP_Property.security,
								results : data_save
							},
							beforeSend: function () {
								button_save.find('> i').removeClass('ion-ios-download-outline').addClass('rp-icon-spinner fa-spin');
							},
							success   : function ( save_search ) {
								try {
									if ( success === save_search.status ) {
										button_save.find('> i').removeClass('rp-icon-spinner fa-spin').addClass('ion-ios-download-outline');
									} else {
										alert('Error');
									}
								} catch ( e ) {
								}
							}
						})

					});

				});

			}

		}

		rp_save_search();

		/**
		 * Process event remove item saved search
		 */
		var rp_remove_saved_search = function () {

			if ( $('.rp-saved-search').length > 0 ) {

				$('.rp-saved-search').each(function () {

					var saved_search_box = $(this);

					saved_search_box.find('.rp-saved-search-item').on('click', '.remove-search', function ( event ) {
						event.preventDefault();
						var button_remove_search = $(this),
						    position_item        = button_remove_search.data('position_item');

						$.ajax({
							url       : RP_Property.ajax_url,
							type      : 'POST',
							dataType  : 'json',
							data      : {
								action       : 'rp_remove_saved_search',
								security     : RP_Property.security,
								position_item: position_item
							},
							beforeSend: function () {
								button_remove_search.find('> i').removeClass('fa-remove').addClass('fa-spinner fa-spin');
							},
							success   : function ( remove_saved ) {
								try {
									button_remove_search.find('> i').removeClass('fa-spinner fa-spin').addClass('fa-remove');
									if ( remove_saved.status === 'success' ) {
										saved_search_box.find('.rp-saved-search-item').remove();
									} else {
										alert('Error');
									}
								} catch ( e ) {
								}
							}
						})

					});

				});

			}

		}

		rp_remove_saved_search();

		/**
		 * Process event upload image
		 */
		var rp_load_upload = function () {

			if ( body.find('.rp-upload').length > 0 ) {

				$('body').find('.rp-upload').each(function ( index, el ) {

					var form_upload   = $(this),
					    browse_button = form_upload.data('browse_button'),
					    container     = form_upload.data('id_wrap'),
					    name          = form_upload.data('name'),
					    allow_format  = form_upload.data('allow_format'),
					    multi_input   = form_upload.data('multi_input'),
					    multi_upload  = form_upload.data('multi_upload'),
					    set_featured  = form_upload.data('set_featured'),
					    drop_element  = form_upload.data('drop_element'),
					    slider        = form_upload.data('slider');

					form_upload.rp_upload_form({
						browse_button: browse_button ? browse_button : false,
						container    : container ? container : false,
						name         : name ? name : false,
						allow_format : allow_format ? allow_format : false,
						multi_input  : multi_input ? multi_input : false,
						multi_upload : multi_upload ? multi_upload : false,
						set_featured : set_featured ? set_featured : false,
						drop_element : drop_element ? drop_element : false,
						slider       : slider ? slider : false
					});


				});

			}

		}
		rp_load_upload();

		var featured_property = function () {
			if ( $('.rp-featured-property-wrap').length > 0 ) {
				$('.rp-featured-property-wrap').each(function () {
					$(this).slick({
						prevArrow: '<i class="prev rp-icon-ion-android-arrow-dropleft-circle"></i>',
						nextArrow: '<i class="next rp-icon-ion-android-arrow-dropright-circle"></i>'
					});

				});
			}
		}
		featured_property();

	});

})(jQuery);