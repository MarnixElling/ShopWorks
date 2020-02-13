<?php
require('../config/shopping_cart.php');

if(isset($_POST['title'])&&isset($_POST['value'])){
    $title = $_POST['title'];
    $value = $_POST['value'];

    $sql = "INSERT INTO `cart` (`name`, `price`) VALUES (\"$title\" , \"$value\");";
    $conn->query($sql);
    http_response_code(200); 
}else{  
    http_response_code(400); 
}
?>