<?php
session_start();
include_once "../core/validations.php";
include_once "../core/functions.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $product = $_POST['product'];
        $price = $_POST['price'];
        $details = $_POST['details'];
        $error=validateproduct($product, $price, $details);
        if (!empty($error)) {
            setMessage('danger',$error);
            header("location:../product.php");
            exit;
        }
        if (Addproduct($product, $price, $details)) {
            setMessage('success', "product added successfully");
            header("location:../product.php");
            exit;
        }
        else {
            setMessage('danger','failed to add product');
            header("location:../product.php");
            exit;
        }
    }