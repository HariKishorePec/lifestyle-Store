<?php
    require 'include/common.php';
    if(!isset($_SESSION['email'])){
        header('location:login.php');
       
    }
    $purchased_product_id =$_GET['id']; //$id
    $user_id = $_SESSION['id'];

    $qry = "DELETE FROM users_products WHERE user_id ='$user_id' AND item_id='$purchased_product_id' ";
    $result = mysqli_query($con, $qry) or die(mysqli_error($con));
    header('location:cart.php');
    die($user_id);
?>