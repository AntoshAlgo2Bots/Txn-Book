<?php

// include("./controller/db.php");

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "daily_txn_book";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";




$user_name = $_POST['user_name'];
$password = $_POST['user_password']; 
$mobile_no = $_POST['mobile_no'];
$emai_id = $_POST['emai_id'];
$effective_from_date = $_POST['effective_from_date'];
$effective_to_date = $_POST['effective_to_date'];
$membership_id = $_POST['membership_id'];
$description = $_POST['description'];
$days = $_POST['days'];



$user_creation = isset($_POST['user_creation']) ? 1 : 0;
$user_creation_from_date = $_POST['user_creation_from_date'];
$user_creation_to_date = $_POST['user_creation_to_date'];


$user_search = isset($_POST['user_search']) ? 1 : 0;
$user_search_from_date = $_POST['user_search_from_date'];
$user_search_to_date = $_POST['user_search_to_date'];


$user_report = isset($_POST['user_report']) ? 1 : 0;
$user_report_from_date = $_POST['user_report_from_date'];
$user_report_to_date = $_POST['user_report_to_date'];


$transaction_creation = isset($_POST['transaction_creation']) ? 1 : 0;
$transaction_creation_from_date = $_POST['transaction_creation_from_date'];
$transaction_creation_to_date = $_POST['transaction_creation_to_date'];


$transaction_search = isset($_POST['transaction_search']) ? 1 : 0;
$transaction_search_from_date = $_POST['transaction_search_from_date'];
$transaction_search_to_date = $_POST['transaction_search_to_date'];


$transaction_report = isset($_POST['transaction_report']) ? 1 : 0;
$transaction_report_from_date = $_POST['transaction_report_from_date'];
$transaction_report_to_date = $_POST['transaction_report_to_date'];







$sql = "INSERT INTO user_info (user_name, password, mobile_no, emai_id, effective_from_date, effective_to_date, membership_id, description, days) 

VALUES ('$user_name', '$password', '$mobile_no', '$emai_id', '$effective_from_date', '$effective_to_date', '$membership_id', '$description', '$days')";




if ($conn->query($sql) === TRUE) {
    echo "New record created successfully <br>";

            $user_id = $conn->insert_id;


    
$sql2 = "INSERT INTO user_role(user_id, user_creation, user_creation_from_date, user_creation_to_date, user_search, user_search_from_date, user_search_to_date, user_report, user_report_from_date, user_report_to_date, transaction_creation, transaction_creation_from_date, transaction_creation_to_date, transaction_search, transaction_search_from_date, transaction_search_to_date, transaction_report, transaction_report_from_date, transaction_report_to_date)
VALUES ('$user_id','$user_creation', '$user_creation_from_date', '$user_creation_to_date','$user_search', '$user_search_from_date', '$user_search_to_date', '$user_report', '$user_report_from_date', '$user_report_to_date', '$transaction_creation', '$transaction_creation_from_date', '$transaction_creation_to_date', '$transaction_search', '$transaction_search_from_date', '$transaction_search_to_date', '$transaction_report', '$transaction_report_from_date', '$transaction_report_to_date')";

    if ($conn->query($sql2) === TRUE) {
        echo "New record created successfully";
    }else{
        echo "Error: " . $sql2 . "<br>" . $conn->error;
}

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>