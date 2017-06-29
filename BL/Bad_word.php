<?php
require_once dirname(__FILE__).'/../DAL/Bad_wordDAL.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Bad_word {
    public $word;
    public $id;
    
    public static function create(){
        return(Bad_wordDAL::create($this));
    }
    
    public static function delete(){
        
    }
    
    public static function contain(){
        
    }
}
