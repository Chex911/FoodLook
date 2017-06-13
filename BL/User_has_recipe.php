
<?php
    require_once dirname(__FILE__).'/../DAL/User_has_recipeDAL.php';

    
class User_has_recipe{
    public $recipe_id;
    public $ingredient_id;


    public function create() {
        $res = FALSE;
        
        if(!$this->retriveByRecipe() && !$this->retriveByUser()){
            $res = User_has_recipeDAL::create($this);
        }
        return($res);
    }
    
    public function delete() {
        return(User_has_recipeDAL::delete($this));
    }
    
    public function update() {
        return(User_has_recipeDAL::update($this));
    }
    
    public static  function retriveAll(){
        return(User_has_recipeDAL::retriveAll());
    }
    
    public function retriveByRecipe() {
        return(User_has_recipeDAL::retriveByRecipe($this));
    }   
    
     public function retriveByUser() {
        return(User_has_recipeDAL::retriveByUser($this));
    } 
}

