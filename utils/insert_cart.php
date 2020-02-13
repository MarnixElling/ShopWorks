<?php
require('../config/shopping_cart.php');

if(isset($_POST['title'])&&isset($_POST['value'])){
    $title = $_POST['title'];
    $value = $_POST['value'];

    $sql = "INSERT INTO `cart` (`name`, `price`) VALUES ($title, $value)";
    $conn->query($sql);
}
?>