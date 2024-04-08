<?php
include('../header/header.php');
if(empty($_SESSION['id']))
{?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Register</title>
            <link rel="stylesheet" href="./register.css">
        </head>
        <body>
            <div class="container">
                <h2>Register</h2>
                <form action="../treatment/treat_register.php" method="POST">
                    <input type="text" placeholder="ID" id="id" name="id" required>
                    <input type="password" placeholder="Password" id="password" name="password" required>
                    <input type="submit" value="Register">
                </form>
                <p>You have an account ?</p>
                <a href="../login/login.php">Let's connect</a>
            </div>
        </body>
    </html>
<?php
} else {
    header('location: ../index.php');
}?>