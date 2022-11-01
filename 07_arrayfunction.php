<?php
$fruits=['apple','orange','pear'];
//lenght
echo count($fruits);

//Search in array
var_dump(in_array('apple',$fruits));

//add to array
array_push($fruits,'blueberry','strawberry'); // add to end
array_unshift($fruits,'mango'); //add to start
$fruits[]='grape';


//Remove from array
array_pop($fruits);//last
array_shift($fruits);//first
unset($fruits[2]); // deletes the index and the index's value

//Split into 2 chunks
$chunked_array=array_chunk($fruits,2);

 print_r($chunked_array);


$arr1=[1,2,3];
$arr2=[4,5,6];

//Merge
$arr3=array_merge($arr1,$arr2);
$arr4=[...$arr1,...$arr2];//same as merge
print_r($arr3);

$a=['green','red','yellow'];
$b=['avocado','apple','banana'];

$c=array_combine($a,$b); //combine by keys and values

$keys=array_keys($c);
print_r($keys);

$flipped=array_flip($c);//flips keys and values
print_r($flipped); 


$numbers=range(1,20);


$new_numbers= array_map(function($number){
    return "Number ${number}";

},$numbers);
print_r($new_numbers);

$less_than_ten=array_filter($numbers,fn($number)=>
$number<= 10);
print_r($less_than_ten);

$sum =array_reduce($numbers, fn($carry,$number)=>
$carry + $number);
var_dump($sum);

