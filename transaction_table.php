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
    color: #01c5c4;
    padding: 15px 20px;
    text-align: center;
    margin-top:16px;
    }
    table {
    border-collapse: collapse;
    width: 100%;
    }
    th, td {
    text-align: center;
    padding: 16px;
    }
    tr:hover {background-color: #f5f5f5;}
    tr:nth-child(even) {background-color: #f2f2f2;}

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
    <a class="navbar-brand navi" href="index.php">Sparks Bank <i class="fas fa-university"></i></a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    </div>
  </div>
</nav>
<div class="topp" align="center">
<a class="link1" href="users.php">User Details <i class="fas fa-user"></i></a>
<a class="link2" href="transaction_table.php">Transactions <i class="fas fa-globe-europe"></i></a>
</div>
<h1>Transaction Details <i class="fas fa-exchange-alt"></i></h1>

<table>
        <thead>
            <tr>

                <th>Sender</th>
                <th>Receiver</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $conn = new mysqli($servername, $username,"",'bankingsystem');
            $sq="select * from transactions";
            $stm=$conn->prepare($sq);
            $stm->execute();
            $results=$stm->get_result();
            if ($results->num_rows > 0){
            while($row=$results->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['sender']?></td>
                    <td><?php echo $row['receiver']?></td>
                    <td><?php echo $row['amount']?></td>
                </tr>

            <?php
            }}
            ?>
        </tbody>
</table>
</body>
</html>
