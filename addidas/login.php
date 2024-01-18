<?php
$is_invalid = false;
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $mysqli = require __DIR__ . "/database.php";

    $sql = sprintf(
        "SELECT * FROM user
                    WHERE email = '%s'",
        $mysqli->real_escape_string($_POST["email"])
    );

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
    if ($user) {

        if (password_verify($_POST["psw"], $user["password_hash"])) {
            session_start();
            session_regenerate_id();
            $_SESSION["user_id"] = $user["id"];

            header("Location: mainLogged.php");
            exit;
        }
    }


    $is_invalid = true;
}



?>
<!DOCTYPE html>

<head>
    <title>Adidas | Login</title>
    <link rel="stylesheet" href="loginpage.css" />
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body style="margin: 0;">
    <div class="header">
        <div class="image">
            <a href="main.html" target="_blank"><img src="image/adidas.png.jpg" alt="adidas logo" style="height: 70px;"></a>
            <hr>
        </div>
    </div>
    <div class="data">
        <div class="container">
            <div class="form">
                <h4 style="font-family:  Arial, Helvetica, sans-serif; font-size: 35px; line-height: 20px;margin-bottom: 15px;font-weight: bold;">
                    LOG IN</h4>
                <?php if ($is_invalid) : ?>
                    <em>Invalid login</em>
                <?php endif; ?>
                <br>
                <form action="" method="post">
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" id="email" required value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
                    <br><br>
                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
                    <a href="" class="forget">FORGET PASSWORD</a><br><br>
                    <div class="check">
                        <label class="container">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            keep me logged in
                            &nbsp; &nbsp; <a style="color: black;" href="">Need help?</a>
                        </label>
                        <br><br>
                        <button class="button"><span>Log in →</span></button><br><br>
                </form>
                <p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;">I have read and accepted
                    adiClub Terms & Conditions and the adidas Privacy Notice</p>
            </div>
        </div>
        <div class="info">
            <h1 style="font-family:Arial, Helvetica, sans-serif; font-size: 26px;line-height: 30px;">JOIN ADICLUB.
                GET REWARDED TODAY.
            </h1>
            <p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 20px;">As an adiClub
                member you get
                rewarded with what you love for doing what you love. Sign up today and receive immediate access to
                these Level 1 benefits:</p>
            <div style="width: 100%; display: block;">
                <ul style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;line-height: 35px;">
                    <li> 20% off voucher for your next purchase</li>
                    <li> Access to Members Only products and sales</li>
                    <li> Access to adidas Running and Training apps</li>
                    <li> Special offers and promotions</li>
                </ul>
            </div> <br><br><br><br><br><br><br>
            <p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 20px;">Join now to
                start earning points, reach new levels and unlock more rewards and benefits from adiClub</p>

            <button class="button" onclick="document.location='register - Copy.html'"><span>Register now
                    →</span></button><br><br>
            <img src="image/adiclub.png" alt="adiclub" style="height: 30%;">
        </div>
    </div>
    </div>



    <script>
        function show() {
            var x = document.getElementById("pw");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>