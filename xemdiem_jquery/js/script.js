$(function(){
	$("#xemkq").click(function(event) {
		/* Act on the event */
		// (toan + ly) * 2 + hóa >= 24 thì đậu
		var inputToan = $("#toan");
		var diemToan = $(inputToan).val();
		var inputLy = $("#ly");
		var diemLy = $(inputLy).val();
		var inputHoa = $("#hoa");
		var diemHoa = $(inputHoa).val();

		if (diemToan == "" || diemLy == "" || diemHoa == ""){
		alert("Bạn phải nhập đầy đủ điểm");
		return; // kết thúc hàm
		}
		diemToan = Number(diemToan);
		diemLy = Number(diemLy);
		diemHoa = Number(diemHoa);

		if (diemToan < 0 || diemToan > 10 
				|| diemLy < 0 || diemLy > 10
				|| diemHoa < 0 || diemHoa >10) {
				alert("Bạn phải nhập điểm từ 0 - 10");
				return;
		}

		$.ajax({
			url: 'calculateScore.php',
			data: {toan: diemToan, ly: diemLy, hoa:diemHoa},
		})
		.done(function(data) {
			$("#kq").html(data);
			console.log("success");
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	});
});



