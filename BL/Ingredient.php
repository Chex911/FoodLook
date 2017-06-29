<?php
    require_once dirname(__FILE__).'/../DAL/IngredientDAL.php';
    require_once dirname(__FILE__).'/../BL/Bad_word.php';

    
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
    
    public static function retrieveNotValid(){
        return(IngredientDAL::retrieveNotValid()); //return not-valid Ingredients array
    }

    public static function getNotValid(){
        $array = static::retrieveNotValid(); //All not valid Ingredients
        $filtered_array = array();              //filtered ingredients
        
        foreach ($array as $ingredient){
            if(!Bad_word::contain($ingredient->name)){
                $filtered_array[] = $ingredient;
            }
        }
        
        if($filtered_array){
            return($filtered_array);
        }else{
            return(FALSE);
        }
    }
}
