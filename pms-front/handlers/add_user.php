<?php
session_start();
include_once "../core/validations.php";
include_once "../core/functions.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $password = $_POST['password'];
        $pass = $_POST['pass'];
        $error=validateuser($Name, $Email, $password, $pass);
        if (!empty($error)) {
            setMessage('danger',$error);
            header("location:../register.php");
            exit;
        }
        if (Adduser($Name, $Email, $password)) {
            setMessage('success', "logged in successfully");
            header("location:../index.php");
            exit;
        }
        else {
            setMessage('danger','failed to log in product');
            header("location:../register.php");
            exit;
        }
    }