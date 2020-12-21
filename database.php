<?php
    $servername = "localhost";
    $username = "root";

    $conn = new mysqli($servername, $username,"",'bankingsystem');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
        echo "Connected successfully";
        $sql = "INSERT INTO customers(Account_Number, Name, Email, Current_Balance)
        VALUES ('1002','Bellamy', 'bellamy@example.com','150000')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }

          $sql = "INSERT INTO customers(Account_Number, Name, Email, Current_Balance)
          VALUES ('1003','Clarke', 'clarke@example.com','100000')";
          if ($conn->query($sql) === TRUE) {
              echo "New record created successfully";
            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $sql = "INSERT INTO customers(Account_Number, Name, Email, Current_Balance)
            VALUES ('1004','Octavia', 'octavia@example.com','250000')";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
              $sql = "INSERT INTO customers(Account_Number, Name, Email, Current_Balance)
              VALUES ('1005','Finn', 'Finn@example.com','300000')";
              if ($conn->query($sql) === TRUE) {
                  echo "New record created successfully";
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $sql = "INSERT INTO customers(Account_Number, Name, Email, Current_Balance)
                VALUES ('1006','Lexa', 'lexa@example.com','175000')";
                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                  } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                  }
                  $sql = "INSERT INTO customers(Account_Number, Name, Email, Current_Balance)
                  VALUES ('1007','Madison', 'Mady@example.com','75000')";
                  if ($conn->query($sql) === TRUE) {
                      echo "New record created successfully";
                    } else {
                      echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    $sql = "INSERT INTO customers(Account_Number, Name, Email, Current_Balance)
                    VALUES ('1008','Raven', 'raven@example.com','145000')";
                    if ($conn->query($sql) === TRUE) {
                        echo "New record created successfully";
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }
                      $sql = "INSERT INTO customers(Account_Number, Name, Email, Current_Balance)
                      VALUES ('1009','Murphy', 'murphy@example.com','180000')";
                      if ($conn->query($sql) === TRUE) {
                          echo "New record created successfully";
                        } else {
                          echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                        $sql = "INSERT INTO customers(Account_Number, Name, Email, Current_Balance)
                        VALUES ('1010','Kane', 'kane@example.com','240000')";
                        if ($conn->query($sql) === TRUE) {
                            echo "New record created successfully";
                          } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                          }


  $conn->close();


?>
