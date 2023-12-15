<!--ISAAC MOYA-->
<!DOCTYPE html>
<html>
	<head>
		<title>Factorial</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<table cellspacing="0" border="2">
			<tr>
				<th colspan="2">Tabla de factoriales del 1 al 10</th>
			</tr>
			<?php
				$i=1;
				while($i<=10){
					$fact=1;
					$j=1;
					while($j<=$i){
						$fact*=$j;
						$j++;
					}
					echo "<tr>";
					echo "<td>$i</td>";
					echo "<td>$fact</td>";
					echo "</tr>";
					$i++;
				}
			?>
		</table>
	</body>
</html>