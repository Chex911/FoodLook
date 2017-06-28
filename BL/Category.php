<?php
    require_once dirname(__FILE__).'/../DAL/CategoryDAL.php';

    
class Category{
    public $name;
    public $id;
    
  public function create() {
        $res = FALSE;
        
        if(!$this->retriveByName()){
            $res = CategoryDAL::create($this);
        }
        return($res);
    }
    
    public function delete() {
        return(CategoryDAL::delete($this));
    }
    
    public function update() {
        return(CategoryDAL::update($this));
    }
    
    public static  function retriveAll(){
        return(CategoryDAL::retriveAll());
    }
    
    public function retriveByName() {
        return(CategoryDAL::retriveByName($this));
    }
    
    public function getRecipeArray(){
        return(CategoryDAL::getRecipeArray($this));
    }
}
