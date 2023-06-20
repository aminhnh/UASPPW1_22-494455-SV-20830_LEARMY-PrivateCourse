<?php
    // Memulai sesi dan membolehkan untuk mengakses session variables
    session_start();

    // Cek apakah pengguna ada (sudah login & user tidak null)
    // Jika belum login diarahkan ke login.php
    if (!isset($_SESSION['acc_id'])) {
        header("Location: login.php");
        exit();
    }
    if (isset($_SESSION['message'])){
        echo '<script type="text/javascript">alert("'.$_SESSION['message'].'")</script>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Account Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body text-center">
            <img src="https://writestylesonline.com/wp-content/uploads/2020/01/Three-Things-To-Consider-When-Deciding-On-Your-LinkedIn-Profile-Picture-1024x1024.jpg" alt="Profile Picture" class="img-fluid rounded-circle mb-3" style="width: 200px;">
            <h1 class="card-title">John Doe</h1>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consectetur mi at leo malesuada, ut auctor ligula dignissim.</p>
            <div class="card-text">
              <p><strong>Role:</strong> Teacher</p>
              <p><strong>Sex:</strong> Male</p>
              <p><strong>Phone:</strong> 123-456-7890</p>
            </div>
            <div class="btn-group" role="group" aria-label="Actions">
              <a href="#" class="btn btn-primary">Edit Profile</a>
              <a href="#" class="btn btn-primary">Change Password</a>
              <a href="#" class="btn btn-danger">Logout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
