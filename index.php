<?php
require_once('functions.php');
$cars[0]['year'] = 2001 ;
$cars[0]['SPZ'] = "1SZ 4580" ;
$cars[1]['year'] = 1935 ;
$cars[1]['SPZ'] = "9B0 9504" ;
$cars[2]['year'] = 2021 ;
$cars[2]['SPZ'] = "2K6 5468" ;
$cars[3]['year'] = 1975 ;
$cars[3]['SPZ'] = "3S4 9157" ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pole aut a fucknce na stáří auta</title>
</head>
<body>
    <?php
    for ($i=0; $i < count($cars); $i++) { 
        echo $cars[$i]['SPZ'] . " : ";
        getCarInfo($cars[$i]['year']); ?>
        <br> <?php
    }
    ?>
</body>
</html>