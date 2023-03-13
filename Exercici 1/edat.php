<?php

  $edat = $_POST['edat'];

  function comprovarEdat($edat){
    if($edat %2 == 0){
      echo "parell";
    }
    else{
      echo "imparell";
    }
  }

  comprovarEdat($edat);

?>