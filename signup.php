<?php
    require 'include/common.php';
    if(isset($_SESSION['email'])){
        header('location:products.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>SignUp | Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" >
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="index.css" type="text/css">
    </head>
    <body>
        <?php include 'include/header.php'; ?>
        <div class="container">
            <div class="panel panel-default myPanel">
                <div class="panel-heading">
                    <h3>Sign Up</h3>
                </div>
                <div class="panel-body">
                    <form action="signup_script.php" method="post">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="E-mail" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="contact" placeholder="Contact" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="city" placeholder="City" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="address" placeholder="Address" class="form-control">
                        </div>
                        <input type="submit" value="Create Account" class="btn btn-primary">
                        <span class="signup_err"><?php if(isset($_SESSION['signup_error'])){ echo "*".$_SESSION['signup_error'];} ?></span>
                    </form>
                </div>
            </div>
        </div>
     
        <?php include 'include/footer.php'; ?>
    </body>
</html>
