<?php

require_once dirname(__FILE__).'/../DataAbstraction/DB.php';

class IngredientDAL{
    
    public static function create($e){
        $db = DB::getDB();
        $query = "INSERT INTO ingredient (name,validation) VALUES(:name,:validation)";
        
        $params =
        [
            ':name'=>$e->name,
            ':validation' => $e->validation
        ];
        
        $res = $db -> query($query, $params);
        return($res);
    }
    
    public static function delete($e){
        $db= DB::getDB();
        $query = "DELETE FROM ingredient WHERE name=:name";
        
        $params =
        [
            ':name'=>$e->name
        ];
        
        $res = $db -> query($query, $params);
        return($res);
    }
    
    public static function update($e){
        $db= DB::getDB();
        $query = "UPDATE  ingredient SET  name=:name,type=:type WHERE name=:name AND type=:type ";
        
        $params =
        [
            ':name'=>$e->name,
            ':type'=>$e->type
        ];
        
        $res = $db -> query($query, $params);
        return($res);
    }
    
    public static function retriveAll(){
        $db=DB::getDB();
        $query="SELECT * FROM ingredient";
        
        
        $res = $db->query($query);
        $res -> setFetchMode(PDO::FETCH_CLASS,"ingredient");
        
        $array = array();
        
        while($row = $res -> fetch()){
            $array[] = $row;
        }
        
        $res -> closeCursor();
        return $array;
    }
    
    public static function retriveByName($name){
        $db=DB::getDB();
        $query="SELECT id FROM ingredient WHERE name=:name";
        
        $params =
        [
            ':name'=> $name
        ];
        
        $res = $db->query($query, $params);
        $res -> setFetchMode(PDO::FETCH_NUM);
        $row = $res -> fetch();
        
        if($row){
            $id = $row[0];
            return($id);
        }
        
        $res -> closeCursor();
        return(FALSE);
    }
    
    public static function retriveByType($e){
        $db=DB::getDB();
        $query="SELECT * FROM ingredient WHERE type = :type";
        
        $params =
        [
            ':type'=>$e->type
        ];
        
        $res = $db->query($query, $params);
        $res -> setFetchMode(PDO::FETCH_CLASS,"ingredient");
        $row = $res -> fetch();
        
        if($row){
            $e -> type = $row -> type;
        }
        
        $res -> closeCursor();
        return($row);
    }
    
    public static function retrieveNotValid(){
        $db=DB::getDB();
        $query="SELECT * FROM ingredient WHERE validation = 0;";

        $res = $db->query($query);
        $res -> setFetchMode(PDO::FETCH_CLASS,"Ingredient");
        
        $array = array();
        
        while($row = $res -> fetch()){
            $array[] = $row;
        }
        
        $res -> closeCursor();
        
        if($array){
            return($array);
        }else{
            return(FALSE);
        }
    }
    
    public static function valid($e){
        $db= DB::getDB();
        $query = "UPDATE ingredient SET validation=:validation WHERE name=:name";
        
        $params =
        [
            ':validation'=>$e->validation,
            ':name'=>$e->name
        ];
        
        $res = $db -> query($query, $params);
        return($res);
    }
    
    public static function setCorrect($e){
        $db= DB::getDB();
        $query = "UPDATE recipe_has_ingredient "
                . "SET ingredient_id=(SELECT id from ingredient where name=:name) "
                . "WHERE ingredient_id=:ingredient_id;";
        
        $params =
        [
            ':name'=>$e->name,
            ':ingredient_id'=>$e->id
        ];
        
        $res = $db -> query($query, $params);
        return($res);
    }
}

