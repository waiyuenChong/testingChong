<!DOCTYPE html>
<html>
    <body>
        <?php include 'header.php'?>
        <?php if($status == 1) { ?> 
        <h1>KYC Identity Verification Successful!</h1>
        <br />
            <div style="padding: 20px">
            <b>Dear <?= $name ?></b>
            <br> 
            <p>Congratulations!</p>
            <p>Your <?= $doc ?> has been successfully verified and updated into our system</p>
        
            <?php } else{ ?>
                <h1>KYC Identity Verification Declined!</h1>
        <br />
            <div style="padding: 20px">
            <b>Dear <?= $name ?></b>
            <br> 
            <p>We regret to inform you that your <?= $doc ?> has been declined!</p>
            <p>Please update your information and resubmit relevant documents. Vigrab support will review and proceed with verifying your KYC soon.</p>
            
            <?php } ?>
            <?php include 'footer.php'?>
        </body>
</html>
