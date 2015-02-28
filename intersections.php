<?php
	$a = ['a', 'b', 'c', 'd', 'e'];
	$b = ['c', 'd', 'e', 'f', 'g'];

	$intersection = [];

	foreach ($a as $aValue) {
		foreach ($b as $bValue) {
			if($aValue == $bValue){
				$intersection[] = $aValue;
			}
		}
	}

	echo "The intersection of arrays is: { ";

	$comma = "";
	foreach ($intersection as $value) {
		echo $comma . $value;
		$comma = ", ";
	}

	echo " }\n";
