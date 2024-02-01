<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.html">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form id="registrationForm" onsubmit="validateForm(); return false;">
        
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <?php 
                        if(isset($_GET['loginError']) && $_GET['loginError']){
                            ?>
                            
                            <div class="forminputerror" id="usernameError">
                                <?php echo $_GET['loginError']; ?>

                            </div>
                            
                            <?php
                        }
                    ?>

        <button type="submit" onclick="validateForm()">Submit</button>
    </form>
</body>
</html>