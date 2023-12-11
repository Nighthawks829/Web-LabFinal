<?php
session_start();
include("include/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/my_activities.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Edit Activities</title>
</head>

<body>

    <header></header>

    <nav class="topnav" id="myTopnav">
        <a href="profile.php">Profile</a>
        <a href="my_kpi.php">KPI Indicator</a>
        <a href="my_activities.php" class="active">List of Activities</a>
        <a href="my_challenge.php">Challenge and Future Plan</a>
        <a href="login.php" class="logout">Logout</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i></a>
    </nav>

    <?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if (isset($_SESSION['UID']) && !empty($_SESSION['UID'])) {
        $sql = "SELECT * FROM Activities WHERE activityID='" . $_GET['id'] . "' LIMIT 1";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);

            $matricNo = $_SESSION["UID"];
            $activityName = $row["activityName"];
            $semester = $row["semester"];
            $year = $row["year"];
            $remark = $row["remarks"];
            $photo = $row["photo"];
        }
    }
    ?>

    <section>
        <div class="d-flex justify-content-center align-items-center flex-column">
            <h1>Edit Activities</h1>
            <div class="col-lg-9">
                <form action="include/edit_activity_action.php" method="POST" enctype="multipart/form-data" class=" editActivityForm">
                    <input type="text" id="id" name="id" value="<?= $_GET['id'] ?>" hidden>
                    <table class="editActivityFormTable">
                        <tr>
                            <td>Semester*</td>
                            <td width="1px">:</td>
                            <td>
                                <select size="1" name="semester" required>
                                    <option value="">&nbsp;</option>
                                    <?php
                                    if ($semester == 1) {
                                        echo '<option value="1" selected>1</option>';
                                        echo '<option value="2">2</option>';
                                    } else {
                                        echo '<option value="1">1</option>';
                                        echo '<option value="2" selected>2</option>';
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Year*</td>
                            <td>:</td>
                            <td>
                                <?php
                                echo "<input type=\"text\" name=\"year\" id=\"year\" size=\"10\" value='$year' required>";
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Name*</td>
                            <td>:</td>
                            <td>
                                <?php
                                echo "<input type=\"text\" name=\"activityName\" id=\"activityName\" size=\"30\" value='$activityName' required>";
                                ?>

                            </td>
                        </tr>
                        <tr>
                            <td>Remark</td>
                            <td>:</td>
                            <td>
                                <?php
                                echo "<textarea rows=\"5\" name=\"remark\" cols=\"25\">$remark</textarea>";
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Photo</td>
                            <td>:</td>
                            <td>
                                <?php
                                echo "<small>$photo</small><br>";
                                ?>
                                <small>Max size: 488.28KB</small>
                                <input type="file" name="fileToUpload" id="fileToUpload" accept=".jpg, .jpeg, .png">
                            </td>
                        </tr>
                    </table>
                    <div class="col-12 text-center">
                        <input class="submit" type="submit" value="Submit" name="B1">
                        <input class="reset" type="reset" value="Reset" name="B2">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="script/script.js"></script>
</body>

</html>