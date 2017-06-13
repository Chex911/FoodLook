<?php
require_once dirname(__FILE__).'/../DAL/Recipe_has_imageDAL.php';
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
class Recipe_has_image{
    public $id;
    public $recipe_id;
    public $image_id;
    
    public function create(){
        if(isset($this->recipe_id, $this->image_id)){
            return(self::makeConnection());
        }
    }
    
    public function retriveByName(){
        return(Recipe_has_image::retriveByName($this));
    }
    
    public function delete(){
        return(Recipe_has_imageDAL::delete($this));
    }
    
    public function update(){
        return(Recipe_has_imageDAL::update());
    }
    
    public function retriveAll(){
        return(Recipe_has_imageDAL::retriveAll());
    }
    
    public function makeConnection(){
        return(Recipe_has_imageDAL::makeConnection($this));
    }
}
