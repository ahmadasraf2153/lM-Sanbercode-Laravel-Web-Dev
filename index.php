<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>oop animal</title>
</head>
<body>

<?php
require_once "Animal.php";
require_once "Ape.php";
require_once "Frog.php";

echo "<h2>Release 0</h2>";

$sheep = new Animal("shaun");
echo "Name : " . $sheep->name . "<br>";
echo "Legs : " . $sheep->legs . "<br>";
echo "Cold Blooded : " . $sheep->cold_blooded . "<br>";

echo "<hr>";

echo "<h2>Release 1</h2>";

$sungokong = new Ape("kera sakti", "No", 2);
echo "Ape name : " . $sungokong->name . "<br>";
echo "Ape legs : " . $sungokong->legs . "<br>";
echo "Ape cold blooded : " . $sungokong->cold_blooded . "<br>";
echo "Ape yell : ";
$sungokong->yell();

echo "<br><br>";

$kodok = new Frog("buduk", "Yes", 4);
echo "Frog name : " . $kodok->name . "<br>";
echo "Frog legs : " . $kodok->legs . "<br>";
echo "Frog cold blooded : " . $kodok->cold_blooded . "<br>";
echo "Frog jump : ";
$kodok->jump();
?>

</body>
</html>
