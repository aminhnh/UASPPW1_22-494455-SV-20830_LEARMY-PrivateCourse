<?php
    // Memulai sesi dan membolehkan untuk mengakses session variables
    session_start();

    // Menghapus data session
    session_unset();
    session_destroy();
    
    // Redirect pengguna ke halaman login
    header("Location: login.php");
    exit();  
?>