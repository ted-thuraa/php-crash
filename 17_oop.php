<?php
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. 
  OOP consists of classes that can hold "properties" and "methods". Objects can be 
  created from classes.
*/

class User {
    //properties are attributes that belong to a class
    // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by inheriting classes
    public $name;
    public $email;
    public $password;

    //Method is a function that belongs to a class
    //setter
    //function set_name($name) {
    //    $this->name = $name;
    //}

    //getter
    //function get_name() {
    //    return $this->name;
    //}

    //constructors are func that are called whenever an object is created from the class.
    //properties are passed to the constructor from outside.
    public function __construct($name, $email, $password) {
        // We assign the properties passed in from the outside to the properties we created inside the class.
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
}

//instantiate a user object
$user1 = new User('thura', 'thura@gmail.com', '43566');

echo $user1->email;
echo $user1->name;

//$user1->set_name('ted');
//echo $user1->get_name();



//var_dump($user1);

//inheritance
 class Employee extends User {
    public function __construct($name, $email, $password, $title) {
        //to avoid redoing what we did in parent class (User)
        parent:: __construct($name, $email, $password);
        $this->title = $title;
    }

    //getter
    function get_title() {
        return $this->title;
    }
 }

 $employee1 = new Employee('kalulu', 'kalulu@gmail.com', '46558', 'CEO');
 echo $employee1->get_title();