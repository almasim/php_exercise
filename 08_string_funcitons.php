<?php
$string ='oh hello';


//string lenght
echo strlen($string);

//Finding somehthing in the string (first)
echo strpos($string,'o');

//Finding something (last)
echo strrpos($string,'o');

//reverse it
echo strrev($string);

//Only lowercase

echo strtolower($string);

//Only uppercase

echo strtoupper($string);

//Uppercase each word first letter 
echo ucwords($string);

//Replace substring

echo str_replace('hello','hi',$string);

//Get characters by index
echo substr($string,0,2);
echo substr($string,5);//gives whatever after 5

//starts with
if(str_starts_with($string,'oh')){
    echo 'yes';
}

//ends with
if(str_ends_with($string,'hello')){
    echo 'yes';
}

$string2 ='<script>alert(1)</script>';
echo htmlspecialchars($string2); //it will just show it

printf('%s likes to %s','brad','code'); //%s is string
printf('1+1=%f',1+1); //%d is decimal(int) %f is float
?>