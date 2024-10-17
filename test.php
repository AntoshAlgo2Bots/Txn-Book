<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Dashboard with Mobile Toggle</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function toggleDropdown() {
            const dropdown = document.getElementById('dropdown');
            dropdown.classList.toggle('hidden');
        }

        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('hidden');
        }
    </script>
</head>

<body class="bg-gray-100">

    <div class="flex flex-col lg:flex-row">
        <!-- Sidebar -->
        <aside id="sidebar" class="bg-gray-800 text-white w-full lg:w-64 p-5 lg:static lg:h-auto hidden lg:block">
            <h1 class="text-xl border-b pb-2 font-semibold mb-6">Daily Transaction Book</h1>
            <nav>
                <div class="relative block w-full">
                    <div role="button"
                        class="flex items-center w-full p-0 leading-tight transition-all rounded-lg outline-none bg-blue-gray-50/50 text-start text-blue-gray-700 hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                        <button type="button" onclick="membershipFormShowHide()"
                            class="flex items-center justify-between w-full p-3  text-xl antialiased font-semibold leading-snug text-left transition-colors border-b-0 select-none border-b-blue-gray-100 text-blue-gray-900 hover:text-blue-gray-900">
                            <div class="grid mr-4 place-items-center bg-white">
                                <i class="fa-solid fa-receipt"></i>
                                <path fill-rule="evenodd"
                                    d="M2.25 2.25a.75.75 0 000 1.5H3v10.5a3 3 0 003 3h1.21l-1.172 3.513a.75.75 0 001.424.474l.329-.987h8.418l.33.987a.75.75 0 001.422-.474l-1.17-3.513H18a3 3 0 003-3V3.75h.75a.75.75 0 000-1.5H2.25zm6.04 16.5l.5-1.5h6.42l.5 1.5H8.29zm7.46-12a.75.75 0 00-1.5 0v6a.75.75 0 001.5 0v-6zm-3 2.25a.75.75 0 00-1.5 0v3.75a.75.75 0 001.5 0V9zm-3 2.25a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z"
                                    clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <p
                                class="block mr-auto  text-base antialiased font-bold leading-relaxed text-blue-gray-900 border-b">
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
                    <div class="overflow-hidden hidden" id="membership-li-area">
                        <div class="block w-full py-1  text-sm antialiased font-light leading-normal text-gray-700">
                            <nav name="nav" class="flex flex-col gap-1 p-0  text-base font-normal text-blue-gray-700">

                                <a href="./txn/create_txn.php"
                                    class="flex items-center w-full p-3 text-white leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                    <div class="grid mr-4 place-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="3" stroke="currentColor" aria-hidden="true" class="w-5 h-3">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                        </svg>
                                    </div>
                                    Daily Txn Creation Form
                                </a>

                                <a href="./txn/search_txn.php"
                                    class="flex items-center w-full p-3 leading-tight text-white transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                    <div class="grid mr-4 place-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="3" stroke="currentColor" aria-hidden="true" class="w-5 h-3">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                        </svg>
                                    </div>
                                    Daily Txn Search Form
                                </a>


                                <a href="./txn/txn_report.php"
                                    class="flex items-center w-full p-3 leading-tight text-white transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                    <div class="grid mr-4 place-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="3" stroke="currentColor" aria-hidden="true" class="w-5 h-3">
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
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Navbar -->
            <header class="bg-white shadow p-4 flex items-center justify-between">
                <div class="flex items-center">
                    <button onclick="toggleSidebar()" class="lg:hidden p-2 text-gray-600 hover:bg-gray-200 rounded">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                    <!-- <h2 class="text-xl font-semibold ml-2"> Hello! <?php echo $_SESSION["username"] ?></span></h2> -->
                    <h2 class="text-xl font-semibold ml-2"> Hello! Antosh</span></h2>

                    <div class="hidden w-full md:flex md:w-auto md:order-1 ml-20" id="navbar-sticky">
                        <a href="./dashboard.php" class="font-semibold text-md">Home</a>
                    </div>
                </div>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <a href="logout.php" type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Logout</a>
                </div>


            </header>

            <!-- Content Area -->
            <main class="flex-1 p-6 bg-gray-100">
                <h3 class="text-lg font-semibold mb-4">Overview</h3>
                <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-1 gap-4">
                    <div class="bg-white p-4 rounded shadow">
                        <?php include("./barChart.php") ?>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-4 mt-5">
                    <div class="flex flex-wrap gap-x-20 gap-y-10 bg-white p-4 rounded shadow">
                        <?php include("./pieChart.php") ?>
                    </div>
                </div>
            </main>
        </div>
    </div>

</body>
<script src="./js/dashboard.js"></script>

</html>