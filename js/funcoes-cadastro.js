$(document).ready(function() {

	$('input[name="opcaoCadastro"]').change(function() {
		var valor = $("input[name=opcaoCadastro]:checked").val();
		if(valor == "fisica") {
			$('.pessoaFisica').css('display', 'none');
		} else if(valor == "juridica") {
			$('.pessoaFisica').css('display', 'block');
		}
	})

	var clicou = true;
	var cadCliente = $('#formCadastroCliente');
	$('.exibirCadastro').on('click', function() {
		if(!clicou) {
			cadCliente.css('display', 'block').fadeOut("slow");
			$(this).removeClass('glyphicon-minus');
			clicou = true;
		} else {
			cadCliente.css('display', 'none').fadeIn("slow");
			$(this).addClass('glyphicon-minus');
			clicou = false;
		}
	})
})