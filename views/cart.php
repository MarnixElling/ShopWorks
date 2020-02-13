<main>
    <section>
        <table>
            <tr><td>Name</td><td>Price</td><td>Amount</td><td></td>Total</row>
<?php
require('config/shopping_cart.php');
$sql = "SELECT `name`, `price`, count(*) as 'amount' FROM `cart` GROUP BY `name`, `price`";
$result = $conn->query($sql);
foreach($result as $row){
    echo "<tr><td>".$row['name']."</td><td>".$row['price']."</td><td>".$row['amount']."</td><td></td></row>";
}
    ?>
        <?php
        $sql = "SELECT sum(`price`) as 'total' FROM `cart`";
        $result = $conn->query($sql);
        foreach($result as $row){
            echo "<tr><td></td><td></td><td></td><td>".$row['total']."</td></row>";
        }
        ?>
        </table>
    </section>
</main>