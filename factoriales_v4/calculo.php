<!--ISAAC MOYA-->
<!DOCTYPE html>
<html>
	<head>
		<title>Factorial</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
			if (isset($_GET['uno']) && isset($_GET['dos'])) {
				$uno = $_GET['uno'];
				$dos = $_GET['dos'];
				
				require 'funcion.php';
				
				 echo '<table cellspacing="0" border="2">
							<tr>
								<th>NUMERO</th>
								<th>FACTORIAL</th>
							</tr>';
			
				for($i=$uno;$i<=$dos;$i++) {
					echo "<tr>";
					echo "<td>$i</td>";
					echo "<td>".factorial($i)."</td>";
					echo "</tr>";
				}
				echo '</table>';
			}else{
				echo 'Please provide valid input for "uno" and "dos".';
			}
		?>
	</body>
</html>