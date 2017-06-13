<?php
require_once dirname(__FILE__).'/../BL/Recipe.php';

class AdminController {
    public static function process(){
        if(isset($_POST['add-recipe-admin'])){
            static::addRecipe();
        }else if(isset($_POST['add-recipe-image'])){
            static::upload();
        }
    }
    
    private static function addRecipe(){
        $r = new Recipe();
        $r -> name = $_POST['recipe-name'];
        $r -> description = $_POST['recipe-description'];
        $r ->create();
        $r ->addIngredients(static::splitIngredients($_POST['recipe-ingredients']));  
    }
    
    private static function splitIngredients($input){
        $array = explode(" ", $input);
        return($array);
    }
    
    public static function upload(){
        $target_dir = dirname(__FILE__)."/../img/recipe/recipe_img/";
        $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ".basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
    
    public static function createThumbnail(){
        
    }
}
