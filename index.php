<?php

require_once "Speedometer.php";

echo "<br>";
echo "<hr>";
echo "<h1>Conversion de km en miles : ";
echo "<hr>";
echo "<h2> 10 km: " . Speedometer::convertKmToMiles(10) . "</h2>";
echo "<br>";
echo "<h2> 42 km : " . Speedometer::convertKmToMiles(42) . "</h2>";
echo "<br>";
echo "<h2> 150 km : " . Speedometer::convertKmToMiles(150) . "</h2>";
echo "<br>";
echo "<hr>";
echo "<h1>Conversion de miles en km : ";
echo "<hr>";
echo "<h2> 6.21 miles: " . Speedometer::convertMilesToKm(6.21) . "</h2>";
echo "<br>";
echo "<h2> 18 miles : " . Speedometer::convertMilesToKm(18) . "</h2>";
echo "<br>";
echo "<h2> 150 miles : " . Speedometer::convertMilesToKm(150) . "</h2>";
echo "<br>";
echo "<hr>";