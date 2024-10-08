<?php


$conn = mysqli_connect(
    "localhost",
    "root",
    "root",
    "daily_txn_book"
);



if (mysqli_connect_error()) {
    echo "Connection Error.<br>";
}


if ($_SERVER['REQUEST_METHOD'] == "GET") {

    if (isset($_GET['getUSerDataByUserName'])) {


        // include('../db.php');


        $txnNo = $_GET['txnNo'];
        // $user_id = $_GET['userid'];






        $sql = "SELECT * FROM txn_book where transaction_no = '$txnNo' ; ";
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