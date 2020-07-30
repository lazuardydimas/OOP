<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
require 'animal.php';

$sheep = new Animal("Shaun");

echo $sheep->name;
echo "<br>".$sheep->legs;
echo "<br>".$sheep->cold_blooded;




$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"


echo "<br>";

$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"
echo "<br>".$kodok->legs;






?>




    
</body>
</html>
