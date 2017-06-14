<?php
require_once dirname(__FILE__).'/../BL/Recipe.php';
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
            if($_POST['recipe-description'] == " "){
                $error = 4;
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
        else if(isset($_POST['favorite_id'], $_SESSION['login'])){
            
        }
        
    }
    
    public static function addRecipe($image){
        $r = new Recipe();
        $r -> name = $_POST['recipe-name-user'];
        $r -> description = $_POST['recipe-description'];
        $r -> image = $image;
        $result = $r ->create(static::splitIngredients($_POST['recipe-ingredients-user']));
        return($result);
    }
    
    private static function splitIngredients($input){
        $array = explode(" ", $input);
        return($array);
    }
    
    private static function add_to_favorite(){
        $r = new Recipe();
        $r -> id = $_POST['favorite_id'];
        $u = new User();
        $u -> name = $_SESSION['login'];
        
        $u -> add_favorite($r);
    }
    
}
