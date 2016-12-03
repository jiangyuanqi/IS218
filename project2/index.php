<?php
namespace Project2;

header('Content-type: text/plain');

include "lib/bootstrap.php";

$name = 'CSVReader.php';

$bb = new Autoloader;
$bb -> loader($name);

$obj = new getHtml;
$aData = $obj ->  getCSVdata('lib/info1.csv');

print_r($aData);
?>