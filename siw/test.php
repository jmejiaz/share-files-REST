<?php

  require_once './ReadSaw.php';
  
  $listSaw = array();
  
  //$saw = new ReadSaw();

  
 $readSaw = new ReadSaw();
 $listSaw = $readSaw->read();
 
 
 foreach ($listSaw as &$value) {
    echo $value;
} 
  

