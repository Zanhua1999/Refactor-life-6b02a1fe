<?php
$input = $argv[1];
round($input);
$geld = array(50,20,10,5,2,1,0.5,0.2,0.1,0.05);

foreach ($geld as $value) {

if ($input>=1) {
    $rest = floor($input/$value);
    $input = $input - ($value * $rest);
     echo $rest . " x " . $value . " Euro" ."\n";
}

else{
    $rest = floor($input/$value);
    $input = $input - ($value * $rest);
    echo $rest . " x " . $value . " Cent" ."\n";
}
}

?>