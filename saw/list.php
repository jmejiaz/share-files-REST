<?php

require './models/File.php';
require './test.php';



$listFiles = array();
$list = array();
$listServers = array();



$xml = simplexml_load_file("config/sharedirs.xml");


foreach ($xml->children() as $child) {
    $listServers[] = $child;
}

foreach ($listServers as &$dir) {
    $folders = new test($dir);
    $files = $folders->folder;
    
    foreach ($files as &$file){
        $list[] = array('filename' => (string) $file, 'url' => "http:&#47&#47localhost&#47saw&#47" . $dir . "&#47" . (string) $file);
    }
    /*
    $files = scandir($dir);

    for ($i = 2; $i <= count($files) - 1; $i++) {
        $list[] = array('filename' => (string) $files[$i], 'url' => "http:&#47&#47localhost&#47saw&#47" . $dir . "&#47" . (string) $files[$i]);
    }
     * 
     */
}
echo json_encode($list);

//print_r($files);
$json = array('list' => $listFiles);




