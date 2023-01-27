'use strict';

var search = $('[data-search]');

search.bind('keyup paste', () => {
	progress('in', 'bar');
});

$('body').find(search).each(function() {

	$(this).bind('keyup paste', delay(() => {

		var url = window.location.href;
		// var url = BASE_URL + $(this).data('search');
		var query = $(this).val();

		var id = $('#dropdown-registros').find('a.active').data('id');
		var value = $('#dropdown-registros').find('a.active').data('value');

		var params = {
			datatype: 'html',
			data: {
				'query': query,
				// 'filter': id,
				// 'value': value
			}
		}

		Http.get(url, params, (response) => {

			var parse = new DOMParser();
			var total;

			total = parse.parseFromString(response, 'text/html');
			total = $(total).find('#total_results').val();

			$('#results').html(response);
			$('#total-results').find('span').text(total + ' registro' + (total > 1 ? 's' : ''));

			Request.constructor($('#results'));
			btn_form_sidenav();

			progress('out', 'bar');

		});

	}, 200));

})
