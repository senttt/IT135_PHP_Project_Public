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
<?php
        include 'database.php';
    ?>

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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
    </script>

    <!-- Calendar  JS -->

    <!-- GC-Calendar Plugin Files -->
    <link rel="stylesheet" href="assets/calendar/dist/calendar-gc.min.css" />

    <style>
    .divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }
    </style>
    <style>
    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 100;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: 0 auto;
        padding: 50px;
        border: 1px solid #888;
        width: 70%;
        max-height: calc(100vh - 210px);
        overflow-y: auto;
        font-size: 1.4em;
        line-height: 2;
    }

    /* The Close Button */
    #close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    #close:hover,
    #close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
    </style>
</head>
<script src="assets/calendar/dist/calendar-gc.min.js"></script>

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
                <li class="nav-item"><a class="nav-link px-2 link-dark " href="contact.php">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link px-2 link-dark " href="faq.php">F.A.Q.</a></li>
                <?php if ($isLogged): ?>
                <li class="nav-item">
                    <form method="POST">
                        <button type="submit" name="logout" class="nav-link px-2 link-dark">Logout</button>
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

    <!-- APPOINTMENTS IN CALENDAR FORM -->
    <div class="container-lg px-0 border" style="box-shadow:  20px 20px 60px #bfbfbf,
             -20px -20px 60px #ffffff;">
        <div class="px-2 rounded-3">
            <div class="container-fluid py-4">
                <h1 class="display-5 fw-bold text-left">View Appointments</h1>
                <div class="mx-auto" style="width: 1000px">
                </div>
            </div>
        </div>
        <div class="container-fluid border-top border-bottom">
            <div class="row bg-light p-3">
                <div id="calendar"></div>
            </div>
        </div>
    </div>
</body>
<!--SCRIPT FOR CALENDAR-->
<script>
$(function(e) {
    var calendar = $("#calendar").calendarGC({
        dayBegin: 0,
        prevIcon: '&#x3c;',
        nextIcon: '&#x3e;',
        onPrevMonth: function(e) {
            console.log("prev");
            console.log(e)
        },
        onNextMonth: function(e) {
            console.log("next");
            console.log(e)
        },
        events: getEvents(),
        onclickDate: function(e, data) {
            console.log(e, data);
        }
    });
})

function getEvents() {
    var events = [];
    <?php 
              $query = "SELECT * FROM `booking`;";
              if ($is_query_run = mysqli_query($connection, $query)){
                while ($query_executed = mysqli_fetch_assoc($is_query_run)){
            ?>
    var modal<?php echo $query_executed['id'] ?> = document.getElementById('myModal<?php echo $query_executed['id']?>');
    var btn<?php echo $query_executed['id']?> = document.getElementById('<?php echo $query_executed['id']?>');
    var span<?php echo $query_executed['id']?> = document.getElementsByClassName(
        'close<?php echo $query_executed['id']?>')[0];
    span<?php echo $query_executed['id']?>.onclick = function() {
        modal<?php echo $query_executed['id']?>.style.display = 'none';
    }

    window.onclick = function(event) {
        if (event.target == modal<?php echo $query_executed['id']?>) {
            modal<?php echo $query_executed['id']?>.style.display = 'none';
        }
    }
    <?php
                  echo "events.push({
                          date: new Date('".$query_executed['date']."'),
                          eventName: '".$query_executed['id']." | ".$query_executed['firstName']." ".$query_executed['lastName']." ',
                          className: 'badge bg-danger',
                          onclick(e, data) {
                            modal".$query_executed['id'].".style.display = 'block';
                            console.log(data);
                          },
                          dateColor: '#bf7521'
                        });";
                }
              }
            ?>
    return events;
}

//getEvents()
</script>

<?php
            $query = "SELECT * FROM `booking`;";
            if ($is_query_run = mysqli_query($connection, $query)){
                while ($query_executed = mysqli_fetch_assoc($is_query_run)){
                    echo "<div id='myModal".$query_executed['id']."' class='modal'>
                        <div class='modal-content'>
                            <div class='close".$query_executed['id']."' id='close'>&times;</div>
                            <form action='delete.php?id=".$query_executed['id']."' method='POST'>
                            <h1 style='text-align:center'>Appointment No. ".$query_executed['id']."</h1>
                            <b>Name:</b> ".$query_executed['firstName']." ".$query_executed['lastName']."<br>
                            <b>Email:</b> ".$query_executed['email']."<br>
                            <b>Phone:</b> ".$query_executed['phone']."<br>
                            <b>Date:</b> ".$query_executed['date']."<br>
                            <b>Message:</b> ".$query_executed['message']."<br>
                            <br><center><div class='col-12'>
                                        <input type='submit' name='submit' class='btn btn-success btn-lg btn-warning' value='Delete'></button>
                                    </div></center>
                        </div>
                    </div>
                    </form>";
                }
            }
        ?>

</html>