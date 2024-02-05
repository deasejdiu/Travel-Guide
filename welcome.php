<?php
$user = 'admin';
$password = 'admin123';
session_start();

if (isset($_SESSION['user'])) {
    echo "<h1>You are logged in as: " . $_SESSION['user'] . "</h1><br>";
    echo "<a href='dashboard.php'> Dashboard</a><br>";
    echo "<a href='logout.php'>Logout</a>";
} else {
    if ($_POST['user'] == $user && $_POST['psw'] == $password) {
        $_SESSION['user'] = $user;
        echo "<script>location.href='welcome.php'</script>";
    } else {
        echo "<script>alert('Username or password is incorrect!')</script>";
        echo "<script>location.href='home.php'</script>";
    }
}
?>
