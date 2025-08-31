<?php

$nilai = "";

switch ($nilai){
    case "A":
        echo " Nilai anda > 90". PHP_EOL;
        break;
    case "B":
        echo "Nilai anda > 80". PHP_EOL;
        break;
    case "C":
    case "D":
        echo "Nilai anda > 70". PHP_EOL;
        break;
    case "E":
        echo "nilai anda > 60". PHP_EOL;
        break;
    default:
    echo "anda tidak lulus". PHP_EOL;
}