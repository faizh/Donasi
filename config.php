<?php
require_once __DIR__ . "/vendor/autoload.php";

$connection = new MongoDB\Driver\Manager();
$db = (new MongoDB\Client)->dbdonasi;

$collection = (new MongoDB\Client)->dbdonasi->tdata;

$result = $collection->find();

?>