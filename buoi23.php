<?php 
	// Hàm count
	// Array thường
	$a1 = array(4, 5, 7, 9, 12); //[4, 5, 7, 9, 12]
	$size = count($a1);
	echo "Kích thước array thường" .$size;
	echo "<br>";

	// Array 2 chiều
	$a2 = array(
		"nga" => array("toan" => 7, "ly" => 4, "hoa" => 8.5, "sinh" => 3),
		"nam" => array("toan" => 4, "ly" => 2, "hoa" => 3.5),
		"nhan" => array("toan" => 7, "ly" => 5, "hoa" => 9.5),
		
	);
	$size = count($a2);
	// $size = count($a2["nga"]);
	echo "Kích thước array 2 chiều" .$size;
	echo "<br>";

	//Them 1 ptu vào cuối array
	// Cách 1
	$a3 = array(4, 5, 7, 9, 12);
	array_push($a3, 11);
	echo "PHần tử số 11 dc thêm vào cuối arr";
	var_dump($a3);
	//Cách 2
	$a4 = array(4, 5, 7, 9, 12);
	$a4[] = 11; // thêm 11 vào cuối aray $a4
	var_dump($a4);

	// Lấy 1 ptu cuối ra khỏi arr
	$a5 = array(4, 5, 7, 9, 12);
	$e = array_pop($a5);
	var_dump($a5);

	// THem 1 phần tử vào đầu arr
	$a6 = array(4, 5, 7, 9, 12);
	array_unshift($a6, 3);
	var_dump($a6);

	// Lấy 1 ptu dau ra khỏi arr
	$a7 = array(4, 5, 7, 9, 12);
	$e = array_shift($a7);
	var_dump($a7);

	// chèn, xóa, thay thế bất kỳ vị trí nào trong arr
	//$removed_array  = array_splice($a8, $start, $lenght, $added_array);
	//$x = array_splice ()
	$a8 = array(4, 5, 7, 9, 12);
	$x = array_splice($a8, 0, count($a8), ["a", "b", "c"]); //bỏ tham số cuối sẽ là remove, tham số thứ 3 = 0 là thêm vào
	echo "mảng a8";
	var_dump($a8);
	echo "mảng x";
	var_dump($x);

	// Hàm in_array: kiểm tra ptu có trong mảng hay ko
	$a12 = array("a", "b", "c", "d", "e");
	$e = "b";
	if (in_array($e, $a12)) {
		echo "chữ $e có nằm trong array 12"; 
	}
	else {
		echo "chữ $e ko nằm trong array 12"; 
	}
	echo "<br>";

	// Hàm array_key_exists
	$a13 = array("toan" => 3, "ly" => 2, "hoa" => 7);
	$key = "toan";
	if (array_key_exists($key, $a13)) {
		echo " $key có nằm trong array 13";
	}
	else
	{
		echo " $key ko nằm trong array 13";
	}

	// array_count_values: số lần xuất hiện của từng phần tử trong mảng
	$a14 = array("a", "b", "c", "d", "e", "b");
	$duplicate_array = array_count_values($a14); // a:1, b:2, c:1, d:1, e:1
	var_dump($duplicate_array);

	// array_sum & array_product
	$a15 = array(7, 4, 6, 2, 5);
	echo "Tổng:" . array_sum($a15); // tổng
	echo "<br>";
	echo "Tích:" . array_product($a15); //tích

	// Hàm array_merge();
	$a16 = array(7, 4, 6);
	$a17 = array(2, 5);
	$a18 = array_merge($a16, $a17);
	var_dump($a18);

	//is_array
	$a19 = array(2);
	if (is_array($a19)) {
		echo "nó là array";
	}
	else {
		echo "ko phải array";
	}

	// array_unique: xóa phần tử bị trùng
	$a20 = array("a", "b", "b", "c", "d", "e", "b", "b");
	$a21 = array_unique($a20); // phần tử nào xuất hiện rồi sẽ ko tính nữa
	var_dump($a21);

	// array_values : trả về ds các giá trị, ko quan tâm đến key
	$a22 = array("toan" => 3, "ly" => 2, "hoa" => 7);
	$a23 = array_values($a22);
	var_dump($a23);

	// array_keys: trả về ds các key, ko quan tâm đến giá trị
	$a24 = array("toan" => 3, "ly" => 2, "hoa" => 7);
	$a25 = array_keys($a24);
	var_dump($a25);

	// array_reverse - đảo ngược mảng
	$a26 = array("a", "b", "c", "e", "d");
	$a27 = array_reverse($a26);
	var_dump($a27);

	// list - gán phần tử nhanh 
	list($x, $y, $z) = [100, 200, 300];
	echo $x;
	echo "<br>";

	// array_search: tìm kiếm key dựa vào giá trị, tìm dc 1 key rồi thì ko chạy nữa
	$a28 = array("toan" => 3, "ly" => 2, "hoa" => 7);
	$key = array_search(2, $a28);
	echo "key tim thay la: " . $key;

	// sort
	$a29 = array(10, 5, 7, 9, 11);
	sort($a29);
	var_dump($a29);

	// rsort - sắp xếp ngược với sort
	$a30 = array(10, 5, 7, 9, 11);
	rsort($a30);
	var_dump($a30);

	// asort - associative array (dành cho mảng kết hợp) - tăng dần theo giá trị
	$a31 = array("toan" => 3, "ly" => 2, "hoa" => 7);
	asort($a31); //sắp xếp theo giá trị của mảng
	var_dump($a31);

	// ksort - key sort (dành cho mảng kết hợp) - tăng dần theo key
	$a32 = array("tx" => 3, "ly" => 2, "hoa" => 7, "toan1" => 3, "toan2" => 3,);
	ksort($a32); // sắp xếp theo key (alphabet)
	var_dump($a32);

	// arsort: sort gia tri cua array ket hop theo thu tu giam dan
	$a33 = array("toan" => 3, "ly" => 2, "hoa" => 7);
	arsort($a33);
	var_dump($a33);

	// krsort: sort theo key cua arr ket hop theo thứ tự giảm dần
	$a34 = array("toan" => 3, "ly" => 2, "hoa" => 7);
	krsort($a34);
	var_dump($a34);


	//**//
	$a35 = array("Nguyễn", "Văn", "Nam");
	$fullname = implode(" ", $a35); // nguyễn van nam
	echo $fullname;
	// toán tử 3 ngôi
	//Cách 1
	$a = 5;
	if ($a > 4) {
		$b = 1;
	}
	else {
		$b = 2;
	}
	echo "<br>";
	// cách 2
	$b = $a > 4 ? 1 : 2;
	echo $b;
 ?> 

  <?php
  //bài test phỏng vấn TMA
    $a = "234*345*34+88+56*56+45+6*4";
    $arrb = explode("+", $a); // [234*345*34, 88, 56*56, 45, 6*4]
    $d = 0;
    for ($i = 0; $i <= count($arrb)-1; $i++){
       $arrc = explode("*", $arrb[$i]);
        $e = array_product($arrc);
        $d += $e;
    }
    echo $d;

  ?>