
<?php 
	$n = 11;
	$count = 0;
	for ($i=1; $i <= $n; $i++) { 
		if($n % $i == 0)
		{
			$count++;
		}
	}
	if ($count == 2) {
		echo "La so nguyen to";
		# code...
	}
	else
	{
		echo "Khong phai so nguyen to";
	}

	$sum = 0;
	for ($i=1; $i < $n; $i++) { 
		if($n % $i == 0)
		{
			$sum+= $i;
		}
	}
	if($sum == $n)
	{
		echo "la so hoan hao";
	}
	else
		echo "Khong phai so hoan hao";
 ?>