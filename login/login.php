<?php
include('../header/header.php');

if(empty($_SESSION['id'])){?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="./login.css"/>
            <title>Login</title>
        </head>
        <body>
            <div class="container">
                <h2>Login</h2>
                <form action="../treatment/treat_login.php" method="POST">
                    <input type="text" placeholder="ID" id="id" name="id" required>
                    <input type="password" placeholder="Password" id="password" name="password" required>
                    <input type="submit" value="Let's connect">
                </form>
                <p>You do not have an account ?</p>
                <a href="../register/register.php">Register now</a>
            </div>
        </body>
    </html><?php
}
else {
    header('location: ../index.php');
}
?>