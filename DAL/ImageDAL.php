<?php
require_once dirname(__FILE__).'/../DataAbstraction/DB.php';

/**
 * Description of ImageDAL
 *
 * @author marcinwlodarczyk
 */

class ImageDAL {
    
    public static function create($e){
        $db = DB::getDB();
        $query = "INSERT INTO image (name,path,size) VALUES(:name, :path, :size)";
        
        $params =
        [
            ':name'=>$e->name,
            ':path'=>$e->path,
            ':size'=>$e->size,
        ];
        
        $res = $db -> query($query, $params);
        return($res);
    }
    
    public static function retriveByName($e){
        $db = DB::getDB();
        $query = "SELECT * FROM image WHERE name=:name";
        
        $params =
                [
                  ':name' => $e -> name  
                ];

        $res = $db->query($query, $params);
        $res -> setFetchMode(PDO::FETCH_CLASS,"image");
        $row = $res -> fetch();
        
        if($row){
            $row = TRUE;
        }else{
            $row = FALSE;
        }
        
        $res -> closeCursor();
        return($row);
    }
    
    public function delete(){
        $db= DB::getDB();
        $query = "DELETE FROM image WHERE name=:name  ";
        
        $params =
        [
            ':name'=>$e->name
        ];
        
        $res = $db -> query($query, $params);
        return($res);
    }
    
    public function update(){
        
    }
    public static function rand_image($cat)
    {
        $db = DB::getDB();
        $query = "SELECT im.path from image im 
                INNER JOIN recipe_has_image rhi on im.id=rhi.image_id 
                INNER JOIN category_has_recipe chr ON rhi.recipe_id=chr.recipe_id 
                AND chr.category_id=:cat_id ORDER BY rand() LIMIT 4;";
        
        $params =
                [
                  ':cat_id' => $cat -> id  
                ];

        $res = $db->query($query, $params);
        $res -> setFetchMode(PDO::FETCH_ASSOC);

        $array = array();
        
        while($row = $res -> fetch()){
            $array[] = $row['path'];
        }
        
        $res -> closeCursor();
        return $array;
    }
    
    public function retriveAll(){
        $db=DB::getDB();
        $query="SELECT * FROM image";
        
        
        $res = $db->query($query);
        $res -> setFetchMode(PDO::FETCH_CLASS,"image");
        return($res);
    }
    
    public static function getID($e){
        $db = DB::getDB();
        $query = "SELECT * FROM image WHERE name=:name";
        
        $params =
                [
                  ':name' => $e -> name  
                ];

        $res = $db->query($query, $params);
        $res -> setFetchMode(PDO::FETCH_CLASS,"image");
        $row = $res -> fetch();
        
        if($row){
            $id = $row -> id;
        }else{
            $id = FALSE;
        }
        
        return($id);
    }
}
