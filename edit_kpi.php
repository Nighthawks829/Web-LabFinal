<?php
session_start();
include("include/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/my_kpi.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Edit KPI Indicator</title>
</head>

<body>

    <?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if (isset($_SESSION['UID']) && !empty($_SESSION['UID'])) {
        $sql = "SELECT * FROM Kpi WHERE KpiID='" . $_GET['id'] . "' LIMIT 1";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);

            $matricNo = $_SESSION["UID"];
            $indicator = $row["indicator"];
            $level = $row["level"];
            $kpi = $row["kpi"];
            $semester = $row["semester"];
            $year = $row["year"];
            $remark = $row["remarks"];
        }
    }
    ?>

    <header></header>

    <nav class="topnav" id="myTopnav">
        <a href="profile.php">Profile</a>
        <a href="my_kpi.php" class="active">KPI Indicator</a>
        <a href="my_activities.php">List of Activities</a>
        <a href="my_challenge.php">Challenge and Future Plan</a>
        <a href="login.php" class="logout">Logout</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i></a>
    </nav>

    <section>
        <div class="container  d-flex justify-content-center align-items-center flex-column">
            <h1>Edit KPI Indicator</h1>
            <div class="col-lg-9">
                <form action="include/edit_kpi_action.php" method="POST" class="editKpiForm" id="editKpiForm">
                    <input type="text" id="id" name="id" value="<?= $_GET['id'] ?>" hidden>
                    <table class="editKpiFormTable">
                        <tr>
                            <td>Indicator*</td>
                            <td width="1px">:</td>
                            <td>
                                <select size="1" name="indicator" id="indicator">
                                    <option value="">&nbsp;</option>
                                    <?php
                                    if ($indicator == "CGPA") {
                                        echo "<option value=\"1\" selected>CGPA</option>;";
                                        echo "<option value=\"2\">Student Activities</option>;";
                                        echo "<option value=\"3\">Competition</option>;";
                                        echo "<option value=\"4\">LeaderShip</option>;";
                                    } else if ($indicator == "Student Activities") {
                                        echo "<option value=\"1\" >CGPA</option>;";
                                        echo "<option value=\"2\" selected>Student Activities</option>;";
                                        echo "<option value=\"3\">Competition</option>;";
                                        echo "<option value=\"4\">LeaderShip</option>;";
                                    } else if ($indicator == "Competition") {
                                        echo "<option value=\"1\" >CGPA</option>;";
                                        echo "<option value=\"2\">Student Activities</option>;";
                                        echo "<option value=\"3\" selected>Competition</option>;";
                                        echo "<option value=\"4\">LeaderShip</option>;";
                                    } else if ($indicator == "Leadership") {
                                        echo "<option value=\"1\" >CGPA</option>;";
                                        echo "<option value=\"2\">Student Activities</option>;";
                                        echo "<option value=\"3\">Competition</option>;";
                                        echo "<option value=\"4\" selected>LeaderShip</option>;";
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Level</td>
                            <td width="1px">:</td>
                            <td>
                                <select size="1" name="level" id="level">
                                    <option value="">&nbsp;</option>
                                    <?php
                                    if ($indicator == "Faculty") {
                                        echo "<option value=\"1\" selected>Faculty Level</option>;";
                                        echo "<option value=\"2\">University Level</option>;";
                                        echo "<option value=\"3\">National Level</option>;";
                                        echo "<option value=\"4\">International Level</option>;";
                                    } else if ($indicator == "University") {
                                        echo "<option value=\"1\">Faculty Level</option>;";
                                        echo "<option value=\"2\" selected>University Level</option>;";
                                        echo "<option value=\"3\">National Level</option>;";
                                        echo "<option value=\"4\">International Level</option>;";
                                    } else if ($indicator == "National") {
                                        echo "<option value=\"1\">Faculty Level</option>;";
                                        echo "<option value=\"2\">University Level</option>;";
                                        echo "<option value=\"3\" selected>National Level</option>;";
                                        echo "<option value=\"4\">International Level</option>;";
                                    } else if ($indicator == "International") {
                                        echo "<option value=\"1\">Faculty Level</option>;";
                                        echo "<option value=\"2\">University Level</option>;";
                                        echo "<option value=\"3\">National Level</option>;";
                                        echo "<option value=\"4\" selected>International Level</option>;";
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
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
                            <td>KPI*</td>
                            <td>:</td>
                            <td>
                                <?php
                                echo "<input type=\"text\" name=\"kpi\" id=\"kpi\" size=\"10\" value='$kpi' required>";
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Remark</td>
                            <td>:</td>
                            <td>
                                <?php
                                echo "<textarea rows=\"5\" name=\"remark\" id=\"remark\">$remark</textarea>";
                                ?>
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