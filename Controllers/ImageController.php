<?php
require_once dirname(__FILE__).'/../BL/Image.php';
require_once dirname(__FILE__).'/../BL/Recipe_has_image.php';

/**
 * Description of ImageController
 *
 * @author marcinwlodarczyk
 */
class ImageController {
    public static function process(){
        if(isset($_POST['add-recipe-image-user'])){
            if(isset($_FILES['recipe-image-user'])){
                return(static::upload());
            }
        }
    }
    
    public static function upload(){
        $error = 10;

        $target_dir = dirname(__FILE__)."/../img/recipe/recipe_img/";
        $target_file = $target_dir.basename($_FILES["recipe-image-user"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["recipe-image-user"]["tmp_name"]);
            if($check !== false) {
                //echo "File is an image - " . $check["mime"] . ".";
                $error = 5;
                $uploadOk = 1;
            } else {
                //echo "File is not an image.";
                $error = 6;
                $uploadOk = 0;
            }
        }
        // Check if file already exists
//        if (file_exists($target_file)) {
//            //echo "Sorry, file already exists.";
//            $error = 7;
//            $uploadOk = 0;
//        }
        // Check file size
        if ($_FILES["recipe-image-user"]["size"] > 3000000) {
            //echo "Sorry, your file is too large.";
            $error = 8;
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $error = 9;
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            //echo "Sorry, your file was not uploaded.";
            $error = 10;
        // if everything is ok, try to upload file
        } else {
            if(move_uploaded_file($_FILES["recipe-image-user"]["tmp_name"], $target_file)) {
                //echo "The file ".basename( $_FILES["recipe-image-user"]["name"]). " has been uploaded.";
                $error = FALSE;
            } else {
                //echo "Sorry, there was an error uploading your file.";
                $error = 12;
            }
        }
        
        if($error === FALSE){
            $i = new Image();
            $i -> name = basename($_FILES["recipe-image-user"]["name"]);
            $i -> path = 'img/recipe/recipe_img/'.$_FILES["recipe-image-user"]["name"];
            $i -> size = $_FILES["recipe-image-user"]["size"];
            if(!($i ->create())){
                $error = 14;
            }else{
                return($i);
            }
        }
        
        return($error);
    }
}
