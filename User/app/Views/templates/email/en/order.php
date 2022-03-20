<!DOCTYPE html>
<html>
    <body>
            <h1>Order</h1>
            <br> 
            <div style="padding: 20px">
            <b>Dear <?= $name ?></b>
            <br> 
            <p>Below are your order</p>
            <table>
            <tr>
                <th>NO</th>
                <th>Product</th>
                <th>Price</th>
            </tr>
            <tr>
                <th>1</th>
                <th><?= $product ?></th>
                <th><?= $price ?></th>
            </tr>
            </table>
            <?php include 'footer.php'?>
    </body>
</html>
