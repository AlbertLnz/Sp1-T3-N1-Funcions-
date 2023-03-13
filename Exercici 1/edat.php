<?php

  $edat = $_POST['edat']; //reb les dades del input name="edat"

  if($edat %2 == 0){
    echo "parell";
  }
  else{
    echo "imparell";
  }
 
?>