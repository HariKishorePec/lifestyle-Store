<?php

    require 'include/common.php';
    if(isset($_SESSION['email'])){
        header('location:products.php');
    }

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $contact = htmlspecialchars($_POST['contact']);
    $city = htmlspecialchars($_POST['city']);
    $addr = htmlspecialchars($_POST['address']);

    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if(!preg_match($regex_email, $email)){
        $_SESSION['signup_error']="Error ! Invalid email, Please verify ";
        header('location:signup.php');
    }
    if(strlen($password)<6){
        $_SESSION['signup_error']="Password should have at-least 6 characters.";
        header('location:signup.php');
        exit();
    }

    $select_query2 = "SELECT id, email FROM users WHERE email='$email'";
    $select_query_result2 = mysqli_query($con, $select_query2) or die(mysqli_error($con));
    $total_row_fetched= mysqli_num_rows($select_query_result2);
    if($total_row_fetched>0){
        $_SESSION['signup_error']="User '$email' already exist";
        header('location:signup.php');
        exit();
    }
    
    	//$password = md5($password);
        $select_query3 = "INSERT INTO `users` ( `name`, `email`, `pass_word`, `phone`, `city`, `address`) VALUES ('$name', '$email', '$password', '$contact', '$city', '$addr')";
        $user_registration_submit= mysqli_query($con, $select_query3) or die(mysqli_error($con));
       // $_SESSION['email'] = $email_id;
        //$_SESSION['id'] = mysqli_insert_id($con ); 
        header('location:login.php');
        $_SESSION['reg_succ'] = "true";
        //echo "<script>alert('Registration Successfull.')</script>";
         //STArting session
        
    
    //die($user_registration_query);//when die is in last then only data is inserted into database;



?>