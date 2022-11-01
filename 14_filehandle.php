<?php
    $file='extras/users.txt';

    if(file_exists($file)){
       // echo readfile($file); not so flexible
       $handle = fopen($file,'r'); //opening the file for reading (r)
       $contents = fread($handle,filesize($file)); //reading the contents of the files to a variable
       fclose($handle); //must close the file
       echo $contents;
    }else{
        $handle=fopen($file,'w');
        $contents='Brad'. PHP_EOL .'Sara'. PHP_EOL . 'Mike';
        fwrite($handle,$contents);
        fclose($handle);
    }


?>