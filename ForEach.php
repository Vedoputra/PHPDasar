<?php

$names = ["Kadek", "Vedo", "Putra"];

for ($i = 0 ; $i < count($names); $i++){
    echo "data ke:$i $names[$i] ". PHP_EOL;
}

foreach ($names as $name){
    echo "data: $name "  . PHP_EOL;
}

foreach ($names as $index => $name){
    echo "data $index: $name "  . PHP_EOL;
}

$person = [
    "FirstName" => "Kadek",
    "MiddleName" => "Vedo",
    "LastName" => "Putra",
];

foreach($person as $key => $value){
    echo "$key : $value" . PHP_EOL;
}