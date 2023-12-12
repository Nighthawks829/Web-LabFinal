<?php
session_start();
include("config.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Variables
$matricNo = "";
$indicator = "";
$level = "";
$kpi;
$semester;
$year = "";
$remark = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // prepare data
    $id = $_POST["id"];
    $matricNo = $_SESSION["UID"];
    $indicatorValue = $_POST["indicator"];
    $levelValue = $_POST["level"];
    $kpi = $_POST["kpi"];
    $semester = $_POST["semester"];
    $year = $_POST["year"];
    $remark = $_POST["remark"];

    if ($indicatorValue == 1) {
        $indicator = "CGPA";
    } else if ($indicatorValue == 2) {
        $indicator = "Stuednt Activities";
    } else if ($indicatorValue == 3) {
        $indicator = "Competition";
    } else if ($indicatorValue == 4) {
        $indicator = "Leadership";
    }

    if ($levelValue == 1) {
        $level = "Faculty";
    } else if ($levelValue == 2) {
        $level = "University";
    } else if ($levelValue == 3) {
        $level = "National";
    } else if ($levelValue == 4) {
        $level = "International";
    }

    $sql = "UPDATE Kpi SET indicator='$indicator',level='$level',kpi=$kpi,semester='$semester',year='$year',remarks='$remark' WHERE kpiID='$id'";

    $status = update_DbTable($conn, $sql);

    if ($status) {
        $message = "Form data and file updated successfully";
        include("./add_kpi_message.php");
    } else {
        $message = "Sorry, there was an error uploading your data";
        include("./add_kpi_message.php");
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
