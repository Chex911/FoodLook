
<?php
    require_once dirname(__FILE__).'/../DAL/Tag_has_recipeDAL.php';

    
class Tag_has_recipe{
    public $tag_id;
    public $recipe_id;
    
    public function create() {
        $res = FALSE;
        
        if(!$this->retriveByRecipe() && !$this->retriveByTag()){
            $res = Tag_has_recipeDAL::create($this);
        }
        return($res);
    }
    
    public function delete() {
        return(Tag_has_recipeDAL::delete($this));
    }
    
    public function update() {
        return(Tag_has_recipeDAL::update($this));
    }
    
    public static  function retriveAll(){
        return(Tag_has_recipeDAL::retriveAll());
    }
    
    public function retriveByRecipe() {
        return(Tag_has_recipeDAL::retriveByRecipe($this));
    }   
    
     public function retriveByTag() {
        return(Tag_has_recipeDAL::retriveByTag($this));
    } 
}
