<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("../db/db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($_POST['rows'] as $row) {
        $transaction_no = intval($row['transaction_no']); // Sanitize input
        $transaction_date = $conn->real_escape_string($row['transaction_date']);
        $amount_type = $conn->real_escape_string($row['amount_type']);
        $credit_amt = isset($row['credit_amt']) && is_numeric($row['credit_amt']) ? floatval($row['credit_amt']) : 0;
        $debit_amt = isset($row['debit_amt']) && is_numeric($row['debit_amt']) ? floatval($row['debit_amt']) : 0;
        $particuler_to = $conn->real_escape_string($row['particuler_to']);
        $site = $conn->real_escape_string($row['site']);
        $main_head = $conn->real_escape_string($row['main_head']);
        $sub_head = $conn->real_escape_string($row['sub_head']);
        $bill_cheque_no = $conn->real_escape_string($row['bill_cheque_no']);
        $invoice_date = $conn->real_escape_string($row['invoice_date']);
        $invoice_no = $conn->real_escape_string($row['invoice_no']);
        $gst_no = $conn->real_escape_string($row['gst_no']);
        $remarks = $conn->real_escape_string($row['remarks']);

        // Update the specific transaction
        $sql_update = "UPDATE txn_book SET 
                          transaction_date = '$transaction_date', 
                          amount_type = '$amount_type', 
                          credit_amt = '$credit_amt', 
                          debit_amt = '$debit_amt', 
                          particuler_to = '$particuler_to', 
                          site = '$site', 
                          main_head = '$main_head', 
                          sub_head = '$sub_head', 
                          bill_cheque_no = '$bill_cheque_no', 
                          invoice_date = '$invoice_date', 
                          invoice_no = '$invoice_no', 
                          gst_no = '$gst_no', 
                          remarks = '$remarks' 
                      WHERE transaction_no = $transaction_no";

        // Execute the update query for the specific transaction
        if ($conn->query($sql_update) === TRUE) {
            echo "Record updated successfully for transaction_no: $transaction_no<br>";
        } else {
            echo "Error updating record for transaction_no: $transaction_no - " . $conn->error . "<br>";
            continue; // Skip further processing for this transaction if it fails
        }

        // Recalculate net balances for all transactions
        $net_balance = 0;

        // Fetch all transactions in order to calculate net balances
        $sql_all = "SELECT transaction_no, credit_amt, debit_amt FROM txn_book ORDER BY transaction_no";
        $result_all = $conn->query($sql_all);

        if ($result_all) {
            while ($row_all = $result_all->fetch_assoc()) {
                $net_balance += $row_all['credit_amt'] - $row_all['debit_amt'];

                // Update the net balance for each transaction
                $update_net_balance_sql = "UPDATE txn_book SET net_balance = '$net_balance' WHERE transaction_no = {$row_all['transaction_no']}";
                if ($conn->query($update_net_balance_sql) !== TRUE) {
                    echo "Error updating net balance for transaction_no {$row_all['transaction_no']}: " . $conn->error . "<br>";
                }
            }
            echo "Net balances updated successfully.<br>";
        } else {
            echo "Error fetching all transactions: " . $conn->error . "<br>";
        }
    }
}

$conn->close(); // Close the connection
?>
