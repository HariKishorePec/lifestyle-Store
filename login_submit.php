<?php 
	require 'include/common.php';

	$email_id=$_POST['email'];
	$pswd=$_POST['pass'];

	$regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
	if(!preg_match($regex_email, $email_id)){
	    $_SESSION['login_error']="Error ! Invalid email, Please verify ";
	    header('location:login.php');
	}
	if(strlen($pswd)<6){
	    $_SESSION['login_error']="Password should have at-least 6 characters.";
	    header('location:login.php');
	}
	$userName = mysqli_real_escape_string($con, $email_id );
	$pass = mysqli_real_escape_string($con, $pswd);

	$modifiedPass = md5($pass);

	$select_query = "SELECT id,email, pass_word FROM users WHERE email='$userName' and pass_word='$pass' ";
	$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
	$total_row_fetched = mysqli_num_rows($select_query_result);
	if($total_row_fetched==0){
	    //echo "Invalid credentials";
	    //header("location:login.php?login_error=Invalid Credentials");
	    $_SESSION['login_error']="Error ! Invalid Credentials";
		header('location:login.php');
		exit();
	} 

	    //echo "login successful ";
	    $_SESSION['login_error']=NULL;
	    $row= mysqli_fetch_array($select_query_result);
	    $_SESSION['email']=$userName;  //=$row['email']
	    $_SESSION['id']= $row['id'];
	    header('location:products.php');

 ?>
