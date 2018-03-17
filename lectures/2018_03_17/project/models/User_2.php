<?php

class User {

    //data members, always private 
    private $email;

    private $user_name;
    private $password;

    //called when object is created
    public function __construct() {
        
    }
    public function __set($name, $value) {
        $method = "set$name";
        if (!method_exists($this, $method)) {
            throw new Exception("Set Property $name does not exist");
            //instantiate an object of class User
//            $obj_user = new User();
//            $ex = new Exception("Set Property $name does not exist");            
//            throw $ex;
        }
        //$obj_user->setEmail($value);
        $this->$method($value);
    }

    public function __get($name) {
        $method = "get$name";
        if (!method_exists($this, $method)) {
            throw new Exception("Get Property $name does not exist");
        }
        return $this->$method();
    }

    private function setEmail($email) {
        if (empty($email)) {
            throw new Exception("Missing Email");
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Invalid Email");
        }

        $this->email = $email;
    }

    private function getEmail() {
        return $this->email;
    }

    private function getUser_name() {
        return $this->user_name;
    }

    private function getPassword() {
        return $this->password;
    }

    private function setUser_name($user_name) {
        if (empty($_POST['user_name'])) {
            throw new Exception("Missing User Name");
        }

        $reg = "/^[a-z][a-z0-9]{5,19}$/i";
        if (!preg_match($reg, $_POST['user_name'])) {
            throw new Exception("Invalid User Name");
        }

        $this->user_name = $user_name;
    }

    private function setPassword($password) {
        if (empty($password)) {
            throw new Exception("Missing Password");
        }
        $reg = "/^[a-z][a-z0-9]{5,15}$/i";
        if (!preg_match($reg, $password)) {
            throw new Exception("Invalid password");
        }

        $this->password = $password;
    }

}

//create an object of class User
//instantiate an object of class User
$obj_user = new User();


try {
    $obj_user->email = "1111";
    echo("Email : $obj_user->email<br>");
} catch (Exception $ex) {
    echo("Msg - " . $ex->getMessage() . "<br>");
    echo("Line - " . $ex->getLine() . "<br>");
    echo("File - " . $ex->getFile() . "<br>");
}

try {
    $obj_user->user_name = "1111";
    echo("user_name : $obj_user->user_name<br>");
} catch (Exception $ex) {
    echo("Msg - " . $ex->getMessage() . "<br>");
    echo("Line - " . $ex->getLine() . "<br>");
    echo("File - " . $ex->getFile() . "<br>");
}

try {
    $obj_user->password = "1111";
    echo("password : $obj_user->password<br>");
} catch (Exception $ex) {
    echo("Msg - " . $ex->getMessage() . "<br>");
    echo("Line - " . $ex->getLine() . "<br>");
    echo("File - " . $ex->getFile() . "<br>");
}
?>