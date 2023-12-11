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
                    <tr>
                        <td>1</td>
                        <td>1 2022/2023</td>
                        <td>Persatuan Mahasiwa FKI</td>
                        <td>Commitee</td>
                        <td>&nbsp;</td>
                        <td class="text-center"><a href="">Delete</a>&nbsp;&nbsp;<a href="edit_activities.php">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>1 2022/2023</td>
                        <td>Photoshop Workshop</td>
                        <td>Leader</td>
                        <td>&nbsp;</td>
                        <td class="text-center"><a href="">Delete</a>&nbsp;&nbsp;<a href="">Edit</a></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                </table>
            </div>
            <div class="d-flex justify-content-center align-items-center flex-column">
                <h2>Add Activity</h2>
                <h6>Required field with mark*</h6>

                <div class="col-lg-9">
                    <form action="" class="kpiForm">
                        <table class="activitiesFormTable">
                            <tr>
                                <td>Semester*</td>
                                <td width="1px">:</td>
                                <td>
                                    <select size="1" name="sem" required>
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
                                    <input type=\"text\" name="year" size="10" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Name of Activities</td>
                                <td>:</td>
                                <td>
                                    <input name="name" type=\"text\" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Remark</td>
                                <td>:</td>
                                <td>
                                    <textarea rows="5" name="remark" cols="10"></textarea>
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

    <!-- <section>
        <h1>My Activities</h1>
        <table class="activities_table">
            <tr>
                <th>No</th>
                <th>Sem & Year</th>
                <th>Name of Activities Club Association Competition</th>
                <th>Remarks</th>
            </tr>
            <tr>
                <td>1</td>
                <td>1 2022/2023</td>
                <td>Persatuan Mahasiwa FKI</td>
                <td>Commitee</td>
            </tr>
            <tr>
                <td>2</td>
                <td>1 2022/2023</td>
                <td>Photoshop Workshop</td>
                <td>Leader</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </table>

        <div class="activitiesInputField">
            <h3>Add KPI</h3>
            <p>Required field with mark*</p>

            <form method="POST" action="" enctype="multipart/form-data" class="activitiesForm">
                <table class="activitiesFormTable">
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
                        <td>Activities*</td>
                        <td>:</td>
                        <td>
                            <input name="activities" type=\"text\" size="30" required>
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


    <script src="script/script.js"></script>
</body>

</html>