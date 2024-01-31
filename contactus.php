<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="flights.css">
</head>
<body>
<div class="rresht">
    <form action="">
        <div class="inputBox">
            <input type="text" class="emri" id="nameInput" placeholder="Name" name="name" required>
            <input type="email" class="email" id="emailInput" placeholder="E-mail"  name="email" required>
        </div>
        <div class="inputBox">
            <input type="text" placeholder="subject">
        </div>
        <textarea id="messageInput" placeholder="Message Us" name="message" required id="" cols="30" rows="10"></textarea>
        <input type="submit" class="button" value="send message">
        
    </form>
</div>
<script>
        function validateEmail(email) {
            var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            return emailRegex.test(email);
        }

        function validateAndSubmit() {
            var nameInput = document.getElementById("nameInput").value;
            var emailInput = document.getElementById("emailInput");
            var messageInput = document.getElementById("messageInput").value;
            var emailError = document.getElementById("emailError");
            var messageError = document.getElementById("messageError");


            if (nameInput.trim() === "") {
                alert("Name is required!");
                return;
            }

            if (!validateEmail(emailInput.value)) {
                emailError.textContent = "Please enter a valid email address.";
                emailInput.style.borderColor = "red";
            } else {
                emailError.textContent = "";
                emailInput.style.borderColor = "";

                if (messageInput.trim() === "") {
                    messageError.textContent = "Message is required.";
                    document.getElementById("messageInput").style.borderColor = "red";
                    return;
                } else {
                    messageError.textContent = "";
                    document.getElementById("messageInput").style.borderColor = "";
                }

                alert("Message sent successfully!");
            }
        }
    </script>
</body>
</html>