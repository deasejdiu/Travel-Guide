<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            margin: 0;
            padding: 0; 
            background-image: url('signin.jpg');
            background-size: cover;
            background-position: center; 
            background-repeat: no-repeat; 
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
<?php

if(isset($_GET['loginError']) && $_GET['loginError']){
?>
    <div class="forminputerror" id="usernameError">
        <?php echo $_GET['loginError']; ?>
    </div>
<?php
}
?>

    <form id="registrationForm" onsubmit="validateRegisterForm(); return false;">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="surname">Surname:</label>
        <input type="text" id="surname" name="surname" required>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" id="submitButton">Submit</button>

    </form>

    <script>
        function validateRegisterForm() {
            var nameRegex = /^[A-Z][a-z]*$/;
            var surnameRegex = /^[A-Z][a-z]*$/;
            var usernameRegex = /^.{8,15}$/;
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var passwordRegex = /^[A-Z].*[0-9]{3}$/;

            var name = document.getElementById('name');
            var surname = document.getElementById('surname');
            var username = document.getElementById('username');
            var email = document.getElementById('email');
            var password = document.getElementById('password');

            var error = '';

            if (!nameRegex.test(name.value)) {
                error += 'Emri duhet te filloj me shkronje te madhe dhe duhet te permbaj vetem shkronja.\n';
            }

            if (!surnameRegex.test(surname.value)) {
                error += 'Mbiemri duhet te filloj me shkronje te madhe dhe te permbaj vetem shkronja.\n';
            }

            if (!usernameRegex.test(username.value)) {
                error += 'Username duhet te permbaj 8 deri 15 karaktere.\n';
            }

            if (!emailRegex.test(email.value)) {
                error += 'Emaili eshte jo valid.\n';
            }

            if (!passwordRegex.test(password.value)) {
                error += 'Passwordi duhet te filloj me shkronje te madhe dhe te perfundoj me 3 numra.\n';
            }

            if (error !== '') {
                alert('Validation Error:\n' + error);
            } else {
                alert('Kerkesa u pranua me sukses!');
            }
        }

        window.addEventListener('load', function() {
            document.getElementById('registrationForm').addEventListener('submit', function(event) {
                event.preventDefault();
                validateRegisterForm();
            });
        });
    </script>
</body>
</html>
