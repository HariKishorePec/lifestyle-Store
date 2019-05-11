<?php
	function check_if_added_to_cart($item_id) //dont use public here//throws error
	{
		include 'include/common.php';
		$user_id = $_SESSION['id'];
		$qry1 = "SELECT * FROM users_products WHERE item_id='$item_id' AND user_id='$user_id' AND status='Added to cart' ";
		$result1 = mysqli_query($con, $qry1) or die(mysqli_error($con));
		$total_row_fetched= mysqli_num_rows($result1);
		if($total_row_fetched>=1){
			return 1;
		}else{
			return 0;
		}
	}
?>