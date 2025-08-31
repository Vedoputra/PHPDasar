<?php

for($countiner = 1 ; $countiner <= 50 ; $countiner++){
    if($countiner % 2 == 1){
        continue;
    }
    echo "countiner : " . $countiner . PHP_EOL;
}