<?php 
	//bai tap 4
	function isTongChan($a, $b) {
		$c = $a + $b;
		if($c % 2 == 0){
			return true;
		}
		return false;
	}

	if(isTongChan(3,6)){
		echo "tong chẵn";
	}
	else{
		echo "tổng lẻ";
	}

	//bài tập 5
	function isPassed($diem) {
		$toan = $diem["toan"];
		$ly = $diem["ly"];
		$hoa = $diem["hoa"];
		$TongDiem = ($toan + $ly) * 2 + $hoa;
		if($TongDiem > 24){
			return true;
		}
		return false;
	}

	$d = ["toan" => 7, "ly" => 4, "hoa" => 8.5];
	$kq = "Rớt";
	if (isPassed($d)){
		$kq = "Đậu";
	}
	echo "<br>";
	echo $kq;

	// bài tập 6 
	function isPassedList($danhSachDiemSV) {
		$dsDau = []; //ds rỗng
		foreach($danhSachDiemSV as $ten => $diem) {
			
			if (isPassed($diem)) {
				$dsDau[] = $ten; //thêm phần tử vào cuối ds
			}
		}
		return $dsDau;
	}


	$ds_diem_sv = [
				"nga" => ["toan" => 7, "ly" => 4, "hoa" => 8.5],
				"nam" => ["toan"=> 1, "ly" => 9, "hoa" => 3.5],
				"nhan" => ["toan" => 7, "ly" => 5, "hoa" => 9.5],	
		];
	$ds_sv_dau = isPassedList($ds_diem_sv);
	var_dump($ds_sv_dau);
 ?>