<?php
session_start();
include_once "../core/validations.php";
include_once "../core/functions.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Email = $_POST['Email'];
    $password = trim($_POST['password']);
    $error = validateLogin($Email, $password);
    if(!empty($error)){
        setMessage('danger',$error);
        header("Location: ../login.php");
        exit;
    }    
    if(loginUser($Email, $password)){
        setMessage('success', "Login sucessfully");
        header("Location: ../index.php");
        exit;
    }else{
        setMessage('danger',"Invaild email or password");
        header("Location: ../login.php");
        exit;
    }
}