<?php

include "../classes/SignUp.classes.php";
include "../classes/SignUp-Controller.php";

if(isset($_POST["submit"])) {

    // Grabbing the data
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwd2 = $_POST['pwd2'];
    $email = $_POST['email'];

    // Instantiate the SignupContr class
    $signup = new SignUpController($uid, $pwd, $pwd2, $email);


    // Redirect to home page
}