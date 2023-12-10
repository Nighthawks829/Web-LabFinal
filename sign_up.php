<html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/sign_up.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/grid.css">

    <title>Sign Up</title>
</head>

<body>
    <div class="signup">
        <div class="container signup-box">
            <h1>Sign Up</h1>
            <form action="include/signup_action.php" method="post" id="signupForm">
                <div class="col-12 input-box">
                    <label for="matric">Matric No</label><br>
                    <input type="text" id="matricNo" name="matrixNo" placeholder="Matric No" required>
                </div>
                <div class="col-12 input-box">
                    <label for="name">Name</label><br>
                    <input type="text" id="name" name="name" placeholder="name" required>
                </div>
                <div class="col-12 input-box">
                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="email" placeholder="email" required>
                </div>
                <div class="col-12 input-box">
                    <label for="password">Password</label><br>
                    <input type="password" id="passsword" name="password" placeholder="password">
                </div>

                <div class="col-12 input-box">
                    <label for="confirmPwd">Confirm Password</label><br>
                    <input type="password" id="confirmPwd" name="confirmPwd" placeholder="password" required>
                </div>
                <button type="submit">Sign Up</button>
            </form>
            <h6>Already have an account? <a href="login.php">Sign In</a></h6>
        </div>

    </div>

</body>

</html>