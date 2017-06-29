<?php
    require_once dirname(__FILE__).'/../DAL/IngredientDAL.php';

    
class Ingredient{
    public $name;
    public $validation;


    public function create() {
        $res = IngredientDAL::create($this);
        
        return($res);
    }
    
    public function delete() {
        return(IngredientDAL::delete($this));
    }
    
    public function update() {
        return(IngredientDAL::update($this));
    }
    
    public static  function retriveAll(){
        return(IngredientDAL::retriveAll());
    }
    
    public static function retriveByName($name) {
        return(IngredientDAL::retriveByName($name));
    }   
    
     public function retriveByType() {
        return(IngredientDAL::retriveByType($this));
    } 
}
