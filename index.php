<?php

require "Mobil/Mobil.php";
require "Mobil/Toyota.php";
require "Mobil/Honda.php";
require "Calculator.php";

require "vendor/autoload.php";

$Toyota = new Dummy\Mobil\Toyota(" Toyota Fortuner ", 10);
$calculator = new Dummy\Calculator($Toyota);
echo "jarak maksimum ".$Toyota->getMerk().$calculator->hitungJarak()."Km";
echo "<hr>";
$Honda = new Dummy\Mobil\Honda("Honda CRV", 10);
$calculator = new Dummy\Calculator($Honda);
echo "jarak maksimum ".$Honda->getMerk().$calculator->hitungJarak()."Km";

