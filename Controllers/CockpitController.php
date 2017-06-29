<?php
    require_once dirname(__FILE__).'/../BL/User.php';
    class CockpitController {
       public static function cockpit_check(){
           if(isset($_POST['edit-recipe-user'])||isset($_POST['delete-recipe-user']))
           {
               if(!(isset($_POST['id-user']))){
                    $error = 21; 
                    return($error);
                }
                if(!(isset($_POST['login-user']))){
                    $error = 22; 
                    return($error);
                }
                if(!(isset($_POST['password-user']))){
                    $error = 23; 
                    return($error);
                }
                if(!(isset($_POST['email-user']))){
                    $error = 3; 
                    return($error);
                }
                if(isset($_POST['edit-recipe-user']))
                {
                   $us=new User();
                   $us->id=$_POST['id-user'];
                   $us->login=$_POST['login-user'];
                   $us->password=$_POST['password-user'];
                   $us->email=$_POST['email-user'];
                   $us->update();
                }
                if(isset($_POST['delete-recipe-user'])){
                   $us=new User();
                   $us->id=$_POST['id-user'];
                   $us->delete();
                }

           }
           
           if(isset($_POST['recipe-name-user'])){
               if(isset($_POST['delete-ingredient-admin'])){
                   
               }
               if(isset($_POST['accept-ingredient-admin'])){
                   
               }
               if(isset($_POST['edit-ingredient-admin'])){
                   
               }
           }else{
               return(24);
           }     
       }   
    }
