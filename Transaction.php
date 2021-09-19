
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./BankingSystem.css"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <style>body {
    background-image: url("img/4.jpg");
    background-size: cover;
    height: 100%;
    width: 100%;
    background-repeat: no-repeat;
    background-attachment: fixed;
    }
    </style>
  </head>
<body>
    
  <?php  
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "customer_data";
    $con = mysqli_connect($server, $username, $password, $database);
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    
        $sender = $_POST['sender'];
        $rec = $_POST['senderemailID'];
        $amount = $_POST['amount'];
        $receiver = $_POST['reciver'];

     $sql3 = "SELECT balance FROM customer where Name='$sender';";
     $sql = "UPDATE customer SET balance=(balance-$amount) where Name='$sender';";
     $sql1 = "UPDATE customer SET balance=(balance+$amount) where Name='$receiver';";
     $sql2 = "INSERT INTO history (sender,reciever,amount)VALUES('$sender','$rec',$amount)";
        $result3=mysqli_query($con,$sql3);
    while($row3 = mysqli_fetch_array($result3)){
        if($amount>$row3["balance"]){
            echo "<script> alert('Insufficient Balance')</script>";
            echo "<script> window.location.href='Customer.php'</script>";
        }
        else{
            $result=mysqli_query($con,$sql);
            $result1=mysqli_query($con,$sql1);
            $result2=mysqli_query($con,$sql2);
            echo "<script> alert('Transaction Successful...')</script>";
            echo "<script> window.location.href='Customer.php'</script>";
        }
    }
?>

  </body>
</html>