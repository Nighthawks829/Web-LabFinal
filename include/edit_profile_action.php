<?php
session_start();
include("config.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Variables
$action = "";
$matricNo = "";
$name = "";
$email = "";
$program = "";
$mentorName = "";
$motto = "";
$photo = "";

//for upload
$target_dir = "/opt/lampp/htdocs/Web-LabFinal/uploads/";
$target_file = "";
$uploadOk = 0;
$imageFileType = "";
$uploadfileName = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // prepare data
    $matricNo = $_SESSION["UID"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $program = $_POST["program"];
    $mentorName = $_POST["mentorName"];
    $motto = $_POST["motto"];

    // Check if there is an image to be uploaded
    if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == UPLOAD_ERR_OK) {

        $filetmp = $_FILES["fileToUpload"];
        $uploadfileName = $filetmp["name"];
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if file already exists
        if (file_exists($target_file)) {
            $message = "Sorry, image file $uploadfileName already exists";
            $uploadOk = 0;
            include("./error_update_profile.php");
        }

        // Check file size <= 488.28KB or 500000 bytes
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            $message = "Sorry, your file is too large. Try resizing your image.";
            $uploadOk = 0;
            include("./error_update_profile.php");
        }

        // Allow only these file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            $message = "Sorry, only JPG, JPEG, PNG & GIF files are allowed";
            $uploadOk = 0;
            include("./error_update_profile.php");
        }

        // Check if uploadOk==1 and continue
        if ($uploadfileName != "" && $uploadOk == 1) {

            $sql = "UPDATE Student SET name='$name',email='$email',program='$program',mentorID='$mentorName',motto='$motto',photo='$uploadfileName' WHERE matricNo='$matricNo'";

            $status = update_DbTable($conn, $sql);

            if ($status) {
                if (move_uploaded_file(
                    $_FILES["fileToUpload"]["tmp_name"],
                    $target_file
                )) {
                    $message = "Form data updated successfully";
                    include("./success_update_profile.php");
                } else {
                    $message = "Sorry, there was an error uploding your file";
                    include("./error_update_profile.php");
                }
            } else {
                $message = "Sorry, there was an error uploading your data";
                include("./error_update_profile.php");
            }
        }
    }
    // There is no image to be uploaded so save the record
    else {
        $sql = "UPDATE Student SET name='$name',email='$email',program='$program',mentorID='$mentorName',motto='$motto' WHERE matricNo='$matricNo'";

        $status = update_DbTable($conn, $sql);

        if ($status) {
            $message = "Form data updated successfully";
            include("./success_update_profile.php");
        } else {
            $message = "Sorry, there was an error uploading your data";
            include("./error_update_profile.php");
        }
    }
}
mysqli_close($conn);

// Function to insert data to database table
function update_DbTable($conn, $sql)
{
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {

        return false;
    }
}
