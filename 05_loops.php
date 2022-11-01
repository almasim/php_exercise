<?php 

//Simple For statement
for ($i=0; $i <= 10 ; $i++) { 
echo $i.' , ';
}
echo '<br>';

//Simple while statement
$x=1;
while($x<=15){
    echo $x.' , ';
    $x++;
}
echo '<br>';


///Do while
do{
 echo'Number'.$x.'<br>';
 $x++;
}
while($x<=5);


///For each only for arrays
$posts=['First Post','Second Post','Third Post'];
foreach($posts as $index => $item){
    echo $index .' - '.$item.'<br>';
}

$person=[
    'first_name'=>'Brad',
    'last_name'=>'Traversy',
    'email'=> 'bradmail@gmail.com'
 ];
foreach($person as $key =>$value){
    echo "$key - $value <br>";
}

?>