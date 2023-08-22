<?php
// Coding Challenge SMKDEV 22 Agustus 2023

$variabel = 0;

echo "Masukkan nilai variabel = ";
$variabel = readline();

echo "\nNilai variabel = " . $variabel . "\n";

for ($i = $variabel; $i >= 1; $i--) {
    for ($j = $i; $j >= 1; $j--) {
        echo $j . " ";
    }
    echo "\n";
}
?>
