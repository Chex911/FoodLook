
<?php
    require_once dirname(__FILE__).'/../DAL/User_has_favorite_recipeDAL.php';

    
class User_has_recipe{
    public $user_id;
    public $recipe_id;
    
    public function create() {
        $res = FALSE;
        
        if(!$this->retriveByRecipe() && !$this->retriveByUser()){
            $res = User_has_favorite_recipeDAL::create($this);
        }
        return($res);
    }
    
    public function delete() {
        return(User_has_favorite_recipeDAL::delete($this));
    }
    public function deleteByRecipe() {
        return(User_has_favorite_recipeDAL::deleteByRecipe($this));
    }
    
    
    public function update() {
        return(User_has_favorite_recipeDAL::update($this));
    }
    
    public static  function retriveAll(){
        return(User_has_favorite_recipeDAL::retriveAll());
    }
    
    public function retriveByRecipe() {
        return(User_has_favorite_recipeDAL::retriveByRecipe($this));
    }   
    
     public function retriveByUser() {
        return(User_has_favorite_recipeDAL::retriveByUser($this));
    } 
    public function create_from_session($r,$u) {
        return(User_has_favorite_recipeDAL::create_from_session($this,$r,$u));
    } 
}
