<?php
session_start();
include_once "../core/validations.php";
include_once "../core/functions.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $error=validatecontact($name, $email, $message);
        if (!empty($error)) {
            setMessage('danger',$error);
            header("location:../contact.php");
            exit;
        }
        if (AddContact($name, $email, $message)) {
            setMessage('success', "review added successfully");
            header("location:../contact.php");
            exit;
        }
        else {
            setMessage('danger','failed to add review');
            header("location:../contact.php");
            exit;
        }
    }