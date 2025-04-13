<?php
session_start();
include_once "../core/functions.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استقبال البيانات مباشرة من النموذج
    $Pname = $_POST['Pname'] ?? '';
    $Price = (float)($_POST['Price'] ?? 0);
    $Quantity = 1; // كمية افتراضية

    if (!empty($Pname) && $Price > 0) {
        if (addToCart($Pname, $Price, $Quantity)) {
            setMessage('success', "Item added successfully");
        } else {
            setMessage('danger', 'Failed to add item');
        }
    } else {
        setMessage('danger', 'Invalid product data');
    }
    
    header("Location: ../index.php");
    exit;
}
?>