<?php 

// Condition to Ternary Operator

$num = -23;

if($num > 0):
    echo "{$num} is positive \n";
elseif($num < 0):
    echo "{$num} is negative \n";
    if($num < -10):
        echo "{$num} is below -10";
    endif;
else:
    echo "{$num} is zero";
endif;

echo PHP_EOL;

// Ternary Operator 

$num = -23;

$output = ($num > 0) ? "{$num} is positive" : (($num < 0 && $num < -10) ? "{$num} is negative\n{$num} is below -10" : (($num < 0) ? "{$num} is negative \n" : "{$num} is zero"));
echo $output;
