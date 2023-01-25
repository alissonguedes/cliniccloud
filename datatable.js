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

							if (!disabled && $(this).parent('tr').data('trigger') && $(this).parent('tr').data('trigger') === 'sidenav') {

								var tr = $(this);
								var url = tr.parent('tr').data('url');
								var div = $(this).parent('tr').data('target');
								var target = $('#' + div);
								var html = null;

								var params = {
									url: url,
									div: div,
									target: target
								};

								Buttons.sidenav(tr, params);

							}

						});


					});

					var pagination = $(content).find('#pagination').html();
					var info = $(content).find('#info').html();

					table.parents('.dataTables_wrapper').find('.dataTables_info').html(info);
					table.parents('.dataTables_wrapper').find('.dataTables_paginate').html(pagination).each(function() {
						Request.constructor($(this));
					});

					table.parents('.dataTables_wrapper').find('.dataTables_processing').hide();
					progress('out');
