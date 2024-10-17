<?php

include("../db/db.php");





if ($_SERVER['REQUEST_METHOD'] == 'GET') {


    if (isset($_GET['rowIdToSubmit'])) {



        $idsOfSubmit = $_GET['recordIds'];



        foreach ($idsOfSubmit as $key => $value) {

            $sql = "UPDATE `daily_txn_book`.`txn_book` SET `form_status` = 'SUBMIT' WHERE (`transaction_no` = '$value');";

            $result = mysqli_query($conn, $sql);
            if ($result) {

                $response['success'] = true;
                $response['message'] = "data Successfully submited ";
            }else{
                $response["success"] = false;
                $response["message"] = mysqli_error( $conn);
            }
    
        }




        $response['data'] = $_GET;


        echo json_encode($response);

    }

    // print_r($_GET);

}





?>