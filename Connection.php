
<?php  
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "customer_data";
    // Create a database connection
    $con = mysqli_connect($server, $username, $password, $database);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    else{
      echo"connection estalblished";
    }
    ?>