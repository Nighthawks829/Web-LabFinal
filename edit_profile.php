<?php
session_start();
include("include/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="style/edit_profile.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header></header>

    <nav class="topnav" id="myTopnav">
        <a href="profile.php" class="active">Profile</a>
        <a href="my_kpi.php">KPI Indicator</a>
        <a href="my_activities.php">List of Activities</a>
        <a href="my_challenge.php">Challenge and Future Plan</a>
        <a href="login.php" class="logout">Logout</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i></a>
    </nav>


    <?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if (isset($_SESSION['UID']) && !empty($_SESSION['UID'])) {
        $sql = "SELECT * FROM Student WHERE matricNo='" . $_SESSION["UID"] . "' LIMIT 1";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);

            $matricNo = $row["matricNo"];
            $name = $row["name"];
            $email = $row["email"];
            $program = $row["program"];
            $mentorName = $row["mentorID"];
            $motto = $row["motto"];
            $photo = $row["photo"];
        }
    }
    ?>

    <section>
        <div class="container-fluid">
            <form action="include/edit_profile_action.php" method="POST" id="editProfileForm" class="edit-profile-form" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-5 text-center">
                        <?php
                        if ($photo != "") {
                            echo "<img src=\"uploads/" . $row['photo'] . "\" alt=\"profile picture\">";
                        } else {
                            echo "<h3>Please Upload Photo</h3>";
                        }
                        ?>
                        <div>
                            <small>Max size: 488.28KB</small><br>
                            <input type="file" name="fileToUpload" id="fileToUpload" accept=".jpg, .jpeg, .png">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h1>My Profile</h1>
                        <table class="edit-profile-table">
                            <tr>
                                <td>Name</td>
                                <td>
                                    <?php
                                    echo "<input type=\"text\" id=\"name\" name=\"name\" value='$name' required>";
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Matric No.</td>
                                <td>
                                    <?php
                                    echo $matricNo;
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                    <?php
                                    echo "<input type=\"email\" id=\"email\" name=\"email\" value='$email' required>";
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Program</td>
                                <td>
                                    <?php
                                    echo "<input type=\"text\" id=\"program\" name=\"program\" value='$program' required>";
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Mentor Name</td>
                                <td>
                                    <?php
                                    echo "<input type=\"text\" id=\"mentorName\" name=\"mentorName\" value='$mentorName' required>";
                                    ?>
                                </td>
                            </tr>
                        </table>

                        <h3>My Study Motto</h3>

                        <textarea rows="5" name="motto" id="motto" cols="25"><?php echo $motto; ?></textarea>

                        <div class="col-12 text-center">
                            <input class="submit" type="submit" value="Submit" name="B1">
                            <input class="reset" type="reset" value="Reset" name="B2">
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </section>




    <script src="script/script.js"></script>
</body>

</html>