<?php
	$diem = 0;
	function xetHocLuc($diem)
	{
		if($diem >= 8.5){
			$hoc_luc ="Gioi";
		}
		else if($diem >= 6 && $diem < 8.5){
			$hoc_luc ="Kha";
		}else{
			$hoc_luc ="Trung binh";
		}
		return $hoc_luc;
	}
	//Hien thi hoc luc
	echo xetHocLuc($diem);
?>
