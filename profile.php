<?php
session_start();
include("include/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/profile.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/grid.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Profile</title>
</head>


<body>

    <header></header>

    <nav class="topnav" id="myTopnav">
        <a href="profile.php" class="active">Profile</a>
        <a href="my_kpi.php">KPI Indicator</a>
        <a href="my_activities.php">List of Activities</a>
        <a href="my_challenge.php">Challenge and Future Plan</a>
        <a href="include/logout_action.php" class="logout">Logout</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i></a>
    </nav>


    <section>

        <div class="container-fluid">
            <div class="row">
                <?php
                error_reporting(E_ALL);
                ini_set('display_errors', 1);

                if (isset($_SESSION['UID']) && !empty($_SESSION['UID'])) {
                    $matricNo = $_SESSION["UID"];
                    $sql = "SELECT Student.matricNo,Student.name,Student.email,Profile.program,Profile.mentor,Profile.motto,Profile.photo FROM Student INNER JOIN Profile ON Student.matricNo=Profile.matricNo WHERE Student.matricNo='$matricNo'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) == 1) {
                        $row = mysqli_fetch_assoc($result);

                        echo "<div class=\"col-md-5 text-center\">";

                        if ($row['photo'] != "") {
                            echo "<img src=\"uploads/" . $row['photo'] . "\" alt=\"profile picture\">";
                        } else {
                            echo "<h3>Please Upload Photo</h3>";
                        }
                        echo " </div>";

                        echo "<div class=\"col-md-7 align-items-center\">";
                        echo "<h1>My Profile</h1>";
                        echo "<table class=\"profile-table\">";

                        echo "<tr>";
                        echo "<td>Name</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>Matric No.</td>";
                        echo "<td>" . $row["matricNo"] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>Email</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>Program</td>";
                        echo "<td>" . $row["program"] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>Mentor Name</td>";
                        echo "<td>" . $row["mentor"] . "</td>";
                        echo "</tr>";
                        echo "</table>";
                        echo "<h3>My Study Motto</h3>";
                        echo "<div class=\"motto\">";
                        echo $row['motto'];
                        echo "</div>";
                        echo "<div class=\"edit-profile\">";
                        echo "<a href=\"edit_profile.php\" class=\"submit\">Edit Profile</a>";
                        echo "</div>";
                        echo "</div>";
                    } else {
                        echo "No Data in Database";
                    }
                } else {
                    echo "Not connect to database";
                }
                ?>
            </div>
        </div>
    </section>

    <script src="script/script.js"></script>
</body>

</html>