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
				for($i=1;$i<=10;$i++) {
					$fact=1;
					for($j=1;$j<=$i;$j++){
						$fact*=$j;
					}
					echo "<tr>";
					echo "<td>$i</td>";
					echo "<td>$fact</td>";
					echo "</tr>";
				}
			?>
		</table>
	</body>
</html>