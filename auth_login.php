<?php
    // Memulai sesi dan membolehkan untuk mengakses session variables
    session_start();

    include('connection.php');  
    $email = $_POST['email'];  
    $password = $_POST['pass'];  
        
    // Mencegah serangan SQL injection
    $email = stripcslashes($email); // menghapus karakter backslash '\'  
    $password = stripcslashes($password);

    // menghindari karakter-karakter khusus yang dapat merusak sintaks SQL
    $email = mysqli_real_escape_string($con, $email); 
    $password = mysqli_real_escape_string($con, $password);

    $sql_select = "SELECT * FROM `ppw_projekakhir`.`account` WHERE `email` = '$email'";
    $result = mysqli_query($con, $sql_select);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  

    $count = mysqli_num_rows($result);  
    
    // Jike credentials benar (ada di tabel) maka:
    if($count == 1 && password_verify($password, $row['password']) ){  
        // Menyimpan informasi pengguna dalam session variable
        $_SESSION['acc_id'] = $row['account_id']; 
        header("Location: account.php");
        exit(); 
    } else if ($count == 1){
        $_SESSION['auth_failed'] = true; 
        $_SESSION['error_msg'] = "Wrong password!";
        header('Location: login.php');
        exit;
    }
    else{  // Jika tidak, maka:
        // Buat session variable dan redirect ke login page
        $_SESSION['auth_failed'] = true; 
        $_SESSION['error_msg'] = "Email not registered";
        header('Location: login.php');
        exit;
    }     
?> 