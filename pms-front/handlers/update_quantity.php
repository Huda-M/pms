<?php
session_start();
include_once "../core/functions.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $quantity = $_POST['quantity']; // Corrected variable name

    // Validate quantity
    if (!is_numeric($quantity) || $quantity < 1) {
        setMessage('danger', 'Invalid quantity');
        header("Location: ../cart.php");
        exit;
    }

    if (updateQuantity($id, $quantity)) {
        setMessage('success', "Quantity updated successfully");
    } else {
        setMessage('danger', "Failed to update quantity");
    }
    
    header("Location: ../cart.php");
    exit;
}
?>