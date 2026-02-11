<?php
function oumaima() {
    echo "im oumaima  ";
}
oumaima();

function ouahabi($a ,$b){
    return $a + $b;
}
echo "le somme:" . ouahabi(5, 6);


function alhassani($nom="oumaima") {
    echo "bien venue" . $nom ;
}
alhassani();

function alhassani2($nom="oumaima") {
    echo "bien venue" . "moi" ;
}
alhassani2();

$nummber = 0;
function idk(){
    static $nummber = 0;
    $nummber++;
    echo $nummber;
}
idk();