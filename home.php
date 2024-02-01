<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DD Travel</title>
    
    <link rel="stylesheet" href = "style.css">
</head>
<body>
    
        <header class="homi">

            
            <div class="midis">

                <img src="logoddtravel.jpg" alt=""  style="height: auto;width: 60px; margin-right: 10px;" >
                <br>
                    <a href="vendet.html"><button>Vendet</button></a>
                    <a href="flights.html" style=><button>Fluturimet</button></a>
                    <a href="book.html" style="color: aliceblue"><button>Rezervo</button></a>
                    
                    <br>
                </div>
            <div class="qysh">
                <a href="contactus.html"style="color: aliceblue"><button>Contact Us</button></a>
            </div>
            
        </header>

            <form id="loginForm" method="post" action="welcome.php">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
        
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <div class="login-register">
                    <p>Don't have an account?</p>
                    <a href="sign-in.html">Register</a>
                </div>
        
                <button type="submit" id="submitButton">Submit</button>
            </form>
</body>
        
            <script>
                function validateLoginForm() {
                    var usernameRegex = /^.{8,15}$/;
                    var passwordRegex = /^[A-Z].*[0-9]{3}$/;
        
                    var username = document.getElementById('username');
                    var password = document.getElementById('password');
        
                    var error = '';
        
                    if (!usernameRegex.test(username.value)) {
                        error += 'Username duhet te permbaj 8 deri 15 karaktere.\n';
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
                    var loginForm = document.getElementById('loginForm');
        
                    if (loginForm) {
                        loginForm.addEventListener('submit', function(event) {
                            event.preventDefault();
                            validateLoginForm();
                        });
                    }
                });
            </script>
</html>