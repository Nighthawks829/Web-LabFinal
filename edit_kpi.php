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
                <form action="" class="editKpiForm">
                    <table class="editKpiFormTable">
                        <tr>
                            <td>Indicator*</td>
                            <td width="1px">:</td>
                            <td>
                                Indicator
                            </td>
                        </tr>
                        <tr>
                            <td>Level</td>
                            <td width="1px">:</td>
                            <td>
                                Level
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
    </section>

    <script src="script/script.js"></script>
</body>

</html>