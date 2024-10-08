<?php


// session_start();

$conn = mysqli_connect(
    "localhost",
    "root",
    "root",
    "daily_txn_book"
);



echo $_SESSION["username"];

if (mysqli_connect_error()) {
    echo "Connection Error.<br>";
}

$sql = "SELECT  * From txn_book Order By transaction_no Desc ";
// $sql="SELECT * FROM txn_book where form_status = 'SAVE'";
// $sql = "SELECT * FROM daily_txn_book.txn_book;";


$result = mysqli_query($conn, $sql);

?> 


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js">
    </script>

    <title>Daily Txn Book </title>
</head>




<body>
    <div>
        <?php






        session_start();

        if (!isset($_SESSION["username"])) {




            header("location:login.php");




        }




        ?>


        <nav class="bg-white dark:bg-gray-900  w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-around mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">

                </a>
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">
                    Hello! <?php echo $_SESSION["username"] ?></span>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <a href="../logout.php" type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Logout</a>
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="../testdash.php"
                                class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                                aria-current="page">Home</a>
                            <!-- </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <section class=" py-1 bg-blueGray-50">
        <div class="w-full lg:w-11/12 px-4 mx-auto mt-3">
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-5 shadow-lg rounded-lg bg-blueGray-100 border-0">
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            Daily Transaction Creation Book
                            <?php echo $_SESSION["username"]; ?>
                        </h6>
                        <!-- <button
                        class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                            type="button">
                            As on 11 May 2024
                        </button>
                        <button
                        class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                            type="button">
                            Year : 2024 - 25
                        </button> -->
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <form action="action.php" method="post" id="myForm">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-5 font-bold uppercase">
                            Transaction Information
                        </h6>
                        <div class="mt-4">
                            <div class="flex flex-wrap justify-center md:justify-start relative w-full mb-3 gap-x-10">
                                <div>

                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                        Transaction No :
                                    </label>
                                    <input type="text" name="transaction_no"
                                        class="border-0 px-3 py-2 placeholder-blueGray-300 mb-4  text-blueGray-600 bg-white rounded text-sm w-56 shadow focus:outline-none focus:ring-1 ease-linear transition-all duration-150"
                                        placeholder="Auto Generated" disabled>
                                </div>

                                <div>
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                        Transaction Date :
                                    </label>
                                    <input type="date" name="transaction_date"
                                        class="border-0 px-3 py-2 placeholder-blueGray-300 mb-4  text-blueGray-600 bg-white rounded text-sm w-56 shadow focus:outline-none focus:ring-1 ease-linear transition-all duration-150">
                                </div>
                                <div>

                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                        Amount Type :
                                    </label>
                                    <select id="select_amt" name="amount_type" onchange="verifyAnswer()"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected hidden>Select one</option>
                                        <option value="Credit">Credit</option>
                                        <option value="Debit">Debit</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                        Credit Amount :
                                    </label>
                                    <input type="number" name="credit_amt" id="credit_amt_field"
                                        class="border-0 px-3 py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm w-56 shadow focus:outline-none focus:ring-1 ease-linear transition-all duration-150"
                                        disabled>
                                </div>

                                <div>
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                        Debit Amount :
                                    </label>
                                    <input type="number" name="debit_amt" id="debit_amt_field"
                                        class="border-0 px-3 py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm w-56 shadow focus:outline-none focus:ring-1 ease-linear transition-all duration-150"
                                        disabled>
                                </div>

                                <div>

                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                        Particulers / GIVEN To :
                                    </label>
                                    <input type="text" name="particuler_to"
                                        class="border-0 px-3 py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm w-56 shadow focus:outline-none focus:ring-1 ease-linear transition-all duration-150">
                                </div>
                                <div>

                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                        Site :
                                    </label>
                                    <input type="text" name="site"
                                        class="border-0 px-3 py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm w-56 shadow focus:outline-none focus:ring-1 ease-linear transition-all duration-150">
                                </div>
                                <div>

                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                        Main Head :
                                    </label>
                                    <select name="main_head"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected hidden>Select one</option>
                                        <option value="bf">BF</option>
                                        <option value="fuel">FUEL</option>
                                        <option value="office_running">OFFICE RUNNING</option>
                                        <option value="cash_received">CASH RECEIVED</option>
                                        <option value="esic">ESIC</option>
                                        <option value="salary">SALARY</option>
                                        <option value="hkb">HKB</option>
                                        <option value="dvr">DVR</option>
                                        <option value="ss">SS</option>
                                        <option value="cash">CASH</option>
                                        <option value="donation">DONATION</option>
                                        <option value="cd_9">CD 9</option>
                                        <option value="disp">DISP</option>
                                        <option value="fuel_vm">FUEL & VM</option>
                                        <option value="dda">DDA</option>
                                        <option value="office">OFFICE</option>

                                    </select>
                                </div>
                                <div>

                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                        Sub Head :
                                    </label>
                                    <select name="sub_head"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected hidden>Select one</option>
                                        <option value="bf">BF</option>
                                        <option value="fuel">FUEL</option>
                                        <option value="staff_welfare">STAFF WELFARE</option>
                                        <option value="col_hkb">COL HKB</option>
                                        <option value="ramesh_nagar">RAMESH NAGAR</option>
                                        <option value="dayavasti">DAYAVASTI</option>
                                        <option value="ip_ajadpur">IP AJADPUR</option>
                                        <option value="c_5">C-5</option>
                                        <option value="nagi">NAGI</option>
                                        <option value="dmd">DMD</option>
                                        <option value="salary">SALARY</option>
                                        <option value="dda_rskp">DDA RSKP</option>
                                        <option value="dda_saket">DDA SAKET</option>
                                        <option value="pers">PERS</option>
                                        <option value="adv">ADV</option>
                                        <option value="cd_iii">CD-III</option>
                                        <option value="khanna">KHANNA</option>
                                        <option value="dda_rohani">DDA ROHANI</option>
                                        <option value="esic_disp">ESIC DISP</option>
                                        <option value="donation">DONATION</option>
                                        <option value="ss">SS</option>
                                        <option value="maherpoil">MAHERPOIL</option>
                                        <option value="shastri_nagar">SHASTRI NAGAR</option>
                                        <option value="avantika">AVANTIKA</option>
                                        <option value="div_6">DIV 6</option>
                                        <option value="staitnory">STAITNORY</option>
                                        <option value="jahangir_puri_badli">JAHANGIR PURI BADLI</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <hr class="mt-6 border-b-1 border-blueGray-300">

                        <h6 class="text-blueGray-400 text-sm mt-3 mb-5 font-bold uppercase">
                            Cheque Information
                        </h6>

                        <div class="flex flex-wrap justify-center md:justify-start relative w-full mb-3 gap-x-10">

                            <div>
                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                    Bill / Cheque No :
                                </label>
                                <input type="number" name="bill_cheque_no"
                                    class="border-0 px-3 py-2 placeholder-blueGray-300 mb-4  text-blueGray-600 bg-white rounded text-sm w-56 shadow focus:outline-none focus:ring-1 ease-linear transition-all duration-150">
                            </div>
                            <div>

                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                    Invoice Dated :
                                </label>
                                <input type="date" name="invoice_date"
                                    class="border-0 px-3 py-2 placeholder-blueGray-300 mb-4  text-blueGray-600 bg-white rounded text-sm w-56 shadow focus:outline-none focus:ring-1 ease-linear transition-all duration-150">
                            </div>
                            <div>

                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                    Invoice No :
                                </label>
                                <input type="number" name="invoice_no"
                                    class="border-0 px-3 py-2 placeholder mb-4 text-blueGray-300 text-blueGray-600 bg-white rounded text-sm w-56 shadow focus:outline-none focus:ring-1 ease-linear transition-all duration-150">
                            </div>
                            <div>

                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                    GST No :
                                </label>
                                <input type="number" name="gst_no"
                                    class="border-0 px-3 py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm w-56 shadow focus:outline-none focus:ring-1 ease-linear transition-all duration-150">
                            </div>
                            <div>
                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                    Remarks :
                                </label>
                                <input type="text" name="remarks"
                                    class="border-0 px-3 py-2 placeholder-blueGray-300 mb-4  text-blueGray-600 bg-white rounded text-sm w-56 shadow focus:outline-none focus:ring-1 ease-linear transition-all duration-150">
                            </div>
                        </div>

                        <hr class="mt-6 border-b-1 border-blueGray-300 mb-4">
                        <div class="flex justify-center">
                            <button
                                class="bg-pink-700 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                                type="submit">
                                Save Details
                            </button>
                        </div>
                    </form>



                </div>

            </div>
            <div class="relative overflow-x-auto mt-4">
                <table
                    class="w-full text-sm text-left whitespace-nowrap rtl:text-right text-gray-500 dark:text-gray-400 mb-2">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">

                            </th>
                            <th scope="col" class="px-6 py-3">
                                Txn No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Transaction Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Amount Type
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Credit Amount
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Debit Amount
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Net Balance
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Particulers / GIVEN To
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Site
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Main Head
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Sub Head
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Created By
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Created Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Bill / Cheque No
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Invoice Dated
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Invoice No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                GST No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Remarks
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">

                            </th>

                        </tr>
                    </thead>
                    <tbody class="" id="rowAreaTbody">


                        <?php

                        while ($row = mysqli_fetch_assoc($result)) {

                            // echo print_r($row);
                        





                            ?>


                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <input id="checkbox" line-id="<?php echo $row['transaction_no'] ?>" type="checkbox"
                                        <?php if ($row['form_status'] == 'SUBMIT') {
                                            echo "disabled";
                                        } ?>
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </th>
                                <th scope="row" class="px-6 py-4">
                                    <?php echo $row['transaction_no'] ?>
                                </th>
                                <td class="px-6 py-4">
                                    <?php echo $row['transaction_date'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $row['amount_type'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $row['credit_amt'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $row['debit_amt'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $row['net_balace'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $row['particuler_to'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $row['site'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $row['main_head'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $row['sub_head'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $row['currentUser'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $row['currentTime'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $row['bill_cheque_no'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $row['invoice_date'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $row['invoice_no'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $row['gst_no'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $row['remarks'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $row['form_status'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="text-blue-600">Edit</a>
                                </td>

                            </tr>

                            <?php


                        }

                        ?>
                    </tbody>
                </table>
            </div>
            <div class="flex justify-center mb-5 mt-4">
                <button onclick="getCheckedRowData()"
                    class="bg-pink-700 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                    type="button">
                    Submit Now
                </button>
            </div>
        </div>
    </section>


    <script src="./script.js"></script>
</body>

</html>