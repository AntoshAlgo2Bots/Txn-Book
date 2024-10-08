<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Passbook</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        function verifyAnswer() {
            const amountType = document.getElementById('select_amt').value;
            const creditField = document.getElementById('credit_amt_field');
            const debitField = document.getElementById('debit_amt_field');

            if (amountType === 'Credit') {
                creditField.disabled = false;
                debitField.disabled = true;
                debitField.value = '';
            } else if (amountType === 'Debit') {
                debitField.disabled = false;
                creditField.disabled = true;
                creditField.value = '';
            } else {
                creditField.disabled = true;
                debitField.disabled = true;
                creditField.value = '';
                debitField.value = '';
            }
        }
    </script>
</head>
<body>
    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
        <form action="" method="post" id="myForm">
            <h6 class="text-blueGray-400 text-sm mt-3 mb-5 font-bold uppercase">
                Transaction Information
            </h6>
            <div class="mt-4">
                <div class="flex flex-wrap justify-center md:justify-start relative w-full mb-3 gap-x-10">
                    <div>
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">Transaction No:</label>
                        <input type="text" name="transaction_no" class="border-0 px-3 py-2 placeholder-blueGray-300 mb-4 text-blueGray-600 bg-white rounded text-sm w-56 shadow" placeholder="Auto Generated" disabled>
                    </div>
                    <div>
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">Transaction Date:</label>
                        <input type="date" name="transaction_date" class="border-0 px-3 py-2 placeholder-blueGray-300 mb-4 text-blueGray-600 bg-white rounded text-sm w-56 shadow">
                    </div>
                    <div>
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">Amount Type:</label>
                        <select id="select_amt" name="amount_type" onchange="verifyAnswer()" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-56 p-2">
                            <option selected hidden>Select one</option>
                            <option value="Credit">Credit</option>
                            <option value="Debit">Debit</option>
                        </select>
                    </div>
                    <div>
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">Credit Amount:</label>
                        <input type="number" name="credit_amt" id="credit_amt_field" class="border-0 px-3 py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm w-56 shadow" disabled>
                    </div>
                    <div>
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">Debit Amount:</label>
                        <input type="number" name="debit_amt" id="debit_amt_field" class="border-0 px-3 py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm w-56 shadow" disabled>
                    </div>
                    <div>
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">Particulars / GIVEN To:</label>
                        <input type="text" name="particuler_to" class="border-0 px-3 py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm w-56 shadow">
                    </div>
                    <div>
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">Site:</label>
                        <input type="text" name="site" class="border-0 px-3 py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm w-56 shadow">
                    </div>
                </div>
            </div>

            <hr class="mt-6 border-b-1 border-blueGray-300">

            <h6 class="text-blueGray-400 text-sm mt-3 mb-5 font-bold uppercase">Cheque Information</h6>
            <div class="flex flex-wrap justify-center md:justify-start relative w-full mb-3 gap-x-10">
                <div>
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">Bill / Cheque No:</label>
                    <input type="number" name="bill_cheque_no" class="border-0 px-3 py-2 placeholder-blueGray-300 mb-4 text-blueGray-600 bg-white rounded text-sm w-56 shadow">
                </div>
                <div>
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">Invoice Dated:</label>
                    <input type="date" name="invoice_date" class="border-0 px-3 py-2 placeholder-blueGray-300 mb-4 text-blueGray-600 bg-white rounded text-sm w-56 shadow">
                </div>
                <div>
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">Invoice No:</label>
                    <input type="number" name="invoice_no" class="border-0 px-3 py-2 placeholder mb-4 text-blueGray-300 text-blueGray-600 bg-white rounded text-sm w-56 shadow">
                </div>
                <div>
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">GST No:</label>
                    <input type="number" name="gst_no" class="border-0 px-3 py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm w-56 shadow">
                </div>
                <div>
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">Remarks:</label>
                    <input type="text" name="remarks" class="border-0 px-3 py-2 placeholder-blueGray-300 mb-4 text-blueGray-600 bg-white rounded text-sm w-56 shadow">
                </div>
            </div>

            <hr class="mt-6 border-b-1 border-blueGray-300 mb-4">
            <div class="flex justify-center">
                <button class="bg-pink-700 text-white font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md" type="submit">Save Details</button>
            </div>
        </form>

        <hr class="mt-6 border-b-1 border-blueGray-300">
        <h6 class="text-blueGray-400 text-sm mt-3 mb-5 font-bold uppercase">Transaction List</h6>
        <table border="1" class="w-full text-left">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Credit Amount</th>
                    <th>Debit Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php
                session_start();

                // Initialize transactions array if it doesn't exist
                if (!isset($_SESSION['transactions'])) {
                    $_SESSION['transactions'] = [];
                }

                // Handle form submission
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $transaction_date = htmlspecialchars($_POST['transaction_date']);
                    $particuler_to = htmlspecialchars($_POST['particuler_to']);
                    $amount_type = $_POST['amount_type'];
                    $credit_amt = isset($_POST['credit_amt']) ? (float)$_POST['credit_amt'] : 0;
                    $debit_amt = isset($_POST['debit_amt']) ? (float)$_POST['debit_amt'] : 0;

                    // Store the transaction
                    $_SESSION['transactions'][] = [
                        'date' => $transaction_date,
                        'description' => $particuler_to,
                        'credit' => ($amount_type === 'Credit') ? $credit_amt : 0,
                        'debit' => ($amount_type === 'Debit') ? $debit_amt : 0
                    ];
                }

                // Display transactions and calculate net balance
                $net_balance = 0;
                foreach ($_SESSION['transactions'] as $entry) {
                    echo "<tr>";
                    echo "<td>{$entry['date']}</td>";
                    echo "<td>{$entry['description']}</td>";
                    echo "<td>{$entry['credit']}</td>";
                    echo "<td>{$entry['debit']}</td>";
                    echo "</tr>";

                    $net_balance += $entry['credit'] - $entry['debit'];
                }
                ?>
            </tbody>
        </table>
        <h2 class="mt-4">Net Balance: <?php echo $net_balance; ?></h2>
    </div>
</body>
</html>
