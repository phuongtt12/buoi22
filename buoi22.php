<?php 
	$a = "Hello";
	$b = "World";
	// $c = $a ." ". $b;
	$c = "$a $b";
	echo $c;
	echo "<br>";
	// $d = [5,9];
	// $e = "$a $d[1]";
	// echo $e;

	// numric array (mảng có chỉ số là số)
	$d = [5,9,2];
	var_dump($d);
	$e = [0 => 5, 1 =>9, 2 => 2];
	var_dump($e);

	// associative array (mảng kết hợp - có chỉ số là chữ)
	$f = ["toan" => 5, "ly" => 9, "hoa" => 2];
	echo $f["ly"];
	$f["ly"] = 10;
	var_dump($f);

	$sum = 0;
	foreach ($f as $mon => $diem) {
		$sum += $diem;
		
	}
	echo $sum;
	echo "<br>";

	//bài tập 1
	$sum2 = 0;
	for ($i=3; $i <= 15; $i++) { 
		$sum2 += $i;
	}
	echo $sum2;
	echo "<br>";
	//bài tập 2
	$sum3 = 0;
	$arr = [3,5,4,9,17,20];
	for ($i=0; $i <= count($arr) - 1 ; $i++) { 
		$sum3 += $arr[$i];
	}
	echo $sum3;
	echo "<br>";

	//bai tap 3
	$sum4 = 0;
	$arr = [3,5,4,9,17,20];
	for ($i=0; $i <= count($arr) - 1 ; $i++) { 
		if($arr[$i] % 2 == 0){
			$sum4 += $arr[$i];
		}
	}
	echo $sum4;
	echo "<br>";

	// mảng nhiều chiều là mảng, phần tử có giá trị là mảng
	$dssv = [
				"nam" => ["toan"=> 3, "ly" => 2, "hoa" => 7],
				"nhan" => ["toan" => 6, "ly" => 9, "hoa" => 4],
				"trung" => ["toan" => 3, "ly" => 10, "hoa" => 3],
			];
	echo $dssv["nhan"]["ly"];

	$g = [3,5,9,4,2,8];
	//break:
	//cộng từ trái qua phải gặp số 9 thì ko cộng số 9 thoát luôn
	//kết quả mong chờ là 8 
	$sum5 = 0;
	for ($i=0; $i <= count($g) - 1 ; $i++) { 
		if ($g[$i] == 9) {
			// thoát khỏi vòng lặp
			break;
		}
		$sum5 += $g[$i];
	}
	echo "<br>";
	echo $sum5;
	//continue
	//còng từ trái qua phải, chỉ cộng các con số nhỏ hơn 5
	// kết quả mong chò
	$sum5 = 0;
	for ($i=0; $i <= count($g) - 1 ; $i++) { 
		if ($g[$i] >= 5) {
			//quay lại for lặp tiếp, ko chạy code phía sau continue
			continue;
		}
		$sum5 += $g[$i];
	}
	echo "<br>";
	echo $sum5;

	//hàm
	function tong($a, $b) {
		$c = $a + $b;
		return $c;
	}
	echo "<br>";
	echo tong(5, 8);

	// hàm tham trị ko có dấu &, có dấu & là truyền tham số theo tham chiếu
	function tang1DonVi(&$a) {
		$a++;
	}
	$a = 100;
	tang1DonVi($a);
	echo "<br>";
	echo $a; //$a=101
?>