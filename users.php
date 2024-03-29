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
<style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        #sidebar {
            width: 250px;
            height: 100%;
            background-color: #af4c82;
            color: #fff;
            padding-top: 20px;
            position: fixed;
        }

        #sidebar a {
            padding: 10px;
            text-decoration: none;
            color: #fff;
            display: block;
            transition: 0.3s;
        }

        #sidebar a:hover {
            background-color: #af4c82;
        }

        #content {
            margin-left: 250px;
            padding: 16px;
        }

        h2 {
            color: #af4c82;
            text-align: center;
        }
        table {
             width: 100%;
             border-collapse: collapse;
             margin-top: 20px;
            } 

        th, td {
             border: 1px solid #dddddd;
             text-align: left;
             padding: 12px;
            }

        th {
            background-color: #af4c82;
            }

        tbody tr:hover {
             background-color: #f5f5f5;
            }
            p{
            color: whitesmoke;
            text-align: center;
            display: flex;
            position: absolute;
            bottom: 0;
            left: 0;
            margin-bottom: 90px;
            padding: 10px;
        }   
        .back{
            position: absolute;
            bottom: 0;
            left: 0;
            margin-bottom: 40px; 
            margin-left: 70px; 
        } 
        a{
            text-decoration: none;
            color: black;
        }
        button{
           justify-content: flex-start;
           cursor:grab;
           font-size: 15px;
           padding:10px 30px;
           border-radius: 10px;
           text-decoration: none;
           background-color:#af4c82;
           align-items: center;
}
        button:hover{
         background: rgba(215, 189, 226);
        }   
    </style>
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
try {
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
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>



    </tbody>
</table>
    </div>

</body>
</html>