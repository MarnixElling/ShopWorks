<?php
require('../config/shopping_cart.php');

if(isset($_POST['title'])){
    $title = $_POST['title'];

    $sql = "DELETE FROM `cart` WHERE `name` = $title LIMIT 1";
    $conn->query($sql);
}
?>