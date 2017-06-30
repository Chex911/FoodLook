<?php
require_once dirname(__FILE__).'/../DAL/Recipe_has_ingredientDAL.php';

    
class Recipe_has_ingredient{
    public $recipe_id;
    public $ingredient_id;


    public function create() {
        $res = FALSE;
        
        
        $res = Recipe_has_ingredientDAL::create($this);
        
        return($res);
    }
    
    public function delete() {
        return(Recipe_has_ingredientDAL::delete($this));
    }
    
    public function update() {
        return(Recipe_has_ingredientDAL::update($this));
    }
    
    public static  function retriveAll(){
        return(Recipe_has_ingredientDAL::retriveAll());
    }
    
    public function retriveByRecipe() {
        return(Recipe_has_ingredientDAL::retriveByRecipe($this));
    }   
    
    public function retriveByIngredient() {
        return(Recipe_has_ingredientDAL::retriveByIngredient($this));
    }
    
    public function delete_byIngredientID(){
        return(Recipe_has_ingredientDAL::delete_byIngredientID($this));
    }
}
