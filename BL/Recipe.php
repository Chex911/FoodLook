<?php
    require_once dirname(__FILE__).'/../DAL/RecipeDAL.php';
    require_once dirname(__FILE__).'/Ingredient.php';
    require_once dirname(__FILE__).'/Image.php';
    require_once dirname(__FILE__).'/Recipe_has_image.php';
    require_once dirname(__FILE__).'/../DAL/Category_has_recipeDAL.php';
    require_once dirname(__FILE__).'/Category_has_recipe.php';

    
    
    class Recipe{
    public $id;
    public $name;
    public $description;
    public $ingredients;
    public $image;
    public $short_description;


    public function create($ingredients_array) {
        $res = FALSE;
        if(isset($ingredients_array)){
            $res = self::ingredientValidation($ingredients_array) ? $this->ingredients = $ingredients_array : 2;
            if($res == 2){
                return($res);
            }else{
                $res = RecipeDAL::create($this) ? 1 : 3;
                if($res == 3){
                    return($res);
                }else{
                    if(($this->id = self::getID())){
                        $r_h_i = new Recipe_has_image();
                        $r_h_i -> recipe_id = $this->id;
                        $vars = get_object_vars($this->image);
                        $r_h_i -> image_id = (int)$vars['id'];
                        if($r_h_i -> create()){
                           $res = self::addIngredients($ingredients_array); 
                        }else{
                            return(16);
                        }
                        if(isset($_POST['category'])){
                            $c_h_r = new Category_has_recipe();
                            $c_h_r -> category_id = $_POST['category'];
                            $c_h_r -> recipe_id = $this->id;
                            $c_h_r ->create();
                        }else{
                            return(18);
                        }
                    }else{
                        return(15);
                    }
                }
                if($res == 2){
                    return($res);
                }
            }
        }else{
            return(2);
        }
        
        return($res);
    }
    
    public function delete() {
        return(RecipeDAL::delete($this));
    }
    public function getCategory()
    {
        return(Category_has_recipeDAL::getCategory($this->id));
    }


    public function update() {
        return(RecipeDAL::update($this));
    }
    
    public static  function retriveAll(){
        return(RecipeDAL::retriveAll());
    }
    
    public function getObject(){
        return(RecipeDAL::getObject($this));
    }

        public function retriveByName() {
        return(RecipeDAL::retriveByName($this));
    }   
    
    public function retrivveByName(){
        return(RecipeDAL::retriveByName($this));
    }
    
    public function getDescription(){
        return(RecipeDAL::getDescription());
    }
    
    public function ingredientValidation($array){
        foreach ($array as $ingredient){
            if(!(Ingredient::retriveByName($ingredient))){
                return(FALSE);
            } 
        }
        return(TRUE);
    }

    public function addIngredients($ingredients_array){
        return(RecipeDAL::addIngredients($this,$ingredients_array));
    }
    
    public function getIngredients(){
        return(RecipeDAL::getIngredients($this));
    }
    
    public function getIMG(){
        return(RecipeDAL::getIMG($this));
    }

    public function getID(){
        return(RecipeDAL::getID($this));
    }
    
    public function addImage($image){
        return(Image::addImage($this,$image));
    }
    
    public static function getTopRecipes(){
        return(RecipeDAL::getTopRecipes());
    }
}
