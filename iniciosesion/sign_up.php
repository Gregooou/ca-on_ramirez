<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/sesion.css">
</head>
<body>
    <div class="loginBox">
        <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">
        <h3>Sign in here</h3>
        <form action="sesion.php" method="post">
    <div class="inputBox">
        <input class="uname" type="text" name="Username" placeholder="Username" required>
        <input class="pass" type="password" name="Password" placeholder="Password" required> 
        <input class="uname" type="email" name="Email" placeholder="Correo de la UAXMakers" pattern=".+@myuax\.com" required >

    </div>
    <input type="submit" name="" value="Sign-up">
</form>
        <a href="#">Forget Password<br> </a>
    </div>
</body>
<script>
document.querySelector('.email').addEventListener('input', function() {
    var emailInput = this;
    if (emailInput.validity.patternMismatch) {
        emailInput.setCustomValidity('Por favor, introduce una dirección de correo electrónico válida de @myuax.com');
    } else {
        emailInput.setCustomValidity('');
    }
});
</script>
</html>
