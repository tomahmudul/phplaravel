<?php
session_start();
require("functions.php");

if(isset($_SESSION["role"]) && $_SESSION["role"] == "admin"){

    if($_REQUEST["operation"] == "addUser"){
        $usersFile = './db.json';
        $users = file_exists( $usersFile ) ? json_decode( file_get_contents( $usersFile ), true ) : [];

        if ( $users && isset($users[$_REQUEST['user_email']])) { 
            unset($users[$_REQUEST['user_email']]);
            saveData($users, $usersFile);
            echo "saved"; 
        }  else echo "error";      
        //echo $_REQUEST['user_email'];       
    }else if($_REQUEST["operation"] == "addRole"){
        $rolesFile = './role.json';
        $roles = file_exists( $rolesFile ) ? json_decode( file_get_contents( $rolesFile ), true ) : [];

        $roles[$_REQUEST["roleName"]] = [
            'roleName'     => $_REQUEST["roleName"]
        ];

        saveData($roles, $rolesFile);
        echo "saved";
              
    }else if($_REQUEST["operation"] == "deleteUser"){
        $usersFile = './db.json';
        $users = file_exists( $usersFile ) ? json_decode( file_get_contents( $usersFile ), true ) : [];

        if ( $users && isset($users[$_REQUEST['user_email']])) { 
            unset($users[$_REQUEST['user_email']]);
            saveData($users, $usersFile);
            echo "saved"; 
        }  else echo "error";      
        //echo $_REQUEST['user_email'];       
    }
    
}