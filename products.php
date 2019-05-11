<?php
    require 'include/common.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Products | Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <?php include 'include/header.php'; ?>
        <?php include 'include/check-if-added.php';?>
        <div class="container">
            <div class="jumbotron margin_top">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. 
                No need to hunt around, we have all in one place.</p>
            </div>
            <hr><!-- ========================================== -->
            <div class="row text-center ">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/camera.jpg" alt="camera-1_image">
                        <div class="caption">
                            <h3> Canon EOS </h3>
                            <p> Price: Rs.36000.00</p>
                        </div>
                        <!-- ==================  changing button based on logged in or not====================== -->
                        <?php if(!isset($_SESSION['email'])){ ?>
                            <a href='login.php' class="btn btn-primary btn-block">Buy Now</a>
                        <?php }else if(check_if_added_to_cart(1)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                        }else{ ?>
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php } ?>
                        <!-- ==================  changing button based on logged in or not====================== -->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/camera.jpg" alt="camera-1_image">
                        <div class="caption">
                            <h3> Sony DSLR </h3>
                            <p> Price: Rs.40000.00</p>
                        </div>
                        <?php if(!isset($_SESSION['email'])){ ?>
                            <a href='login.php' class="btn btn-primary btn-block">Buy Now</a>
                        <?php }else if(check_if_added_to_cart(2)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                        }else{ ?>
                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/camera.jpg" alt="camera-1_image">
                        <div class="caption">
                            <h3> Sony DSLR </h3>
                            <p> Price: Rs.50000.00</p>
                        </div>
                        <!-- ==================  changing button based on logged in or not====================== -->
                        <?php if(!isset($_SESSION['email'])){ ?>
                            <a href='login.php' class="btn btn-primary btn-block">Buy Now</a>
                        <?php }else if(check_if_added_to_cart(3)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                        }else{ ?>
                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php } ?>
                        <!-- ==================  changing button based on logged in or not====================== -->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/camera.jpg" alt="camera-1_image">
                        <div class="caption">
                            <h3> Olympus DSLR </h3>
                            <p> Price: Rs.80000.00</p>
                        </div>
                        <!-- ==================  changing button based on logged in or not====================== -->
                        <?php if(!isset($_SESSION['email'])){ ?>
                            <a href='login.php' class="btn btn-primary btn-block">Buy Now</a>
                        <?php }else if(check_if_added_to_cart(4)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                        }else{ ?>
                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php } ?>
                        <!-- ==================  changing button based on logged in or not====================== -->
                    </div>
                </div>
            </div>
            <hr><!-- ============================================= -->
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/watch.jpg" alt="watch-1_image">
                        <div class="caption">
                            <h3> Titan Model #301 </h3>
                            <p> Price: Rs.13000.00</p>
                        </div>
                        <!-- ==================  changing button based on logged in or not====================== -->
                        <?php if(!isset($_SESSION['email'])){ ?>                             
                        <a href='login.php' class="btn btn-primary btn-block">Buy Now</a>                         
                        <?php }else if(check_if_added_to_cart(5)) {                                 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }else{ ?> 
                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php } ?>                         
                        <!-- ==================  changing button based on logged in or not====================== -->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/watch.jpg" alt="watch-1_image">
                        <div class="caption">
                            <h3> Titan Model #201 </h3>
                            <p> Price: Rs.3000.00</p>
                        </div>
                        <!-- ==================  changing button based on logged in or not====================== -->
                        <?php if(!isset($_SESSION['email'])){ ?>
                            <a href='login.php' class="btn btn-primary btn-block">Buy Now</a>
                        <?php }else if(check_if_added_to_cart(6)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                        }else{ ?>
                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php } ?>
                        <!-- ==================  changing button based on logged in or not====================== -->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/watch.jpg" alt="watch-1_image">
                        <div class="caption">
                            <h3> HMT Milan </h3>
                            <p> Price: Rs.8000.00</p>
                        </div>
                        <!-- ==================  changing button based on logged in or not====================== -->
                        <?php if(!isset($_SESSION['email'])){ ?>
                            <a href='login.php' class="btn btn-primary btn-block">Buy Now</a>
                        <?php }else if(check_if_added_to_cart(7)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                        }else{ ?>
                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php } ?>
                        <!-- ==================  changing button based on logged in or not====================== -->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/watch.jpg" alt="watch-1_image">
                        <div class="caption">
                            <h3> Faber Luba #111 </h3>
                            <p> Price: Rs.18000.00</p>
                        </div>
                        <!-- ==================  changing button based on logged in or not====================== -->
                        <?php if(!isset($_SESSION['email'])){ ?>
                            <a href='login.php' class="btn btn-primary btn-block">Buy Now</a>
                        <?php }else if(check_if_added_to_cart(8)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                        }else{ ?>
                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php } ?>
                        <!-- ==================  changing button based on logged in or not====================== -->
                    </div>
                </div>
            </div>
            <hr><!-- ============================================= -->
            <div class="row text-center panel">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/shirt.jpg" alt="shirt-1_image">
                        <div class="caption">
                            <h3> H&W </h3>
                            <p> Price: Rs.800.00</p>
                        </div>
                        <!-- ==================  changing button based on logged in or not====================== -->
                        <?php if(!isset($_SESSION['email'])){ ?>
                            <a href='login.php' class="btn btn-primary btn-block">Buy Now</a>
                        <?php }else if(check_if_added_to_cart(9)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                        }else{ ?>
                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php } ?>
                        <!-- ==================  changing button based on logged in or not====================== -->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/shirt.jpg" alt="shirt-1_image">
                        <div class="caption">
                            <h3> Luis Phil </h3>
                            <p> Price: Rs.1000.00</p>
                        </div>
                        <!-- ==================  changing button based on logged in or not====================== -->
                        <?php if(!isset($_SESSION['email'])){ ?>
                            <a href='login.php' class="btn btn-primary btn-block">Buy Now</a>
                        <?php }else if(check_if_added_to_cart(10)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                        }else{ ?>
                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php } ?>
                        <!-- ==================  changing button based on logged in or not====================== -->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/shirt.jpg" alt="shirt-1_image">
                        <div class="caption">
                            <h3> John Zok </h3>
                            <p> Price: Rs.1500.00</p>
                        </div>
                        <!-- ==================  changing button based on logged in or not====================== -->
                        <?php if(!isset($_SESSION['email'])){ ?>
                            <a href='login.php' class="btn btn-primary btn-block">Buy Now</a>
                        <?php }else if(check_if_added_to_cart(11)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                        }else{ ?>
                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php } ?>
                        <!-- ==================  changing button based on logged in or not====================== -->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/shirt.jpg" alt="shirt-1_image">
                        <div class="caption">
                            <h3> Jhalsani </h3>
                            <p> Price: Rs.1300.00</p>
                        </div>
                        <!-- ==================  changing button based on logged in or not====================== -->
                        <?php if(!isset($_SESSION['email'])){ ?>
                            <a href='login.php' class="btn btn-primary btn-block">Buy Now</a>
                        <?php }else if(check_if_added_to_cart(12)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                        }else{ ?>
                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php } ?>
                        <!-- ==================  changing button based on logged in or not====================== -->
                    </div>
                </div>
            </div>
        </div>

        <?php include 'include/footer.php'; ?>
    </body>
</html>
