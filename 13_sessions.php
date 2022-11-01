<?php
    //Sessions are stored on the server
session_start(); //session must be started every time you want to work with it
//session_destroy(); to delete session 
    if(isset($_POST['submit'])){
        $username= filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
        $password=$_POST['password'];
        if($username=='jhon'&& $password=='password'){
            $_SESSION['username']=$username;
            header('Location:/sandbox/extras/dashboard.php');
        }else{
            echo 'Incorrect login';
        }
    }
    
    ?>
    
    <!-- <a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>?name=Brad&age=30">Click</a> -->
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <div>
            <label for="username">Username: </label>
            <input type="text" name="username">
        </div>
        <div>
            <label for="password">Password: </label>
            <input type="password" name="password">
        </div>
        <input type="submit" value="submit" name="submit">
    </form>
