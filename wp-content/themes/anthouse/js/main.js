jQuery(document).ready(function() { 
	jQuery('.uk-projects-slider').slick({
		dots: true,
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		swipe: true,
		responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				infinite: true,
				arrows : false
			}
		},
		{
			breakpoint: 600,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows : false
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows : false
			}
		}
		]
	});
});


;(function($){
	$('.uk-translation a') .click(function(e) {
		e.preventDefault();
		$('.uk-translation a').removeClass('uk-on');
		$(this).addClass('uk-on');
	});

	$('#projectFilterMenu').on('click','li a',function(e){
		e.preventDefault();

		$('.uk-filter-project').children().remove();

		var filterType = $(this).data('filter');
		$.get(MAIN.ajax,{
			filter_type:filterType,
			beforeSend: function() {
				$('#ajaxSpinner').show();
			},
			action:'filter_projects'}, function(response){
				$('.uk-filter-project').html(response);
				$('#ajaxSpinner').hide();
			});
	})

	$('.uk-job-search-button').on('click', function(e){

		e.preventDefault();

		$('.uk-table-job').children().remove();

		var filterQuery = $('.uk-job-search-input').val();
		var filters = $('.uk-job-checkbox').map (function(item) {
			if ($(this)[0].checked) {
				return $(this).attr('data-filter');
			}
		}).get();

		$.get(MAIN.ajax,{
			filter_query:filterQuery,
			filters:filters,
			// beforeSend: function() {
			// 	$('#ajaxSpinner').show();
			// },
			action:'filter_job'}, function(response){

				$('.uk-table-job').html(response);
				// $('#ajaxSpinner').hide();
			});
	});

	var url=document.location.href;
	$.each($("#primary-menu a"),function(){
		if(this.href==url){$(this).addClass('active-item');};
	});

	$(window).on('load', function () {
		var $preloader = $('#page-preloader'),
		$spinner = $preloader.find('.cssload-thecube');
		$spinner.fadeOut();
		$preloader.delay(350).fadeOut('slow');
	});



})(jQuery);