<!doctype html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="SHORTCUT ICON" type="imagem/ico" href="./imgSIGAP/icon.ico" />
  <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="css/bootstrapp.css" rel="stylesheet">
  <link href="css/attr.css" rel="stylesheet">
  <script src="js/funcoes.js"></script>
  <script src="./js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <title>SIGAP</title>

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
			<a class="nav-link active" href="index.php"><img src="./imgSIGAP/icon.png" width="10%" height="10%"></a>
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
	<div style="position: absolute;">
		<img src="./imgSIGAP/fundo2.jpg" width="1349px" height="365px">
	</div>
  <main>
    <section class="py-5 text-center container">
      <div class="row py-lg-5" >
        <div class="col-lg-6 col-md-8 mx-auto" style="position: absolute; margin-top:-10px;">
          <h1 class="fw-light" style="color: white; margin-right:-500px;"><b><b>SIGAP</b></b></h1>
          <p class="lead text-muted-black" style="color: white; margin-right:-500px; margin-top:-20px; font-size:26px;"><b><b>O site onde você tirar suas dúvidas de Programação</b></b></p>
          <p>
            <a href="contato.php" class="btn btn my-2" style="margin-right:-500px; background-color:#212529; color:white;"><b>Mande sua Sugestão ou Avaliação aqui!</b></a>
          </p>
        </div>
      </div>
    </section><br><br><br><br><br><br><br>
	

    <form name="dados" action="pag/html.php" onsubmit="return this">
      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col" onmouseover="estacoes('1')" onmouseout="limpa1()" id="curso">
              <div class="card shadow-sm1">
                <img src="imgs/1html.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225"
                  xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#55595c" />
                <center>
                  <label name="curso" id="curso">
                    <text x="50%" y="50%" fill="#eceeef" dy=".3em">Tudo de HTML aqui!</text>

                    </text>
                  </label>
                </center>
                </img>
                <!--  </svg> -->
                <div class="card-body">
                  <p class="card-text"></p>
                  <center>
                    <div id="status1"></div>
                  </center>
                  <div class="d-flex justify-content-between align-items-center">

                    <div class="btn-group">
                      <!-- <button type="button" class="btn btn-sm btn-outline-secondary"><button> -->
                      <input type="submit" class="btn btn-sm btn-outline-secondary" value="Acessar">

                    </div>
                    <small class="text-muted" name="preco" id="preco">Sigap</small>

                  </div>
                </div>
              </div>
            </div>
    </form>


    <form name="dados" action="pag/css.php" onsubmit="return validar(this)">
      <div class="col" onmouseover="estacoes('2')" onmouseout="limpa2()" id="curso">
        <div class="card shadow-sm">
          <img src="imgs/2css.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225"
            xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">

          <rect width="100%" height="100%" fill="#55595c" />
          <center>
            <text x="50%" y="50%" fill="#eceeef" dy=".3em" id="prog1">Tudo de CSS aqui!</text>
          </center>

          </img>
          <!--  </svg> -->
          <div class="card-body">
            <p class="card-text"></p>
            <center>
              <div id="status2"></div>
            </center>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <!-- <button type="button" class="btn btn-sm btn-outline-secondary"><button> -->
                <input type="submit" class="btn btn-sm btn-outline-secondary" value="Acessar">
                
              </div>
              <small class="text-muted">Sigap</small>
            </div>
          </div>
        </div>
      </div>
    </form>

    <form name="dados" action="pag/js.php" onsubmit="return validar(this)">
      <div class="col" onmouseover="estacoes('3')" onmouseout="limpa3()" id="curso">
        <div class="card shadow-sm">
          <img src="imgs/3js.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225"
            xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">

          <rect width="100%" height="100%" fill="#55595c" />
          <center>
            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Tudo de JS aqui!</text>
          </center>
          
          </img>
          <!--  </svg> -->
          <div class="card-body">
            <p class="card-text"></p>
            <center>
              <div id="status3"></div>
            </center>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <!-- <button type="button" class="btn btn-sm btn-outline-secondary"><button> -->
                <input type="submit" class="btn btn-sm btn-outline-secondary" value="Acessar">
              </div>
              <small class="text-muted">Sigap</small>
            </div>
          </div>
        </div>
      </div>
    </form>

    <form name="dados" action="pag/c.php" onsubmit="return validar(this)">
      <div class="col" onmouseover="estacoes('4')" onmouseout="limpa4()" id="curso">
        <div class="card shadow-sm">
          <img src="imgs/4.png" class="bd-placeholder-img card-img-top" width="100%" height="225"
            xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">

          <rect width="100%" height="100%" fill="#55595c" />
          <center>
            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Tudo de C aqui!</text>
          </center>

          </img>
          <!--  </svg> -->
          <div class="card-body">
            <p class="card-text"></p>
            <center>
              <div id="status4"></div>
            </center>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <!-- <button type="button" class="btn btn-sm btn-outline-secondary"><button> -->
                <input type="submit" class="btn btn-sm btn-outline-secondary" value="Acessar">
              </div>
              <small class="text-muted">Sigap</small>
            </div>
          </div>
        </div>
      </div>
    </form>

    <form name="dados" action="pag/c++.php" onsubmit="return validar(this)">
      <div class="col" onmouseover="estacoes('5')" onmouseout="limpa5()" id="curso">
        <div class="card shadow-sm">
          <img src="imgs/5.png" class="bd-placeholder-img card-img-top" width="100%" height="225"
            xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">

          <rect width="100%" height="100%" fill="#55595c" />
          <center>
            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Tudo de C++ aqui!</text>
          </center>

          </img>
          <!--  </svg> -->
          <div class="card-body">
            <p class="card-text"></p>
            <center>
              <div id="status5"></div>
            </center>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <!-- <button type="button" class="btn btn-sm btn-outline-secondary"><button> -->
                <input type="submit" class="btn btn-sm btn-outline-secondary" value="Acessar">
              </div>
              <small class="text-muted">Sigap</small>
            </div>
          </div>
        </div>
      </div>
    </form>

    <form name="dados" action="pag/cs.php" onsubmit="return validar(this)">

      <div class="col" onmouseover="estacoes('6')" onmouseout="limpa6()" id="curso">
        <div class="card shadow-sm">
          <img src="imgs/6.png" class="bd-placeholder-img card-img-top" width="100%" height="225"
            xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">

          <rect width="100%" height="100%" fill="#55595c" />
          <center>
            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Tudo de C# aqui!</text>
          </center>

          </img>
          <!--  </svg> -->
          <div class="card-body">
            <p class="card-text"></p>
            <center>
              <div id="status6"></div>
            </center>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <!-- <button type="button" class="btn btn-sm btn-outline-secondary"><button> -->
                <input type="submit" class="btn btn-sm btn-outline-secondary" value="Acessar">
              </div>
              <small class="text-muted">Sigap</small>
            </div>
          </div>
        </div>
      </div>
    </form>


    <form name="dados" action="pag/python.php" onsubmit="return validar(this)">
      <div class="col" onmouseover="estacoes('7')" onmouseout="limpa7()" id="curso">
        <div class="card shadow-sm">
          <img src="imgs/7.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225"
            xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">

          <rect width="100%" height="100%" fill="#55595c" />
          <center>
            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Tudo de PYTHON aqui!</text>
          </center>

          </img>
          <!--  </svg> -->
          <div class="card-body">
            <p class="card-text"></p>
            <center>
              <div id="status7"></div>
            </center>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <!-- <button type="button" class="btn btn-sm btn-outline-secondary"><button> -->
                <input type="submit" class="btn btn-sm btn-outline-secondary" value="Acessar">
              </div>
              <small class="text-muted">Sigap</small>
            </div>
          </div>
        </div>
      </div>
    </form>

    <form name="dados" action="pag/java.php" onsubmit="return validar(this)">
      <div class="col" onmouseover="estacoes('8')" onmouseout="limpa8()" id="curso">
        <div class="card shadow-sm">
          <img src="imgs/8.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225"
            xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">

          <rect width="100%" height="100%" fill="#55595c" />
          <center>
            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Tudo de JAVA aqui!</text>
          </center>

          </img>
          <!--  </svg> -->
          <div class="card-body">
            <p class="card-text"></p>
            <center>
              <div id="status8"></div>
            </center>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <!-- <button type="button" class="btn btn-sm btn-outline-secondary"><button> -->
                  <input type="submit" class="btn btn-sm btn-outline-secondary" value="Acessar">
              </div>
              <small class="text-muted">Sigap</small>
            </div>
          </div>
        </div>
      </div>
    </form>

    <form name="dados" action="pag/php.php" onsubmit="return validar(this)">
      <div class="col" onmouseover="estacoes('9')" onmouseout="limpa9()" id="curso">
        <div class="card shadow-sm">
          <img src="imgs/9.png" class="bd-placeholder-img card-img-top" width="100%" height="225"
            xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">

          <rect width="100%" height="100%" fill="#55595c" />
          <center>
            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Tudo de PHP aqui!</text>
          </center>

          <input  type="hidden" name="curso" id="curso" value="Curso de PHP completo">
          <input type="hidden" name="preco" id="preco" value="Sigap">


          </img>
          <!--  </svg> -->
          <div class="card-body">
            <p class="card-text"></p>
            <center>
              <div id="status9"></div>
            </center>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <!-- <button type="button" class="btn btn-sm btn-outline-secondary"><button> -->
                  <input type="submit" class="btn btn-sm btn-outline-secondary" value="Acessar">
              </div>
              <small class="text-muted">Sigap</small>
            </div>
          </div>
        </div>
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