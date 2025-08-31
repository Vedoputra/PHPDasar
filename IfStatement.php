<?php

$nilai = 60;
$absen = 61;

if($nilai >= 90 && $absen >= 90){
    echo " Nilai anda A" . PHP_EOL;
} else if($nilai >= 80 && $absen >= 80){
    echo "nilai anda B". PHP_EOL;
} else if ($nilai >= 70 && $absen >= 70){
    echo "Nilai anda c". PHP_EOL;
} else if ($nilai >= 60 && $absen >= 60){
    echo "nilai anda e" . PHP_EOL;
}else {
    echo "anda tidak lulus" . PHP_EOL;
}

if($nilai >= 90 && $absen >= 90):
    echo " Nilai anda A" . PHP_EOL;
 elseif($nilai >= 80 && $absen >= 80):
    echo "nilai anda B". PHP_EOL;
 elseif ($nilai >= 70 && $absen >= 70):
    echo "Nilai anda c". PHP_EOL;
 elseif ($nilai >= 60 && $absen >= 60):
    echo "nilai anda e" . PHP_EOL;
 else:
    echo "anda tidak lulus" . PHP_EOL;
 endif;