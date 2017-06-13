<?php

require_once dirname(__FILE__).'/../DataAbstraction/DB.php';

class Tag_has_recipeDAL{
    
    public static function create($e){
        $db = DB::getDB();
        $query = "INSERT INTO tag_has_recipe (tag_id, recipe_id) VALUES(:tag_id, :recipe_id)";
        
        $params =
        [
            ':tag_id'=>$e->tag_id,
            ':recipe_id'=>$e->recipe_id
        ];
        
        $res = $db -> query($query, $params);
        return($res);
    }
    
    public static function delete($e){
        $db= DB::getDB();
        $query = "DELETE FROM lookdb.tag_has_recipe WHERE tag_id=:tag_id AND recipe_id=:recipe_id ";
        
        $params =
        [
            ':tag_id'=>$e->tag_id,
            ':recipe_id'=>$e->recipe_id
        ];
        
        $res = $db -> query($query, $params);
        return($res);
        
    }
    
    public static function update($e){
        $db= DB::getDB();
        $query = "UPDATE  tag_has_recipe SET  tag_id=:tag_id, recipe_id=:recipe_id WHERE recipe_id=:recipe_id AND tag_id=:tag_id";
        
        $params =
        [
            ':tag_id'=>$e->tag_id,
            ':recipe_id'=>$e->recipe_id
        ];
        
        $res = $db -> query($query, $params);
        return($res);
    }
    
    public static function retriveAll(){
        $db=DB::getDB();
        $query="SELECT * FROM tag_has_recipe";
        
        
        $res = $db->query($query);
        $res -> setFetchMode(PDO::FETCH_CLASS,"tag_has_recipe");
        return($res);
    }
    
    public static function retriveByTag($e){
        $db=DB::getDB();
        $query="SELECT * FROM tag_has_recipe WHERE tag_id = :tag_id";
        
        $params =
        [
            ':tag_id'=>$e->tag_id
        ];
        
        $res = $db->query($query, $params);
        $res -> setFetchMode(PDO::FETCH_CLASS,"tag_has_recipe");
        $row = $res -> fetch();
        
        if($row){
            $e -> user_id = $row -> user_id;
        }
        
        $res -> closeCursor();
        return($row);
    }
    
    public static function retriveByRecipe($e){
        $db=DB::getDB();
        $query="SELECT * FROM tag_has_recipe WHERE recipe_id = :recipe_id";
        
        $params =
        [
            ':recipe_id'=>$e->recipe_id
        ];
        
        $res = $db->query($query, $params);
        $res -> setFetchMode(PDO::FETCH_CLASS,"tag_has_recipe");
        $row = $res -> fetch();
        
        if($row){
            $e -> recipe_id = $row -> recipe_id;
        }
        
        $res -> closeCursor();
        return($row);
    }
}
