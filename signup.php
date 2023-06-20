<?php
    // Memulai sesi dan membolehkan untuk mengakses session variables
    session_start();

    // Cek jika authentication failed
    // Tampilkan pesan`.$_SESSION["message"].
    if (isset($_SESSION['message'])) {
        echo '<script type="text/javascript">alert("' . $_SESSION['message'] . '")</script>';
    }
    $_SESSION['message'] = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="frm">
        <h1 class="text-center">Sign-up</h1>
        <form name="f1" action="auth_signup.php" onsubmit="return validation()" method="POST">
            <div class="input-group">
                <div class="radio-group">
                    <input type="radio" id="teacher" name="role" value="teacher">
                    <label for="teacher">Teacher</label>
                    <input type="radio" id="student" name="role" value="student">
                    <label for="student">Student</label>
                </div>
                <label for="pass">Email:</label>
                <input type="email" id="email" name="email" value="" title="NO!"/>
                <br><br>
                <label for="pass">Password:</label>
                <input type="password" id="pass" name="pass" value=""/>
                <br><br>
                <input type="submit" id="btn" value="Sign-up" />
            </div>
        </form>
        <p class="text-center">Already have an account? <a href="login.php">login here</a></p>
    </div>

    <script>
        function validation() {
            var role = document.querySelector('input[name="role"]:checked');
            var email = document.f1.email.value;
            var ps = document.f1.pass.value;
            if (!role){
                alert("Please pick a role!");
                return false;
            } else{
                var role = role.value;
            }
            if (email.length == "") {
                alert("Email field is empty!");
                return false;
            } else if (ps.length == "") {
                alert("Password field is empty!");
                return false;
            }
        }
    </script>
</body>
</html>
