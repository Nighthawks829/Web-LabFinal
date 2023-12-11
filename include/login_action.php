<?php

session_start();
include("config.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);


// login values from login form
$userMatricNo = $_POST["matricNo"];
$userPwd = $_POST["password"];

$sql = "SELECT * FROM Student WHERE matricNo='$userMatricNo' LIMIT 1";
$result = mysqli_query($conn, $sql);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (mysqli_num_rows($result) == 1) {
        // Check password hash
        $row = mysqli_fetch_assoc($result);
        if (password_verify($userPwd, $row['password'])) {
            //echo "Login successful. <br> Welcome <b>".$userEmail."</b>.<br /><br />";		
            //echo '<a href="index.php">Home</a> &nbsp;&nbsp;&nbsp; <br>';
            // Echo JavaScript for a popup window
            // echo '<script type="text/javascript"> alert("Login successful!"); </script>';
            $_SESSION['UID'] = $row["matricNo"];
            $_SESSION["name"] = $row["name"];
            $_SESSION['email'] = $row['email'];
            // set loggied in time
            $_SESSION["loggedin_time"] = time();
            header("location: ../profile.php");
        } else {
            // matricNo & pwd not correct
            $dbpwd = $row['password'];
            $userPwd = $_POST["password"];
            $message = "Login error, user matricNo and password is incorrect.";
            include("./error_login.php");
        }
    } else {
        // user matricNo not exist
        $message = "Login error, user matricNo does not exist";
        include("./error_login.php");
    }

    mysqli_close($conn);
}
