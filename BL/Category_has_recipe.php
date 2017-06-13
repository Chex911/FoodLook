
<?php
    require_once dirname(__FILE__).'/../DAL/Category_has_recipeDAL.php';

    
class Category_has_recipe{
    public $category_id;
    public $recipe_id;


    public function create() {
        $res = FALSE;
        
        if(!$this->retriveByRecipe() && !$this->retriveByCategory()){
            $res = Category_has_recipeDAL::create($this);
        }
        return($res);
    }
    
    public function delete() {
        return(Category_has_recipeDAL::delete($this));
    }
    
    public function update() {
        return(Category_has_recipeDAL::update($this));
    }
    
    public static  function retriveAll(){
        return(Category_has_recipeDAL::retriveAll());
    }
    
    public function retriveByRecipe() {
        return(Category_has_recipeDAL::retriveByRecipe($this));
    }   
    
     public function retriveByCategory() {
        return(Category_has_recipeDAL::retriveByCategory($this));
    } 
}
