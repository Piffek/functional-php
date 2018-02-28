<?php

//-----------------------output array(2, 4 ,6, 2)-----------------------------------------
$input = array(2, 3, 4, 6, 2);

$output = array_filter($input, function($elementFromArray){
	return ($elementFromArray % 2) === 0;
});

print_r($output);
//-----------------------------------------------------------------------------------------


//-----------------------output array(2, 4)-----------------------------------------------
function showHeavy($amount){
    return function($element) use ($amount){
        return $element > $amount;
    };
}

$input = array(2, 3, 4, 1, 2);

$output = array_filter($input, showHeavy(2));

print_r($output);
//-----------------------------------------------------------------------------------------