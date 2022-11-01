<?php
    $numbers=[1,2,55,22];
    $fruits=array('apple','orange',"banana");
    var_dump($fruits); //array(3) { [0]=> string(5) "apple" [1]=> string(6) "orange" [2]=> string(6) "banana" }
    echo $fruits[1];
    //Associative Array
    $color=[
        1=>'Red',
        4=>'Blue',
        6=>'Green'
    ];
    echo $color[6];
    $hex=[
        'red'=>'#f00',
        'blue'=>'#0f0',
        'green'=>'#00f'
    ];
    echo $hex['red'];
     $person=[
        'first_name'=>'Brad',
        'last_name'=>'Traversy',
        'email'=> 'bradmail@gmail.com'
     ];
     echo $person['email'];

     //Multidimension array
     $people=[
        [
            'first_name'=>'Brad',
            'last_name'=>'Traversy',
            'email'=> 'bradmail@gmail.com'
        ],
         [
            'first_name'=>'Fay',
            'last_name'=>'Traversy',
            'email'=> 'bradmail@gmail.com'
         ],
         [
            'first_name'=>'Jody',
            'last_name'=>'Traversy',
            'email'=> 'bradmail@gmail.com'
         ]
         ];
     //echo $people[1]['first_name'];
     var_dump(json_encode($people))
?>