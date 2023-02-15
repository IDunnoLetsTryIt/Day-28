<?php

require_once 'DB.php';
require_once 'country.php';

DB::connect('127.0.0.1', 'world', 'root', ''); //('localhost', 'database_name', 'username', 'password');

$results = DB::select("
SELECT *
FROM `countries`
WHERE `population`> ?
AND `continent`= ?
ORDER BY `population` ASC;
", [
    20000000, 
    'Europe'
    ],
 'Country'
);

// header('Content-type: application/json');
// echo json_encode($results);
// exit();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($results as $country) :?>
     
        <li> 
            <?=$country->name ?>
            (capital: <?= $country->getCapitalCity()->name ?>)
        </li>
        
        <?php endforeach; ?>
    </ul>
    
</body>
</html>

