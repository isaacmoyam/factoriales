<?php
	function factorial($x){ //el numero que se le pase como parametro será del que se sacará el factorial
		$fact=1; // la variable del resultado la establecemos en uno porque si contuviera otro numero al multiplicar no nos daria el resultado correcto
		for($j=1;$j<=$x;$j++){ //un for que va desde uno hasta el numero del que queremos el factorial
			$fact*=$j; //se multiplica el factorial por j (tantas veces como el numero que haya sido mandado como parametro)
		}
		return $fact; //se retorna el factorial
	}