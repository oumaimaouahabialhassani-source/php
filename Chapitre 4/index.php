<?php
$animaux =["chat","chien","lapin"];
echo "premier animal: $animaux[0]<br>";
array_push($animaux, "rat");


foreach ($animaux as $animal){
    echo "animal: $animal <br>";
}

$ecole = [
   
  "class1" =>"math",
  "class2" =>"phisique",
  "class3" =>"svt"
];
echo "matiere: " . $ecole["class1"]."<br>";


$fruits = ["Pomme", "Banane", "mangue"];
unset($fruits[1]); 
