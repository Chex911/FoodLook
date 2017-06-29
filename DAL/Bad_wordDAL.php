<?php
require_once dirname(__FILE__).'/../DataAbstraction/DB.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bad_wordDAL
 *
 * @author marcinwlodarczyk
 */

class Bad_wordDAL {
    public static function create($e){
        $db = DB::getDB();
        $query = "INSERT INTO bad_word(word) VALUES(:word)";
        
        $params =
        [
            ':word'=>$e->word
        ];
        
        $res = $db -> query($query, $params);
        return($res);
    }
    
    public static function contain($word){
        $db=DB::getDB();
        $query="SELECT word FROM bad_word WHERE word = :word;";
        
        $params =
        [
            ':word'=> $word
        ];
        
        $res = $db->query($query, $params);
        $res -> setFetchMode(PDO::FETCH_BOUND);
        $row = $res -> fetch();
        
       
        return($row);
    }
}
