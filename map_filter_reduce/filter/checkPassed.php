<?php 
function isPassed($diem) {
	//code here
	$diemToan = $diem["toan"];
	$diemLy = $diem["ly"];
	$diemHoa = $diem["hoa"];
	$tongDiem = ($diemToan + $diemLy) * 2 + $diemHoa;
	if ($tongDiem > 24) {
		return true;
	}
	return false;
}


function passedList($danhSachDiemSV) {
	$temp = array_filter($danhSachDiemSV, "checkPassed");
	$result = array_keys($temp);
	return $result;
}

function checkPassed($diem) {
	return isPassed($diem);
}

$danhSachDiemSV = array(
	"nam" => array("toan" => 8, "ly" => 5, "hoa" => 1),
	"nhan" => array("toan" => 6, "ly" => 5, "hoa" => 1),
	"tin" => array("toan" => 6, "ly" => 7, "hoa" => 1),
);
$danhSachDau = passedList($danhSachDiemSV);
var_dump($danhSachDau);
?>