<!doctype html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="SHORTCUT ICON" type="imagem/ico" href="../imgSIGAP/icon.ico" />
  <link href="../css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="./css/bootstrap.c.css" rel="stylesheet">
  <link href="../css/attr.css" rel="stylesheet">
  <script src="../js/funcoes.js"></script>
  <script src="../js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <title>C</title>

</head>

<body>

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
			<a class="nav-link active" href="../index.php"><img src="../imgSIGAP/icon.png" width="10%" height="10%"></a>
		</li>
					  
		<li class="nav-item" style="padding-left:100px;">
			<a class="nav-link active" href="index.php"><b>SIGAP</b></a>
		</li>


        </ul>
		</select>

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


  <!-- GIRD -->

  <main>
    <section class="py-2 text-center container">
          <h1 class="fw-light; style=font-weight: bold;">C</h1>
    </section>

    <form name="dados" action="pag/html.php" onsubmit="return this">
       <div class="album py-5 bg-light">
        <div class="container">
			<img src="../imgSIGAP/c.png" width=40%; height=40%>
			<p style="margin-left:42%; margin-top:-14%; text-align:justify">⠀⠀<b>C</b> é uma linguagem de programação compilada de propósito geral, estruturada, imperativa, procedural, padronizada pela Organização Internacional para Padronização, criada em 1972 por Dennis Ritchie na empresa AT&T Bell Labs para desenvolvimento do sistema operacional Unix.</p>
			<p style="margin-top:8%; font-size:22px;"><b>Vídeos de tutorial a seguir:</b></p>
			<iframe style="margin-top: 2%;" width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLa75BYTPDNKZWYypgOFEsX3H2Mg-SzuLW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		<div class="container" style= "padding-left: 36%; float: right; margin-top:-23.8%">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/Wal10kQKwAE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<br><center><a href="js.php"><button type="button" href="js.php" class="btn btn-light btn-lg" style="background-color: #3847a9c7; color: white;">⠀Voltar⠀</button></a>⠀
					<a href="c++.php"><button type="button" href="c++.php" class="btn btn-light btn-lg" style="background-color: #3847a9c7; color: white;">Próximo</button></center></a>
      </div>
    </form>
  </main>

  <footer class="footer mt-auto py-3">
    <div class="container">
      <span style="color: #f8f9fa; font-weight: bold">SIGAP
        
        <span style="margin-left: 38%";>Higor Bernardes da Silva |
        Myara Alehandra Barg |
        Vinicius Santos Vicente - TCC 3m1</span>
      </span>
    </div>
  </footer>

  <script src="js/bootstrap.bundle.min.js.map"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

</body>

</html>


