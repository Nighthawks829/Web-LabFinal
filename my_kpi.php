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

    <!-- <h1>My Study KPI</h1> -->

    <!-- <h2>KPI Indicator</h2> -->

    <!-- <section>

        <h1>KPI Indicator</h1>

        <table border="1" width="100%" class="kpi-table">
            <tr>
                <th>No</th>
                <th>Indicator</th>
                <th>Faculty KPI</th>
                <th>My KPI</th>
                <th>Semester</th>
                <th>Year</th>
                <th>Remarks</th>
            </tr>
            <tr>
                <td align="center">1</td>
                <td>CGPA</td>
                <td align="center">&gt;=3.0</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td align="center" rowspan="5">2</td>
                <td colspan="6">Student Activity</td>
            </tr>
            <tr>
                <td>Faculty</td>
                <td align="center">4</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>University</td>
                <td align="center">4</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>National</td>
                <td align="center">1</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>International</td>
                <td align="center">1</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </table>

        <div class="kpiInputField">
            <h3>Add KPI</h3>
            <p>Required field with mark*</p>

            <form method="POST" action="" enctype="multipart/form-data" class="kpiForm">
                <table class="kpiFormTable">
                    <tr>
                        <td>Semester*</td>
                        <td width="1px">:</td>
                        <td>
                            <select size="1" name="sem" required>
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
                            <input type=\"text\" name="year" size="5" required>
                        </td>
                    </tr>
                    <tr>
                        <td>KPI*</td>
                        <td>:</td>
                        <td>
                            <input name="kpi" type=\"text\" size="5" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Remark</td>
                        <td>:</td>
                        <td>
                            <textarea rows="4" name="remark" cols="20"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="right">
                            <input type="submit" value="Submit" name="B1">
                            <input type="reset" value="Reset" name="B2">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </section> -->

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
                    <tr>
                        <td>1</td>
                        <td>CGPA</td>
                        <td>&gt;=3.0</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td class="text-center"><a href="">Delete</a>&nbsp;&nbsp;<a href="edit_kpi.php">Edit</a></td>
                    </tr>
                    <tr>
                        <td align="center" rowspan="5">2</td>
                        <td colspan="7">Student Activity</td>
                    </tr>
                    <tr>
                        <td>Faculty</td>
                        <td>4</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td class="text-center"><a href="">Delete</a>&nbsp;&nbsp;<a href="">Edit</a></td>
                    </tr>
                    <tr>
                        <td>University</td>
                        <td>4</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td class="text-center"><a href="">Delete</a>&nbsp;&nbsp;<a href="">Edit</a></td>
                    </tr>
                    <tr>
                        <td>National</td>
                        <td>1</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td class="text-center"><a href="">Delete</a>&nbsp;&nbsp;<a href="">Edit</a></td>
                    </tr>
                    <tr>
                        <td>International</td>
                        <td>1</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td class="text-center"><a href="">Delete</a>&nbsp;&nbsp;<a href="">Edit</a></td>
                    </tr>
                    <tr>
                        <td align="center" rowspan="5">3</td>
                        <td colspan="7">Competition</td>
                    </tr>
                    <tr>
                        <td>Faculty</td>
                        <td>2</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td class="text-center"><a href="">Delete</a>&nbsp;&nbsp;<a href="">Edit</a></td>
                    </tr>
                    <tr>
                        <td>University</td>
                        <td>2</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td class="text-center"><a href="">Delete</a>&nbsp;&nbsp;<a href="">Edit</a></td>
                    </tr>
                    <tr>
                        <td>National</td>
                        <td>1</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td class="text-center"><a href="">Delete</a>&nbsp;&nbsp;<a href="">Edit</a></td>
                    </tr>
                    <tr>
                        <td>International</td>
                        <td>1</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td class="text-center"><a href="">Delete</a>&nbsp;&nbsp;<a href="">Edit</a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Leadership</td>
                        <td>2</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td class="text-center"><a href="">Delete</a>&nbsp;&nbsp;<a href="">Edit</a></td>
                    </tr>
                </table>
            </div>

            <div class="container d-flex justify-content-center align-items-center flex-column">
                <h2>Add KPI</h2>
                <h6>Required field with mark*</h6>
                <div class="col-lg-9">
                    <form action="" class="kpiForm">
                        <table class="kpiFormTable">
                            <tr>
                                <td>Indicator*</td>
                                <td width="1px">:</td>
                                <td>
                                    <select size="1" name="indicator" required>
                                        <option value="">&nbsp;</option>
                                        <option value="1">CGP</option>;
                                        <option value="2">Student Activities</option>;
                                        <option value="3">Competition</option>;
                                        <option value="3">LeaderShip</option>;
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Level</td>
                                <td width="1px">:</td>
                                <td>
                                    <select size="1" name="level">
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
                                    <select size="1" name="sem" required>
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
                                    <input type=\"text\" name="year" size="10" required>
                                </td>
                            </tr>
                            <tr>
                                <td>KPI*</td>
                                <td>:</td>
                                <td>
                                    <input name="kpi" type=\"text\" size="10" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Remark</td>
                                <td>:</td>
                                <td>
                                    <textarea rows="5" name="remark" cols="25"></textarea>
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