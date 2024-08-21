<!doctype html>
<html lang="pt-br" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<meta name="author" content="Marley de S. Santos">

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="assets/icons/favicon.ico">

	<title>Envio de Documentos</title>

	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
</head>

<body>

	<!-- Data confirmation modal -->
	<?php include "assets/components/modal-confirm-data.php"; ?>

	<!-- Dialog box for help -->
	<?php include "assets/components/dialog-box.php"; ?>

	<header>
		<div class="info-container">
			<h1>Formulário de Análise de Crédito</h1>
			<p class="information">Este formulário visa a coleta de dados e documentos para fins de <strong id="stg">Avaliação de Crédito para Locação de Imóvel.</strong><br><br><strong>Tenha consigo alguns documentos</strong></p>

			<ul class="list">
				<li>Documento de Identidade com RG e CPF</li>
				<li>Certidão de Nascimento ou Casamento</li>
				<li>Comprovante de Residência</li>
				<li>Comprovante de Renda - Holerites ou Extratos</li>
			</ul>

			<p>Clique no botão abaixo para acessar</p>
		</div>
	</header>

	<main>
		<div class="confirm">
			<form action="" method="post">
				<div class="input-unique">
					<input type="checkbox" id="confirm">
					<p>Concordo com os
						<span id="terms" title="Leia as Condições e Termos">Termos e Condições</span>
					</p>
				</div>
			</form>
		</div>

		<div class="access-btn">
			<a href="view/form.php" id="goToForm" class="disabled-link">
				<span>Acessar</span>
				<img src="assets/icons/arrowUp.svg" alt="">
			</a>
		</div>
	</main>


	<div class="help" id="help" title="Precisa de ajuda?">
	    <span>Ajuda</span>
        <img src="assets/icons/helpIcon.svg" alt="">
	</div>

	<footer></footer>

	<!-- Help dialog -->
	<script type="text/javascript" src="assets/javascript/help.js"></script>

	<!-- Modal confirm data -->
	<script type="text/javascript" src="assets/javascript/modal-confirm-data.js"></script>
</body>

</html>
