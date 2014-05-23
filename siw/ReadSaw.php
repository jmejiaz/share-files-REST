<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 
 */

class ReadSaw {

    public $listSaw = array();

    public function read() {

        $xml = simplexml_load_file("config/saw.xml");

        foreach ($xml->children() as $child) {
            $this->listSaw[] = $child;
        }
        
     return $this->listSaw;
    }

}
