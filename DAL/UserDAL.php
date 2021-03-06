<?php

require_once dirname(__FILE__).'/../DataAbstraction/DB.php';


class UserDAL{
    
    public static function create($e){
        $db = DB::getDB();
        $query = "INSERT INTO user (login, password, email) VALUES(:login, :password, :email)";
        
        $params =
        [
            ':login'=>$e->login,
            ':password'=>$e->password,
            ':email'=>$e->email
        ];
        
        $res = $db -> query($query, $params);
        return($res);
    }
    
    public static function delete($e){
        $db = DB::getDB();
        $query = "DELETE FROM user WHERE id=:id";
        
        $params =
        [
            ':id'=>$e->id
        ];
        
        $res = $db -> query($query, $params);
        return($res);
    }
    
    public static function update($e){
        $db = DB::getDB();
        $query = "UPDATE user SET login=:login,password=:password,email=:email WHERE id=:id";
        
        $params =
        [
            ':id'=>$e->id,
            ':login'=>$e->login,
            ':password'=>$e->password,
            ':email'=>$e->email
        ];
        
        $res = $db -> query($query, $params);
        return($res);
    }
    
    public static function getID($e) {
        $db=DB::getDB();
        $query="SELECT id FROM user where login=:login";
         $params =
        [
            ':login'=>$e->login
        ];
               
        $res = $db->query($query,$params);
        $res -> setFetchMode(PDO::FETCH_ASSOC);
        $row = $res -> fetch();
        
        if($row){
            return($row['id']);
        }
        
        return(FALSE);
        
    }
    
    public static function retriveAll(){
        $db=DB::getDB();
        $query="SELECT * FROM user";
        
        
        $res = $db->query($query);
        $res -> setFetchMode(PDO::FETCH_CLASS,"User");
        $array = array();
        while($row = $res -> fetch()){
            $array[] = $row;
        }
        $res -> closeCursor();
        
        if(isset($array)){
            return($array);
        } else {
            return(FALSE);
        }
    }
    
    public static function retriveByID($e){
        $db=DB::getDB();
        $query="SELECT * FROM user WHERE id = :id";
        
        $params =
        [
            ':id'=>$e->id
        ];
        
        $res = $db->query($query, $params);
        $res -> setFetchMode(PDO::FETCH_CLASS,"User");
        $row = $res -> fetch();
        
        if($row){
            $e -> id = $row -> id;
        }
        
        $res -> closeCursor();
        return($row);
    }

   public static function retriveByLogin($e){
        $db=DB::getDB();
        $query="SELECT * FROM user WHERE login = :login";
        
        $params =
        [
            ':login'=>$e->login
        ];
        
        $res = $db->query($query, $params);
        $res -> setFetchMode(PDO::FETCH_CLASS,"User");
        $row = $res -> fetch();
        
        if($row){
            $e -> login = $row -> login;
        }
        
        $res -> closeCursor();
        return($row);
    }
    
    public static function retriveByEmail($e){
        $db=DB::getDB();
        $query="SELECT * FROM user WHERE email = :email";
        
        $params =
        [
            ':email'=>$e->email
        ];
        
        $res = $db->query($query, $params);
        $res -> setFetchMode(PDO::FETCH_CLASS,"User");
        $row = $res -> fetch();
        
        if($row){
            $e -> email = $row -> email;
        }
        
        $res -> closeCursor();
        return($row);
    }
    
    public static function retriveByLoginAndPassword($e){
        $db=DB::getDB();
        $query="SELECT * FROM user WHERE login = :login AND password = :password";
        
        $params =
        [
            ':login'=>$e->login,
            ':password' =>$e->password,
        ];
        
        $res = $db->query($query, $params);
        $res -> setFetchMode(PDO::FETCH_CLASS,"User");
        $row = $res -> fetch();
        $return = false;
        
        if($row){
            $return = true;
        }
        
        $res -> closeCursor();
        return($return);
    }
    public static function getFavoriteArray($e)
    {
        $db=DB::getDB();
        $query="SELECT * FROM recipe WHERE id IN (SELECT recipe_id FROM user_has_recipe WHERE user_id= :user_id)";
        
        $params =
        [
            ':user_id'=>$e->id
        ];
        
        $res = $db->query($query, $params);
        $res -> setFetchMode(PDO::FETCH_CLASS,"Recipe");
        
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
}
