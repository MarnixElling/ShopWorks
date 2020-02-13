<?php
require('../config/shopping_cart.php');

if(isset($_POST['title'])&&isset($_POST['value'])){
    $title = $_POST['title'];
    $value = $_POST['value'];

    $sql = "DELETE FROM `cart` WHERE `name` = '$title' AND `price` = '$value' LIMIT 1";
    var_dump($conn->query($sql));
    http_response_code(200); 
}else{  
    http_response_code(400); 
}
?>