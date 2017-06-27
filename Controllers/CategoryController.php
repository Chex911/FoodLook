<?php
require_once dirname(__FILE__).'/../BL/Category.php';
class CategoryController {
   public static function retrive_category()
   {
       if(isset($_GET['page'])&&$_GET['page']==='category/category')
       {
           return(static::get_categories());
       }
       else{
           echo 'Unexpected error';
       }
   }
   public static function get_categories()
   {
       return(Category::retriveAll());
       
   }
}
