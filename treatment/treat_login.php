<?php
session_start();

if (isset($_POST['id']) && isset($_POST['password']))
{
    $file_name = './users.csv';
    $file = fopen($file_name, 'r');

    if ($file)
    {
        while (($line = fgetcsv($file)) == TRUE)
        {
            if ($line[0] === $_POST['id'])
            {
                if (password_verify($_POST['password'], $line[1]))
                {
                    $_SESSION['id'] = $_POST['id'];
                    $_SESSION['admin'] = true;
                    $_SESSION['password'] = $line[1];
                    fclose($file);
                    
                    header('location: ../pages/admin.php');
                    exit();
                }
                else {
                    header('location: ./error_password.php');
                }
            }
            else {
                header('location: ./error_id.php');
            }
        }
        fclose($file);
    }
    else {
        header('location: ./error_file.php');
    }
}