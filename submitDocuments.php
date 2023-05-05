<?php
require_once('Auth.php');


$auth = new Auth('localhost', 'root', '', 'barangaywebsite');
$isLogged = $auth->isLoggedIn();

if (isset($_POST['logout'])) {
    $auth->logout();
    header('Location: home.php');
    exit;
}

$message="";
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
    <?php if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] === true) {?>
    <div class="container-lg px-0 border" style="box-shadow:  20px 20px 60px #bfbfbf,
             -20px -20px 60px #ffffff;">
        <div class="px-2 rounded-3">
            <div class="container-fluid py-4">
                <h1 class="display-5 fw-bold text-left">Submit Documents</h1>
                <div><?php
                if (isset($_POST['submit'])){
                    echo $message;
                }
                ?></div>
                <div class="mx-auto" style="width: 1000px">
                </div>
            </div>
        </div>
        <div class="container-fluid border-top border-bottom">
            <div class="row bg-light p-3">
                <div class="col-sm-6">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="row bg-light p-0">
                            <div class="form-group">
                                <label for="documentForm" class="form-label">Document to be Requested:</label>
                                <select class="form-select" name="documentForm" id="documentForm">
                                    <option selected value="Barangay Clearance">Barangay Clearance</option>
                                    <option value="Barangay Proof of Residency">Barangay Proof of Residency</option>
                                </select>
                            </div>

                        </div>

                        <div class="row bg-light p-0">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="fnameForm">First Name</label>
                                    <input type="text" class="form-control" id="fnameForm" name="fnameForm" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="fnameForm">Middle Initial</label>
                                    <input type="text" class="form-control" id="miForm" name="miForm" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="lnameForm">Last Name</label>
                                    <input type="text" class="form-control" id="lnameForm" name="lnameForm" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="addressForm" class="form-label">Home Address:</label>
                            <input type="text" class="form-control" id="addressForm" name="addressForm" required>
                        </div>
                        <div class="form-group">
                            <label for="birthdateForm" class="form-label">Date of Birth:</label>
                            <input type="date" class="form-control" name="birthdateForm" id="birthdateForm" />

                        </div>
                        <div class="form-group">
                            <label for="sexForm" class="form-label">Sex</label>
                            <select class="form-select" name="sexForm">
                                <option selected value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="emailForm" class="form-label">Email Address:</label>
                        <input type="email" class="form-control" id="emailForm" name="emailForm" required>

                    </div>
                    <div class="form-group">
                        <label for="civilStatusForm" class="form-label">Civil Status:</label>
                        <select class="form-select" name="civilStatusForm" id="civilStatusForm">
                            <option selected value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Widowed">Widowed</option>
                            <option value="Divorced">Divorced</option>
                        </select>
                    </div>
                    <p class="card-text py-2" style="font-size: 22px;">Bring a valid ID at pickup</p>
                </div>
                <div class="row d-flex justify-content-center align-items-center border">
                    <button type="submit" name="submit" id="submit" class="btn btn-primary btn-block my-3"
                        style="max-width: 200px;">Submit</button>
                </div>
                </form>
            </div>
        </div>
        <?php } else { ?>
        <div class="card bg-light">
            <div class="card-body text-center">
                <h1 class="card-title">Login Required!</h1>
                <p class="card-text py-2" style="font-size: 22px;">Please login to request documents.</p>
                <a href="login.php ?>" class="btn btn-primary">Login</a>
            </div>
        </div>
        <?php } ?>
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


<?php
if (isset($_POST['submit'])){

    //echo "check";
    $mysqli = new mysqli("localhost", "root", "", "barangaywebsite");

// check for connection errors
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    $documentForm = $_POST['documentForm'];
    $fnameForm = $_POST['fnameForm'];
    $miForm = $_POST['miForm'];
    $lnameForm = $_POST['lnameForm'];
    $emailForm = $_POST['emailForm'];
    $addressForm = $_POST['addressForm'];
    $birthdateForm = $_POST['birthdateForm'];
    $sexForm = $_POST['sexForm'];
    $civilStatusForm = $_POST['civilStatusForm'];
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            //echo "Success. File Uploaded.";
            
            if($fileSize < 600000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'upload/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                
            }else{
                //echo "Error. Your file is too big.";
            }
        }else{
            //echo "Error uploading the file.";
        }
    }else{
        //echo "Error. You cannot upload files of this type.";
    }

    if (empty($documentForm) || empty($lnameForm) ||empty($emailForm) || empty($fnameForm) || empty($addressForm) || empty($birthdateForm) || empty($sexForm) || empty($civilStatusForm)) {
        echo "<script>alert('Please fill all required fields');</script>";
      }else {
        // All required fields are filled, proceed with user registration
        $sql = "INSERT INTO documentrequest(doc_documentType, doc_fname, doc_mi, doc_lname, doc_address, doc_birthdate, doc_sex, doc_email, doc_civilstatus) 
                                  VALUES ('$documentForm','$fnameForm','$miForm','$lnameForm','$addressForm','$birthdateForm','$sexForm','$emailForm','$civilStatusForm')";
      }
      if ($mysqli->query($sql) === TRUE) {
        echo "<script>alert('Documents Submitted Successfully!');</script>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      } 
}