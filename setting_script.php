<?php 
    require 'include/common.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');   
    }
    $pass_old = htmlspecialchars($_POST['passwordOld']);
    $pass1 = htmlspecialchars($_POST['passwordNew1']);
    $pass2 = htmlspecialchars($_POST['passwordNew2']);

    if(strlen($pass_old)<6 or strlen($pass1)<6 or strlen($pass2)<6){
        $_SESSION['pass_error']="Password should have at-least 6 characters.";
        header('location:settings.php');
        exit();
    }
    if(md5($pass1) != md5($pass2)){
        $_SESSION['pass_error']="Both the passwords should match.";
        header('location:settings.php');
        exit();
    }
    $user_id = $_SESSION['id'];
    $qry = "SELECT * FROM users WHERE `id`='$user_id' AND pass_word='$pass_old'";
    $result = mysqli_query($con, $qry) or die(mysqli_error($con));
    $total_records = mysqli_num_rows($result);
    if($total_records==0){
        $_SESSION['pass_error']="Incorrect Old Password.";
    }
    else{
        $qry = "UPDATE users SET pass_word='$pass1' WHERE id='$user_id'";
        $result = mysqli_query($con, $qry) or die(mysqli_error($con));
        $_SESSION['pass_error']=NULL;
        $_SESSION['pass_change_success']="true";
    }
    header('location:settings.php');

?>