<?php
$klas=readline("wie zit er in je kals?");
$hoeveel = explode(" ", $klas);


foreach ($hoeveel as $index => $value) {
	print_r($value . PHP_EOL);
}

