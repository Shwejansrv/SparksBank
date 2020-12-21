<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/53da268821.js" crossorigin="anonymous"></script>
  <style>
    a{
    background-color: #01c5c4;
    color: white;
    padding: 15px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    }
    h1 {
    color: #28abb9;
    padding: 15px 20px;
    text-align: center;
    margin-top:16px;
    }
    .topp{
      margin-top: 40px;
    }
    .link1{margin-right: 20px;}
    .link2{margin-left: 20px;}
    .navi{background-color: #ffffff;}
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand navi" href="home.php">Sparks Bank <i class="fas fa-university"></i></a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    </div>
  </div>
</nav>
<?php
    $servername = "localhost";
    $username = "root";

    $conn = new mysqli($servername, $username,"",'bankingsystem');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    $sender = $_POST['sender'];
    $receiver = $_POST['receiver'];
    $amount = $_POST["amount"];
    $tsql="insert into transactions(sender,receiver,amount) values (?, ?, ? )";
    $stm=$conn->prepare($tsql);
    $stm->bind_param('sss',$sender, $receiver, $amount);
    $stm->execute();
    $result=$stm->get_result();

    $ssql="select Current_Balance from customers where name=?";
    $sstm=$conn->prepare($ssql);
    $sstm->bind_param('s',$sender);
    $sstm->execute();
    $result=$sstm->get_result();
    if ($result->num_rows > 0){
    while($row=$result->fetch_assoc()){
      $ups= $row["Current_Balance"]-$amount;
    }
    }

    $susql="update customers set Current_Balance=? where name=?";
    $sustm=$conn->prepare($susql);
    $sustm->bind_param('ss',$ups,$sender);
    $sustm->execute();
    $resultsu=$sustm->get_result();

    $rsql="select Current_Balance from customers where name=?";
    $rstm=$conn->prepare($ssql);
    $rstm->bind_param('s',$receiver);
    $rstm->execute();
    $resultr=$rstm->get_result();
    if ($resultr->num_rows > 0){
    while($row=$resultr->fetch_assoc()){
      $upr= $row["Current_Balance"]+$amount;
    }
    }

    $rusql="update customers
     set Current_Balance=? where name=?";
    $rustm=$conn->prepare($rusql);
    $rustm->bind_param('ss',$upr,$receiver);
    $rustm->execute();
    $resultru=$rustm->get_result();
?>
<div class="topp" align="center">
<a class="link1" href="users.php">User Details <i class="fas fa-user"></i></a>
<a class="link2" href="transaction_table.php">All Transactions <i class="fas fa-globe-europe"></i></a>
</div>
<h1>Transferred successfully <i class="fas fa-check-circle"></i></h1>
</body>
</html>
