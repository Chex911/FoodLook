<?php
require_once dirname(__FILE__).'/../DAL/ImageDAL.php';

/**
 * 
 * 
 * @author marcinwlodarczyk
 */

class Image {
    public $id;
    public $name;
    public $path;
    public $size;
    
    public function create(){
        if(isset($this->name, $this->path, $this->size)){
            $res = ImageDAL::create($this);
            if($res){
                $this->id = ImageDAL::getID($this);
                return($res);
            }
        }else{
            return(FALSE);
        } 
    }
    
    public function retriveByName(){
        return(ImageDAL::retriveByName($this));
    }
    
    public function delete(){
        return(ImageDAL::delete($this));
    }
    
    public function update(){
        
    }
    public static function rand_image($cat)
    {
        return(ImageDAL::rand_image($cat));
    }
    
    public function retriveAll(){
        
    }
    
    public function getPath(){
        return($this->path);
    }
}
