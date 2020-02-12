<?php
if(isset($_GET['v'])){
    $url=$_GET['v'];
    switch($url){
        case 'products':
            include('views/product.php');
            echo "test";
            break;
        case 'cart':
            include('views/cart.php');
            break;
        default:
            include('views/home.php');
            break;
    }
}