<?php
session_start();

if (isset($_POST['id']) && isset($_POST['password']))
{
    $min_password = '4';
    $max_password = '512';

    $expression_password = '/^[a-zA-Z0-9._-]{'.$min_password.','.$max_password.'}$/';
    $password = $_POST['password'];
    $_SESSION['password'] = $password;

    if (preg_match($expression_password, $password))
    {
        $file_name = './users.csv';
        $file = fopen($file_name, 'a');
    
        $password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
        fputcsv($file, [$_POST['id'], $password_hash]);
        fclose($file);
        $_SESSION['id'] = $_POST['id'];
        header('location: ../pages/admin.php');
    }

    else if (preg_match($expression_password, $password) !== TRUE)
    {
        header('location: ./error_password.php');
    }

    else
    {
        header('location: ../register/register.php');
        exit();
    }
}