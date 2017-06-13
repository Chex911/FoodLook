
<?php
    require_once dirname(__FILE__).'/../DAL/CategoryDAL.php';

    
class Category{
    public $name;
    
  public function create() {
        $res = FALSE;
        
        if(!$this->retriveByName()){
            $res = RecipeDAL::create($this);
        }
        return($res);
    }
    
    public function delete() {
        return(RecipeDAL::delete($this));
    }
    
    public function update() {
        return(RecipeDAL::update($this));
    }
    
    public static  function retriveAll(){
        return(RecipeDAL::retriveAll());
    }
    
    public function retriveByName() {
        return(RecipeDAL::retriveByName($this));
    }   
    
}
