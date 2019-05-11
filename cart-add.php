<?php
    require 'include/common.php';
    if(!isset($_SESSION['email'])){
        header('location:login.php');
        exit();
    }
    $product_id = $_GET['id'];
    $user_id = $_SESSION['id'];
    $qry= "INSERT INTO users_products (`user_id`, `item_id`, `status` ) VALUES ('$user_id', '$product_id', 'Added to cart')";
    //echo $qry."<br>";
    $result = mysqli_query($con, $qry) or die(mysqli_error($con));
    header('location:products.php');
?>