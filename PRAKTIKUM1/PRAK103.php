<?php

$celcius = 37.841;
$fahrenheit = (9 / 5 * $celcius) + 32;
$reamur = 4 / 5 * $celcius;
$kelvin = $celcius + 273.15;

$celciusFormat = number_format($celcius, 3, ',', '.');
$fahrenheitFormat = number_format($fahrenheit, 4, ',', '.');
$reamurFormat = number_format($reamur, 4, ',', '.');
$kelvinFormat = number_format($kelvin, 4, ',', '.');

echo "Konversi nilai suhu Celcius ke Fahrenheit, Reamur dan Kelvin<br>";
echo "Celcius = $celciusFormat<br><br>";
echo "Fahrenheit (F) = $fahrenheitFormat<br>";
echo "Reamur (R) = $reamurFormat<br>";
echo "Kelvin (K) = $kelvinFormat";

?>