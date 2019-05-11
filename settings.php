<?php
    require 'include/common.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');   
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store | Setting</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <?php include 'include/header.php'; ?>
        <div class="container">
            <div class="panel panel-primary myPanel">
                <div class="panel-heading"> <h4>Change Password</h4></div>
                <div class="panel-body">
                    <form action="setting_script.php" method="post">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Old Password" name="passwordOld" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="New Password" name="passwordNew1" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirm Password" name="passwordNew2" required>
                        </div>
                        <span style='color:red;'>*<?php if(isset($_SESSION['pass_error'])){ echo $_SESSION['pass_error']; } ?></span>
                        <div class=" buttonRight">
                            <input type="submit" name="summit" value="Change" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        
        <?php
            if(isset($_SESSION['pass_change_success'])){ 
        ?>
            <div class="message-pass-change">
        <?php
            echo "Your Password was Successfully Changed";
            }
        ?>
        </div>
        <?php include 'include/footer.php'; ?>
    </body>
</html>
