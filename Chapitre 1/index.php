<?php
$nom = "oumaima";
$age = 20;
$prix = 17.99;
$estConnecte = true;

echo "Nom : " . $nom . "<br>";
echo "Âge : " . $age . "<br>";
echo "Prix : " . $prix . " €<br>";
echo "Connecté : " . ($estConnecte ? "Oui" : "Non") . "<br>";

echo "<br>";
var_dump($nom);

echo "<br><br>";

$nombre = "10";
$nombreInt = (int)$nombre;
echo "Conversion : " . $nombreInt;

$nom = "Alice";
var_dump($nom);
