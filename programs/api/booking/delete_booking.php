<?php

    header("Access-Control-Allow-Method: DELETE");
    header("content-Type: application/json");

    include("../../config/Config.php");
    $db=new DataBase();

    if($_SERVER['REQUEST_METHOD']=="DELETE"){
        $input=file_get_contents("php://input");
        parse_str($input,$_DELETE);
        $id=$_DELETE['p_id'];
        $res=$db->deleteBookings($id);
        if($res){
            $arr['data']="Booking data deleted Successfuly";
        }else{
            $arr['error']="Booking data deletion failed";
        }
    }else{
        $arr['error']="Please Select DELETE HTTP request";
    }
    echo json_encode($arr);

?>