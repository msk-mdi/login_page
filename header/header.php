<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../header/header.css">
        <title>Header</title>
    </head>
    <body>
        <header>
            <nav>
                <a href="../index.php">Home</a><?php
                if (isset($_SESSION["id"]))
                {
                    if ($_SESSION['id'] == 'admin')
                    {?>
                        <a href="../pages/admin.php">Admin</a><?php
                    }?>
                    
                    <a href="../login/disconnect.php">Logout</a><?php
                }
                else
                {?>
                    <a href="../login/login.php">Login</a>
                    <a href="../register/register.php">Register</a><?php
                }?>
            </nav>
        </header>
    </body>
</html>