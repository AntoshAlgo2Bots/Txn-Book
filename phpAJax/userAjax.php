<?php

include("../db/db.php");

if ($_SERVER['REQUEST_METHOD'] == "GET") {

    if (isset($_GET['getUSerDataByUserName'])) {


        // include('../db.php');


        $user_name = $_GET['username'];
        // $user_id = $_GET['userid'];






        $sql = "SELECT * FROM daily_txn_book.user_info a JOIN  daily_txn_book.user_role b  ON a.id = b.user_id  where a.user_name = '$user_name' ; ";
        // $sql2 = "SELECT * FROM daily_txn_book.user_role a JOIN  user_role b  ON a.id = b.user_id  where a.user_name = '$user_name' ; ";





        $result = mysqli_query($conn, $sql);



        if ($result) {





            $data = [];


            
            while ($row = mysqli_fetch_assoc($result)) {







                $data[] = $row;



            }
            ;



            $response['success'] = true;
            $response['data'] = $data;




        } else {
            $response['success'] = false;
            $response['message'] = mysqli_error($conn);
        }






        echo json_encode($response);



    }
}


?>