<?php
    $xmlData = new DOMDocument();
    $xmlData->load("index.xml");

    $x = $xmlData->documentElement;

    foreach ($x->childNodes AS $data){
        print $data->nodeName . " " . $data->nodeValue . " ";
    }    
?>