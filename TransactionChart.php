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


$debitQuery = "SELECT credit_amt FROM txn_book";
$debitResult = mysqli_query($conn, $debitQuery);
$debitTotal = mysqli_fetch_assoc($debitResult)['total'] ?? 0;

// Fetch credit total
$creditQuery = "SELECT debit_amt FROM txn_book";
$creditResult = mysqli_query($conn, $creditQuery);
$creditTotal = mysqli_fetch_assoc($creditResult)['total'] ?? 0;

// Prepare the data
$data = [
    ['Transaction Type', 'Amount'],
    ['Debit', (int) $debitTotal],
    ['Credit', (int) $creditTotal]
];

// Output JSON
echo json_encode($data);



?>