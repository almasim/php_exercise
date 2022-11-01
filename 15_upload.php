<?php
    if(isset($_POST['submit'])){ //watching if submit was ever pressed
        $allowed_ext=array('png','jpeg','jpg','gif'); //only allowed types in an array 
        if(!empty($_FILES['upload']['name'])){ //watching if the file was chosen
            
            $file_name=$_FILES['upload']['name']; //getting the parameters of the file
            $file_size=$_FILES['upload']['size'];
            $file_tmp=$_FILES['upload']['tmp_name'];
            $target_dir="uploads/${file_name}"; //getting the target folder to upload 

            //get file extension
            $file_ext=explode('.',$file_name);
            $file_ext=strtolower(end($file_ext));
            //Validate File extension
            if(in_array($file_ext,$allowed_ext)){ 
                if($file_size<=10000000000){ //Cheking file size
                    move_uploaded_file($file_tmp,$target_dir); //actualy moving the file to the target folder by the temporary name and the folder
                    $messege='<p style="color:green;">The file is uploaded</p>';
                }else{
                    $messege='<p style="color:red;">The file is too large</p>';
                }
            }else {
                $messege='<p style="color:red;">Invalid File type</p>';
            }
        }else{
            $messege='<p style="color:red;">Please choose a file</p>';
        }
    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $messege ?? null ;?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="upload">
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>