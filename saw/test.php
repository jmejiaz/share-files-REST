<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//$dir = 'http://localhost/saw/files';

class test{
    
 public $folder = array(); 
 public $ruta;

 public function __construct($dir) {
     $this->listFolderFiles($dir);
 }


function listFolderFiles($dir) {
    $ffs = scandir($dir);
    
    foreach ($ffs as $ff) {
        if ($ff != '.' && $ff != '..') {
            
          
            if (is_dir($dir . '/' . $ff)){
               
            }
            else{
                $this->folder[]= $this->ruta.$ff; 
            }
            
            if (is_dir($dir . '/' . $ff)){
                $this->ruta = $this->ruta.'&#47'.$ff.'&#47';
                $this->listFolderFiles($dir . '/' . $ff);
            }
        }
    } 
    
    
   

}

}

