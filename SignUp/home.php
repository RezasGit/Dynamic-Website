<!DOCTYPE html>
<html lang="en">

<?php
    session_start();
    if(!isset($_SESSION['Username'])){
        header('location:login.php');
    }
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navigation Navbar -->
    <?php include 'menu.php'; ?>

    <!-- Carousel Slides-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/img-slide1-paris.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                <h1 class="text-center text-white">Hello
                        <?php
                            echo $_SESSION['Username']."!";
                        ?>
                        Welcome to My Website... :)
                    </h1>
                    <h5>Paris</h5>
                    <p>Building Architecture...</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/img-slide4-bigben.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>London</h5>
                    <p>London Bridge...</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/img_slide3_kualalumpur.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Kualalumpur</h5>
                    <p>City in Kualalumpur...</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/img-slide-2-eiffel-tower.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>France</h5>
                    <p>Eiffel Tower...</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/img-slide-5-lighthouse-beacon2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Beacon</h5>
                    <p>Lighthouse in Beacon, London...</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section style="background-color: Aliceblue" class="sec-about py-5">
        <div class="py-5">
            <h2 class="text-center">About Us</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/img_slide3_kualalumpur.jpg" class="img-fluid" alt="" style="height: 300px; width:100%;">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">Hi! This is RezaTechBD.</h2>
                    <p class="py-4">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem temporibus suscipit obcaecati,
                        illo ullam voluptas atque eligendi veritatis nisi minima eos inventore laboriosam sequi mollitia
                        sit possimus qui? Voluptates natus itaque, saepe repellat, quia dolores dolorem error a nobis molestiae id,
                        tenetur adipisci dicta voluptatibus sunt cupiditate commodi mollitia excepturi.
                    </p>
                    <a href="about.php" class="btn btn-success">Know More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Grid -->
    <section class="sec-services py-5">
        <div class="py-5">
            <h2 class="text-center">Our Services</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <!-- Card -->
                    <div class="card">
                        <img class="card-img-top" src="images/img_slide3_kualalumpur.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Beautiful city :)</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/img_slide3_kualalumpur.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Beautiful city :)</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/img_slide3_kualalumpur.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Beautiful city :)</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="background-color: Aliceblue" class="sec-gallery py-5">
        <div class="py-5">
            <h2 class="text-center">Our Gallery</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/img-slide4-bigben.jpg" alt="" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/img-slide4-bigben.jpg" alt="" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/img-slide4-bigben.jpg" alt="" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/img-slide4-bigben.jpg" alt="" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/img-slide4-bigben.jpg" alt="" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/img-slide4-bigben.jpg" alt="" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/img-slide4-bigben.jpg" alt="" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/img-slide4-bigben.jpg" alt="" class="img-fluid pb-4">
                </div>
            </div>
        </div>
    </section>

<!-- Comment Section.... -->
    <section class="comment-box bg-secondary">
        <div class="mx-5 py-5">
            <form action="home.php" method="post" style="width:75%; margin:auto">
                <label for="comments" class="text-white">Share your thoughts with us...</label><br>
                <input type="text" name="comments" id="comments" style="height: 60px; width: 100%; border:1px dotted black; margin-bottom:5px">
                <button type="submit" class="btn btn-primary" style="width:10%; margin:auto; height:40px; font-size:17px; display:flex; justify-content:center; border:1px solid gray; border-radius:12px">Post</button>
            </form>
            <div class="comment-area my-5 py-4" style="width:75%; margin:auto">
                <?php
                    if($_SERVER["REQUEST_METHOD"] == 'POST'){
                        include 'connect.php';
                        $commenter = $_SESSION['Username'];
                        $comment = $_POST['comments'];
                        $query = "INSERT INTO `signupforms`.`commentsbox` (Username, Comment) values ('$commenter', '$comment')";
                        $result = mysqli_query($con, $query);
                        if($result){

                        }else{
                            die(mysqli_error($con));
                        }
                    }
                ?>
                <h2 class="text-center text-white py-2">Comment Box</h2>
                <?php
                    include 'connect.php';
                    $query = "SELECT * FROM `signupforms`.`commentsbox`";
                    $result = mysqli_query($con, $query);
                    if($result->num_rows > 0){
                        //Output data of each row
                        while($row = $result->fetch_assoc()){
                ?>
                <div class="px-2 py-2" style="border:1px solid gray; background-color: Aliceblue; border-radius: 10px">
                    <strong><?php echo $row['Username'] ?></strong>
                    <p><?php echo $row['Comment'] ?></p>
                </div>
                <?php
                    } }
                ?>
                
            </div>
        </div>
    </section>

    <footer class="p-2 bg-dark">
        <div class="container d-flex" style="justify-content:space-between">
            <p class="mt-2 text-white">@RezaTechSolutions</p>
            <a href="logout.php" class="btn btn-transparent text-white">Log Out</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>