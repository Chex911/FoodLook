<?php
require_once dirname(__FILE__).'/../DataAbstraction/DB.php';

class Recipe_has_ingredientDAL{
    
    public static function create($e){
        $db = DB::getDB();
        $query = "INSERT INTO recipe_has_ingredient (recipe_id, ingredient_id) VALUES(:recipe_id,:ingredient_id)";
        
        $params =
        [
            ':recipe_id'=>$e->recipe_id,
            ':ingredient_id'=>$e->ingredient_id
        ];
        
        $res = $db -> query($query, $params);
        return($res);
    }
    
    public static function delete($e){
        $db= DB::getDB();
        $query = "DELETE FROM recipe_has_ingredient WHERE recipe_id=:recipe_id";
        
        $params =
        [
            ':recipe_id'=>$e->recipe_id,
        ];
        
        $res = $db -> query($query, $params);
        return($res);
        
    }
    
    public static function update($e){
        $db= DB::getDB();
        $query = "UPDATE  recipe_has_ingredient SET  ingredient_id=:ingredient_id,recipe_id=:recipe_id WHERE ingredient_id=:ingredient_id AND recipe_id=:recipe_id ";
        
        $params =
        [
            ':recipe_id'=>$e->recipe_id,
            ':ingredient_id'=>$e->ingredient_id
        ];
        
        $res = $db -> query($query, $params);
        return($res);
    }
    
    public static function retriveAll(){
        $db=DB::getDB();
        $query="SELECT * FROM recipe_has_ingredient";
        
        
        $res = $db->query($query);
        $res -> setFetchMode(PDO::FETCH_CLASS,"recipe_has_ingredient");
        return($res);
    }
    
    public static function retriveByRecipe($e){
        $db=DB::getDB();
        $query="SELECT * FROM recipe_has_ingredient WHERE recipe_id = :recipe_id";
        
        $params =
        [
            ':recipe_id'=>$e->recipe_id
        ];
        
        $res = $db->query($query, $params);
        $res -> setFetchMode(PDO::FETCH_CLASS,"recipe_has_ingredient");
        $row = $res -> fetch();
        
        if($row){
            $e -> recipe_id = $row -> recipe_id;
        }
        
        $res -> closeCursor();
        return($row);
    }
    
     public static function retriveByIngredient($e){
        $db=DB::getDB();
        $query="SELECT * FROM recipe_has_ingredient WHERE ingredient_id = :ingredient_id";
        
        $params =
        [
            ':ingredient_id'=>$e->ingredient_id
        ];
        
        $res = $db->query($query, $params);
        $res -> setFetchMode(PDO::FETCH_CLASS,"recipe_has_ingredient");
        $row = $res -> fetch();
        
        if($row){
            $e -> ingredient_id = $row -> ingredient_id;
        }
        
        $res -> closeCursor();
        return($row);
    }
    
    public static function ingredientsToArray($e){
        $db=DB::getDB();
        $query="SELECT * FROM recipe_has_ingredient WHERE recipe_id = :recipe_id";
        
        $params =
        [
            ':recipe_id' => $e -> recipe_id
        ];
        
        $res = $db->query($query, $params);
        $res -> setFetchMode(PDO::FETCH_CLASS,"recipe_has_ingredient");
        $row = $res -> fetch();
        
        $array = array();
        
        while($row = $res -> fetch()){
            $array[] = $row -> ingredient_id;
        }
        
        $res -> closeCursor();
        return $array;
    }
    
    public static function getAllIngredients($e){
        $db=DB::getDB();
        $query="SELECT * FROM recipe_has_ingredient WHERE recipe_id = :recipe_id";
        
        $params =
        [
            ':recipe_id' => $e -> recipe_id
        ];
        
        $res = $db->query($query, $params);
        $res -> setFetchMode(PDO::FETCH_CLASS,"recipe_has_ingredient");
        $row = $res -> fetch();
        
    }
}
