<?php
include_once "../core/functions.php";

if($_SERVER["REQUEST_METHOD"] !== "POST" || !isset($_POST['id']) || empty($_POST['id'])){
    setMessage('danger',"Invalid request");
    header('Location: ../cart.php');
    exit;
}


$id = (int)$_POST['id'];

if(deleteitem($id)){
    setMessage('success', "item deleted sucessfully");
    header("Location: ../cart.php");
    exit;
}else{
    setMessage('danger',"Fail deleted item");
    header("Location: ../cart.php");
    exit;
}