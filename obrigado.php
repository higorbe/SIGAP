<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Hugo 0.88.1">
	<title>Agradecimento</title>

    <link rel="SHORTCUT ICON" type="imagem/ico" href="./imgSIGAP/icon.ico" />
	<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/pricing/">
	<link href="css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/attr.css" rel="stylesheet">
	<script src="js/func.js"></script>
	<script src="./js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link href="css/bootstrap.css" rel="stylesheet">
	<script src="js/valida_assinatura.js"></script>
	<script type="text/javascript" src="js/leitura.js"></script>

	<script src="./js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous"></script>

		<style>
			.form-control:disabled, .form-control[readonly] {

				margin: 5px;
			}
			
			body{
				
			background-color: #87cefa;
			
			}
		</style>

</head>
<header>
	<!-- Fixed navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08"
				aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse justify-content-md-left" id="navbarsExample08">
				<ul class="navbar-nav">
				
					<li class="nav-item">
						<a class="nav-link active" aria-current="page"> </a>
					</li>
		  
					  <li style="position: absolute; margin-top:-13px; margin-left:5%;">
						<a class="nav-link active" href="index.php"><img src="./imgSIGAP/icon.png" width="10%" height="10%"></a>
					  </li>
					  
					  <li class="nav-item" style="padding-left:100px;">
						<a class="nav-link active" href="index.php"><b>SIGAP</b></a>
					  </li>
				</ul>

				 <p class="data" style="padding-left:300px;">
          <script>
            var data = new Date();
            var dia = String(data.getDate()).padStart(2, '0');
            var mes = String(data.getMonth() + 1).padStart(2, '0');
            var ano = data.getFullYear();
			var hora = String(data.getHours()).padStart(2, '0');        
			var min  = String(data.getMinutes()).padStart(2, '0');
			
            dataAtual = "⠀⠀" + hora +  ':'  + min + '<br>' + dia + '/' + mes + '/' + ano ;
            document.write(dataAtual);
          </script>
        </p>

			</div>
		</div>
	</nav>


	<script type="text/javascript">

		// Pega os valores enviados da página index e coloca nas váriáveis curso e preco
		var curso = queryString("curso");
		var preco = queryString("preco");

	</script>
</header>

<body>
	<main class="flex-shrink-0">
		<div class="container">
			<br><br><br><br><br><br><br>
			<center><h1 class="fw-light"><b>Obrigado, seu Sugestão/Avaliação foi enviada com sucesso!!!</b></h1></center><br>
			<br><br><br><br><br><br><br><br><a href="index.php"><button type="button" href="index.php" class="btn btn-dark btn-lg btn-block">⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀Voltar⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀</button></a>
		</div>
		</div>
		</div>
		</div>
	</main>
</body>

</html>
<script type="text/javascript" src="js/leitura.js"></script>