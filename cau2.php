<?php 
	$arr = array(1,2,3,4,5,6,7,8,9);
	rsort($arr);
	for ($i=0; $i < count($arr); $i++) { 
		echo $arr[$i];
	}
	
 ?>