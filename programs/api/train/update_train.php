<?php
    header("Content-Type: application/json");
    header("Access-Control-Allow-Method: PUT, PATCH");

    include("../../config/config.php");

    $res = array();
    $db = new Database();

    if($_SERVER['REQUEST_METHOD'] == "PUT" || $_SERVER['REQUEST_METHOD'] == "PATCH") {

        $data = file_get_contents("php://input");   
        $record = array();
        parse_str($data,$record); 

        $id = $record['train_id'];
        $name = $record['name'];
    
        $res['msg'] = $db->updateTrain($id,$name);

    }
    else {
        $res['msg'] = "Please Select Put Or Patch Method...";
    }

    echo json_encode($res);
?>