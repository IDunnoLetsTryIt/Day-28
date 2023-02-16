<?php
require_once "DB.php";
require_once "DB_functions.php";
require_once "Region.php";

DB::connect('localhost', 'world', 'root', '');

$data= DB::select("SELECT * from `regions`", [], Region::class);

var_dump($data);

$region = new Region;


$region -> name= "Central America";
