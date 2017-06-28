<?php
require_once dirname(__FILE__).'/../BL/Recipe.php';

class RateController{
    
    public static function getTopRecipes(){
        return(Recipe::getTopRecipes());
    }
}

