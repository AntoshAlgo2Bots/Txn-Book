<?php

include("../controllers/getData.php");


if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (isset($_GET['pieChartData'])) {

        $table_name = "txn_book";
        $column_name = "form_status";

        $txn_book = StatusAndValue("txn_book",  "form_status");   
        $user_creation = StatusAndValue("user_report",  "role");   




            $response['txnBook']= $txn_book;
            $response['userCreation']= $user_creation;




        // echo print_r($data);
        echo json_encode($response);



    }



}




?>