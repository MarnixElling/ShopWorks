<main>
    <script>
        function add_to_cart_raw(name, price){
        $.ajax(
            {
                url: "utils/insert_cart.php", 
                type : 'POST',
                data: {title: name, value:price},
                success: function(result){
                console.log(result);
                location.reload();
            }
        });
        }

        function remove_from_cart(name, price){
        $.ajax(
            {
                url: "utils/delete_cart.php", 
                type : 'POST',
                data: {title: name, value:price},
                success: function(result){
                console.log(result);
                location.reload();
            }
        });
  }
    </script>
    <section>
        <table>
            <tr><td>Name</td><td>Price</td><td>Amount</td><td>Total</td></row>
<?php
require('config/shopping_cart.php');
$sql = "SELECT `name`, `price`, count(*) as 'amount' FROM `cart` GROUP BY `name`, `price`";
$result = $conn->query($sql);
foreach($result as $row){
    echo "<tr>
            <td>".$row['name']."</td>
            <td>".$row['price']."</td>
            <td>
                <div class='add_remove' onclick='add_to_cart_raw(\"".$row['name']."\",\"".$row['price']."\")'>+</div>"
                .$row['amount'].
                "<div class='add_remove' onclick='remove_from_cart(\"".$row['name']."\",\"".$row['price']."\")'>-</div>
            </td>
            <td></td>
        </row>";
}
    ?>
        <?php
        $sql = "SELECT sum(`price`) as 'total' FROM `cart`";
        $result = $conn->query($sql);
        foreach($result as $row){
            echo "<tr>
                    <td></td>
                    <td></td>
                    <td></td>
                <td>".$row['total']."</td></row>";
        }
        ?>
        </table>
        <div class="buy">
            <button>Buy</button>
        </div>
    </section>
</main>