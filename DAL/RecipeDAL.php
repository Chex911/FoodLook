<?php

require_once dirname(__FILE__).'/../DataAbstraction/DB.php';
require_once dirname(__FILE__).'/IngredientDAL.php';
require_once dirname(__FILE__).'/../BL/Recipe_has_ingredient.php';
require_once dirname(__FILE__).'/../BL/Recipe_has_image.php';

class RecipeDAL{
    
    public static function create($e){
        $db = DB::getDB();
        $query = "INSERT INTO recipe (name,description,short_description) VALUES(:name, :short_description, :description)";
        
        $params =
        [
            ':name'=>$e->name,
            ':short_description'=>$e->short_description,
            ':description'=>$e->description
        ];
        
        $res = $db -> query($query, $params);
        return($res);
    }
    
    public static function delete($e){
        $db= DB::getDB();
        $query = "DELETE FROM recipe WHERE name=:name  ";
        
        $params =
        [
            ':name'=>$e->name
        ];
        
        $res = $db -> query($query, $params);
        return($res);
        
    }
    
    public static function update($e){
        $db= DB::getDB();
        $query = "UPDATE  recipe SET  name=:name WHERE name=:name ";
        
        $params =
        [
            ':name'=>$e->name
        ];
        
        $res = $db -> query($query, $params);
        return($res);
    }
    
    public static function retriveAll(){
        $db=DB::getDB();
        $query="SELECT * FROM recipe";
        
        
        $res = $db->query($query);
        $res -> setFetchMode(PDO::FETCH_CLASS,"recipe");
        return($res);
    }
    
    public static function retriveByName($e){
        $db = DB::getDB();
        $query = "SELECT * FROM recipe WHERE name LIKE :name";
        
        $params =
                [
                  ':name' => '%'.$e -> name.'%'  
                ];

        $res = $db -> query($query,$params);
        $res -> setFetchMode(PDO::FETCH_CLASS,"recipe");

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
        
        return $return;
    }
    
    public static function getObject($e){
        $db = DB::getDB();
        $query = "SELECT * FROM recipe WHERE name = :name";

        $params =
                [
                  ':name' => $e -> name, 
                ];

        $res = $db -> query($query,$params);
        $res -> setFetchMode(PDO::FETCH_CLASS,"recipe");
        $row = $res -> fetch();

        if(isset($row)){
            return($row);
        }
        return(FALSE);   
    }

    public static function getID($e){
        $db = DB::getDB();
        $query = "SELECT * FROM recipe WHERE name = :name";

        $params =
                [
                  ':name' => $e -> name, 
                ];

        $res = $db -> query($query,$params);
        $res -> setFetchMode(PDO::FETCH_CLASS,"Recipe");
        $row = $res -> fetch();

        if(isset($row)){
            if($row instanceof Recipe){
               $id = $row -> id;
               return($id);  
            }
        }
        return(FALSE);   
    }
    
    public static function addIngredients($r,$ingredients_array){
        $error_flag = 1;
        $id_r = self::getID($r);
        if($id_r){
            foreach($ingredients_array as $ingredient_name){
                $id_i = IngredientDAL::retriveByName($ingredient_name);
                if($id_i){
                    $recipe_has_ingredient = new Recipe_has_ingredient();
                    $recipe_has_ingredient -> recipe_id = $id_r;
                    $recipe_has_ingredient -> ingredient_id = $id_i;
                    
                    $recipe_has_ingredient -> create();
                }else{
                    $error_flag = 2;
                }
            }
        }
        
        return($error_flag);  
    }
    
    public static function getIngredients($e){
        $db = DB::getDB();
        $query = "SELECT * FROM recipe_has_ingredient rhi
                    INNER JOIN ingredient i ON i.id=rhi.ingredient_id
                    WHERE rhi.recipe_id= :id";
        
        $id = static::getID($e);  
        if(isset($id)){
            $params =
                [
                  ':id' => $id
                ];
            $res = $db -> query($query,$params);
            $res -> setFetchMode(PDO::FETCH_CLASS,"ingredient");
            $array = array();
        
            while($row = $res -> fetch()){
                if($row != NULL){
                    $array[] = $row->name;
                }
            }
            $res -> closeCursor();
            
            if(isset($array[0])){
                return($array);
            }else{
                return(FALSE);
            }
            
        }else{
            return(FALSE);
        }
    }
    
    public static function getIMG($e){
        $db = DB::getDB();
        $query = "SELECT * FROM recipe_has_image rhi
                    INNER JOIN image i ON i.id=rhi.image_id
                    WHERE rhi.recipe_id= :id";
        
        $id = static::getID($e);
        if(isset($id)){
            $params =
                [
                  ':id' => $id
                ];
            $res = $db -> query($query,$params);
            $res -> setFetchMode(PDO::FETCH_CLASS,"Image");
            $row = $res -> fetch();
            
            if($row instanceof Image){
                return($row);
            }else{
                return(FALSE);
            }
        }
    }
}
   

