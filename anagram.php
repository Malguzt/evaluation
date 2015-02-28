<?php
// To run, put the words to be compared like 2 arguments.

	$a = strtolower(trim($argv[1]));
	$b = strtolower(trim($argv[2]));

	$length = strlen($a);

	$isAnagram = $length == strlen($b);

	$i = 0;
	while ($isAnagram && $i < $length) {
		$isAnagram = $a[$i] == $b[$length - $i -1];
		++$i;
	}

	if($isAnagram){
		echo "$a is an anagram of $b\n";
	} else {
		echo "$a is not an anagram of $b\n";
	}
