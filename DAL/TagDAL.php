<?php

require_once dirname(__FILE__).'/../DataAbstraction/DB.php';

class TagDAL{
    
    public static function create($e){
        $db = DB::getDB();
        $query = "INSERT INTO tag (name) VALUES(:name)";
        
        $params =
        [
            ':name'=>$e->name
        ];
        
        $res = $db -> query($query, $params);
        return($res);
    }
    
    public static function delete($e){
        $db= DB::getDB();
        $query = "DELETE FROM tag WHERE name=:name  ";
        
        $params =
        [
            ':name'=>$e->name
        ];
        
        $res = $db -> query($query, $params);
        return($res);
        
    }
    
    public static function update($e){
        $db= DB::getDB();
        $query = "UPDATE  tag SET  name=:name WHERE name=:name ";
        
        $params =
        [
            ':name'=>$e->name
        ];
        
        $res = $db -> query($query, $params);
        return($res);
    }
    
    public static function retriveAll(){
        $db=DB::getDB();
        $query="SELECT * FROM tag";
        
        
        $res = $db->query($query);
        $res -> setFetchMode(PDO::FETCH_CLASS,"tag");
        return($res);
    }
    
    public static function retriveByName($e){
        $db=DB::getDB();
        $query="SELECT * FROM tag WHERE name = :name";
        
        $params =
        [
            ':name'=>$e->name
        ];
        
        $res = $db->query($query, $params);
        $res -> setFetchMode(PDO::FETCH_CLASS,"tag");
        $row = $res -> fetch();
        
        if($row){
            $e -> name = $row -> name;
        }
        
        $res -> closeCursor();
        return($row);
    }
    
   
}
