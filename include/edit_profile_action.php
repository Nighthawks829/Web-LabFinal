<?php
session_start();
include("config.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);

// variables
$matricNo = "";
$name = "";
$email = "";
$program = "";
$mentorName = "";
$motto = "";
$photo = "";

// for upload
$target_dir = "/opt/lampp/htdocs/Web-LabFinal/uploads/";
$target_file = "";
$uploadOk = 0;
$imageFileType = "";
$uploadfileName = "";
$message = "error";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // value for add or edit
    $matricNo = $_SESSION['UID'];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $program = $_POST["program"];
    $mentorName = $_POST["mentorName"];
    $motto = $_POST["motto"];

    $filetmp = $_FILES["fileToUpload"];
    //file of the image/photo file
    $uploadfileName = $filetmp["name"];

    // Check if there is an image to be uploaded

    // IF no image
    if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["name"] == "") {
        $sql = "UPDATE Student SET name='$name',email='$email',program='$program',mentorID='$mentorName',motto='$motto',photo='$uploadfileName' WHERE matricNo='$matricNo'";

        $status = update_DBTable($conn, $sql);

        if ($status) {
            $message = "Form data updated successfully";
            include("./success_update_profile.php");
        } else {
            $message = "Sorry, there was an error uploading your file";
            include("./error_update_profile.php");
        }
    }
    // IF there is image
    else if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == UPLOAD_ERR_OK) {
        // Variable to determine for imagge upload is OK
        $uploadOk = 1;
        $fileTemp = $_FILES["fileToUpload"];

        // file of the image/photo file
        $uploadfileName = $fileTemp["name"];

        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if file already exists
        if (file_exists($target_file)) {
            $message = "ERROR: Sorry, image file $uploadFileName already exists";
            include("./error_update_profile.php");
        }

        // Check file size <= 488.28KB or 500000 bytes
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            $message = "ERROR: Sorry, your file is too large. Try resizing your image.";
            include("./error_update_profile.php");
        }

        // Allow only these file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            $message = "ERROR: Sorry, only JPG, JPEG, PNG files are allowed.";
            include("./error_update_profile.php");
        }

        // If uploadOk, then try add to database first,
        // uploadOk=1, if there is image to be uploaded, filename not exists, file size is ok and format ok
        if ($uploadOk) {
            $sql = "UPDATE Student SET name='$name',email='$email',program='$program',mentorID='$mentorName',motto='$motto',photo='$uploadfileName' WHERE matricNo='$matricNo'";

            $status = update_DbTable($conn, $sql);

            if ($status) {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    // Image file successfully uploaded
                    $message = "Form data updated successfully";
                    include("./success_update_profile.php");
                } else {
                    $message = "Sorry, there was an error uploding your file";
                    include("./error_update_profile.php");
                }
            } else {
                include("./error_update_profile.php");
            }
        }
        include("./error_update_profile.php");
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
