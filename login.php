<?php
    // Memulai sesi dan membolehkan untuk mengakses session variables
    session_start();
    // Cek jika authentication failed
    if (isset($_SESSION['auth_failed']) && $_SESSION['auth_failed'] === true ) {
        echo '<script type="text/javascript">alert("'.$_SESSION['error_msg'].'")</script>';
        // Reset session variable
        $_SESSION['auth_failed'] = false;
    }
?>

<html>
<head>
    <title>PHP login system</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="frm">
        <h1 class="text-center">Login</h1>
        <form name="f1" action="auth_login.php" onsubmit="return validation()" method="POST">
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value=""/> <br><br>
                <label for="pass">Password:</label>
                <input type="password" id="pass" name="pass" value=""/><br><br><br>
                <input type="submit" id="btn" value="Login" />
            </div>
        </form>
        <p class="text-center">Don't have an account? <a href="signup.php">create an account</a></p>
    </div>

    <script>
        function validation() {
            var mail = document.f1.email.value;
            var ps = document.f1.pass.value;
            if (mail.length == "" && ps.length == "") {
                alert("Email and password field are empty!");
                return false;
            } else {
                if (mail.length == "") {
                    alert("Email field is empty!");
                    return false;
                }
                if (ps.length == "") {
                    alert("Password field is empty!");
                    return false;
                }
            }
        }
    </script>
</body>
</html>
