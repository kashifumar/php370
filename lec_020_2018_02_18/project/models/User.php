<?php

class User {

    //put your code here
    private $email;
    private $user_name;
    private $password;

    public function __set($name, $value) {
        $method = "set$name";
        if (!method_exists($this, $method)) {
            throw new Exception("Set Property $name does not exist");
        }
        $this->$method($value);
    }

    public function __get($name) {
        $method = "get$name";
        if (!method_exists($this, $method)) {
            throw new Exception("Get Property $name does not exist");
        }
        return $this->$method();
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

    private function setEmail($email) {
        if (empty($email)) {
            throw new Exception("Missing Email");
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Invalid Email");
        }

        $this->email = $email;
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

?>