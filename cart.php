<?php 
    require 'include/common.php';
    if(!isset($_SESSION['email'])){
        header('location:login.php');
       
    }
    $user_id = $_SESSION['id'];
    $qry = "SELECT * FROM users_products up
            INNER JOIN products p ON p.id=up.item_id AND up.user_id='$user_id' AND up.status='Added to cart' ";
   // print_r($qry);

    $result = mysqli_query($con,  $qry) or die($mysqli_error($con));
    $total_row_fetched= mysqli_num_rows($result);
    echo "<br><br><br>";
    $sum=0.0;
    $id =array();
    //echo $total_row_fetched;die();
    /*
    if($total_row_fetched==0){
        echo "Add items to the cart First.";
    }
    else{
        $sum=0;
        $id =array();
        $i=0;
        while($row = mysqli_fetch_assoc($result)){
            print_r($row);
            echo "<br><br>";
            $sum +=$row['price'];
            $id[$i] =$row['id'];
            $i = $i+1;
        }
        echo "Total : ".$sum ."<br>";
        print_r($id);
    }
*/
 ?>

<!DOCTYPE html>

<html>
    <head>
        <title>Lifestyle Store | Order deatils</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" >
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <?php include 'include/header.php'; ?>
        
                        
<!-- ==================================================================================== -->
    <?php
        if($total_row_fetched!=0){
            mysqli_data_seek($result,0);
            // $sum=0.0; //if no item in cart, shows undefined variable// so declare globally
            // $id =NULL;//array(); //new id variable //serial number
            $i=0;
        ?>
        <div class="container myPanel tableStyle">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                                <tr><th>Item Number </th> <th>Item Name </th><th>Price(In Rs.)</th><th> </th> </tr>
                        <?php
                                while($row = mysqli_fetch_assoc($result)){
                                    $sum +=$row['price'];
                                    $id[$i] =$row['id'];
                                    $i = $i+1;
                        ?>
                                    <tr>
                                        <td><?php echo $i."."; ?></td>
                                        <td><?php echo $row['pname']; ?></td>
                                        <td><?php echo number_format($row['price'],2); ?></td>
                                        <td><a href="cart-remove.php?id=<?php echo $row['id']; ?>" class="remove_item_link" >Remove </a></td>  <?php //echo $row['id']?>
                                    </tr>

                        <?php  } ?>
                            <tr>
                                <td> </td> <td>Total</td><td><?php echo number_format($sum,2); ?>/-</td>
                                <?php $_SESSION['arr']=$id; ?>
                                <td><a href="success.php" class="btn btn-primary buttonCenter">Confirm Order</a></td> 
                            </tr>
                        </tbody>
                    </table>
                 </div>
            </div>
        <?php } else{ ?>
            <div class="panel panel-primary myPanel">
                <div class="panel-body">
                    Currently, there is no any item in your cart. Please Add items to your cart first.
                <a href="products.php">Click here </a> to select any item.
                </div>
            </div>
        <?php
                }
        ?>
<!-- ==================================================================================== -->
                        
                  
        
        <?php include 'include/footer.php'; ?>
    </body>
</html>
