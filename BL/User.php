<?php
    require_once dirname(__FILE__).'/../DAL/UserDAL.php';
    require_once dirname(__FILE__).'/../DAL/User_has_favorite_recipeDAL.php';

    
class User{
    public $id;
    public $login;
    public $password;
    public $email;
    
    public function create() {
        $res = FALSE;
        
        if(!$this->retriveByLogin() && !$this->retriveByEmail()){
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
    
     public function retriveByEmail() {
        return(UserDAL::retriveByEmail($this));
    }
    
    public function retriveByLoginAndPassword(){
        return(UserDAL::retriveByLoginAndPassword($this));
    }
    public function contains($id) {
        return(User_has_favorite_recipeDAL::contains($this,$id));        
    }
    public function getFavoriteArray(){
        return(UserDAL::getFavoriteArray($this));
    }
}
