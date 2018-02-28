<?php

//output array(2, 4 ,6, 2);
$input = array(2, 3, 4, 6, 2);

$output = array_filter($input, function($elementFromArray){
	return ($elementFromArray % 2) === 0;
});

