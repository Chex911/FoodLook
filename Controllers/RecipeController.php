<?php
require_once dirname(__FILE__).'/../BL/Recipe.php';
require_once dirname(__FILE__).'/../BL/User.php';
require_once dirname(__FILE__).'/../BL/User_has_recipe.php';
require_once dirname(__FILE__).'/../Controllers/ImageController.php';

class RecipeController {
    public static function process(){      
        if(isset($_POST['add-recipe-user'], $_FILES['recipe-image-user'])){
            $error = 0;
            if(!(isset($_POST['recipe-name-user']))){
                $error = 3; 
                return($error);
            }
            if(!(isset($_POST['recipe-ingredients-user']))){
                $error = 2;
                return($error);
            }
            if($_POST['recipe-description'] == " " ||$_POST['short-description-input'] == " "){
                $error = 4;
                return($error);
            }
            if(strlen($_POST['recipe-description']) > 1000|| strlen($_POST['short-description-input']) > 100){
                $error = 17;
                return($error);
            }
            
            if(isset($_FILES['recipe-image-user'])){
                $error = ImageController::upload();
            }else{
                $error = 13;
                return($error);
            }
            if($error instanceof Image){
                $tmp = static::addRecipe($error);
                $error = $tmp;
            }
            return($error);
        }
        else if(isset($_POST['favorite_id'], $_POST['user_login'])){
            if($_POST['check_flag']=='checkbox heart is-checked'){
                static::add_to_favorite();
            }
            else{
                static::delete_from_favorite();
            }    
            
        }
        
    }
    
    public static function addRecipe($image){      
        $r = new Recipe();
        $r -> name = $_POST['recipe-name-user'];
        $r -> short_description = $_POST['short-description-input'];
        $r -> description = $_POST['recipe-description'];
        $r -> image = $image;
        $result = $r ->create(static::splitIngredients($_POST['recipe-ingredients-user']));
//        $c=new Category_has_recipe();
//        $c -> category_id=$_POST[''];

        return($result);
    }
    
    private static function splitIngredients($input){
        $array = explode(",", $input);
        return($array);
    }
    
    private static function add_to_favorite(){
        $r = new Recipe();
        $r -> id = $_POST['favorite_id'];
        $u = new User();
        $u -> name = $_POST['user_login'];
        $a = new User_has_recipe();
        $a->create_from_session($r,$u);
    }
     private static function delete_from_favorite(){
        $u = new User();
        $u -> login = $_POST['user_login'];
        $u=$u->retriveByLogin();
        $a = new User_has_recipe();
        $a->recipe_id=$_POST['favorite_id'];
        $a->user_id=$u->id;
        $a->delete();
    }
   
    
}
