<?php
$gender = "Wanita";

$salam = null;
if ($gender == "PRIA") {
    $salam = "HI bro";
} else {
    $salam = "HI Nona";
}

echo $salam . PHP_EOL;

$gender = "PRIA";
$salam = $gender == "PRIA" ? "Hi bro": "Hi Nona";

echo $salam . PHP_EOL;
