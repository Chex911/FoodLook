<?php

require_once dirname(__FILE__).'/../DataAbstraction/DB.php';

class Category_has_recipeDAL{
    
    public static function create($e){
        $db = DB::getDB();
        $query = "INSERT INTO category_has_recipe (recipe_id, category_id) VALUES(:recipe_id,:category_id)";
        
        $params =
        [
            ':recipe_id'=>$e->recipe_id,
            ':category_id'=>$e->category_id
        ];
        
        $res = $db -> query($query, $params);
        return($res);
    }
    
    public static function delete($e){
        $db= DB::getDB();
        $query = "DELETE FROM category_has_recipe WHERE recipe_id=:recipe_id";
        
        $params =
        [
            ':recipe_id'=>$e->recipe_id
        ];
        
        $res = $db -> query($query, $params);
        return($res);
        
    }
    
    public static function update($e){
        $db= DB::getDB();
        $query = "UPDATE  category_has_recipe SET  category_id=:category_id,recipe_id=:recipe_id WHERE category_id=:category_id AND recipe_id=:recipe_id ";
        
        $params =
        [
            ':recipe_id'=>$e->recipe_id,
            ':category_id'=>$e->category_id
        ];
        
        $res = $db -> query($query, $params);
        return($res);
    }
    
    public static function retriveAll(){
        $db=DB::getDB();
        $query="SELECT * FROM category_has_recipe";
        
        
        $res = $db->query($query);
        $res -> setFetchMode(PDO::FETCH_CLASS,"category_has_recipe");
        return($res);
    }
    
    public static function retriveByRecipe($e){
        $db=DB::getDB();
        $query="SELECT * FROM category_has_recipe WHERE recipe_id = :recipe_id";
        $params =
        [
            ':recipe_id'=>$e->recipe_id
        ];
        
        $res = $db->query($query, $params);
        $res -> setFetchMode(PDO::FETCH_CLASS,"category_has_recipe");
        $row = $res -> fetch();
        
        if($row){
            $e -> recipe_id = $row -> recipe_id;
        }
        
        $res -> closeCursor();
        return($row);
    }
    public static function getCategory($e){
        $db=DB::getDB();
        $query="SELECT name FROM category cat, category_has_recipe cht
            where cat.id=cht.category_id
            and cht.recipe_id=:recipe_id";
        $params =
        [
            ':recipe_id'=>$e
        ];
        
        $res = $db->query($query, $params);
        $res -> setFetchMode(PDO::FETCH_CLASS,"Category");
        $row = $res -> fetch();
        
        $res -> closeCursor();
        if($row){
            return($row[0]);
        }else{
            return(FALSE);
        }
    }
    
    
     public static function retriveByCategory($e){
        $db=DB::getDB();
        $query="SELECT * FROM category_has_recipe WHERE category_id = :category_id";
        
        $params =
        [
            ':category_id'=>$e->category_id
        ];
        
        $res = $db->query($query, $params);
        $res -> setFetchMode(PDO::FETCH_CLASS,"category_has_recipe");
        $row = $res -> fetch();
        
        if($row){
            $e -> category_id = $row -> category_id;
        }
        
        $res -> closeCursor();
        return($row);
    }
    
   
}
