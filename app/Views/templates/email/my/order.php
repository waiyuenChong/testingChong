<!DOCTYPE html>
<html>
    <body>
            <h1>重置密码</h1>
            <br> 
            <div style="padding: 20px">
            <b><?= $name ?>，亲</b>
            <br> 
            <p>以下是你购买的东西</p>
            <table>
            <tr>
                <th>NO</th>
                <th>产品</th>
                <th>价钱</th>
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
