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
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    #accordion {
        width: auto;
    }

    #accordion li {
        list-style: none;
        width: 100%;
        margin-bottom: 5px;
        background: #f8f9fa;
        color: #212529;
        padding: 10px;
        border-radius: 4px;
    }

    #accordion li label {
        padding: 10px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-weight: 500;
        cursor: pointer;
    }

    #accordion li label span {
        transform: rotate(90deg);
        font-size: 22px;
    }

    #accordion label+input[type="radio"] {
        display: none;
    }

    #accordion .content {
        padding: 0 10px;
        line-height: 26px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.5s;
    }

    #accordion label+input[type="radio"]:checked+.content {
        max-height: 400px;
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
                <li><a href="home.php" class="nav-link px-2 link-dark">Home</a></li>
                <li><a href="about.php" class="nav-link px-2 link-dark">About Us</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle link-dark" href="#" id="dropdown" data-bs-toggle="dropdown"
                        aria-expanded="false">Services</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown">
                        <li><a class="dropdown-item" href="submitDocuments.php">Request Document</a></li>
                        <li><a class="dropdown-item" href="bookAppointment.php">Book an Appointment</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link px-2 link-secondary " href="contact.php">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link px-2 link-dark " href="faq.php">F.A.Q.</a></li>
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

    <!-- <div class="divider"></div> -->

    <section class="border-top">
        <div class="container-fluid bg-light">
            <div class="container py-5">
                <h1 class="">Contact Us</h1>
            </div>
        </div>

        <!-- CONTACT START -->
        <div class="container">
            <div class="py-5">
                <h2 class="pb-4 border-bottom">Contact Information</h2>
                <ul id="accordion">
                    <li>
                        <label for="first">Punong Barangay<span>&#x3e;</span></label>
                        <input type="radio" name="accordion" id="first" checked>

                        <div class="content">
                            <p>EDUARDO C. LOZADA
                                <br>
                                email: NONE
                                <br>
                                Contact No.: NONE
                            </p>
                        </div>
                    </li>

                    <li>
                        <label for="second">Sangguniang Barangay Members<span>&#x3e;</span></label>
                        <input type="radio" name="accordion" id="second" checked>

                        <div class="content">
                            <p>FE V. CUNANAN
                                <br>
                                email: fe.cunanan@gmail.com
                                <br>
                                Contact No.: NONE
                                <br>
                                <br>

                                LORENA S. ENGRACIAL
                                <br>
                                email: NONE
                                <br>
                                Contact No.: NONE
                                <br>
                                <br>

                                MICHAEL L. TOMILLOSO
                                <br>
                                email: tomilloso.michael29@gmail.com
                                <br>
                                Contact No.: NONE
                                <br>
                                <br>

                                MARIA CRISTINA M. PUNO
                                <br>
                                email: NONE
                                <br>
                                Contact No.: NONE
                                <br>
                                <br>

                                CARY C. BIAS
                                <br>
                                email: cary.bias@yahoo.com
                                <br>
                                Contact No.: NONE
                                <br>
                                <br>

                                REGINA C. GANAPIN
                                <br>
                                email: NONE
                                <br>
                                Contact No.: NONE
                                <br>
                                <br>

                                DANILO M. YAMBAO
                                <br>
                                email: NONE
                                <br>
                                Contact No.: NONE
                            </p>
                        </div>
                    </li>

                    <li>
                        <label for="fifth">SK Chairperson<span>&#x3e;</span></label>
                        <input type="radio" name="accordion" id="fifth" checked>

                        <div class="content">
                            <p>JOSHUA B. GONZALES
                                <br>
                                email: joshkit6@gmail.com
                                <br>
                                Contact No.: NONE
                            </p>
                        </div>
                    </li>

                    <li>
                        <label for="fourth">Barangay Secretary<span>&#x3e;</span></label>
                        <input type="radio" name="accordion" id="fourth" checked>

                        <div class="content">
                            <p>RODRIGO P. GARCIA
                                <br>
                                email: NONE
                                <br>
                                Contact No.: NONE
                            </p>
                    </li>
                </ul>

            </div>
        </div>
        <!-- CONTACT END -->

        <!-- LOCATION START -->
        <div class="container">
            <div class="pb-5">
                <h2 class="pb-4 border-bottom">Location</h2>

                <div class="embed-responsive text-center py-2">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7722.564401010836!2d121.00253800000002!3d14.582989!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c993b7ce58bf%3A0x32d5ccfe4b774f6d!2sBrgy.%20872%2C%20Pandacan%2C%20Manila%2C%201011%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1682837691074!5m2!1sen!2sph"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed diam ipsum, placerat sed nisl eu,
                    molestie semper nunc. Fusce dictum quam sed augue gravida, vel aliquam leo feugiat. Nunc consequat
                    nisi mi, at aliquam leo convallis in. Fusce quis ultricies massa, eu placerat augue. Proin finibus
                    eget felis eu tristique. Proin interdum neque a lectus dapibus feugiat. Sed sodales mi ac sem ornare
                    eleifend. Vestibulum venenatis dolor eget sodales porttitor. Ut sit amet sem velit. Mauris sodales,
                    nisi id laoreet commodo, mauris massa fringilla urna, et fringilla sapien nisi ac dolor. Suspendisse
                    sit amet sapien nunc. Suspendisse sagittis nisl sed suscipit fermentum. Integer elit enim,
                    ullamcorper id commodo nec, efficitur quis dui. Nam a dui elit.
                </p>
            </div>
        </div>
        <!-- LOCATION END -->

    </section>

    <!-- FOOTER START -->
    <div class="container-fluid pb-2 px-0 border-top bg-light">
        <div class="container">
            <footer class="footer mt-auto py-3">
                <div class="container-fluid py-5">
                    <div class="row px-5">
                        <div class="mx-auto col-md-3 px-3">
                            <!-- EVEN SHORTER SUMMARY OF ABOUT US -->
                            <h3 class="text-center">About Us</h3>
                            <span class="text-muted text-center">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Vestibulum sit amet est nibh. Nam vel erat et nisi viverra porttitor malesuada
                                consectetur nibh.</span>
                        </div>
                        <div class="mx-auto col-md-3 px-3">
                            <h3 class="text-center">Links</h3>
                            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 list-group">
                                <li><a href="home.php" class="nav-link px-2 link-dark text-center">Home</a></li>
                                <li><a href="about.php" class="nav-link px-2 link-dark text-center">About Us</a></li>
                                <li><a href="#" class="nav-link px-2 link-dark text-center">Request Document</a></li>
                                <li><a href="#" class="nav-link px-2 link-dark text-center">View Appointments</a></li>
                                <li><a href="faq.php" class="nav-link px-2 link-dark text-center">F.A.Q.</a></li>
                            </ul>
                        </div>
                        <div class="mx-auto col-md-3 px-3">
                            <h3 class="text-center">Contact Us</h3>
                            <span class="text-muted text-center">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Vestibulum sit amet est nibh. Nam vel erat et nisi viverra porttitor malesuada
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