<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of recipe_has_image
 *
 * @author marcinwlodarczyk
 */
class Recipe_has_imageDAL{
    
    public function create(){
        
    }
    
    public function retriveByName(){
        
    }
    
    public static function delete($e){
        $db= DB::getDB();
        $query = "DELETE FROM recipe_has_image WHERE recipe_id=:recipe_id";
        
        $params =
        [
            ':recipe_id'=>$e->recipe_id,
        ];
        
        $res = $db -> query($query, $params);
        return($res);
    }
    
    public function update(){
        $db= DB::getDB();
        $query = "UPDATE  image SET  name=:name WHERE name=:name ";
        
        $params =
        [
            ':name'=>$e->name
        ];
        
        $res = $db -> query($query, $params);
        return($res);
    }
    
    public function retriveAll(){
        
    }
    
    public static function makeConnection($e){
        $db = DB::getDB();
        $query = "INSERT INTO recipe_has_image (recipe_id, image_id) VALUES(:recipe_id,:image_id)";
        
        $params =
        [
            ':recipe_id'=>$e->recipe_id,
            ':image_id'=>$e->image_id
        ];
        
        $res = $db -> query($query, $params);
        return($res);
    }
}
