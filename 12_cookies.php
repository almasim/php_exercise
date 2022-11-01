<?php
    //Set cookies Key+Value+time to expire
    setcookie('name','Brad',time()+86400*30);

    if(isset($_COOKIE['name'])){
        echo $_COOKIE['name'];
    }
setcookie('name','',time()-86400*30);//unsetting a cookie bysetting minus the expire date
?>