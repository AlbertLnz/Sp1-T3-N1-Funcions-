<?php

  function isBitten(){

    $rand = rand(1,10); 

    if($rand>5){
      echo "Has sigut mossegat [".$rand."/10]";
    }else{
      echo "NO has sigut mossegat [".$rand."/10]";
    }

  }

  isBitten();

?>