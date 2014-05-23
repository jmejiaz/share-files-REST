<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$a = $_GET["pattern"];
$list = array();

$json = file_get_contents('http://localhost/saw/list.php');
$obj = json_decode($json);

foreach ($obj as &$value) {

    if (strpos($value->filename, $a) !== false) {
        $list[] = array('filename' => $value->filename,'url' => $value->url);
    }
    
}
echo json_encode($list);