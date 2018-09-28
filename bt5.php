<?php 
	$users = array(
		0=> array(
			'id'=>10,
			'name' => "Messi",
			'email'=> array(
				'gmail'=>'10@gmail.com',
				'yahoo'=>'10@yahoo.com'
			),
		),
		1=>array(
			'id' => 7,
			'name' => 'Ronaldo',
			'email'=>array(
				'gmail'=>'7@gmail.com',
				'yahoo'=>'7@yahoo.com',
			),
		),
		2=>array(
			'id' => 4,
			'name' => 'Ramos',
			'email'=>array(
				'gmail'=>'4@gmail.com',
				'yahoo'=>'4@yahoo.com',
			),
		),
		3=>array(
			'id' => 13,
			'name' => 'Muller',
			'email' => array(
				'gmail'=>'13@gmail.com',
				'yahoo'=>'13@yahoo.com',
			),
		),
		4=>array(
			'id' => 15,
			'name' => 'abc',
			'email' => array(
				'gmail'=>'15@gmail.com',
				'yahoo'=>'15@yahoo.com',
			)
		)	

		
	)
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<h3>Cau 5</h3>


 	<h4>a)</h4>
 	<table style="border: 1px solid black">
 		<tr >
 			<td style="border: 1px solid black">ID</td>
 			<td style="border: 1px solid black">Name</td>
 			<td style="border: 1px solid black">Gmail</td>
 		</tr>
 			<?php for ($i=0; $i < count($users); $i++): ?>
 			<tr>
 			<td style="border: 1px solid black"><?php echo $users[$i]['id'];?></td>
 			<td style="border: 1px solid black"><?php echo $users[$i]['name'];?></td>
 			<td style="border: 1px solid black"><?php echo $users[$i]['email']['gmail'];?></td>
 			</tr>
 			<?php endfor; ?>
 			
 	</table>

 	<h4>b)</h4>
 	<p><?php
 	$check = false;
 	 for ($i=0; $i < count($users); $i++) { 
 		if($users[$i]['id'] == 15)
 			$check=true;
 		}
 	if($check == true)
 		echo "Co ID = 15 trong mang";
 	else
 		echo "Khong co ID = 15 trong mang";
 	 ?></p>


 	 <h4>c)</h4>
 	 <p>Sau khi sap xep</p>
 	<?php 
 		for ($i=0; $i < count($users); $i++) { 
 			$max = $i;
 			for ($j=$i; $j < count($users); $j++) { 
 				if($users[$max]['id'] > $users[$j]['id'])
 					$max = $j;
 				# code...
 			}
 			$temp = $users[$max];
 			$users[$max] = $users[$i];
 			$users[$i] = $temp;
 			# code...
 		}
 	 ?>
 	 <table style="border: 1px solid black">
 		<tr >
 			<td style="border: 1px solid black">ID</td>
 			<td style="border: 1px solid black">Name</td>
 			<td style="border: 1px solid black">Gmail</td>
 		</tr>
 			<?php for ($i=0; $i < count($users); $i++): ?>
 			<tr>
 			<td style="border: 1px solid black"><?php echo $users[$i]['id'];?></td>
 			<td style="border: 1px solid black"><?php echo $users[$i]['name'];?></td>
 			<td style="border: 1px solid black"><?php echo $users[$i]['email']['gmail'];?>	
 			</td>
 			</tr>
 			<?php endfor; ?>
 			
 	</table>
 </body>
 </html>