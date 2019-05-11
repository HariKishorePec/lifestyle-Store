<?php
    require 'include/common.php';
    if(isset($_SESSION['email'])){
        header('location:products.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login | Lifestyle Store</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/jquery-3.3.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="index.css">
</head>
<body>

<?php include 'include/header.php'; ?>
<div class="container">
    <div class="panel panel-primary myPanel">
        <div class="panel-heading">
            <h4>LOGIN</h4>
        </div>
        <div class="panel-body">
            <p class="text-warning">Login to make a purchase</p>
            <form action="login_submit.php" method="post">
                <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" placeholder="Password" name="pass" required>
                </div> 
                <button id="submit_btn" type="submit" class="btn btn-primary" name="submit" value="submit" onclick="fn()"> Login </button>
                <span class="signin_err"><?php if(isset($_SESSION['login_error'])){ echo "*".$_SESSION['login_error'];} ?></span>
            </form>
        </div>

        <div class="panel-footer">
            Don't have an account? <a href="signup.php"> Register </a>
        </div>
    </div>
   
            <?php if(isset($_SESSION['reg_succ'])) { ?>
                <div class="message-reg" id="msg1">
            <?php echo "Successfully Registered. Please login.";
                }
                $_SESSION['reg_succ']=NULL;
                $_SESSION['login_error']=NULL;
            ?>
                </div>
</div>

<?php include 'include/footer.php'; ?>
<script type="text/javascript">
    function fn(){
        document.getElementById("msg1").style.display="none";
       
</script>

</body>
</html>