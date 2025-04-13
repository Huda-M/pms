<?php
function validateRequired($value, $field)
{
    return empty($value) ? $field . " is required" : null;
}
function validateEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) ? null : "invalide email";
}
function validatePassword($password)
{
    if (strlen($password) < 6) {
        return "Password must be 6 char";
    }
    if (!preg_match("/[A-Z]/", $password)) {
        return "Password must contain uppercase";
    }
    if (!preg_match("/[a-z]/", $password)) {
        return "Password must contain lowercase";
    }
    if (!preg_match("/[0-9]/", $password)) {
        return "Password must contain number";
    }
    return null;
}
function validatePasswordMatch($password, $pass)
{
    return $password === $pass ? null : "Password do not match";
}
function validatecontact($name, $email, $message)
{
    $fields = [
        'name' => $name,
        'email' => $email,
        'message' =>$message,
    ];
    foreach ($fields as $fieldname => $value) {
        if ($error=validateRequired($value, $fieldname)) {
            return $error;
        }
    }
    if ($error=validateEmail($email)) {
        return $error;
    }
    return null;
}
function validateproduct($product, $price, $details)
{
    $fields = [
        'product' => $product,
        'price' => $price,
        'details' =>$details,
    ];
    foreach ($fields as $fieldname => $value) {
        if ($error=validateRequired($value, $fieldname)) {
            return $error;
        }
    }
    return null;
}
function validatecheckout($name, $email, $address,$phone,$notes)
{
    $fields = [
        'name' => $name,
        'email' => $email,
        'address' => $address,
        'phone' => $phone,
        'note' => $notes
    ];
    foreach ($fields as $fieldname => $value) {
        if ($error=validateRequired($value, $fieldname)) {
            return $error;
        }
    }
    if ($error=validateEmail($email)) {
        return $error;
    }
    return null;
}
function validateuser($Name, $Email, $password, $pass)
{
    $fields = [
        'Name' => $Name,
        'Email' => $Email,
        'password' =>$password,
        'pass' =>$pass,
    ];
    foreach ($fields as $fieldname => $value) {
        if ($error=validateRequired($value, $fieldname)) {
            return $error;
        }
    }
    if ($error=validateEmail($Email)) {
        return $error;
    }
    if ($error = validatePassword($password)) {
        return $error;
    }

    if ($error = validatePasswordMatch($password, $pass)) {
        return $error;
    }
    return null;
}
function validateLogin($Email, $password)
{
    $fields = [
        'Email' => $Email,
        'password' => $password,
    ];

    foreach ($fields as $fieldName => $value) {
        if ($error = validateRequired($value, $fieldName)) {
            return $error;
        }
    }

    if ($error = validateEmail($Email)) {
        return $error;
    }

    return null;
}
