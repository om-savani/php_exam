<?php

    header("Content-Type: application/json");
    header("Access-Control-Allow-Method: POST");

   include "../../config/config.php";

   $db = new DataBase();
   if($_SERVER["REQUEST_METHOD"]=='POST')
   {
        $p_name = $_POST['p_name'];
        $train_id = $_POST['train_id'];

        $result = $db->insertBooking($p_name,$train_id);

        $ress['msg'] = $result ? "Booking SuccesFully..." : "Insertion Failed..." ;
   }
   else
    {
        $ress['msg'] = "Please Select POST Method...";
    }

    echo $ress['msg'];
?>