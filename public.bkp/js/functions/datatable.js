'use strict';

var table;
var url;
var datatable;
var order = 1;
var direction = 'asc';

var Datatable = {

	constructor: (element) => {

		table = element ? element : $('table.dataTable');
		url = table.data('url') ? table.data('url') : window.location.href;

		if (!table || (typeof table.data('ajax') !== 'undefined' && !table.data('ajax'))) {
			return false;
		}

		Datatable.create();

	},

	reload: () => {
		datatable.draw();
	},

	create: () => {

		if (typeof table.data('ajax') !== 'undefined' && !table.data('ajax')) {
			return false;
		}

		datatable = table.DataTable({
			retrieve: true,
			serverSide: true,
			processing: true,
			scrollCollapse: true,
			displayLength: 50,
			ajax: {
				type: 'get',
				dataType: 'html',
				url: url,
				beforeSend: () => {
					progress('in', 'bar');
				},
				success: (response) => {

					var parser = new DOMParser();
					var content = parser.parseFromString(response, 'text/html');
					var tr;

					table.find('tbody').html(response).find('#pagination, #info').remove();

					table.find('tr').each(function() {

						tr = $(this);

						var modal = tr.data('target');
						var is_modal = /^modal_[a-z]+/i.test(modal);
						var disabled = false;

						// Aqui, verifico se a coluna clicada é desabilitada
						$(this).find('td').on('click', function() {
							if ($(this).data('disabled')) {
								disabled = true;
							} else {
								disabled = false;
							}
						});

						// Aqui, modifico a forma como cursor é apresentado,
						// de acordo com a propriedade "disabled"
						if ($(this).data('disabled')) {
							$(this).addClass('disabled').find('td').css({
								'cursor': 'text !important'
							});
						}

						// Aqui, verifico se o evento modal deve ser acionado,
						// ao clicar na linha da tabela
						$(this).on('click', function() {
							if (!disabled && tr.data('target') && is_modal) {
								var mod = $('#' + $(this).data('target'));
								var url = $(this).data('url');
								var m = Materialize.modal(mod, url);
								var m = M.Modal.getInstance(m);
								m.open();
							}
						});

						if (!tr.data('target') && !is_modal) {
							if (!$(this).data('disabled') && !disabled) {
								// Adiciona eventos de click a botões de ação
								Request.constructor($(this));
							}
						}

						// if (!disabled && tr.data('trigger') == 'sidenav') {
						// 	Buttons.sidenav(tr);
						// }

						// Ativa o botão de edição na modal.
						Materialize.btn_modal($(this).find('[data-trigger="modal"]'));

					}).find('td').each(function(e) {

						var disabled = false;

						$(this).bind('click', function(e) {

							if (!$(this).data('disabled')) {

								e.preventDefault();
								Request.createElement($(this).parent('tr'));

								var id = $(this).parent('tr').attr('id');

								if ($(this).parent('tr').hasClass('form-sidenav-trigger') && $('.form-sidenav').length) {

									var data = {
										'url': BASE_URL + 'agendamentos/id/' + id,
										'modal': 'agendamento',
										// 'data': {
										// 	'data': date,
										// 	'hora': hour
										// }
									}

									formSidenav(data);

								} else {

								}

							} else {
								disabled = true;
							}

						});

						if ($(this).parent('tr').data('trigger') != 'modal') {

							if (!$(this).data('disabled')) {

								var params = {
									url: $(this).parent('tr').data('url'),
									target: $(this).parent('tr').data('target'),
								}

								Buttons.sidenav($(this), params);

							} else {

								var btn = $(this).find('[data-trigger="sidenav"]');
								var params = {
									url: btn.data('url'),
									target: btn.data('target'),
								}

								Buttons.sidenav(btn, params);
							}
						}

					});

					var pagination = $(content).find('#pagination').html();
					var info = $(content).find('#info').html();

					table.parents('.dataTables_wrapper').find('.dataTables_info').html(info);
					table.parents('.dataTables_wrapper').find('.dataTables_paginate').html(pagination).each(function() {
						Request.constructor($(this));
					});

					table.parents('.dataTables_wrapper').find('.dataTables_processing').hide();
					progress('out');

				},

				error: (error) => {
					var parser = new DOMParser();
					var response = parser.parseFromString(error.responseText, 'text/html');
					alert('Abra o console do navegador para analisar os erros.', 'Existem erros!!!', 'error');
					console.log(response);
					progress('out');
				}

			},
			// sPaginationType: 'materialize',
			oLanguage: {
				sEmptyTable: 'Nenhum dado encontrado.',
				sInfo: '_START_ - _END_ / _TOTAL_',
				sInfoEmpty: 'Nenhum dado encontrado.',
				sInfoFiltered: '_COUNT_ registro(s) encontrado(s).',
				sInfoPostFix: null,
				sInfoThousands: '.',
				sLengthMenu: '_MENU_',
				sLoadingRecords: 'Carregando...',
				sProcessing: '<div class="progress"></div class="indeterminate"></div></div>',
				sZeroRecords: '',
				sSearch: table.data('label') || '',
				sSearchPlaceholder: table.data('placeholder') || '',
				oPaginate: {
					sNext: 'Próximo',
					sPrevious: 'Anterior',
					sFirst: 'Primeiro',
					sLast: 'Último',
				},
				order: [order, direction],
				columnDefs: [{

				}]
			}
		});

		Datatable.search();

	},

	search: () => {

		var search = $('body').find('.dataTable_search');

		if (search) {

			search.bind('keyup paste', function() {
				progress('in', 'bar');
			});

			search.bind('keyup paste', delay(function() {
				datatable.search(this.value).draw();
			}, 200));

			if (search.val()) {
				datatable.search(search.value).draw();
			}
		}

	}

}
