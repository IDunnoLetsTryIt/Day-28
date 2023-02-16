<?php

require_once 'DB.php';
require_once 'DB_functions.php';
require_once 'Region.php';

DB::connect('localhost', 'world', 'root', '');

$id = $_GET['id'] ?? null;

if (isset($id)) {
    $region = DB::selectOne("SELECT * FROM `regions` WHERE `id` = ?", [$id], Region::class);
} else {
    $region = new Region();
}

$region->name = 'Central Africa';
$region->slug = 'central-africa';
$region->save();
echo '<pre>';
var_dump($region);
echo '</pre>';
