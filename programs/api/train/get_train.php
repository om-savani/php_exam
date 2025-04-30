<?php

    header("Content-Type: application/json");
    header("Access-Control-Allow-Method: POST");

    include "../../config/config.php";

    $db = new DataBase();

    $res = array();
    $res['data'] = array();

    if($_SERVER['REQUEST_METHOD']=='GET')
    {
        $data = $db->getTrainData();
        $len = 0;
        while($rec = mysqli_fetch_array($data))
        {
            array_push($res['data'],$rec);
            $len++;
        }
    }
    else
    {
        $res['msg'] = "Please Select GET Method...";
    }

    echo json_encode($res);
?>