<?php
require_once('Auth.php');
include 'database.php';
$auth = new Auth('localhost', 'root', '', 'barangaywebsite');
$isLogged = $auth->isLoggedIn();

if (isset($_POST['logout'])) {
    $auth->logout();
    header('Location: home.php');
    exit;
}

    //retrieve row for the logged in user
  $sql = "SELECT firstName, lastName, email, contactNo FROM users WHERE userID = ?";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "i", $_SESSION['userID']);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

  // Display the user's information
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
  } else {

  }

  // Clean up
  mysqli_free_result($result);
  mysqli_stmt_close($stmt);

// Close the database connection
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

    <!-- CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    <!-- JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
    </script>

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
                <li><a href="home.php" class="nav-link px-2 link-dark">Home</a></li>
                <li><a href="about.php" class="nav-link px-2 link-dark">About Us</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle link-dark" href="#" id="dropdown" data-bs-toggle="dropdown"
                        aria-expanded="false">Services</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown">
                        <li><a class="dropdown-item" href="#">Request Document</a></li>
                        <li><a class="dropdown-item" href="#">Book an Appointment</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link px-2 link-dark " href="contact.php">Contact Us</a></li>
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
    <!-- APPOINTMENT FORM START -->
    <?php if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] === true) { ?>
    <div class="container-lg px-0 border" style="box-shadow:  20px 20px 60px #bfbfbf,
             -20px -20px 60px #ffffff;">
        <div class="px-2 rounded-3">
            <div class="container-fluid py-4">
                <h1 class="display-5 fw-bold text-left">Book Appointment</h1>
                <div class="mx-auto" style="width: 1000px">
                </div>
            </div>
        </div>
        <div class="container-fluid border-top border-bottom">
            <div class="row bg-light p-3">
                <div class="col-sm-6">
                    <form method="post">
                        <div class="row bg-light p-0">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="firstname">First Name</label>
                                    <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $row['firstName']; ?>"required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname"  value="<?php echo $row['lastName']; ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" name="email" id="email"
                                aria-describedby="emailHelp"  value="<?php echo $row['email']; ?>" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" class="form-control" name="phone" id="phone" 
                             value="<?php echo $row['contactNo']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Reason for Appointment:</label>
                            <textarea class="form-control" name="message" id="message" rows="3" required></textarea>
                        </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" name="Date" id="myDate" required>
                        <small id="emailHelp" class="form-text text-muted">The office is only open from Monday to Friday
                            (7:30 am to 4:00 pm)</small>
                    </div>
                    <div class="form-group">
                        <label for="time">Time</label>
                        <input type="time" class="form-control" name="Time" id="myTime" min="07:30" max="16:00"
                            step="1800" required>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center border">
                <button type="submit" class="btn btn-primary btn-block my-3" style="max-width: 200px;">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php } else { ?>
<div class="card bg-light">
  <div class="card-body text-center">
    <h1 class="card-title">Login Required!</h1>
    <p class="card-text py-2" style="font-size: 22px;">Please login to book an appointment.</p>
    <a href="login.php ?>" class="btn btn-primary">Login</a>
  </div>
</div>
<?php } ?>
    <!-- APPOINTMENT FORM END -->

    <!-- DATABASE CONNECTION -->

    <?php 
		// GET FORM FOR DATABASE 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $Date = $_POST['Date'];
            $Time = $_POST['Time'];
            $message = $_POST['message'];
            
            // check if required fields are empty
            if (!empty($firstname) && !empty($lastname) &&!empty($email) && !empty($phone) && !empty($Date) && !empty($Time)) {
              //sql query
              $sql = "INSERT INTO booking (firstName, lastName, email, phone, date, time, message) VALUES ('$firstname', '$lastname', '$email', '$phone', '$Date', '$Time', '$message')";
            
              if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Appointment booked successfully');</script>";
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
            } else {
              echo "<script>alert('Please fill all required fields');</script>";
            }
          } else {
            
          }
        mysqli_close($conn);
        ?>
    <!-- GET FORM FOR DATABASE END -->
</body>

<!-- JS CODE FOR USERS TO ONLY PICK WEEKDAYS -->
<script>
var input = document.getElementById('myDate');
input.addEventListener('input', function() {
    var date = new Date(input.value);
    if (date.getDay() === 6 || date.getDay() === 0) {
        input.setCustomValidity('The office is only available on weekdays');
    } else {
        input.setCustomValidity('');
    }
});
</script>