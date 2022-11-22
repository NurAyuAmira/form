<?php include_once ("controller.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="css/forgot.css">
</head>
<body>
<div id="container">
        <h2>Reset Password</h2>
        <p>It's quick and easy.</p>
        <div id="line"></div>
        <form action="resetPassword.php" method="POST" autocomplete="off">
        <?php
            if(isset($_SESSION['message'])){
                ?>
                <div id="alert"><?php echo $_SESSION['message']; ?></div>
                <?php
            }
            ?>
            <?php
            if ($errors > 0) {
                foreach ($errors as $displayErrors) {
            ?>
                    <div id="alert"><?php echo $displayErrors; ?></div>
            <?php
                }
            }
            ?>
            <input type="password" name="oldPassword" placeholder="Old Password" required><br>
            <input type="password" name="newPassword" placeholder="New Password" required><br>
            <input type="password" name="confirmPassword" placeholder="Confirm Password" required><br>
            <input type="submit" name="resetPassword" value="Change">
        </form>
    </div>
</body>
</html>