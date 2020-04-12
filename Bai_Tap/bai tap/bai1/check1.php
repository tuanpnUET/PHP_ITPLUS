<?php
	$a=$_GET["a"];
	$b=$_GET["b"];
	$c=$_GET["c"];
	echo "hoo";
	if($a==0) echo"a phai khac 0 xin vui long nhap lai";
	else
		{
			$denta=$b*$b-4*$a*$c;
			if($denta<0) echo"Phuong trinh vo nghiem!";
			else if($denta==0){
				$x=-$b/(2*$a);
				echo"Phuong trinh co nghiem kep $x";
			}
			else if($denta>0)
			{
				$o=sqrt($x);
				$x1=($b-$o)/2*$a;
				$x2=($b+$o)/2*$a;
				echo"Phuong trinh co 2 nghiem phan biet x1=$x1 x2=$x2";
			}
		}

?>