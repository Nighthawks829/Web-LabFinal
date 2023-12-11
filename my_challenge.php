<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/my_challenge.css">
    <link rel="stylesheet" href="style/grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>My Challenge</title>
</head>

<body>
    <header></header>

    <nav class="topnav" id="myTopnav">
        <a href="profile.php">Profile</a>
        <a href="my_kpi.php">KPI Indicator</a>
        <a href="my_activities.php">List of Activities</a>
        <a href="my_challenge.php" class="active">Challenge and Future Plan</a>
        <a href="login.php" class="logout">Logout</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i></a>
    </nav>

    <!-- <section>
        <h1>My Challenge</h1>
        <h2>List of Challenge and Plan</h2>

        <table class="challengeTable">
            <tr>
                <th>No</th>
                <th>Sem & Year</th>
                <th>Challenges</th>
                <th>Plan</th>
                <th>Remarks</th>
                <th></th>
            </tr>
            <tr>
                <td>1</td>
                <td>1 2022/2023</td>
                <td>Persatuan Mahasiwa FKI</td>
                <td>Commitee</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>2</td>
                <td>1 2022/2023</td>
                <td>Photoshop Workshop</td>
                <td>Leader</td>
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
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </table>


        <div class="challengeInputField">
            <h3>Add Challenge</h3>
            <p>Required field with mark*</p>

            <form method="POST" action="" enctype="multipart/form-data" class="challengeForm">
                <table class="challengeFormTable">
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
                        <td>Challenge*</td>
                        <td>:</td>
                        <td>
                            <textarea rows="4" name="challenge" cols="20" required></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Plan*</td>
                        <td>:</td>
                        <td>
                            <textarea rows="4" name="plan" cols="20" required></textarea>
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
                        <td>Upload photo</td>
                        <td>:</td>
                        <td>
                            Max size: 488.28KB<br>
                            <input type="file" name="fileToUpload" id="fileToUpload" accept=".jpg, .jpeg, .png">
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
            <h1>My Challenge</h1>
            <h2>List of Challenge and Plan</h2>
            <div style="overflow-x:auto;">

                <table class="challengeTable">
                    <tr>
                        <th>No</th>
                        <th>Sem & Year</th>
                        <th>Challenges</th>
                        <th>Plan</th>
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
                        <td>&nbsp;</td>
                        <td class="text-center"><a href="">Delete</a>&nbsp;&nbsp;<a href="edit_challenge.php">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>1 2022/2023</td>
                        <td>Photoshop Workshop</td>
                        <td>Leader</td>
                        <td>&nbsp;</td>
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
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
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
                <h2>Add Challenges</h2>
                <h6>Required field with mark*</h6>

                <div class="col-lg-9">
                    <form action="" class="kpiForm">
                        <table class="challengeFormTable">
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
                                <td>Challenge</td>
                                <td>:</td>
                                <td>
                                    <input name="name" type=\"text\" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Plan</td>
                                <td>:</td>
                                <td>
                                    <input name="name" type=\"text\" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Remark</td>
                                <td>:</td>
                                <td>
                                    <textarea rows="5" name="remark" cols="25"></textarea>
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