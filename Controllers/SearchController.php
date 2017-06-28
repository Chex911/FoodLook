<?php
require_once dirname(__FILE__).'/../BL/Category.php';
require_once dirname(__FILE__).'/../BL/Recipe.php';

class SearchController{
    
    public static function find_recipe(){
        if(isset($_POST['find-product'])){
            $name = $_POST['product-name-search'];
            $r = new Recipe();
            $r -> name = $name;
            $result = $r ->retriveByName();
            return($result);
        }if(isset($_GET['page']) && $_GET['page'] == "recipe/favorites"){
            $u=new User();
            $u->login=$_SESSION['login'];
            $user_id=$u->retriveByLogin();
            $u->id=$user_id->id;
            $array=$u->getFavoriteArray();
            
            return($array);
        }if(isset($_GET['page']) && isset($_GET['category'])){
           $c = new Category();
           $c -> id = $_GET['category'];
           return($c ->getRecipeArray());
        }else{
            echo 'We have a problem :(';
        }
        
        
        if(isset($_POST['find-product'])){
            static::find();
        }
    }
    
    private static function find(){
        $r = new Recipe();
        $r -> name = $_POST['product-name-search'];
        
        if($r ->retriveByName()){
            $result = $r->name;
            
            echo '<p style="color: white">Products: '.$result.'</p>';
        }else{
            echo '<p style="color: white">Not found</p>';
        }
        
        
    }
}

