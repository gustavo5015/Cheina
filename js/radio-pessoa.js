$(document).ready(function() {
	$('input[name="opcaoCadastro"]').change(function() {
		var valor = $("input[name=opcaoCadastro]:checked").val();
		if(valor == "fisica") {
			$('#razaoSocial, #nomeFantasia, #IE, #cnpj').attr('disabled', 'true');
			$('#cpf').removeAttr('disabled');
		} else if(valor == "juridica") {
			$('#razaoSocial, #nomeFantasia, #IE, #cnpj').removeAttr('disabled');
		}
	})
})