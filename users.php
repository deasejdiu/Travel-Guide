<?php
  require_once 'dbconect.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DD Travel</title>
</head>
<body>
    <header>
    </header>
<body>

<div id="sidebar">
        <a href="dashboard.php">Dashboard</a>
        <a href="users.php">Users</a>
        <a href="users.php">Users</a>
        <a href="vendet.php">Vendet</a>
        <a href="flights.php">Fluturimet</a>
        <a href="book.php">About Us</a>
        <a href="contactus.php">Contact us</a>
        <p>Return to Web here</p>
         <a href="../home.php" class="back">Back to Web</a>
    </div>

    <div id="content">
    <h2>USERS</h2>

    <table class="table">
    <thead>
        <tr>
            <th name="id">ID</th>
            <th name="username">Username</th>
            <th name="email">Email</th>
            <th name="number">Number</th>
            <th name="password">Password</th>
            <th name="usertype">User Type</th>
            <th name="operations">Operations</th>
        </tr>
    </thead>
    <tbody>                   
            <?php

            $query = "SELECT * FROM users ";
            $databaseConnection = new DatabaseConnection();
            $conn = $databaseConnection->startConnection();
            $stmt = $conn->prepare($query);
            $stmt->execute();


            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

                 foreach ($rows as $row) {
                 $id = $row['id'];
                 $username = $row['username'];
                 $email = $row['email'];
                 $number = $row['number'];
                 $password = $row['password'];
                 $usertype = $row['usertype'];
                 
                 echo '<tr>
                    <td>'.$id.'</td>
                    <td>'.$username.'</td>
                    <td>'.$email.'</td>
                    <td>'.$number.'</td>
                    <td>'.$password.'</td>
                    <td>'.$usertype.'</td>  
                    <td>
                     <button><a href="edit.php?editid='.$id.'">Edit</a></button>
                     <button><a href="delete.php?deleteid='.$id.'">Delete</a></button>
                    </td>
                    </tr>';
                 }

            ?>


    </tbody>
</table>
    </div>

</body>
</html>