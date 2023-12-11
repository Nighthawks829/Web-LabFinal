<?php
session_start();
include("include/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Activities</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/my_activities.css">
    <link rel="stylesheet" href="style/grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        $sql = "SELECT * FROM Activities WHERE matricNo='" . $_SESSION["UID"] . "'";
        $result = mysqli_query($conn, $sql);
    }

    ?>


    <section>
        <div class="container-fluid">
            <h1>My Activities</h1>
            <div style="overflow-x:auto;">
                <table class="activities-table">
                    <tr>
                        <th>No</th>
                        <th>Sem & Year</th>
                        <th>Name of Activities Club Association Competition</th>
                        <th>Remarks</th>
                        <th>Photo</th>
                        <th>&nbsp;</th>
                    </tr>
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        $numRow = 1;
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>$numRow</td>";
                            echo "<td>" . $row["semester"] . " " . $row["year"] . "</td>";
                            echo "<td>" . $row["activityName"] . "</td>";
                            echo "<td>" . $row["remarks"] . "</td>";
                            echo '<td><a href="uploads/' . $row["photo"] . '" target="_blank">' . $row["photo"] . '</a></td>';
                            echo "<td class=\"text-center\">";
                            echo "<a href=\"edit_activities.php?id=" . $row["activityID"] . "\">Edit</a>";
                            echo "&nbsp;&nbsp";
                            echo '<a href="include/delete_activity_action.php?id=' . $row["activityID"] . '" onClick="return confirm(\'Delete?\');">Delete</a> </td>';
                            echo "</td>";
                            $numRow = $numRow + 1;
                        }
                    } else {
                        echo '<tr><td colspan="6">0 results</td></tr>';
                    }
                    ?>
                </table>
            </div>


            <div class="d-flex justify-content-center align-items-center flex-column">
                <h2>Add Activity</h2>

                <h6>Required field with mark*</h6>

                <div class="col-lg-9">
                    <form action="include/add_activities_action.php" method="POST" class="addActivitiesForm" id="addActivitiesFormTable" enctype="multipart/form-data">
                        <table class=" addActivitiesFormTable">
                            <tr>
                                <td>Semester*</td>
                                <td width="1px">:</td>
                                <td>
                                    <select size="1" name="semester" id="semester" required>
                                        <option value="">&nbsp;</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Year*</td>
                                <td>:</td>
                                <td>
                                    <input type="text" name="year" id="year" size="10" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Name of Activities</td>
                                <td>:</td>
                                <td>
                                    <input type="text" name="activitiesName" id="activitiesName" size="30" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Remark</td>
                                <td>:</td>
                                <td>
                                    <textarea rows="5" name="remark" id="remark"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>Photo</td>
                                <td>:</td>
                                <td>
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
        </div>
    </section>


    <script src="script/script.js"></script>
</body>

</html>