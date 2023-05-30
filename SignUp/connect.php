<?php
    $HOSTNAME = 'localhost';
    $USERNAME = 'root';
    $PASSWORD = 'MySql@211995';
    $DATABASE = 'signupforms';

    $con = mysqli_connect($HOSTNAME , $USERNAME, $PASSWORD, $DATABASE);

    if(!$con){
        die (mysqli_error($con));
    }
?>