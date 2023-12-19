<?php

include("config.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);

$userName;
//STEP 1: Form data handling using mysqli_real_escape_string function to 
// escape special characters for use in an SQL query,
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userMatricNo = mysqli_real_escape_string($conn, $_POST["matrixNo"]);
    $userName = mysqli_real_escape_string($conn, $_POST["name"]);
    $userEmail = mysqli_real_escape_string($conn, $_POST["email"]);
    $userPwd = mysqli_real_escape_string($conn, $_POST["password"]);
    $confirmPwd = mysqli_real_escape_string($conn, $_POST["confirmPwd"]);

    // Validate pwd and confirmPwd
    if ($userPwd != $confirmPwd) {
        // die("Password and confirm password do not match");
        // header("Location: ../sign_up.php");
        $message = "Password and confirm password do not match";
        include("./error_signup.php");
    }

    //STEP 2: Check if matricNo already exist
    $sql = "SELECT * FROM Student WHERE matricNo='$userMatricNo' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $message = "Error: User exist, please register a new user";
        include("./error_signup.php");
    } else {
        // User does not exist, insert new user record, hash the password
        $pwdHash = trim(password_hash($_POST['password'], PASSWORD_DEFAULT));

        // echo $pwdHash
        $sql = "INSERT INTO Student(matricNo,name,email,password) VALUES('$userMatricNo','$userName','$userEmail','$pwdHash')";

        if (mysqli_query($conn, $sql)) {
            // echo "<script>alert('$message');</script>";
            // header("Location: ../success_signup.php");

            $sql = "INSERT INTO Profile (matricNo,name,program,mentor,motto,photo) VALUES ('$userMatricNo','','','','','')";
            if (mysqli_query($conn, $sql)) {
                $message = "New user record created successfully. Welcome $userName. New User Profile record created successfully.";
                include("./success_signup.php");
            } else {
                $message = "Error: $sql \n $error";
                include("./error_signup.php");
            }

            // echo "Success";
        } else {
            $error = mysqli_error($conn);
            $message = "Error: $sql \n $error";
            // echo "<script>alert('$message');</script>";
            // header("Location: ../sign_up.php");
            include("./error_signup.php");
        }
    }
    mysqli_close($conn);
}
