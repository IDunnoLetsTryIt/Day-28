<?php

require_once 'DB.php';
require_once 'Region.php';

DB::connect('localhost', 'world','root', '');

$id = $_GET['id'] ?? null;

$region = DB::selectOne("SELECT * FROM `regions` WHERE `id` = ?", [$id], Region::class);
$region -> delete();

echo 'Region deleted.';
