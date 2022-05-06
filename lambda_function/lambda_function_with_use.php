<?php 
$delta = 5;
$f1 = function ($a, $b) use ($delta){
	//Biến delta bên trong hàm khác biến delta bên ngoài hàm
	$c = $a + $b + $delta;
	$delta += 100;
	return $c;
};

echo $f1(3, 4);
echo "<br>";
echo $delta;

$d = 5;
function tong($a, $b) {
	global $d;
	$c = $a + $b + $d;
	$d += 100;
	return $c;
}
echo "<br>";
echo tong(3, 4);
echo "<br>";
echo $d;

?>