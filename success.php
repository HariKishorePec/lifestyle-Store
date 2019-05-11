<?php
    require 'include/common.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');   
    }
    $purchased_products =(array)$_SESSION['arr']; //$id
    $user_id = $_SESSION['id'];
    //print_r($purchased_products);

   foreach($purchased_products as $product){
       //echo $product."<br>";
       $qry = "UPDATE users_products SET `status`='confirmed' WHERE user_id='$user_id' AND item_id='$product'";
       //echo $qry."<br>";
       $result = mysqli_query($con, $qry) or die(mysqli_error($con));
      // echo $result;
   }
   //echo "successful";
   
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Order Confirmation | Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <?php include 'include/header.php';?>
        <div class="container">
            <div class="panel panel-primary myPanel" class="success-msg">
                <div class="panel-body">
                    Your order is confirmed. Thank you for shopping with us.
                    <a href="products.php">Click here </a> to purchase any other item.
                </div>
            </div>
            <div class="order-details">
                                 
<?php 
$qry2 = "SELECT * FROM users_products up
INNER JOIN products p ON p.id=up.item_id AND up.user_id='$user_id' AND up.status='confirmed' ";
$result2 = mysqli_query($con,  $qry2) or die($mysqli_error($con));
$sum=0.0;
$total_row_fetched= mysqli_num_rows($result2);
if($total_row_fetched!=0){
   // mysqli_data_seek($result2,0);
    $i=0;
?>
        <div class="container tableStyle">
        <p style="font-weight:bold;" >Your Previous Order Details are:</p>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <tbody>
                                <tr><th>Item Number </th> <th>Item Name </th><th>Price(INR)</th></tr>
                        <?php
                                while($row = mysqli_fetch_assoc($result2)){
                                    $sum +=$row['price'];
                                    $id[$i] =$row['id'];
                                    $i = $i+1;
                        ?>
                                    <tr>
                                        <td><?php echo $i."."; ?></td>
                                        <td><?php echo $row['pname']; ?></td>
                                        <td><?php echo number_format($row['price'],2); ?></td>
                                        
                                    </tr>

                        <?php  } ?>
                            <tr style="font-weight:bold;">
                                <td> </td> <td>Total</td><td><?php echo number_format($sum,2); ?>/-</td>
                                <?php $_SESSION['arr']=$id; ?>
                                
                            </tr>
                        </tbody>
                    </table>
                 </div>
            </div>

<?php }  ?>


            </div>
        </div>
        <?php include 'include/footer.php';?>
    </body>
</html>
