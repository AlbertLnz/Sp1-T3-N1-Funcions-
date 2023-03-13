<?php

  $nom = $_POST['nom'];
  $nota = $_POST['nota'];

  function resultadoNotas($nom, $nota){

    echo $nom.", estas: ";
    if($nota >= 6){
      echo "Primera Divisió (nota >=6)";
    }
    else if($nota >= 4.5){
      echo "Segona Divisió (nota >=4,5)";
    }
    else if($nota >= 3.3){
      echo "Tercera Divisió (nota >=3,3)";
    }
    else{
      echo "Reaprovarà (nota < 3,3)";
    }
  }

  resultadoNotas($nom, $nota);

?>