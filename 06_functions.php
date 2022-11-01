<?php

///Same as c#
function register_user($email){
    echo "$email Registered <br>";
}
register_user('Brad');


function sum($n1 =5,$n2=5){ //setting default values
     return $n1+$n2;
}
$number = sum();
echo $number .'<br>' ;


$subtract= function($n1,$n2){
    return $n1-$n2;
};
echo $subtract(10,5).'<br>';

$multiply=fn($n1,$n2)=>$n1*$n2;
echo $multiply(9,9)
?>