<!DOCTYPE html>
<html>
<head>
	<title>Lap6_Bai1</title>
</head>
<body>
	<?php
	echo "Test:";
		$mang = array(0 ,1 ,2,3 ,4 , 5, 6,7 ,8 ,9 );
		$sophantu=count($mang);
		echo "sophantu ".$sophantu."<br>";
		$tong=0;
		for($i=0;$i<$sophantu;$i++)
		{
			$tong=$mang[$i]+$tong;
			$j=$i+1;
			echo "Gia tri cua phan tu thu ".$j." la ".$mang[$i]."<br>";
		}
		echo "Tong cua mang la: ".$tong."<br>";
		echo "Cac phan tu chan cua mang la:<br>";
		for($i=0;$i<$sophantu;$i++){
			if($mang[$i]%2==0){echo $mang[$i]."<br>";}
		}
		echo "Cac phan tu le cua mang la:<br>";
		for($i=0;$i<$sophantu;$i++){
			if($mang[$i]%2!=0){echo $mang[$i]."<br>";}
		}
		sort($mang)
	?>
</body>
</html>