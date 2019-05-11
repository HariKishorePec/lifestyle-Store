<?php
    require 'include/common.php';
    if(isset($_SESSION['email'])){
        header('location: products.php');
    }
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<script src="bootstrap/js/jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="index.css">
</head>
<body>
    <?php include 'include/header.php'; ?>

    <div class="banner-image">
        <div class="container">
            <div class="banner-content">
                <h1>We sell lifestyle.</h1>
                <p>Flat 40% OFF on premium brands</p>
                <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
            </div>
        </div>
    </div>

    <?php include 'include/footer.php'; ?>
</body>

</html>