<?php

require_once dirname(__FILE__).'/../DataAbstraction/DB.php';

class User_has_favorite_recipeDAL{
    
    public static function create($e){
        $db = DB::getDB();
        $query = "INSERT INTO user_has_recipe (user_id, recipe_id) VALUES(:user_id, :recipe_id)";
        
        $params =
        [
            ':user_id'=>$e->user_id,
            ':recipe_id'=>$e->recipe_id
        ];
        
        $res = $db -> query($query, $params);
        return($res);
    }
    
    public static function delete($e){
        $db= DB::getDB();
        $query = "DELETE FROM lookdb.user_has_recipe WHERE user_id=:user_id AND recipe_id=:recipe_id ";
        
        $params =
        [
            ':user_id'=>$e->user_id,
            ':recipe_id'=>$e->recipe_id
        ];
        
        $res = $db -> query($query, $params);
        return($res);
        
    }
    public static function deleteByRecipe($e){
        $db= DB::getDB();
        $query = "DELETE FROM lookdb.user_has_recipe WHERE recipe_id=:recipe_id ";
        
        $params =
        [
            ':recipe_id'=>$e->recipe_id
        ];
        
        $res = $db -> query($query, $params);
        return($res);
        
    }
    
    
    public static function update($e){
        $db= DB::getDB();
        $query = "UPDATE  user_has_recipe SET  user_id=:user_id, recipe_id=:recipe_id WHERE recipe_id=:recipe_id AND user_id=:user_id";
        
        $params =
        [
            ':user_id'=>$e->user_id,
            ':recipe_id'=>$e->recipe_id
        ];
        
        $res = $db -> query($query, $params);
        return($res);
    }
    
    
    public static function retriveAll(){
        $db=DB::getDB();
        $query="SELECT * FROM user_has_recipe";
        
        
        $res = $db->query($query);
        $res -> setFetchMode(PDO::FETCH_CLASS,"user_has_recipe");
        return($res);
    }
    
    public static function retriveByUser($e){
        $db=DB::getDB();
        $query="SELECT * FROM user_has_recipe WHERE user_id = :user_id";
        
        $params =
        [
            ':user_id'=>$e->user_id
        ];
        
        $res = $db->query($query, $params);
        $res -> setFetchMode(PDO::FETCH_CLASS,"user_has_recipe");
        
         $array = array();
        
        while($row = $res -> fetch()){
            $array[] = $row;
        }
        $res -> closeCursor();
        
        if(isset($array)){
            return($array);
        } else {
            $return = FALSE;
        }
        if($row){
            $e -> user_id = $row -> user_id;
        }
        
     
        return($return);
    }
    
    public static function retriveByRecipe($e){
        $db=DB::getDB();
        $query="SELECT * FROM user_has_recipe WHERE recipe_id = :recipe_id";
        
        $params =
        [
            ':recipe_id'=>$e->recipe_id
        ];
        
        $res = $db->query($query, $params);
        $res -> setFetchMode(PDO::FETCH_CLASS,"user_has_recipe");
        $row = $res -> fetch();
        
        if($row){
            $e -> recipe_id = $row -> recipe_id;
        }
        
        $res -> closeCursor();
        return($row);
    }
    public static function create_from_session($e,$r,$u)
    {
        $db = DB::getDB();
        $query = "INSERT INTO user_has_recipe (user_id, recipe_id) VALUES(:user_id, :recipe_id)";
        $us_id= new User();
        $us_id->login=$u->name;
        $id=$us_id->retriveByLogin();
        
        $params =
        [
            ':user_id'=>$id->id,
            ':recipe_id'=>$r -> id
        ];
        
        $res = $db -> query($query, $params);
        return($res);
    }
    
     public static function contains($e,$r){
         $db = DB::getDB();
         $query = "SELECT COUNT(*) AS contain FROM user_has_recipe WHERE user_id= :user_id AND recipe_id= :recipe_id";
        $us_id= new User();
        $us_id->login=$e->login;
        $id=$us_id->retriveByLogin();
        
        $params =
        [
            ':user_id'=>$id->id,
            ':recipe_id'=>$r
        ];
        
        $res = $db -> query($query, $params);
        $res = $res->fetchColumn();
        if($res!=0)
        {
            return(true);
        }
        else
        {
            return (false);
        }
        
       
     }
}
