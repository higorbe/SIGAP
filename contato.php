
<!doctype html>
<html lang="pt-br" class="h-100">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Contato</title>

  <!-- Bootstrap CSS -->
  <!--<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->

  <link rel="SHORTCUT ICON" type="imagem/ico" href="./imgSIGAP/icon.ico" />
  <link href="css/bootstrapp.css" rel="stylesheet">
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="./js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">
  

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    .data{
    position: relative;
    left: 39.5rem;
    padding-top: 0.5rem;
    color: white;
  }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
	
	body{
		background-color: #87cefa;
	}
  </style>


  <!-- Custom styles for this template -->
  <link href="sticky-footer-navbar.css" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">

  <header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
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
  </header>

  <!-- Begin page content -->
  <main class="flex-shrink-0">
    <div class="container" >

      <h1 class="mt-5" align="center">Mande sua Sugestão ou Avaliação:</h1>


      <form action="https://formsubmit.co/tccsigap2022@gmail.com" method="POST">
        <div class="form-group">
          <label for="nome">Nome:</label>
          <input type="text" class="form-control" name="name" id="nome" placeholder="Nome" size="40" maxlength="50" required>
        </div>



        <div class="form-group">
          <label for="email">E-mail:</label>
          <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Endereço de e-mail" size="30" maxlength="50" required>
        </div>

        <div class="form-group">
          <label for="descricao">Sugestão ou Avaliação:</label>
          <textarea class="form-control" name="message" id="descricao" placeholder="Sugestão ou Avaliação" rows="3" maxlength="255" required></textarea>
        </div>
        <br>
		
		<input type="hidden" name="_captcha" value="false"/> 
		<input 
			type="hidden" 
			name="_next" 
			value="http://sigap.atspace.eu/obrigado.php"
		/>
        
		
        <!-- com problema 
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="checkConcordo">
          <label class="form-check-label" for="checkConcordo">Estou ciente que o tempo de resposta é de 2 a 3 dias úteis.</label>
        </div>-->
        <p>
          <input type="submit" class="btn btn-dark" name="enviar" value="Enviar">
          &nbsp;&nbsp;&nbsp;&nbsp;
          <input type="reset" class="btn btn-dark" name="limpar" value="Limpar">
        </p>
      </form>
    </main>

    <footer class="footer mt-auto py-3 bg-light">
      <div class="container">
         <span style="color: #87cefa; font-weight: bold">SIGAP
        
        <span style="margin-left: 38%;">Higor Bernardes da Silva |
        Myara Alehandra Barg |
        Vinicius Santos Vicente - TCC 3m1</span>
      </span>
      </div>
    </footer>


    <script src="js/bootstrap.bundle.min.js.map" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
  </html>
