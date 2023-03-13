<?php

  $num = $_POST['num'];

  function contarAmagatall($num){
    for($i = 0; $i < $num; $i+=2){
      echo $i." ";
    }
  }

  contarAmagatall($num);

?>