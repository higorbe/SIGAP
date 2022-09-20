function estacoes(estacao)
  {
    switch (estacao) {
      //document.getElementById("status").style.backgroundColor
      //document.getElementById("status").style.color
      case '1':
        document.getElementById("status1").style.backgroundColor = "#87cefa"
        document.getElementById("status1").style.height= "6.5rem"
        var texto = document.getElementById("status1").innerText = "Aprenda HTML do zero aqui!"
        break;
      case '2':
        document.getElementById("status2").style.backgroundColor = "#87cefa" 
        document.getElementById("status2").style.height= "6.5rem"
        document.getElementById("status2").innerText = "Aprenda CSS do zero aqui!"
        break;
      case '3':
        document.getElementById("status3").style.backgroundColor = "#87cefa" 
        document.getElementById("status3").style.height= "6.5rem"
        document.getElementById("status3").innerText =  "Aprenda JS do zero aqui!"
        break;
      case '4':
        document.getElementById("status4").style.backgroundColor = "#87cefa" 
        document.getElementById("status4").style.height= "6.5rem"
        document.getElementById("status4").innerText =  "Aprenda C do zero aqui!"
        break;
      case '5':
        document.getElementById("status5").style.backgroundColor = "#87cefa" 
        document.getElementById("status5").style.height= "6.5rem"
        document.getElementById("status5").innerText =  "Aprenda C++ do zero aqui!"
        break;
      case '6':
        document.getElementById("status6").style.backgroundColor = "#87cefa" 
        document.getElementById("status6").style.height= "6.5rem"
        document.getElementById("status6").innerText =  "Aprenda C# do zero aqui!"
        break;
      case '7':
        document.getElementById("status7").style.backgroundColor = "#87cefa" 
        document.getElementById("status7").style.height= "6.5rem"
        document.getElementById("status7").innerText =  "Aprenda PYTHON do zero aqui!"
        break;
      case '8':
        document.getElementById("status8").style.backgroundColor = "#87cefa" 
        document.getElementById("status8").style.height= "6.5rem"
        document.getElementById("status8").innerText =  "Aprenda JAVA do zero aqui!"
        break;
      case '9':
        document.getElementById("status9").style.backgroundColor = "#87cefa" 
        document.getElementById("status9").style.height= "6.5rem"
        document.getElementById("status9").innerText =  "Aprenda PHP do zero aqui!"
        break;
    }
  }
              
  function limpa1() {
    document.getElementById("status1").style.backgroundColor = "white";
    document.getElementById("status1").innerText =  "Tudo de HTML aqui!" 
  }
  function limpa2() {
    document.getElementById("status2").style.backgroundColor = "white";
    document.getElementById("status2").innerText =  "Tudo de CSS aqui!" 
  }
  function limpa3() {
    document.getElementById("status3").style.backgroundColor = "white";
    document.getElementById("status3").innerText =  "Tudo de JS aqui!" 
  }
  function limpa4() {
    document.getElementById("status4").style.backgroundColor = "white";
    document.getElementById("status4").innerText =  "Tudo de C aqui!" 
  }
  function limpa5() {
    document.getElementById("status5").style.backgroundColor = "white";
    document.getElementById("status5").innerText =  "Tudo de C++ aqui!" 
  }
  function limpa6() {
    document.getElementById("status6").style.backgroundColor = "white";
    document.getElementById("status6").innerText =  "Tudo de C# aqui!" 
  }
  function limpa7() {
    document.getElementById("status7").style.backgroundColor = "white";
    document.getElementById("status7").innerText =  "Tudo de PYTHON aqui!" 
  }
  function limpa8() {
    document.getElementById("status8").style.backgroundColor = "white";
    document.getElementById("status8").innerText =  "Tudo de JAVA aqui!" 
  }
  function limpa9() {
    document.getElementById("status9").style.backgroundColor = "white";
    document.getElementById("status9").innerText =  "Tudo de PHP aqui!" 
  }