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
    input[type=submit]{
    background-color: #01c5c4;
    color: white;
    padding: 15px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    }
    form{
        margin-top:25px;
        margin-left:240px;
    }
    select{
      display: block;
      font-size: 16px;
      font-family: sans-serif;
      /* color:mediumseagreen; */
      padding: 12px 8px;
      align:"center";
      width: 50%;
      box-sizing: border-box;
      border: 1px solid #aaa;
      box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
      appearance: none;
      background-color: #fff;
      }
      input[type=text]{
        display: block;
        /* color:mediumseagreen; */
        font-size: 16px;
        font-family: sans-serif;
        padding: 12px 8px;
        align:"center";
        width: 50%;
        box-sizing: border-box;
        border: 1px solid #aaa;
        box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
        appearance: none;
        background-color: #fff;
      }
      h1{
          color:#01c5c4;
          text-align: center;
      }
      h2{
          color:#28abb9;
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

<h1>Transaction <i class="fas fa-exchange-alt"></i></h1>

<div class="topp" align="center">
<a class="link1" href="users.php">User Details <i class="fas fa-user"></i></a>
<a class="link2" href="transaction_table.php">All Transactions <i class="fas fa-globe-europe"></i></a>
</div>


    <div class="form">
    <form  method="POST" action="transactions.php">
    <h2>Sender:</h2>
    <select name="sender" >
            <option value=sender>Select sender</option>
            <option value="John">John</option>
            <option value="Bellamy">Bellamy</option>
            <option value="Clarke">Clarke</option>
            <option value="Octavia">Octavia</option>
            <option value="Finn">Finn</option>
            <option value="Lexa">Lexa</option>
            <option value="Madison">Madison</option>
            <option value="Raven">Raven</option>
            <option value="Murphy">Murphy</option>
            <option value="Kane">Kane</option>
    </select>
    <br>
    <h2>Receiver:</h2>
    <select name="receiver" >
        <option value="receiver">Select receiver</option>
        <option value="John">John</option>
        <option value="Bellamy">Bellamy</option>
        <option value="Clarke">Clarke</option>
        <option value="Octavia">Octavia</option>
        <option value="Finn">Finn</option>
        <option value="Lexa">Lexa</option>
        <option value="Madison">Madison</option>
        <option value="Raven">Raven</option>
        <option value="Murphy">Murphy</option>
        <option value="Kane">Kane</option>
    </select>
    <h2>Amount <i class="fas fa-wallet"></i> :</h2><input type="text" name="amount"><br>
    <input type="submit" value="Transfer">
    </form>
    </div>

</body>
</html>
