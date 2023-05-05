<?php
require_once('Auth.php');


$auth = new Auth('localhost', 'root', '', 'barangaywebsite');
$isLogged = $auth->isLoggedIn();

if (isset($_POST['logout'])) {
    $auth->logout();
    header('Location: home.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barangay 872, Pandacan | Official Website </title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
    .divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }
    </style>
</head>

<body>
    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- NAVBAR START -->


    <div class="container py-3 px-0">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
            <a href="home.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img src="assets/img/logo.jpg" height="80px" width="auto">
            </a>
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="home.php" class="nav-link px-2 link-secondary">Home</a></li>
                <li><a href="about.php" class="nav-link px-2 link-dark">About Us</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle link-dark" href="#" id="dropdown" data-bs-toggle="dropdown"
                        aria-expanded="false">Services</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown">
                        <li><a class="dropdown-item" href="#">Request Document</a></li>
                        <li><a class="dropdown-item" href="bookAppointment.php">Book an Appointment</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link px-2 link-dark" href="contact.php">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link px-2 link-dark" href="faq.php">F.A.Q.</a></li>
                <?php if ($isLogged): ?>
                <li class="nav-item">
                    <form method="POST">
                        <button type="submit" name="logout" class="btn btn-secondary btn-block">Logout</button>
                    </form>
                </li>
                <?php else: ?>
                <li class="nav-item"><a class="nav-link px-2 link-dark" href="login.php">Login</a></li>
                <li class="nav-item"><a class="nav-link px-2 link-dark" href="signup.php">Sign-up</a></li>
                <?php endif; ?>
            </ul>

        </header>
    </div>
    <!-- NAVBAR END -->
    <div class="card bg-light">
        <div class="card-body text-center">
            <h1 class="card-title">Submission Successful!</h1>
            <p class="card-text py-2" style="font-size: 22px;">If you have not yet created an appointment, Book
                one now for your corresponding document request</p>
            <a href="home.php ?>" class="btn btn-primary">Home</a>
        </div>
    </div>
    <!-- MEET OUR BRGY COUNCIL END -->
    <div class="divider"></div>
    <!-- FOOTER START -->
    <div class="container-fluid pb-2 px-0 border-top bg-light">
        <div class="container">
            <footer class="footer mt-auto py-3">
                <div class="container-fluid py-5">
                    <div class="row px-5">
                        <div class="mx-auto col-md-3 px-3">
                            <!-- EVEN SHORTER SUMMARY OF ABOUT US -->
                            <h3 class="text-center">About Us</h3>
                            <span class="text-muted text-center">Lorem ipsum dolor sit amet, consectetur
                                adipiscing
                                elit. Vestibulum sit amet est nibh. Nam vel erat et nisi viverra porttitor
                                malesuada
                                consectetur nibh.</span>
                        </div>
                        <div class="mx-auto col-md-3 px-3">
                            <h3 class="text-center">Links</h3>
                            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 list-group">
                                <li><a href="home.php" class="nav-link px-2 link-dark text-center">Home</a></li>
                                <li><a href="about.php" class="nav-link px-2 link-dark text-center">About Us</a>
                                </li>
                                <li><a href="faq.php" class="nav-link px-2 link-dark text-center">F.A.Q.</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mx-auto col-md-3 px-3">
                            <h3 class="text-center">Contact Us</h3>
                            <span class="text-muted text-center">Lorem ipsum dolor sit amet, consectetur
                                adipiscing
                                elit. Vestibulum sit amet est nibh. Nam vel erat et nisi viverra porttitor
                                malesuada
                                consectetur nibh.</span>
                        </div>
                        <div class="mx-auto col-md-3 px-3">
                            <h3 class="text-center">Location</h3>
                            <div class="embed-responsive text-center">
                                <iframe class="embed-responsive-item"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.28219962877!2d121.00253820000002!3d14.582989050000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c993b7ce58bf%3A0x32d5ccfe4b774f6d!2sBrgy.%20872%2C%20Pandacan%2C%20Manila%2C%201011%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1682255049225!5m2!1sen!2sph"
                                    style="border:0; min-height:300px;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- FOOTER END -->
</body>

</html>