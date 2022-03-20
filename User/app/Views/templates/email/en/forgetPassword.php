<!DOCTYPE html>
<html>
    <body>
            <h1>Forget Password</h1>
            <br> 
            <div style="padding: 20px">
            <b>Dear <?= $name ?></b>
            <br> 
            <p>You had been apply to reset password for your Bentoree account.</p>
            <p> Below is your temporary password.</p>
            <p>    
                <b><?= $new_password ?></b>
            </p>
            <?php include 'footer.php'?>
    </body>
</html>
