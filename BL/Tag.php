
<?php
    require_once dirname(__FILE__).'/../DAL/TagDAL.php';

    
class Tag{
    public $name;
    


    public function create() {
        $res = FALSE;
        
        if(!$this->retriveByName()){
            $res = TagDAL::create($this);
        }
        return($res);
    }
    
    public function delete() {
        return(TagDAL::delete($this));
    }
    
    public function update() {
        return(TagDAL::update($this));
    }
    
    public static  function retriveAll(){
        return(TagDAL::retriveAll());
    }
    
    public function retriveByName() {
        return(TagDAL::retriveByName($this));
    }   
    
   
}
