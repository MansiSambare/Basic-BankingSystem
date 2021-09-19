
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./BankingSystem.css"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <style>
    .intro{
        text-align:center;
        font-size: 20px;
    }

    input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

#amount{
    width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}


    #senderdetails {
    text-align: center;
    background-color: rgb(168, 139, 236);
    float: left;
    font-size: 30px;
    padding-left: 20px;
    border-radius: 15px;
     padding: 20px;  
    width: 500px;
    height: 300px;
  }
  #reciverdetails{
    text-align: center;
    background-color: rgb(168, 139, 236);
    float: right;
    font-size: 30px;
    padding-right: 20px;
    border-radius: 15px;
    padding: 20px;  
    width: 500px;
    height: 300px;
  }

  #transfer{
    display: flex;
  justify-content: center;
  align-items: center;
  text-align:center;
  margin-left:auto;
  margin-right:auto;
  background-color:rgb(194, 194, 194);
    border: none;
    color: white;
    border-radius: 15px;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    font-size: 20px;
  }

  #transfer:hover {background-color:rgb(94, 93, 93)}
  #transfer:active {
    background-color: rgb(94, 93, 93)41;
    box-shadow: 0 5px #666;
    transform: translateY(4px);
  }
    </style>

    </head>
  <body>
  <script src=".\BankingSystem.js"></script>
    <div class="header">
      <img id="logo" src="logo.png">
        <header id="header">TSF BANK</header>
        <div class="header-right">
          <a class="active" href="BankingSystem.html">Home</a>
          <!-- <a href="Transaction.php">Transaction</a> -->
          <a href="Customer.php">Customer Details</a>
          <a href="PaymentPage.php">Transaction</a>
        </div>
    </div>
    <div class="intro">
        <h1>Make a Transaction</h1>
    </div><br>

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

?>
        
        <form action="Transaction.php" method="POST">
        <div id="senderdetails">
            <h4>Sender Details</h4>
                <p></p>
                <input type="text" class="form-control" placeholder="Enter Name" name="sender">
                <input type="text" class="form-control" placeholder="Enter Email ID" name="senderemailID">
                <input type="number" id="amount" class="form-control" name="amount" placeholder="Enter Amount">
                </div>

                <div id="reciverdetails">
                <h4>Receiver Details</h4>
                <input type="text" id="receiver" class="form-control" placeholder="Enter Name" name="reciver">
                <input type="text" id="receiver" class="form-control" placeholder="Enter Email ID" name="receiveremailID">
                <br><br>
                <button type="submit" id="transfer" value="Transfer">Send Money</button>
        </div>
        </form>
    </div>
  </body>
</html>