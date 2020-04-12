<?php
	$a=$_GET["a"];
	$b=$_GET["b"];
	$c=$_GET["c"];
	if($a+$b>$c&&$a+$c>$b&&$c+$b>$a)
		{	
			$cos=($b*$b+$c*$c-$a*$a)/2*$b*$c;
			echo"3 so da nhap la kich thuoc cua 1 tam giac \t";
			if($a*$a+$b*$b==$c*$c){
				$S=$a*$b/2;
				$V=$a+$b+$c;
				echo"Tam giac nay vuong va co chu vi la $V dien tich la $S";
			}
			else if($a*$a+$b*$b==$c*$c&&$a==$b){
				$S=$a*$b/2;
				$V=$a+$b+$c;
				echo"Tam giac nay vuong can va co chu vi la $V dien tich la $S";
			}
			else if($c*$c+$b*$b==$a*$a&&$c==$b){
				$S=$b*$c/2;
				$V=$a+$b+$c;
				echo"Tam giac nay vuong can va co chu vi la $V dien tich la $S";
			}
			else if($c*$c+$a*$a==$b*$b&&$c==$a){
				$S=$a*$c/2;
				$V=$a+$b+$c;
				echo"Tam giac nay vuong can va co chu vi la $V dien tich la $S";
			}
			else if($a*$a+$c*$c==$b*$b){
				$S=$a*$c/2;
				$V=$a+$b+$c;
				echo"Tam giac nay vuong va co chu vi la $V dien tich la $S";
			}
			else if($b*$b+$c*$c==$a*$a){
				$S=$b*$c/2;
				$V=$a+$b+$c;
				echo"Tam giac nay vuong va co chu vi la $V dien tich la $S";
			}
			else if($a==$b&&$a==$c){
				$S=sqrt(($a+$b+$c)*($a+$c-$b)*($a+$b-$c)*($b+$c-$a))/4;
				$V=$a+$b+$c;
				echo"Tam giac nay deu va co chu vi la $V dien tich la $S";
			}
			else if($a==$b||$a==$c||$b==$c){
				$S=sqrt(($a+$b+$c)*($a+$c-$b)*($a+$b-$c)*($b+$c-$a))/4;
				$V=$a+$b+$c;
				echo"Tam giac nay can va co chu vi la $V dien tich la $S";
			}
			else if($cos<0){
				$S=sqrt(($a+$b+$c)*($a+$c-$b)*($a+$b-$c)*($b+$c-$a))/4;
				$V=$a+$b+$c;
				echo"Tam giac nay tu va co chu vi la $V dien tich la $S";
			}
			else{
				$S=sqrt(($a+$b+$c)*($a+$c-$b)*($a+$b-$c)*($b+$c-$a))/4;
				$V=$a+$b+$c;
				echo"Tam giac nay nhon va co chu vi la $V dien tich la $S";
			}
		}

	else echo"3 kich thuoc tren khong phai cua tam giac!";

?>