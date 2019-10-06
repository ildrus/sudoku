<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php	
		define("ROWS",8);
		define("COLUMN",8);					
		for($i=0;$i<=ROWS;$i++){
			for($j=0;$j<=COLUMN;$j++){
				$matr[$i][$j]="";
			}
		}
		$count=0;
		while($count!=20){
			$randomRow=random_int(0, ROWS);
			$randomColum=random_int(0, COLUMN);
			if($matr[$randomRow][$randomColum]==""){
				$matr[$randomRow][$randomColum]=random_int(1, 9);
				$count+=1;
			}
		}	
	?>	
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<table id="sudoku">
		<tbody>
			<?php	
				for($i=0;$i<=ROWS;$i++){
					echo "<tr>";
					for($j=0;$j<=COLUMN;$j++){
						if(($i==2)|($i==5)){
							if(($j==2)|($j==5)){
								if($matr[$i][$j]==""){
									echo "<td class='cell cellLimitRight cellLimitBot'><input type='text'></td>";
								}
								else{
									echo "<td class='cell cellLimitRight cellLimitBot'>".$matr[$i][$j]."</td>";
								}
							}
							else{
								if($matr[$i][$j]==""){
									echo "<td class='cell cellLimitBot'><input type='text'></td>";
								}
								else{
									echo "<td class='cell cellLimitBot'>".$matr[$i][$j]."</td>";	
								}
							}
						}
						else{
							if(($j==2)|($j==5)){
								if($matr[$i][$j]==""){
									echo "<td class='cell cellLimitRight'><input type='text'></td>";
								}
								else{
									echo "<td class='cell cellLimitRight '>".$matr[$i][$j]."</td>";
								}
							}
							else{
								if($matr[$i][$j]==""){
									echo "<td class='cell'><input type='text'></td>";
								}
								else{
									echo "<td class='cell'>".$matr[$i][$j]."</td>";	
								}
							}	
						}					
					}
					echo "</tr>";
				}
			?>			
			</tr>	
		</tbody>		
	</table>	
</FORM>
</body>
</html>