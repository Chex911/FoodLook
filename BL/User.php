<?php
    require_once dirname(__FILE__).'/../DAL/UserDAL.php';

    
class User{
    public $login;
    public $password;
    public $email;
    
    public function create() {
        $res = FALSE;
        
        if(!$this->retriveByLogin() && !$this->retriveByEmial()){
            $res = UserDAL::create($this);
        }
        return($res);
    }
    
    public function delete() {
        return(UserDAL::delete($this));
    }
    
    public function update() {
        return(UserDAL::update($this));
    }
    
    public static  function retriveAll(){
        return(UserDAL::retriveAll());
    }
    
    public function retriveByLogin() {
        return(UserDAL::retriveByLogin($this));
    }   
    
     public function retriveByEmial() {
        return(UserDAL::retriveByEmail($this));
    }
    
    public function retriveByLoginAndPassword(){
        return(UserDAL::retriveByLoginAndPassword($this));
    }
}
