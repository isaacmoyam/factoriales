<?php
	function factorial($x){
		$fact=1;
		for($j=1;$j<=$x;$j++){
			$fact*=$j;
		}
		return $fact;
	}