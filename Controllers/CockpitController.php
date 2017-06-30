<?php
require_once dirname(__FILE__).'/../BL/User.php';
require_once dirname(__FILE__).'/../BL/Bad_word.php';
require_once dirname(__FILE__).'/../BL/Ingredient.php';
require_once dirname(__FILE__).'/../BL/Recipe_has_ingredient.php';
    
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
             $bw = new Bad_word();
             $bw -> word = htmlspecialchars($_POST['recipe-name-user']);
             $bw -> create();
             
             $ingredient_id = Ingredient::retriveByName(htmlspecialchars($_POST['recipe-name-user']));
             
             if(isset($ingredient_id)){
                $r_h_i = new Recipe_has_ingredient();
                $r_h_i -> ingredient_id = $ingredient_id;
                $r_h_i -> delete_byIngredientID();
             } else {
                 return(FALSE);
             }
             
             $i = new Ingredient();
             $i -> name = htmlspecialchars($_POST['recipe-name-user']);
             $i -> delete();
         }
         if(isset($_POST['accept-ingredient-admin'])){
             $i = new Ingredient();
             $i -> name = htmlspecialchars($_POST['recipe-name-user']);
             
             $result = $i -> retriveByName($i->name);
             $wrong_id = $_POST['wrong-id-input'];
             $i -> id = Ingredient::retriveByName($wrong_id);
             
             if($result){
                $i ->setCorrect();
                $i -> name = $wrong_id;
                $i -> delete();
             }else{
                $i -> validation = 1;
                $i -> valid(); 
             }
         }
     }else{
         return(24);
     }     
 }   
}
