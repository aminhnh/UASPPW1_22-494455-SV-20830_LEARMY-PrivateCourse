<?php
    // Memulai sesi dan membolehkan untuk mengakses session variables
    session_start();

    include('connection.php');  
    $password = $_POST['pass'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    
    // Mencegah serangan SQL injection
    $email = stripcslashes($email); // menghapus karakter backslash '\'  
    $password = stripcslashes($password);  
    // menghindari karakter-karakter khusus yang dapat merusak sintaks SQL
    $email = mysqli_real_escape_string($con, $email); 
    $password = mysqli_real_escape_string($con, $password);  

    $sql_email = "SELECT * FROM `ppw_projekakhir`.`account` WHERE `email` = '$email'";
    $result = mysqli_query($con, $sql_email);  
    $count = mysqli_num_rows($result);  
      
    if($count > 0){
        $_SESSION['message'] = "Email is already in use!"; 
    } else {
        // Mencoba menambah data (membuat akun)

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql_insert = "INSERT INTO `ppw_projekakhir`.`account` (`email`, `password`, `account_type`) VALUES ('$email', '$hashedPassword', '$role');";

        if (mysqli_query($con, $sql_insert)) {
            $sql_email = "SELECT * FROM `ppw_projekakhir`.`account` WHERE `email` = '$email'";
            $result = mysqli_query($con, $sql_email); 
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 

            $_SESSION['acc_id'] = $row['account_id'];
            $_SESSION['message'] = "Account created successfully";
            header('Location: account.php');
            exit;
        } else {
            $_SESSION['message'] = "Error creating account";
            header('Location: signup.php');
            exit;
        }
    }
    header('Location: signup.php');
    exit;
?> 