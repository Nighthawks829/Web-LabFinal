<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/my_challenge.css">
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
        <a href="my_activities.php">List of Activities</a>
        <a href="my_challenge.php" class="active">Challenge and Future Plan</a>
        <a href="login.php" class="logout">Logout</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i></a>
    </nav>

    <section>
        <div class="d-flex justify-content-center align-items-center flex-column">
            <h1>Edit Challenge</h1>
            <div class="col-lg-9">
                <form action="" class="editChallengeForm">
                    <table class="editChallengeFormTable">
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
                            <td>Challenge*</td>
                            <td>:</td>
                            <td>
                                <input name="kpi" type=\"text\" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Plan*</td>
                            <td>:</td>
                            <td>
                                <input name="kpi" type=\"text\" required>
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
    </section>

    <script src="script/script.js"></script>
</body>

</html>