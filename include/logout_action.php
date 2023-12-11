<?php
session_start();
if (isset($_SESSION["UID"])) {
    unset($_SESSION["UID"]);
    unset($_SESSION["name"]);
    unset($_SESSION["email"]);
    echo $_SESSION["UID"];
    header("location:../login.php");
}
