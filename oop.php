<?php
//echo 'hellow world';
class User{
    //Properties 
    public $name;
    public $email;
    public $password;

    //Constructor -> a method that runs when an object is created
    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
    //Method -> a function that belongs to the class
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
}

//Instatiate a user object
$user1 = new User ('Ben', 'ben@gmail.com', 320);
$user2 = new User('Mike', 'mike@gmail.com', 394);
//echo $user1->name;
//echo $user2->password;
//$user1->name = 'Ben';
//$user1->get_name();
//$user1->set_name('Dan');
//$user1->email = 'email@gmail.com';
//$user1->password = 1234;
//var_dump($user1);

//Inheritence
class Employee extends User {
    public function __construct($name, $email, $password, $title){
        parent::__construct($name,$email,$password);
        $this->title = $title;
    }

    public function get_title(){
        return $this->title;
    }
}

$employee1 = new Employee('Ben', 'ben@gmail.com', '422', 'Web Developer');

echo $employee1->get_title();