<?php 
	// var_dump($_GET);
	$toan = $_GET["toan"];
	$ly = $_GET["ly"];
	$hoa = $_GET["hoa"];
	$tongDiem = $toan + $ly + $hoa;
	if ($tongDiem >= 24) {
		echo "Đậu";
	}
	else{
		echo "Rớt";
	}
 ?>