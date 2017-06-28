<?php
require_once dirname(__FILE__).'/../BL/User.php';

class UserController {
    
    public static function process(){
        if(isset($_POST['create-user'])){
            self::createUser();
        }
        else if(isset($_POST['login-user'])){
            if(self::LoginValidation()){
                if(self::login()){
                    header("Location: index.php");
                }else{
                    die('Error');
                }
            }
        }
        else if(isset($_GET['page'])){
            if($_GET['page'] == 'logout'){
                self::logout();
            }
        }
    }
    
    public static function createUser(){
        $u = new User();
        $u -> login = htmlspecialchars($_POST['login']);
        $u -> password = htmlspecialchars($_POST['password']);
        $u -> email = htmlspecialchars($_POST['email']);
        
        $u -> create();
    }
    
    public static function LoginValidation(){
        $u = new User();
        
        $u -> login = $_POST['login'];
        $u -> password = $_POST['password'];
        
        return $u -> retriveByLoginAndPassword();

    }
    
    public static function login(){
        if(isset($_POST['login-user'])){
            if(static::LoginValidation() === true){
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['logged'] = true;
                return true;
            }else{
                return false;
            }
        }
    }
    
    public static function logout(){
        $_SESSION['login'] = false;
        $_SESSION['logged'] = false;
        
        session_destroy();
        header("Location: index.php");
    }
}

