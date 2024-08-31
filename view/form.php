<!doctype html>
<html lang="pt-br" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<meta name="author" content="Marley de S. Santos">

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="../assets/icons/favicon.ico">

	<title>Envio de Documentos</title>

	<link rel="stylesheet" type="text/css" href="../assets/css/form.css">
</head>

<body>
	<!-- Progress bar -->
	<?php include "../assets/components/progress-bar.php"; ?>

	<!-- Form -->
	<div class="container-form">

		<!-- Title -->
		<div class="title-form">
			<h2>Informações Pessoais</h2>
		</div>

		<!-- Inputs -->
		<div class="form-box">
			<div class="one">

				<div class="">
					<label for="">Nome completo</label>
					<input type="text" name="" id="" placeholder="" required>
				</div>

				<div class="">
					<label for="">Sexo</label>
					<div class="">
						<div class="">
							<input type="radio" name="sexo" id="" value="m">
							<span>Masculino</span>
						</div>

						<div class="">
							<input type="radio" name="sexo" id="" value="f">
							<span>Feminino</span>
						</div>
					</div>
				</div>

			</div>

			<div class="two">
				<div class="two-1">
					<div class="">
						<label for="">Data de nascimento</label>
						<input type="date" name="" id="" required>
					</div>

					<div class="">
						<label for="">CPF</label>
						<input type="text" name="" id="">
					</div>
				</div>

				<div class="two-2">
					<div class="">
						<label for="">RG</label>
						<input type="text" name="" id="">
					</div>

					<div class="">
						<label for="">UF-RG</label>
						<select name="" id="">
							<option value="">Opção</option>
						</select>
					</div>
				</div>
			</div>

			<div class=""></div>
		</div>
	</div>
</body>

</html>