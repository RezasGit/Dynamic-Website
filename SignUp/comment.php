<?php
    if($_SERVER["REQUEST_METHOD"] == 'POST'){
        include 'connect.php';
        session_start();
        $commenter = $_SESSION['Username'];
        $comment = $_POST['Comment'];
        $query = "INSERT INTO `signupforms`.`commentsbox` (Username, Comment) values ('$commenter', '$comment')";
        $result = mysqli_query($con, $query);
        if($result){
            header('location:home.php');
        }else{
            die(mysqli_error($con));
        }
    }
?>