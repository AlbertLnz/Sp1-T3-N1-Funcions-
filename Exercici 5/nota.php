<?php

  $nom = $_POST['nom'];
  $nota = $_POST['nota'];


  if($nota >= 6){
    echo "Primera Divisió";
  }
  else if($nota >= 4.5){
    echo "Segona Divisió";
  }
  else if($nota >= 3.3){
    echo "Tercera Divisió";
  }
  else{
    echo "Reaprovarà";
  }


?>