<?php
session_start();
include_once "../core/validations.php";
include_once "../core/functions.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $notes = $_POST['notes'];
        $error=validatecheckout($name, $email, $address,$phone,$notes);
        if (!empty($error)) {
            setMessage('danger',$error);
            header("location:../checkout.php");
            exit;
        }
        if (Addcheckout($name, $email, $address,$phone,$notes)) {
            setMessage('success', "note added successfully");
            header("location:../checkout.php");
            exit;
        }
        else {
            setMessage('danger','failed to add note');
            header("location:../checkout.php");
            exit;
        }
    }