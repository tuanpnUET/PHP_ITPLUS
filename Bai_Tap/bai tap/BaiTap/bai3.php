<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 

	$n=$_GET["n"];
	$check=0;
	$s1=0;
	$s2=0;
	$s3=0;	
	if($n>=5&&$n<=100) $check=1;
	else echo"Đã bảo nhập trong khoảng 5-100 cơ mà :'<";
	if($check==1) {
		for ($i=1; $i<=$n ; $i++) { 
			$s1=$s1+$i;
		}
		echo"S1=1+2+...+ n (n= ".$n.") = ".$s1."<br><br>";

		for ($i=1; $i<=$n ; $i++) { 
			$s2=$s2+pow($i,2);
		}

		echo "S2= 1^2 + 2^2 +.....+ n^2 (n= ".$n.") = ".$s2."<br><br>";

		for ($i=1; $i<=$n ; $i++) { 
			$s3=$s3+$i/(2*$i+1);
		}

		echo "S3= 1/3 + 2/5 + ..... + n/(2n+1) (n= ".$n.") = ".$s3."<br><br>";
	}

	?>
</body>
</html>