<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/login.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/grid.css">
    <title>Login</title>
</head>

<body>

    <div class="login-background">
        <div class="container login-box">
            <h1>Login</h1>
            <form action="include/login_action.php" id="loginForm" method="POST">
                <div class="col-12 input-box">
                    <label for="matricNo">Matrix No</label><br>
                    <input type="text" placeholder="Matric No" id="matricNo" name="matricNo" required>
                </div>
                <div class="col-12 input-box">
                    <label for="password">Password</label><br>
                    <input type="password" id="password" name="password" placeholder="password" required>
                </div>
                <button type="submit">Login</button>
            </form>
            <h6>Don't have an account? <a href="sign_up.php">Sign Up</a></h6>
        </div>

</body>

</html>