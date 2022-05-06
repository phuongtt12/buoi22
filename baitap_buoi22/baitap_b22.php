<?php 
	// Bài tập 4:
	function isTongChan($a, $b) {
		if(($a + $b) % 2 == 0) {
			return true;
		}
		else{
			return false;
		}
	}
		//------
	$a = 7;
	$b = 5;
 	$c = "False";
 	if(isTongChan($a, $b) == true) {
 		$c = "True";
 	}
	echo $c;
	echo "<br>";

	//Bài tập 5
	function isPassed($diem) {
		$tong_diem = ($diem["toan"] + $diem["ly"]) * 2 + $diem["hoa"];
		if($tong_diem > 24) {
			return true;
		}
		else {
			return false;
		}
	}
		//----
	$diem = ["toan" => 7, "ly" => 4, "hoa" => 8.5];
	$kq = "Rớt";
 	if(isPassed($diem) == true) {
 		$kq = "Đậu";
 	}
	echo $kq;

	//Bài tập 6
	function passedList($ds_diem_sv){
		$kq_sv_dau = "";
		foreach ($ds_diem_sv as $sv => $mon){
			
			$tong_diem = ($mon["toan"] + $mon["ly"]) * 2 + $mon["hoa"];
			if($tong_diem > 24) {
				$kq_sv_dau = $ds_diem_sv["$sv"];

			}
			
		}
		return $kq_sv_dau;
	}
	$ds_diem_sv = [
				"nga" => ["toan" => 7, "ly" => 4, "hoa" => 8.5],
				"nam" => ["toan"=> 4, "ly" => 9, "hoa" => 3.5],
				"nhan" => ["toan" => 7, "ly" => 5, "hoa" => 9.5],	
			];
	$ds_sv_dau = passedList($ds_diem_sv);
	var_dump($ds_sv_dau);
?>