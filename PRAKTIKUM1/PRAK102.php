<?php
$jariJari = 4.2;
$tinggi = 5.4;
$panjang = 8.9;
$lebar = 14.7;
$sisi = 7.9;

$luasAlas = $panjang * $lebar;

$volume = 1 / 3 * $luasAlas * $tinggi;

// $luasPermukaan = $luasAlas + (4 * $luasTegak);
printf("Rumus Luas Limas Persegi Panjag<br>");
printf("Luas Alas: Panjang x Lebar<br>");
printf("Luas Alas: $panjang m  x $lebar m<br>");
printf("Volume: 1/3 x Luas Alas x Tinggi<br>");
printf("Volume: 1/3 x $luasAlas m2 x $tinggi m<br>");
printf("Hasil: %.3f m3", $volume);


?>