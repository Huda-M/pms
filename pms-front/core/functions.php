<?php

function setMessage($type, $message){
    $_SESSION['message'] = [
        'type' => $type,
        'text' =>$message
    ];
}
function showMessage(){
    if (isset($_SESSION['message'])) {
        $type = $_SESSION['message']['type'];
        $text= $_SESSION['message']['text'];
        echo "<div class='alert alert-$type'>$text</div>";
        unset($_SESSION['message']);
    }
}
$cartJsonfile = realpath(__DIR__ . "/../data/cart.json");
function addToCart($Pname, $Price, $Quantity) {
    $cartFile = $GLOBALS['cartJsonfile'];
    $cart =file_exists($cartFile) ?json_decode(file_get_contents($cartFile, true)) : [];
    $newId = empty($cart) ? 1 : max(array_column($cart, 'id')) + 1;
    $cart[] = [
        'id' => $newId,
        'Product' => $Pname,
        'Price' => $Price,
        'Quantity' => $Quantity,
        'Total' => $Price * $Quantity
    ];
    file_put_contents($cartFile, json_encode($cart, JSON_PRETTY_PRINT));
    return true;
}

function updateQuantity($id, $newQuantity) {
    $cartFile = $GLOBALS['cartJsonfile'];
    $cart = file_exists($cartFile) ? json_decode(file_get_contents($cartFile), true) : [];

    if (empty($cart)) {
        return false;
    }

    $found = false;
    foreach ($cart as &$item) {
        if ($item['id'] == $id) {
            $item['Quantity'] = $newQuantity;
            $item['Total'] = $item['Price'] * $newQuantity; // Update total
            $found = true;
            break;
        }
    }

    if (!$found) {
        return false;
    }

    file_put_contents($cartFile, json_encode($cart, JSON_PRETTY_PRINT));
    return true;
}







function deleteitem($id) {
    $cartFile = $GLOBALS['cartJsonfile'];
    
    if (!file_exists($cartFile)) return false;
    
    $cartItems = json_decode(file_get_contents($cartFile), true);
    if (!is_array($cartItems)) return false;
    
    $found = false;
    foreach ($cartItems as $key => $item) {
        if ($item['id'] == $id) {
            unset($cartItems[$key]);
            $found = true;
            break; // إيقاف البحث بعد العثور على العنصر
        }
    }
    
    if ($found) {
        // إعادة ترتيب المفاتيح وحفظ الملف مرة واحدة
        $cartItems = array_values($cartItems);
        file_put_contents($cartFile, json_encode($cartItems, JSON_PRETTY_PRINT));
        return true;
    }
    
    return false;
}
function getProduct() 
{
    $cartFile = $GLOBALS['cartJsonfile'];
    if (!file_exists($cartFile)) {
        return [];
    }
    $data = json_decode(file_get_contents($cartFile), true); 
    return is_array($data) ? $data : [];
}
function getProductCount() {
    $cartFile = $GLOBALS['cartJsonfile'] ?? null; 
    if (!$cartFile || !file_exists($cartFile)) {
        return 0; 
    }
    
    $jsonData = file_get_contents($cartFile);
    if ($jsonData === false) {
        return 0; }
    
    $data = json_decode($jsonData, true);
    if ($data === null) {
        return 0; 
    }
    
    return count($data); 
}
$userJsonfile = realpath(__DIR__ . "/../data/user.json");
function Adduser($Name, $Email, $password){
    $users = file_exists($GLOBALS['userJsonfile']) ? json_decode(file_get_contents($GLOBALS['userJsonfile'], true)) : [];
    if(!is_array($users)){
        $users = [];
    }
    $hashedPassword = password_hash($password,PASSWORD_DEFAULT);
    $newId = empty($users) ? 1 : max(array_column($users,'id')) + 1;
    $empdata = [
        'id' => $newId,
        'Name' => $Name,
        'Email' => $Email,
        'password' => $hashedPassword,
    ];
    $users[] = $empdata;
    file_put_contents($GLOBALS['userJsonfile'], json_encode($users, JSON_PRETTY_PRINT));
    $_SESSION['user'] = [
        'Name' => $Name,
        'Email' => $Email
    ];
    return true;
}
function loginUser($Email,$password){
    $usersJson = $GLOBALS['userJsonfile'];
    $users = file_exists($usersJson) ? json_decode(file_get_contents($usersJson), true) : [];
    if(!is_array($users)){
        $users = [];
    }
    foreach($users as $user){
        if($user['Email'] == $Email && password_verify($password,$user['password'])){
            $_SESSION['user'] = [
                'Name' => $user['Name'],
                'Email' =>  $user['Email']
            ];
            return true;
        }
    }
    return false;
}
$usersContactJsonfile = realpath(__DIR__ . "/../data/contacts.json");
function AddContact($name, $email, $message){
    $Contact = file_exists($GLOBALS['usersContactJsonfile']) ? json_decode(file_get_contents($GLOBALS['usersContactJsonfile'], true)) : [];
    $newId = empty($Contact) ? 1 : max(array_column($Contact,'id')) + 1;
    $empdata = [
        'id'=>$newId,
        'name' => $name,
        'email' => $email,
        'message' => $message
    ];

    $Contact[] = $empdata;
    file_put_contents($GLOBALS['usersContactJsonfile'], json_encode($Contact, JSON_PRETTY_PRINT));
    return true;
}
$productJsonfile = realpath(__DIR__ . "/../data/products.json");
function Addproduct($product, $price, $details){
    $products = file_exists($GLOBALS['productJsonfile']) ? json_decode(file_get_contents($GLOBALS['productJsonfile'], true)) : [];
    $newId = empty($products) ? 1 : max(array_column($products,'id')) + 1;
    $empdata = [
        'id'=>$newId,
        'name' => $product,
        'price' => $price,
        'details' => $details,
    ];

    $products[] = $empdata;
    file_put_contents($GLOBALS['productJsonfile'], json_encode($products, JSON_PRETTY_PRINT));
    return true;
}
$ckechoutJsonfile = realpath(__DIR__ . "/../data/checkout.json");
function Addcheckout($name, $email, $address,$phone,$notes){
    $checkout = file_exists($GLOBALS['ckechoutJsonfile']) ? json_decode(file_get_contents($GLOBALS['ckechoutJsonfile'], true)) : [];
    $newId = empty($checkout) ? 1 : max(array_column($checkout,'id')) + 1;
    $checkdata = [
        'id'=>$newId,
        'name' => $name,
        'email' => $email,
        'address' => $address,
        'phone' => $phone,
        'note' => $notes
    ];

    $checkout[] = $checkdata;
    file_put_contents($GLOBALS['ckechoutJsonfile'], json_encode($checkout, JSON_PRETTY_PRINT));
    return true;
}

?>
