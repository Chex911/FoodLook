<?php
require_once dirname(__FILE__).'/../DataAbstraction/DB.php';

class CategoryDAL{
    
    public static function create($e){
        $db = DB::getDB();
        $query = "INSERT INTO category (name) VALUES(:name)";
        
        $params =
        [
            ':name'=>$e->name
        ];
        
        $res = $db -> query($query, $params);
        return($res);
    }
    
    public static function delete($e){
        $db= DB::getDB();
        $query = "DELETE FROM category WHERE name=:name  ";
        
        $params =
        [
            ':name'=>$e->name
        ];
        
        $res = $db -> query($query, $params);
        return($res);
        
    }
    
    public static function update($e){
        $db= DB::getDB();
        $query = "UPDATE  category SET  name=:name WHERE name=:name ";
        
        $params =
        [
            ':name'=>$e->name
        ];
        
        $res = $db -> query($query, $params);
        return($res);
    }
    
    public static function retriveAll(){
        $db=DB::getDB();
        $query="SELECT * FROM category";
        
        
        $res = $db->query($query);
        $res -> setFetchMode(PDO::FETCH_CLASS,"Category");
        
        $array = array();
        while($row = $res -> fetch()){
            if($row != NULL){
                $array[] = $row;
            }
        }
        
        $res -> closeCursor();

        if(isset($array[0])){
            return($array);
        }else{
            return(FALSE);
        }
    }
    
    public static function retriveByName($e){
        $db=DB::getDB();
        $query="SELECT * FROM category WHERE name = :name";
        
        $params =
        [
            ':name'=>$e->name
        ];
        
        $res = $db->query($query, $params);
        $res -> setFetchMode(PDO::FETCH_CLASS,"category");
        $array = array();
        
        while($row = $res -> fetch()){
            if($row != NULL){
                $array[] = $row;
            }
        }
        
        $res -> closeCursor();

        if(isset($array[0])){
            return($array);
        }else{
            return(FALSE);
        }
    }
    
    public static function getRecipeArray($e){
        $db=DB::getDB();
        $query="SELECT * from recipe rc , category_has_recipe chr where rc.id=chr.recipe_id AND chr.category_id=:id;";
        
        $params =
        [
            ':id'=>$e->id
        ];
        
        $res = $db->query($query, $params);
        $res -> setFetchMode(PDO::FETCH_CLASS,"Recipe");
        $array = array();
        
        while($row = $res -> fetch()){
            if($row != NULL){
                $array[] = $row;
            }
        }
        
        $res -> closeCursor();

        if(isset($array[0])){
            return($array);
        }else{
            return(FALSE);
        }
    }

}
