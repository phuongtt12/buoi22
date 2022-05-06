<?php 
$src = $_FILES["excel"]["tmp_name"];
$filename = $_FILES["excel"]["name"];
$destination = "files/" . $filename;
move_uploaded_file($src, $destination); // move file từ nơi này đến nơi khác

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
$inputFileName = $destination;

/** Load $inputFileName to a Spreadsheet Object  **/
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);
$sheet = $spreadsheet->getActiveSheet(); // đọc từng dòng của bảng excel
$start = 2;  // bắt đầu từ dòng số 2
$end = $sheet->getHighestRow(); // dòng cuối cùng

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nội file excel</title>
	<link rel="stylesheet" href="public/vendor/bootstrap-4.5.0-dist/css/bootstrap.min.css">
	
</head>
<body>
<h1>Nội file excel</h1>
<div class="table-responsive container-fluid">
	<table class="table table-striped">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">Mã</th>
	      <th scope="col">Tên</th>
	      <th scope="col">Tên Tiếng Anh</th>
	      <th scope="col">Cấp</th>
	      <th scope="col">Mã QH</th>
	      <th scope="col">Quận/ Huyện</th>
	      <th scope="col">Mã TP</th>
	      <th scope="col">Tình/ Thành Phố</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php

		for ($row = $start; $row <= $end; $row++) {
			$columnA = $sheet->getCell("A".$row)->getValue();
			$columnB = $sheet->getCell("B".$row)->getValue();
			$columnC = $sheet->getCell("C".$row)->getValue();
			$columnD = $sheet->getCell("D".$row)->getValue();
			$columnE = $sheet->getCell("E".$row)->getValue();
			$columnF = $sheet->getCell("F".$row)->getValue();
			$columnG = $sheet->getCell("G".$row)->getValue();
			$columnH = $sheet->getCell("H".$row)->getValue();

			?>
			<tr>
		      <td><?=$columnA?></td>
		      <td><?=$columnB?></td>
		      <td><?=$columnC?></td>
		      <td><?=$columnD?></td>
		      <td><?=$columnE?></td>
		      <td><?=$columnF?></td>
		      <td><?=$columnG?></td>
		      <td><?=$columnH?></td>
		    </tr>
			<?php
		}
		?>
	    
	    
	  </tbody>
	</table>
</div>

	<script type="text/javascript" src="public/vendor/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="public/vendor/bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>
</body>
</html>