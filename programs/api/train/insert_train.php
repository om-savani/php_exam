<?php

    header("Content-Type: application/json");
    header("Access-Control-Allow-Method: POST");

   include "../../config/config.php";

   $db = new DataBase();
   if($_SERVER["REQUEST_METHOD"]=='POST')
   {
        $name = $_POST['name'];

        $result = $db->insertTrain($name);

        $ress['msg'] = $result ? "Train Detail Inserted..." : "Insertion Failed..." ;
   }
   else
    {
        $ress['msg'] = "Please Select POST Method...";
    }

    echo $ress['msg'];
?>