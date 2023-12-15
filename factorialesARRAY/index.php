 <!--ISAAC MOYA-->
<!DOCTYPE html>
<html>
	<head>
		<title>Factorial</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<form action="" method="GET">
			<table cellspacing="0" border="2">
				<tr>
					<th colspan="2">Tabla de factoriales del <input type="number" name="uno" min="1" max="10" required> al <input type="number" name="dos" min="1" max="10" required></th>
				</tr>
			</table>
			<input type="submit" value="Calcular">
		</form>
		<?php
			if(isset($_GET['uno'])&& isset($_GET['dos'])){ //comprueba si los nombres uno y dos estan en el array _GET
				$uno=$_GET['uno']; //damos valor a la variable uno
				$dos=$_GET['dos'];//damos valor a la variable dos
				
				require 'funcion.php'; //llamamos al documento php que contiene la funcion del calculo del factorial
							
				for($i=$uno;$i<=$dos;$i++){
					$factoriales[$i] = factorial($i);
				}
				
				echo '<table cellspacing="0" border="2"> 
							<tr>
								<th>NUMERO</th>
								<th>FACTORIAL</th>
							</tr>';  //creamos la tabla con su cabecera
				
				foreach($factoriales as $indice => $contenido){
					echo "<tr>";
					echo "<td>$indice</td>";
					echo "<td>$contenido</td>"; //se concatena el retorno de la funcion factorial y se le pasa como parametro la i del for de arriba
					echo "</tr>";
				}
				
				echo '</table>';
			}
		?>
	</body>
</html>