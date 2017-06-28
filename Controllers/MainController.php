<?php
require_once dirname(__FILE__).'/UserController.php';
require_once dirname(__FILE__).'/SearchController.php';
require_once dirname(__FILE__).'/StyleController.php';
require_once dirname(__FILE__).'/AdminController.php';
require_once dirname(__FILE__).'/RecipeController.php';
require_once dirname(__FILE__).'/ImageController.php';
require_once dirname(__FILE__).'/CategoryController.php';
require_once dirname(__FILE__).'/RateController.php';

/*
 * Recipe return:
 * 1 - without errors
 * 2 - ingredient error
 * 3 - recipe error
 * 4 - description error
 */

class MainController {
    public static function process(){
        UserController::process();   
    }
    
    public static function login(){
        return UserController::login();
    }
    
    public static function logout(){
        UserController::logout();
    }
    
    public static function find_recipe(){
        return(SearchController::find_recipe());
    }
    public static function retrive_categories()
    {
        return(CategoryController::retrive_category());
    }
    
    public static function load_style(){
        StyleController::load_style();
    }
    
    public static function admin_process(){
        AdminController::process();
    }
    
    public static function recipe_process(){
        return(RecipeController::process());
    }
    
    public static function image_process(){
        return(ImageController::process());
    }
    
    public static function getTopThree(){
        return(RateController::getTopRecipes());
    }
}