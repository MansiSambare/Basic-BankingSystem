<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./BankingSystem.css"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <style>
 body{
   background-image:url("realtime-banking.png");
   background-size: 750px 800px;
 }   

 .head {
  /* padding: 20px; */
  text-align: center;
  color: black;
  font-size: 25px;
}
     
.display_table
{
    width:120vw;
    height:110vh;
    background-repeat:no-repeat;
    background-size:100%;
    width:90vw;
    height:50vh;
    margin-left: auto;
  margin-right: auto;
}

  	.display_table{
		width:100%; 
		border-collapse:collapse; 
	}
	.display_table td{ 
		padding:7px; 
    border: 1px solid;
	}

    .display_table tr:hover {
          background-color: rgb(117, 104, 233);
    }
table
{
    width : 900px;
    background-color:rgb(168, 139, 236);
    border-collapse:collapse;
    color:	#800080;
    font-weight:bold;
    margin:auto;
}
th,td
{
  border:1px solid #000000;
   padding:8px 30px;
  text-align:center;
  color:	#000000; 
}
th{
    text-transform:uppercase;
    font-weight:500;
}
td
{
    font-size:20px;
}
#transaction
{
  display: flex;
  justify-content: center;
  align-items: center;
  text-align:center;
  margin-left:auto;
  margin-right:auto;
  background-color:#666;
    border: none;
    color: white;
    border-radius: 15px;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    font-size: 20px;
}

#transaction:hover {background-color:rgb(94, 93, 93)}
  #transaction:active {
    background-color: rgb(94, 93, 93)41;
    box-shadow: 0 5px #666;
    transform: translateY(4px);
  }
      </style>
    </head>

  <body>
  <script>
      function pageredirect(){
            window.location.href = "\PaymentPage.php";
            
      }
      </script>

    <div class="header">
      <img id="logo" src="logo.png">
        <header id="header">TSF BANK</header>
        <div class="header-right">
        <a class="active" href="BankingSystem.html">Home</a>
          <a href="Customer.php" >Customer Details</a>
          <a href="PaymentPage.php">Transaction</a>
        </div>
    </div>
      <div class="head">
          <h1>Customer Table</h1>
        </div>

<div class="display_table">
                    <table>
                    <thead>
                     <tr>
                     <th>ID</th>
                      <th>Name</th>
                      <th>Email ID</th>
                       <th>Balance</th>
                    </tr>
                    </thead>
                   <tbody>
                  </div>

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
   
         $sql = "SELECT * FROM customer";

         $result=mysqli_query($con,$sql);
         $result1 = mysqli_query($con, $sql);
         while($row=mysqli_fetch_array($result)) {
              ?>
              <tr>
               <td><?php  echo $row['ID']; ?></td>
               <td><?php echo $row['Name']; ?></td>
               <td><?php echo $row['Email ID']; ?></td>
               <td><?php echo $row['Balance']; ?></td>
            </tr>
            <?php
               }
               echo "</table>";
      ?>
      <br>
       <button id="transaction" onclick="pageredirect()" type="button">Transfer Money</button>
       <br>
  </body>
</html>