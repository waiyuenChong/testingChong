<!DOCTYPE html>
<html>
    <body>
            <h1>邮件验证</h1>
            <br> 
            <div style="padding: 20px">
            <b><?= $name ?>，亲</b>
            <br> 
            <p>以下是你的邮件验证链接</p>
            <a href="<?= $link ?>"><?= $link ?></a>
            <?php include 'footer.php'?>
    </body>
</html>
