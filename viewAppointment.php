<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Barangay 872, Pandacan | Official Website </title>
        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
         <!-- CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

        <!-- JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
        
        <!-- Calendar  JS -->

        <!-- CSS for full calender -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet" />
        <!-- JS for jQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- JS for full calender -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
        <!-- bootstrap css and js -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="assets/calendar/dist/calendar-gc.min.js"></script>

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
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 100; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
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
            font-size:1.4em;
            line-height:2;
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
    <body>
        <!-- BOOTSTRAP JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>        
        
        <!-- NAVBAR START -->
        <div class="container py-3 px-0">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
                <a href="home.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                    <img src="assets/img/logo.png" height="80px" width="auto">
                </a>

                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="home.php" class="nav-link px-2 link-secondary">Home</a></li>
                    <li><a href="about.php" class="nav-link px-2 link-dark">About Us</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle link-dark" href="#" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown">
                            <li><a class="dropdown-item" href="#">Request Document</a></li>
                            <li><a class="dropdown-item" href="#">View Appointments</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link px-2 link-dark " href="contact.php">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link px-2 link-dark " href="faq.php">F.A.Q.</a></li>
                    <li class="nav-item"><a class="nav-link px-2 link-dark " href="login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link px-2 link-dark " href="signup.php">Sign-up</a></li>
                </ul>
                
            </header>
        </div>
        <!-- NAVBAR END -->
        
        <!-- APPOINTMENTS IN CALENDAR FORM -->
        <div class="container-lg px-0 border" style ="box-shadow:  20px 20px 60px #bfbfbf,
             -20px -20px 60px #ffffff;">
            <div class="px-2 rounded-3">
                <div class="container-fluid py-4">
                    <h1 class="display-5 fw-bold text-left">View Appointments</h1>
                    <div class="mx-auto" style="width: 1000px">                        
                    </div>
                </div>
            </div>
            <div class ="container-fluid border-top border-bottom">
                <div class="row bg-light p-3">
                    <div id="calendar" ></div>                           
                </div>            
            </div>
        </div>
        
        <!--SCRIPT FOR CALENDAR-->
        <script>
            $(document).ready(function() {
                display_events();
            }); //end document.ready block

            function display_events() {
                var events = new Array();
            $.ajax({
                url: 'display_event.php',  
                dataType: 'json',
                success: function (response) {
                    
                var result=response.data;
                $.each(result, function (i, item) {
                    events.push({
                        id: result[i].id,
                        title:"Name: "+ result[i].firstName+" "+result[i].lastName+"\n"+"reason: "+result[i].message,
                        date: result[i].date,
                    
                        color: result[i].color,
                    
                    }); 	
                })
                var calendar = $('#calendar').fullCalendar({
                    defaultView: 'month',
                    timeZone: 'local',
                    editable: true,
                    selectable: true,
                    selectHelper: true,
                    events: events,
                
                    }); //end fullCalendar block	
                },//end success block
                error: function (xhr, status) {
                alert(response.msg);
                }
                });//end ajax block	
            }


        </script>
    </body>
</html>
