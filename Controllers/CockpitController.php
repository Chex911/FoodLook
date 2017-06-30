<?php
    require_once dirname(__FILE__).'/../BL/User.php';
require_once dirname(__FILE__).'/../BL/Bad_word.php';
require_once dirname(__FILE__).'/../BL/Ingredient.php';
require_once dirname(__FILE__).'/../BL/Recipe_has_ingredient.php';
    
    class CockpitController {
       public static function cockpit_check(){
           if(isset($_POST['edit-user'])||isset($_POST['delete-user']))
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
                if(isset($_POST['edit-user'])){
                    static::update_user();
                }
                if(isset($_POST['delete-user'])){
                    static::delete_user();
                }

           }
           if(isset($_POST['edit-recipe'])||isset($_POST['delete-recipe']))
           {
               if(!(isset($_POST['id-recipe']))){
                    $error = 21; 
                    return($error);
                }
                if(!(isset($_POST['name-recipe']))){
                    $error = 22; 
                    return($error);
                }
                if(!(isset($_POST['description-recipe']))){
                    $error = 23; 
                    return($error);
                }
                if(!(isset($_POST['s-description-recipe']))){
                    $error = 3; 
                    return($error);
                }
                if(!(isset($_POST['author-recipe']))){
                    $error = 3; 
                    return($error);
                }
                if(isset($_POST['edit-recipe'])){
                    static::update_recipe();
                }
                if(isset($_POST['delete-recipe'])){
                    static::delete_recipe();
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
                $i=new Ingredient();
                $i->id=$ingredient_id;
                $i->deleteByID();
             } else {
                 return(FALSE);
               }
             }
         if(isset($_POST['accept-ingredient-admin'])){
             $i = new Ingredient();
             $i -> name = htmlspecialchars($_POST['recipe-name-user']);
                   
             $result = $i -> retriveByName($i->name);
             $wrong_id = $_POST['wrong-id-input'];
             $i -> id = Ingredient::retriveByName($wrong_id);
             
             if($i->name!=$wrong_id){
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
       
       public static function delete_user() {
                   $us=new User();
                   $us->id=htmlspecialchars($_POST['id-user']);
                   $us->delete();
       }
       public static function delete_recipe() {
                   $re=new Recipe();
                   $re->id=htmlspecialchars($_POST['id-recipe']);
                   $re->delete();
       }
       public static function update_user() {
                   $us=new User();
                   $us->id=htmlspecialchars($_POST['id-user']);
                   $us->login=htmlspecialchars($_POST['login-user']);
                   $us->password=htmlspecialchars($_POST['password-user']);
                   $us->email=htmlspecialchars($_POST['email-user']);
                   $us->update();
       }
       public static function update_recipe() {
                   $re=new Recipe();
                   $re->id=htmlspecialchars($_POST['id-recipe']);
                   $re->name=htmlspecialchars($_POST['name-recipe']);
                   $re->description=htmlspecialchars($_POST['description-recipe']);
                   $re->short_description=htmlspecialchars($_POST['s-description-recipe']);
                   $re->author=htmlspecialchars($_POST['author-recipe']);
                   $re->updateByID();
       }
    }