<?php      
        $host = "localhost";  
        $user = "root";  
        $password = '';  
        $db_name = "ppw_projekakhir";  
        
        // Make a connection to the database
        $con = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  
        //echo "Connected successfully! <br>";
    ?>  