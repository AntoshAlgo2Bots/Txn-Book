<?php

session_start();


if (isset($_SESSION["username"]) && $_SESSION["user_id"]) {
    header("location:testdash.php");

} else {



    include("./login.php");
}



?>