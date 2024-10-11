<?php
// Database connection
$host = 'localhost';  // Database host
$db = 'daily_txn_book'; // Database name
$user = 'root'; // Database user
$pass = 'root'; // Database password

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch total credit and debit amounts from transactions
$sql_credit = "SELECT SUM(credit_amt) AS total_credit FROM txn_book";
$sql_debit = "SELECT SUM(debit_amt) AS total_debit FROM txn_book";

$credit_result = $conn->query($sql_credit);
$debit_result = $conn->query($sql_debit);

$total_credit = $credit_result->fetch_assoc()['total_credit'] ?: 0;
$total_debit = $debit_result->fetch_assoc()['total_debit'] ?: 0;

// Calculate net balance
$net_balance = $total_credit - $total_debit;

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Net Balance Pie Chart</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-gray-100 flex flex-wrap items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-md mx-auto text-center border">
        <h1 class="text-xl font-bold mb-6">All Credit And Debit Txn</h1>
        <div class="flex">

            <canvas id="totalCreaditAndDebitChart" class="w-full h-auto"></canvas>
        </div>
    </div>
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-md mx-auto text-center border">
        <h1 class="text-xl font-bold mb-6">Net Balance</h1>
        <div class="flex">

            <!-- <canvas id="totalCreaditAndDebitChart" class="w-full h-auto"></canvas> -->
            <canvas id="netBalanceChart" class="w-full h-auto bg-white"></canvas>
        </div>
    </div>

    <script>
        // PHP Variables into JavaScript
        const totalCredit = <?php echo $total_credit; ?>;
        const totalDebit = <?php echo $total_debit; ?>;
        const netBalance = <?php echo $net_balance; ?>;

        // Chart.js - Pie Chart
        const ctx = document.getElementById('totalCreaditAndDebitChart').getContext('2d');
        const ctx1 = document.getElementById('netBalanceChart').getContext('2d');
        const netBalanceChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Credit', 'Debits'],
                datasets: [{
                    label: 'Balance',
                    data: [totalCredit, totalDebit],
                    backgroundColor: ['#4CAF50', '#FF6384'],
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Credit And Debit Distribution'
                    }
                }
            }
        });

        const netBalanceChart1 = new Chart(ctx1, {
            type: 'pie',
            data: {
                labels: ['Current Net Balance'],
                datasets: [{
                    label: 'Balance',
                    data: [netBalance],
                    backgroundColor: ['#4CAF50', '#FF6384'],
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Net Balance Distribution'
                    }
                }
            }
        });
    </script>
</body>

</html>