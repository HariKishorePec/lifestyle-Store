<?php
session_start();
session_unset();
if(!isset($_SESSION['email'])){
    header("location: index.php");
    //setcookie(logout="true");
}
session_destroy();
header("location: index.php");

?>

<body>
<div class="container">
            <div class="panel panel-primary myPanel">
                <div class="panel-heading">Logout Successful</div>
                <div class="panel-body" id="logout_panel">
                    You logged out successfully.Thanks for shopping.<br>
                    Hope to see you again.
                    <a href="index.html">Click here </a> to continue.
                </div>
            </div>
            <div class='row'>
                <div class='col-xs-4'>df</div>
                <div class='col-xs-9 col-xs-offset-4'>fd</div>
            </div>
        </div>
</body>