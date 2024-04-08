<?php
include('../header/header.php');

if (isset($_SESSION['id']))
{?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./admin.css"/>
        <title>Admin</title>
    </head>
    <body>
        <h1>Welcome to the Admin page </h1>
        <h3>You did it</h3>
    </body>
    </html><?php
}
else {
    header('location: ../treatment/error_no-permission.php');
}