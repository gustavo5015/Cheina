<?php
	if($_POST) {
		if(isset($_POST['opcaoCadastro'])) {
		}
	}
?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="./css/cadastros.css">
	</head>
	<body>
		<div class="container-fluid">
			<?php include('cabecalho.html');?>	
			<section class="conteudo">
				<fieldset>
					<legend>Clientes</legend>

					<span class="glyphicon glyphicon-plus exibirCadastro" aria-hidden="true"><button class="btn btn-success">CADASTRAR</button></span>

					<form action="" method="POST" class="form-horizontal" id="formCadastroCliente">
						<div class="form-group">
							<div class="col-sm-12">
								<input type="radio" name="opcaoCadastro" value="juridica" checked> Pessoa Jurídica
								<input type="radio" name="opcaoCadastro" value="fisica"> Pessoa Física
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-1">
								<label for="nome">ID</label>
								<input type="text" id="nome" class="form-control" readonly>
							</div>
							<div class="col-sm-3">
								<label for="nome">Nome Sobrenome:</label>
								<input type="text" id="nome" class="form-control" required>
							</div>
							<div class="col-sm-3 pessoaFisica">
								<label for="razaoSocial">Razão Social:</label>
								<input type="text" id="razaoSocial" class="form-control" required>
							</div>
							<div class="col-sm-3 pessoaFisica">
								<label for="nomeFantasia">Nome Fantasia:</label>
								<input type="text" id="nomeFantasia" class="form-control" required>
							</div>
							<div class="col-sm-3">
								<label for="apelido">Apelido:</label>
								<input type="text" id="apelido" class="form-control">
							</div>
							<div class="col-sm-3">
								<label for="cnpj">CPF/CNPJ:</label>
								<input type="number" id="cpf-cnpj" class="form-control" required>
							</div>
							<div class="col-sm-3 pessoaFisica">
								<label for="IE">Inscrição Estadual:</label>
								<input type="number" id="IE" class="form-control" required>
							</div>
							<div class="col-sm-3">
								<label for="endereco">Endereço:</label>
								<input type="text" id="endereco" class="form-control" required>
							</div>
							<div class="col-sm-3">
								<label for="bairro">Bairro:</label>
								<input type="text" id="bairro" class="form-control">
							</div>
							<div class="col-sm-3">
								<label for="cep">CEP:</label>
								<input type="number" id="cep" class="form-control" required>
							</div>
							<div class="col-sm-3">
								<label for="cidade">Cidade:</label>
								<input type="text" id="cidade" class="form-control" required>
							</div>
							<div class="col-sm-1">
								<label for="uf">UF:</label>
								<input type="text" id="uf" class="form-control" required maxlength="2">
							</div>
							<div class="col-sm-3">
								<label for="telefone">Telefone Fixo:</label>
								<input type="number" id="telefone" class="form-control">
							</div>
							<div class="col-sm-3">
								<label for="celular">Celular:</label>
								<input type="number" id="celular" class="form-control" required>
							</div>
							<div class="col-sm-3">
								<label for="redeSocial">Rede Social:</label>
								<input type="text" id="redeSocial" class="form-control">
							</div>
							<div class="col-sm-3">
								<label for="email">E-mail:</label>
								<input type="email" id="email" class="form-control" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-1">
								<input type="submit" id="email" class="btn btn-info" value="Cadastrar">
							</div>
						</div>
					</form>
				</fieldset>
				<fieldset>
					<legend>Consultar / Editar</legend>
					<table class="table table-bordered table-condensed">
						<thead>
							<tr>
								<th>ID</th>
								<th>NOME</th>
								<th>CPF/CNPJ</th>
								<th>EMAIL</th>
								<th>t</th>
								<th>t</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>wsdds</td>
								<td>2sdds</td>
								<td>3sds</td>
								<td>4sds</td>
								<td>dsds</td>
								<td>dsds</td>
							</tr>
						</tbody>
					</table>
				</fieldset>
			</section>
			<?php include('rodape.html');?>
		</div>
		<script src="./js/jquery.min.js"></script>
		<script src="./js/funcoes-cadastro.js"></script>
		<script src="./bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>