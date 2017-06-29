<?php
require_once dirname(__FILE__).'/../../BL/User.php';
if(isset($_POST['user']))
  {
     $array = new User();
     $array->id=$_POST['user'];
     $_POST['array']=$array->retriveByID(); 
     $ans=$_POST['array'];
     $_SESSION['data']='elo';
     echo json_encode($ans);
  }
