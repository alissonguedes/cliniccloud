'use strict';

/**
 * Escreve o nome do paciente no cartão Médicus24h ao digitar no campo nome
 * Form: Pacientes
 * Aba: Convênio
 */
$('input[name="nome"]').bind('keyup', function() {
	$('#cartao_convenio')
		.find('p#nome_paciente')
		.text($(this).val());
});

$('input[name="cpf"]').bind('keyup', function() {
	$('#cartao_convenio').find('p#cpf_paciente').text($(this).val());
});

$('input[name="data_nascimento"]').bind('keyup change', function() {
	$('#cartao_convenio').find('p#data_nascimento_paciente').text($(this).val());
});

$('select[name="validade[]"]').bind('change', function() {
	var mes = $('select[name="validade[]"]#mes').val();
	var ano = $('select[name="validade[]"]#ano').val();
	var validade = null;
	if (mes && ano) {
		validade = mes + '/' + ano[2] + ano[3];
	}
	$('#cartao_convenio').find('p#validade_convenio_paciente').text(validade);
	$('input[type="hidden"][name="validade"]').val(ano + '-' + mes);
});

$('#print_card').bind('click', function() {

	$('#cartao_convenio').css({
		'overflow': 'unset',
		'height': '12cm'
	});
	$('#cartao_convenio').find('.frente,.verso').removeClass('hide animated flipInX flipOutX').css({
		'display': 'block',
		'opacity': '1'
	});
	$('#cartao_convenio').find('.verso').css({
		'position': 'absolute',
		'top': '6cm',
	})

	html2canvas(document.querySelector("#cartao_convenio"), {
		allowTaint: true,
		// foreignObjectRendering: true
	}).then(canvas => {
		var image = canvas.toDataURL('image/png');
		$('#modal_cartao_convenio').find('.modal-content').html('<img src="' + image + '" alt="">');
	});

	var title = $('title').text();

	var modal = $('#modal_cartao_convenio').modal({
		onOpenEnd: () => {
			var document_title = title + '-' + $('input[name="nome"]').val().replace(/\s/g, '-') + '_' + moment().format('YYYY-MM-DD_hh-mm-ss');
			$('title').text(document_title);
		},
		onCloseStart: () => {
			$('title').text(title);
			$('#cartao_convenio').css({
				'overflow': 'hidden',
				'height': '5cm'
			});
			$('#cartao_convenio').find('.verso').addClass('hide').css({
				'position': 'absolute',
				'top': '0',
			})
		}
	});
	modal.modal('open');

});

$('[data-trigger="print"]').bind('click', function() {
	$('#modal_cartao_convenio').find('.modal-content').print();
});

$('.credit_card').bind('click', function() {
	if ($(this).find('.frente').is(':visible')) {
		$(this).find('.frente').removeClass('flipInY show').addClass('animated flipOutY').addClass('hide');
		$(this).find('.verso').removeClass('flipOutY hide').addClass('animated flipInY').addClass('show');
	} else {
		$(this).find('.frente').removeClass('flipOutY hide').addClass('animated flipInY').addClass('show');
		$(this).find('.verso').removeClass('flipInY show').addClass('animated flipOutY').addClass('hide');
	}
});

/**
 * Ativa/Inativa os Inputs do convênio médicus24h ou convencional
 */
// $('input[name="associado"]')

/**
 * Ativa/Inativa checkbox e caixa de texto
 * Form: Pacientes
 * Aba: Outras Informações.
 */
$('input[name="obito"]').bind('change', function() {

	var status = $('input[name="status"]');
	var datahora_obito = $('input[name="data_obito"], input[name="hora_obito"]');
	var value = $(this).val();

	if ($(this).prop('checked')) {
		status.prop('checked', false);
		status.attr('disabled', true);
		datahora_obito.attr('disabled', false).parent().find('label').css('color', 'var(--blue-accent-1)');
	} else {
		status.attr('disabled', false);
		datahora_obito.val('').attr('disabled', true).parent().find('label').css('color', '#9e9e9e');
	}

});

/**
 * Ativa/Inativa formulário de convênios
 * Form: Pacientes
 * Aba: Informações de Convênio
 */
$('input[name="associado"]').bind('change', function() {

	if ($(this).prop('checked')) {
		$('#conv_medicus24h').removeClass('hide').find('input,select,textarea').attr('disabled', false);
	} else {
		$('#conv_medicus24h').addClass('hide').find('input,select,textarea').attr('disabled', true);
	}

});

/**
 * Botão para adicionar novo plano à tabela de relação de planos de saúde vinculados ao perfil do paciente
 * Form: Pacientes
 * Aba: Planos
 */
$('#add_plano').bind('click', function() {

	var modal = $('#form_plano_saude');
	var m = modal.modal({
		dismissible: false,
		onCloseStart: () => {
			modal.find('form').find('button[type="reset"]').click();
		}
	});
	m = M.Modal.getInstance(m);
	m.open();

})

/**
 * Tabela de relação de planos de saúde vinculados ao perfil do paciente
 * Form: Pacientes
 * Aba: Planos
 */
$('#plano_saude').find('tbody').find('tr').find('input:radio').bind('change', function() {

	$.ajax({
		url: $(this).data('url'),
		datatype: 'ajax',
		data: {
			default: $(this).val()
		},
		success: (response) => {

		}
	});

});
