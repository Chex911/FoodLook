<?php

require_once dirname(__FILE__).'/../BL/Recipe.php';

class SearchController{
    
    public static function find_recipe(){
        if(isset($_POST['find-product'])){
            $name = $_POST['product-name-search'];
            $r = new Recipe();
            $r -> name = $name;
            $result = $r ->retriveByName();
            return($result);
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

