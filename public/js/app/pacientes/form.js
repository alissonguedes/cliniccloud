'use strict';

/**
 * Ativa/Inativa os Inputs do convênio médicus24h ou convencional
 */
// $('input[name="conveniado"]')

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
