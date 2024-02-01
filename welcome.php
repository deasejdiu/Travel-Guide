<?php
$user = 'admin';
$password = 'admin123';
session_start();

if(isset($_SESSION['user'])){
    echo "<h1>You are login as an: ".$_SESSION['user']."</h1><br>"
    echo "<a href='dashboard.php'> Dashboard</a><br>";
    echo ",br><a href='logout.php'>logout</a>"; 
}
else{
    if($_POST['user']==$user && $_POST['psw']==$password){
        $_SESSION['user'] = $user;
        echo "<script>location.href='welcome.php'</script>";
    }else{
        echo "<script>alert('perdoruesi ose fjalkalimi eshte gabim!')</script>";
        echo "<script>location.href='index.php'</script>";
    }
}
?>