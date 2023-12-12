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
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->
    <title>My KPI</title>
</head>

<body>

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

    <?php
    // error_reporting(E_ALL);
    // ini_set('display_errors', 1);

    // if (isset($_SESSION['UID']) && !empty($_SESSION['UID'])) {
    //     $sql = "SELECT * FROM Kpi WHERE matricNo='" . $_SESSION["UID"] . "'";
    //     $result = mysqli_query($conn, $sql);

    //     if (mysqli_num_rows($result) > 0) {
    //         while ($row = mysqli_fetch_array($result)) {
    //             $cgpa = $row["indicator"];
    //             echo $cgpa;
    //         }
    //     }
    // }
    ?>

    <section>
        <div class="container-fluid">
            <h1>KPI Indicator</h1>
            <div style="overflow-x:auto;">
                <table class="kpi-table">
                    <tr>
                        <th>No</th>
                        <th>Indicator</th>
                        <th>Faculty KPI</th>
                        <th>My KPI</th>
                        <th>Semester</th>
                        <th>Year</th>
                        <th>Remarks</th>
                        <th>&nbsp;</th>
                    </tr>


                    <?php

                    error_reporting(E_ALL);
                    ini_set('display_errors', 1);

                    if (isset($_SESSION['UID']) && !empty($_SESSION['UID'])) {
                        $sql = "SELECT * FROM Kpi WHERE matricNo='" . $_SESSION["UID"] . "' AND indicator='CGPA'";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            $result_length = mysqli_num_rows($result);
                            echo "<tr>";
                            echo "<td rowspan='$result_length'>1</td>";
                            echo "<td>CGPA</td>";

                            while ($row = mysqli_fetch_array($result)) {
                                echo "<td>>=3.0</td>";
                                echo "<td>" . $row["kpi"] . "</td>";
                                echo "<td>" . $row["semester"] . "</td>";
                                echo "<td>" . $row["year"] . "</td>";
                                echo "<td>" . $row["remarks"] . "</td>";
                                echo "<td class=\"text-center\">";
                                echo "<a href=\"edit_kpi.php?id=" . $row["kpiID"] . "\">Edit</a>";
                                echo "&nbsp;&nbsp";
                                echo '<a href="include/delete_kpi_action.php?id=' . $row["kpiID"] . '" onClick="return confirm(\'Delete?\');">Delete</a> </td>';
                                echo "</td>";
                            }
                        } else {
                            echo "<tr>";
                            echo "<td>1</td>";
                            echo "<td colspan='9'>GPA</td>";
                        }
                    }
                    echo "</tr>";
                    ?>

                    <?php

                    error_reporting(E_ALL);
                    ini_set('display_errors', 1);

                    if (isset($_SESSION['UID']) && !empty($_SESSION['UID'])) {
                        $sql = "SELECT * FROM Kpi WHERE matricNo='" . $_SESSION["UID"] . "' AND indicator='Student Activities'";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            $result_length = mysqli_num_rows($result) + 1;
                            echo "<tr>";
                            echo "<td rowspan='$result_length'>2</td>";
                            echo "<td colspan='9'>Student Activities</td>";

                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . $row["level"] . "</td>";
                                echo "<td>4.0</td>";
                                echo "<td>" . $row["kpi"] . "</td>";
                                echo "<td>" . $row["semester"] . "</td>";
                                echo "<td>" . $row["year"] . "</td>";
                                echo "<td>" . $row["remarks"] . "</td>";
                                echo "<td class=\"text-center\">";
                                echo "<a href=\"edit_kpi.php?id=" . $row["kpiID"] . "\">Edit</a>";
                                echo "&nbsp;&nbsp";
                                echo '<a href="include/delete_kpi_action.php?id=' . $row["kpiID"] . '" onClick="return confirm(\'Delete?\');">Delete</a> </td>';
                                echo "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr>";
                            echo "<td>2</td>";
                            echo "<td colspan='9'>Student Activities</td>";
                        }
                    }
                    echo "</tr>";
                    ?>


                    <?php

                    error_reporting(E_ALL);
                    ini_set('display_errors', 1);

                    if (isset($_SESSION['UID']) && !empty($_SESSION['UID'])) {
                        $sql = "SELECT * FROM Kpi WHERE matricNo='" . $_SESSION["UID"] . "' AND indicator='Competition'";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            $result_length = mysqli_num_rows($result) + 1;
                            echo "<tr>";
                            echo "<td rowspan='$result_length'>3</td>";
                            echo "<td colspan='9'>Competition</td>";

                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . $row["level"] . "</td>";
                                echo "<td>4.0</td>";
                                echo "<td>" . $row["kpi"] . "</td>";
                                echo "<td>" . $row["semester"] . "</td>";
                                echo "<td>" . $row["year"] . "</td>";
                                echo "<td>" . $row["remarks"] . "</td>";
                                echo "<td class=\"text-center\">";
                                echo "<a href=\"edit_kpi.php?id=" . $row["kpiID"] . "\">Edit</a>";
                                echo "&nbsp;&nbsp";
                                echo '<a href="include/delete_kpi_action.php?id=' . $row["kpiID"] . '" onClick="return confirm(\'Delete?\');">Delete</a> </td>';
                                echo "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr>";
                            echo "<td>3</td>";
                            echo "<td colspan='9'>Competition</td>";
                        }
                    }
                    echo "</tr>";
                    ?>

                    <?php
                    error_reporting(E_ALL);
                    ini_set('display_errors', 1);

                    if (isset($_SESSION['UID']) && !empty($_SESSION['UID'])) {
                        $sql = "SELECT * FROM Kpi WHERE matricNo='" . $_SESSION["UID"] . "' AND indicator='Leadership'";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            $result_length = mysqli_num_rows($result);
                            echo "<tr>";
                            echo "<td rowspan='$result_length'>4</td>";
                            echo "<td>Leadership</td>";

                            while ($row = mysqli_fetch_array($result)) {
                                echo "<td>>=3.3</td>";
                                echo "<td>" . $row["kpi"] . "</td>";
                                echo "<td>" . $row["semester"] . "</td>";
                                echo "<td>" . $row["year"] . "</td>";
                                echo "<td>" . $row["remarks"] . "</td>";
                                echo "<td class=\"text-center\">";
                                echo "<a href=\"edit_kpi.php?id=" . $row["kpiID"] . "\">Edit</a>";
                                echo "&nbsp;&nbsp";
                                echo '<a href="include/delete_kpi_action.php?id=' . $row["kpiID"] . '" onClick="return confirm(\'Delete?\');">Delete</a> </td>';
                                echo "</td>";
                            }
                        } else {
                            echo "<tr>";
                            echo "<td>4</td>";
                            echo "<td colspan='9'>Leadership</td>";
                        }
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>

            <div class="container d-flex justify-content-center align-items-center flex-column">
                <h2>Add KPI</h2>
                <h6>Required field with mark*</h6>
                <div class="col-lg-9">
                    <form action="include/add_kpi_action.php" method="POST" class="addKpiForm" id="addKpiForm">
                        <table class="addKpiFormTable">
                            <tr>
                                <td>Indicator*</td>
                                <td width="1px">:</td>
                                <td>
                                    <select size="1" name="indicator" id="indicator" required>
                                        <option value="">&nbsp;</option>
                                        <option value="1">CGPA</option>;
                                        <option value="2">Student Activities</option>;
                                        <option value="3">Competition</option>;
                                        <option value="4">LeaderShip</option>;
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Level</td>
                                <td width="1px">:</td>
                                <td>
                                    <select size="1" name="level" id="level">
                                        <option value="">&nbsp;</option>
                                        <option value="1">Faculty Level</option>;
                                        <option value="2">University Level</option>;
                                        <option value="3">National Level</option>;
                                        <option value="4">International Level</option>;
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Semester*</td>
                                <td width="1px">:</td>
                                <td>
                                    <select size="1" name="semester" id="semester" required>
                                        <option value="">&nbsp;</option>
                                        <option value="1">1</option>;
                                        <option value="2">2</option>;
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
                                <td>KPI*</td>
                                <td>:</td>
                                <td>
                                    <input type="text" name="kpi" id="kpi" size="10" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Remark</td>
                                <td>:</td>
                                <td>
                                    <textarea rows="5" name="remark" id="remark"></textarea>
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