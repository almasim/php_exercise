<?php 
    class User{
        ///Properties are attributes that belong to a class
        //Exectly like c# public protected and private
        public $name;
        public $email;
        public $password;

        //Constructor runs when object is created
        public function __construct($name,$email,$password)
        {
            $this->name=$name;
            $this->email=$email;
            $this->password=$password;

        }

        //method = function belongs to a class
        function set_name($name){ //setter
            $this->name=$name;
        }
        function get_name(){ //getter
            return $this->name;
        }
    }


    //Instatiate a user object
    $user1=new User('Brad','brad@gmail.com','poo');
    $user2=new User('Jhon','jhon@gmail.com','oop');
    // $user1->set_name('Brad');
    // $user2->set_name('Jhon');
    // echo $user1->name //thats how you call it
//     echo $user2->get_name();// calling a get
    // echo $user1->email;
    // echo $user2->password;

    //Inheritance
    class Employee extends User{
        public function __construct($name,$email,$password,$title)
        {
            parent::__construct($name,$email,$password);
            $this->title=$title;
        }
        public function get_title()
        {
            return $this->title;
        }
    }
    $employee=new Employee('Sara','sara@gmail.com','ooo','manager');
    echo $employee->get_title()
?>