<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class DB{
    private $conn;
    private static $instance;


    private function __construct(){
        try{
            $this->conn = new PDO("mysql:host=localhost;port=3306;dbname=lookdb;charset=UTF8",
                                  "foodlooker", "foodlooker");       
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }catch(PDOException $e){
            echo $e ->getMessage();
            exit();
        }
    }
    
    public static function getDB(){
        if(self::$instance == NULL){
            self::$instance = new DB();
        }
        return(self::$instance);  
    }
    
    public function query($query, $params = []){
        $statement = $this->conn->prepare($query);
        $statement->execute($params);
        return($statement);
    }
    
    public function lastInsertId(){
        return($this->conn->lastInsertId());
    }
}