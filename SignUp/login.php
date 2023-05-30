<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Log in to our Website</h1>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="Username">Enter Username</label>
                <input type="text" autocomplete="off" class="form-control" name="Username" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="Password">Enter Password</label>
                <input type="password" autocomplete="off" class="form-control" name="Password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary mt-3 w-100">Log In</button>
        </form>
        <div class="text-center mt-3">
            <p>Don't have an account? <a href="sign.php">Sign Up Here</a> </p>
        </div>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script> -->
</body>
</html>

<?php
    $login = 0;
    $invalid = 0;

    if($_SERVER["REQUEST_METHOD"] == 'POST'){
        include 'connect.php';
        $username = $_POST['Username'];
        $password = $_POST['Password'];

        $query = "SELECT * FROM registration WHERE Username = '$username' AND Password = '$password'";
        $result = mysqli_query($con, $query);

        if($result){
            $num = mysqli_num_rows($result);

            if($num > 0){
                $login = 1;  //Counter to display Alert
                //echo "Login Successful.";
                session_start();
                $_SESSION['Username'] = $username;
                header('location:home.php');
            }else{
                $invalid = 1;
                //echo "Invalid Data";
            }
        }
    }
?>

<!-- Alert -->
<?php
    if($login){
        echo '<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        <strong>Logged in</strong> Successfully.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>';
    }
?>

<?php
    if($invalid){
        echo '<div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
        <strong>Oops! Invalid</strong> Username or Password!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>';
    }
?>