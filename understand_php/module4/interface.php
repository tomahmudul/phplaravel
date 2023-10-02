<?php
interface Webapp{
    public function login($email, $password);
    public function register($email, $password, $username);
    public function logout();
}

interface CMS{
    public function publishPost($post);
}

class Studytonight implements Webapp, CMS{
    public function login($email, $password){
        echo "Login the user with email".$email;
    }
    public function register($email, $password, $username){
        echo "User registered: Email= ".$email." and Username= ".$username;
    }
    public function logout(){
        echo "User logged out.";
    }

    public function publishPost($post){
        echo $post." published";
    }
}


$st = new Studytonight();
echo $st->login("a@gmail.com",true); 


interface Readable{
    public function read();
}

interface Document extends Readable{
    public function getContents();
}