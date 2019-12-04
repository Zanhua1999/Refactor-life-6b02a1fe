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
public function rounding($number){
    $last_one = intval(substr($number,-1,1));
    $last_two = intval(substr($number,-2,1));
    if($last_one > 5){
        $last_one = 0;
        $last_two = $last_two+1;
    }else{
        $last_one = 5;
    }
    $number = substr_replace($number,$last_one,-1,1);
    $number = substr_replace($number,$last_two,-2,1);

    return $number;

}

?>