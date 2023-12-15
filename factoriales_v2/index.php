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
				function factorial($x){
					$fact=1;
					for($j=1;$j<=$x;$j++){
						$fact*=$j;
					}
					return $fact;
				}
				for($i=1;$i<=10;$i++) {
					echo "<tr>";
					echo "<td>$i</td>";
					echo "<td>".factorial($i)."</td>";
					echo "</tr>";
				}
			?>
		</table>
	</body>
</html>