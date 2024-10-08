<?php

session_start();
$conn = mysqli_connect(
  "localhost",
  "root",
  "root",
  "daily_txn_book"
);



if (mysqli_connect_error()) {
  echo "Connection Error.<br>";
}

$transaction_date = $_POST["transaction_date"];
$amount_type = $_POST["amount_type"];
$credit_amt = isset($_POST['credit_amt']) && is_numeric($_POST['credit_amt']) ? floatval($_POST['credit_amt']) : 0;
$debit_amt = isset($_POST['debit_amt']) && is_numeric($_POST['debit_amt']) ? floatval($_POST['debit_amt']) : 0;
$particuler_to = $_POST["particuler_to"];
$site = $_POST["site"];
$main_head = $_POST["main_head"];
$sub_head = $_POST["sub_head"];
$bill_cheque_no = $_POST["bill_cheque_no"];
$invoice_date = $_POST["invoice_date"];
$invoice_no = $_POST["invoice_no"];
$gst_no = $_POST["gst_no"];
$remarks = $_POST["remarks"];
$currentUser = $_SESSION["username"];
$currentTime = date("Y-m-d H:i:s");

$net_balace = $credit_amt - $debit_amt;


$sql = "INSERT INTO daily_txn_book.txn_book(transaction_date, amount_type, credit_amt, debit_amt, net_balace, particuler_to, site, main_head, sub_head, bill_cheque_no, invoice_date, invoice_no, gst_no, remarks, currentUser, currentTime) 
VALUES('$transaction_date', '$amount_type', '$credit_amt', '$debit_amt', '$net_balace' , '$particuler_to', '$site', '$main_head', '$sub_head', '$bill_cheque_no', '$invoice_date', '$invoice_no', '$gst_no', '$remarks', '$currentUser', '$currentTime')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>