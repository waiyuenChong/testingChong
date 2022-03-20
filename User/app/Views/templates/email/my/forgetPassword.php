<!DOCTYPE html>
<html>
    <body>
            <h1>重置密码</h1>
            <br> 
            <div style="padding: 20px">
            <b><?= $name ?>，亲</b>
            <br> 
            <p>你已经申请重置密码</p>
            <p>以下是你的临时密码</p>
            <p>    
                <b><?= $new_password ?></b>
            </p>
            <?php include 'footer.php'?>
    </body>
</html>
