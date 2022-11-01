<?php

///Simple if statement
$age=17;
if($age>=18){
    echo 'You are old enouhg to vote <br>';
}
else{
    echo 'you are not old enough <br>';
}
$t =date("H"); //get current hour


//Else if 
if($t<12){
    echo 'Good Morning <br>';
}else if($t<17){
    echo 'Good Afternoon <br>';
}else {
    echo 'Good Evening <br>';
}

///If it doesnt contain anything it says no posts if it does it will print out the post
$posts=['First Post'];

if(!empty($posts)){ //empty($x) if its empty it gives true
    echo $posts[0].'<br>';
}else{
    echo 'No posts <br>';
}

echo !empty($posts)?$posts[0]:'No posts <br>'; //same but with ternary operator

$first_post=!empty($posts)?$posts[0]:'No posts <br>';
$first_post=!empty($posts)?$posts[0]:null;
echo $first_post.'<br>';
$first_post=$posts[0]??null;
echo $first_post.'<br>';


//switch case
$favcolor='red'; 
switch($favcolor){
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    default:
    echo 'your Favorite color is not red blue or green';
}
?>