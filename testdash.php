<?php


// session_start();

$conn = mysqli_connect(
    "localhost",
    "root",
    "root",
    "daily_txn_book"
);



// echo $_SESSION["username"];

if (mysqli_connect_error()) {
    echo "Connection Error.<br>";
}

$sql = "SELECT  transaction_no, transaction_date, amount_type, credit_amt, debit_amt, net_balance,  main_head, sub_head , currentUser, currentTime From txn_book Order By transaction_no Desc Limit 5";
// $sql="SELECT * FROM txn_book where form_status = 'SAVE'";
// $sql = "SELECT * FROM daily_txn_book.txn_book;";


$result = mysqli_query($conn, $sql);

?>











<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>User Dashboard</title>
</head>


<body class="font" style="font-family: 'Poppins', sans-serif;">


    <div>

        <?php






        session_start();

        if (!isset($_SESSION["username"])) {




            header("location:login.php");




        }




        ?>


        <nav class="bg-white dark:bg-gray-900  w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600  max-w-8xl mx-auto"
            style="background-color: #6897ff; color: white;">
            <div class="flex flex-wrap items-center justify-between mx-10 p-4">
                <div class="flex gap-x-20">
                    <div>
                        <a href="./testdash.php" class="flex items-center space-x-3 rtl:space-x-reverse">
                            <span class="self-center text-3xl font-semibold whitespace-nowrap dark:text-white">
                                Hello! <?php echo $_SESSION["username"] ?></span>

                        </a>
                    </div>
                    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
                        id="navbar-sticky">
                        <a href="./testdash.php" class="font-semibold text-md">Home</a>
                    </div>
                </div>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <a href="logout.php" type="button"
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
            </div>
        </nav>

        <div class=" max-w-8xl mx-auto">



            <div class="flex" style="height: calc(100vh - 70px);">



                <div style="max-width: 15rem;"
                    class="relative flex h-[calc(100vh-2rem)] w-full max-w-[15rem] flex-col bg-white bg-clip-border p-4 text-gray-700 shadow-xl shadow-blue-gray-900/5">
                    <div class="p-4 mb-2">
                        <h5
                            class="block  border-b border-black text-2xl  text-center pb-1 antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                            Roles
                        </h5>
                    </div>
                    <nav class="flex min-w-[240px] flex-col gap-1 p-2  text-base font-normal text-blue-gray-700">
                        <div class="relative block w-full">
                            <div role="button"
                                class="flex items-center w-full p-0 leading-tight transition-all rounded-lg outline-none bg-blue-gray-50/50 text-start text-blue-gray-700 hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                <button type="button" onclick="userFormShowHide()"
                                    class="flex items-center justify-between w-full p-3  text-xl antialiased font-semibold leading-snug text-left transition-colors border-b-0 select-none border-b-blue-gray-100 text-blue-gray-900 hover:text-blue-gray-900">
                                    <div class="grid mr-4 place-items-center">
                                        <i class="fa-solid fa-user"></i>
                                        <path fill-rule="evenodd"
                                            d="M2.25 2.25a.75.75 0 000 1.5H3v10.5a3 3 0 003 3h1.21l-1.172 3.513a.75.75 0 001.424.474l.329-.987h8.418l.33.987a.75.75 0 001.422-.474l-1.17-3.513H18a3 3 0 003-3V3.75h.75a.75.75 0 000-1.5H2.25zm6.04 16.5l.5-1.5h6.42l.5 1.5H8.29zm7.46-12a.75.75 0 00-1.5 0v6a.75.75 0 001.5 0v-6zm-3 2.25a.75.75 0 00-1.5 0v3.75a.75.75 0 001.5 0V9zm-3 2.25a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z"
                                            clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p
                                        class="block mr-auto  text-base antialiased font-bold leading-relaxed text-blue-gray-900">
                                        User Form
                                    </p>
                                    <span class="ml-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2.5" stroke="currentColor" aria-hidden="true"
                                            class="w-4 h-4 mx-auto transition-transform rotate-0">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                        </svg>
                                    </span>

                                </button>

                            </div>
                            <div class="overflow-hidden  hidden" id="user-li-area"
                                style="font-family: 'Poppins', sans-serif;">
                                <div
                                    class="block w-full py-1  text-sm antialiased font-light leading-normal text-gray-700">
                                    <nav name="nav"
                                        class="flex min-w-[240px] flex-col gap-1 p-0  text-base font-normal text-blue-gray-700">

                                        <a href="./User/create_User.php"
                                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                            <div class="grid mr-4 place-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="3" stroke="currentColor" aria-hidden="true"
                                                    class="w-5 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                </svg>
                                            </div>
                                            User Creation Form
                                        </a>

                                        <a href="./User/search_User.php"
                                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                            <div class="grid mr-4 place-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="3" stroke="currentColor" aria-hidden="true"
                                                    class="w-5 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                </svg>
                                            </div>
                                            User Search Form
                                        </a>

                                        <a href="./User/user_report.php"
                                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                            <div class="grid mr-4 place-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="3" stroke="currentColor" aria-hidden="true"
                                                    class="w-5 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                </svg>
                                            </div>
                                            User Report
                                        </a>

                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="relative block w-full">
                            <div role="button"
                                class="flex items-center w-full p-0 leading-tight transition-all rounded-lg outline-none bg-blue-gray-50/50 text-start text-blue-gray-700 hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                <button type="button" onclick="membershipFormShowHide()"
                                    class="flex items-center justify-between w-full p-3  text-xl antialiased font-semibold leading-snug text-left transition-colors border-b-0 select-none border-b-blue-gray-100 text-blue-gray-900 hover:text-blue-gray-900">
                                    <div class="grid mr-4 place-items-center">
                                        <i class="fa-solid fa-receipt"></i>
                                        <path fill-rule="evenodd"
                                            d="M2.25 2.25a.75.75 0 000 1.5H3v10.5a3 3 0 003 3h1.21l-1.172 3.513a.75.75 0 001.424.474l.329-.987h8.418l.33.987a.75.75 0 001.422-.474l-1.17-3.513H18a3 3 0 003-3V3.75h.75a.75.75 0 000-1.5H2.25zm6.04 16.5l.5-1.5h6.42l.5 1.5H8.29zm7.46-12a.75.75 0 00-1.5 0v6a.75.75 0 001.5 0v-6zm-3 2.25a.75.75 0 00-1.5 0v3.75a.75.75 0 001.5 0V9zm-3 2.25a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z"
                                            clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p
                                        class="block mr-auto  text-base antialiased font-bold leading-relaxed text-blue-gray-900">
                                        Daily Txn Book
                                    </p>
                                    <span class="ml-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2.5" stroke="currentColor" aria-hidden="true"
                                            class="w-4 h-4 mx-auto transition-transform rotate-0">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                        </svg>
                                    </span>

                                </button>

                            </div>
                            <div class="overflow-hidden hidden " id="membership-li-area">
                                <div
                                    class="block w-full py-1  text-sm antialiased font-light leading-normal text-gray-700">
                                    <nav name="nav"
                                        class="flex min-w-[240px] flex-col gap-1 p-0  text-base font-normal text-blue-gray-700">

                                        <a href="./txn/create_txn.php"
                                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                            <div class="grid mr-4 place-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="3" stroke="currentColor" aria-hidden="true"
                                                    class="w-5 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                </svg>
                                            </div>
                                            Daily Txn Creation Form
                                        </a>

                                        <a href="./txn/search_txn.php"
                                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                            <div class="grid mr-4 place-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="3" stroke="currentColor" aria-hidden="true"
                                                    class="w-5 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                </svg>
                                            </div>
                                            Daily Txn Search Form
                                        </a>


                                        <a href="./txn/txn_report.php"
                                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                            <div class="grid mr-4 place-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="3" stroke="currentColor" aria-hidden="true"
                                                    class="w-5 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                </svg>
                                            </div>
                                            Daily Txn Report
                                        </a>

                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="relative block w-full">


                        </div>


                        <hr class="my-2 border-black" />
                    </nav>
                </div>


                <div>


                    <div class="w-full flex flex-wrap justify-center border-gray-200 mt-4"
                        style="background-color: #;">

                        <div class="datachart border-2 bg-gray-100 " style="width:32rem; height:20rem" id="txn_div">
                        </div>
                        <a href="./user/user_report.php">
                            <!-- <div class="datachart border-2 bg-gray-100 ml-5" style="width:32rem; height:20rem"
                                id="user_div">
                            </div> -->
                        </a>
                    </div>
                    <div>
                        <div class="relative overflow-x-auto mt-4 mx-10">
                            <table
                                class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 mb-2">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
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


                                    </tr>
                                </thead>
                                <tbody class="" id="rowAreaTbody">


                                    <?php

                                    while ($row = mysqli_fetch_assoc($result)) {

                                        // echo print_r($row);
                                    





                                        ?>


                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
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
                                                <?php echo $row['net_balance'] ?>
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
                                        
                                        </tr>

                                        <?php


                                    }

                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>








        </div>





        <!-- 
            <div class="w-full flex border border-gray-700" style=" ">
                <div class="w-1/4  custom-main-dash">

                    <div style=" background-color: #FF9874; min-height:100vh;"
                        class="p-4 whitespace-nowrap 	mx-3 flex flex-col rounded">


                        <h1 class="font-bold text-2xl border-b-2 text-center uppercase"> Forms </h1>

                        <div>
                            <button type="button"
                                class="text-black w-full mt-3 bg-white flex justify-between focus:outline-none font-medium rounded-t-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                aria-controls="dropdown-example1" data-collapse-toggle="dropdown-example1">
                                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">User Form</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <ul id="dropdown-example1" class="hidden py-2 space-y-2 bg-gray-100 w-full rounded-b-lg">
                                <li>
                                    <a href="./User/create_User.php"
                                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-5 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">User
                                        Creation Form </a>
                                </li>
                                <li>
                                    <a href="./User/search_User.php"
                                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-5 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">User
                                        Search Report</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <button type="button"
                                class="text-black w-full mt-3 bg-white flex justify-between focus:outline-none font-medium rounded-t-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                aria-controls="dropdown-example2" data-collapse-toggle="dropdown-example2">
                                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Membership Form</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <ul id="dropdown-example2" class="hidden py-2 space-y-2 bg-gray-100 w-full rounded-b-lg">
                                <li>
                                    <a href="./membership/create_Membership.php"
                                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-5 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Membership
                                        Creation Form </a>
                                </li>
                                <li>
                                    <a href="./membership/search_Membership.php"
                                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-5 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Membership
                                        Search Report</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <button type="button"
                                class="text-black w-full mt-3 bg-white flex justify-between focus:outline-none font-medium rounded-t-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                aria-controls="dropdown-example3" data-collapse-toggle="dropdown-example3">
                                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Membership Receipt
                                </span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <ul id="dropdown-example3" class="hidden py-2 space-y-2 bg-gray-100 w-full rounded-b-lg">
                                <li>
                                    <a href="./Receipt/create_Receipt.php"
                                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-5 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Receipt
                                        Creation Form </a>
                                </li>
                                <li>
                                    <a href="./Receipt/search_Receipt.php"
                                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-5 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Receipt
                                        Search Report</a>
                                </li>
                            </ul>
                        </div>
                        <div>

                            <button type="button"
                                class="text-black w-full mt-3 bg-white flex justify-between focus:outline-none font-medium rounded-t-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                aria-controls="dropdown-example4" data-collapse-toggle="dropdown-example4">
                                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Define fees
                                </span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <ul id="dropdown-example4" class="hidden py-2 space-y-2 bg-gray-100 w-full rounded-b-lg">
                                <li>
                                    <a href="./search_year_table.php"
                                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-5 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                        Search Year Table </a>
                                </li>
                                <li>
                                    <a href="./year_table.php"
                                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-5 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Year
                                        fees creation</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="w-3/4 border border-gray-700">
                    <div id="divId"></div>
                    <div class="datachart bg-gray-100 " style="width:26rem; height:17rem" id="receipt_details"></div>
                </div>
            </div> -->
    </div>

</body>

<script src="./js/pieLoad.js"></script>
<script src="node_modules/@material-tailwind/html@latest/scripts/ripple.js"></script>

<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>

<script src="./js/dashboard.js"></script>

</html>