<?php
/*Errors list:
* 1 - without errors
* 2 - ingredient error
* 3 - recipe error
* 4 - description error
* 5 - File is an image [green]
* 6 - File is not an image
* 7 - Sorry, file already exists [red]
* 8 - Sorry, your file is too large
* 9 - Sorry, only JPG, JPEG, PNG & GIF files are allowed [red]
* 10 - Sorry, your file was not uploaded [red]
* 11 - The file ".basename( $_FILES["recipe-image-user"]["name"]). " has been uploaded [green]
* 12 - Sorry, there was an error uploading your file [red]
* 13 - File general error
* 14 - Database::Image_Error
* 15 - Database::Recipe_Error
* 16 - Database::The image could not be inserted
*/

/**
 * Description of ErrorController
 *
 * @author marcinwlodarczyk
 */
class ErrorController {
    public static function validation($validation){
        switch($validation){
            case 1:
            echo '<span class="add-recipe-validation-true">Recipe has been added</span>';
            break;

            case 2:
            echo '<span class="add-recipe-validation-false">*Type correct ingredients, <a href=index.php?ingredient/list>klik</a> for more info</span>';
            break;

            case 3:
            echo '<span class="add-recipe-validation-false">*Recipe error</span>';
            break;

            case 4:
            echo '<span class="add-recipe-validation-false">*Type correct description</span>';
            break;
        
            case 5:
            echo '<span class="add-recipe-validation-true">File is an image</span>';
            break;

            case 6:
            echo '<span class="add-recipe-validation-false">*File is not an image</span>';
            break;

            case 7:
            echo '<span class="add-recipe-validation-false">*Sorry, file already exists</span>';
            break;

            case 8:
            echo '<span class="add-recipe-validation-false">*Sorry, your file is too large</span>';
            break;

            case 9:
            echo '<span class="add-recipe-validation-false">*Sorry, only JPG, JPEG, PNG & GIF files are allowed</span>';
            break;

            case 10:
            echo '<span class="add-recipe-validation-false">*Make sure that image is correct</span>';
            break;

            case 11:
            echo '<span class="add-recipe-validation-true">*The file has been uploaded</span>';
            break;

            case 12:
            echo '<span class="add-recipe-validation-false">*Sorry, there was an error uploading your file</span>';
            break;
        
            case 13:
            echo '<span class="add-recipe-validation-false">*File general error</span>';
            break;

            case 14:
            echo '<span class="add-recipe-validation-false">*Database::Image_Error</span>';
            break;

            case 15:
            echo '<span class="add-recipe-validation-false">*Database::Recipe_Error</span>';
            break;

            case 16:
            echo '<span class="add-recipe-validation-true">*Database::The image could not be inserted</span>';
            break;
        
            case 17:
            echo '<span class="add-recipe-validation-false">*Description limit is 1000 characters</span>';
            break;
        }
    }
}
