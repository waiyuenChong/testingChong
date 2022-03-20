<!DOCTYPE html>
<html>
    <body>
            <h1>Email Verify</h1>
            <br> 
            <div style="padding: 20px">
            <b>Dear <?= $name ?></b>
            <br> 
            <p>Below are your email verify link</p>
            <a href="<?= $link ?>"><?= $link ?></a>
            <?php include 'footer.php'?>
    </body>
</html>
