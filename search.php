<?php
require_once 'DataAbstraction/DB.php';

if(isset($_GET['term'])){
    $return_arr = array();

    $db = DB::getDB();
    $query = "SELECT name FROM ingredient WHERE name LIKE :term";
    $tmp = htmlspecialchars($_GET['term']);
    $params =
            [
                ':term'=> '%'.$tmp.'%' 
            ];


    $res = $db -> query($query,$params);
    $res -> setFetchMode(PDO::FETCH_ASSOC);

    while($row= $res -> fetch()){
        $return_arr[] = $row['name'];
    }

    $res -> closeCursor();


    echo json_encode($return_arr);
}
