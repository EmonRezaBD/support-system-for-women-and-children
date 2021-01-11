<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chaya</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Header Section -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white nav-shadow" id="nav">
            <div class="container">
                <a class="navbar-brand" href="/"><img src="img/logo.png" alt="Chaya Logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="#"><span><img src="img/home_icon.png" alt=""></span> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><span><img src="img/icons8_about_24px.png" alt=""></span> About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php"><span><img src="img/icons8_helping_hand_30px.png" alt=""></span> Services</a>
                        </li>
                        <li class="nav-item">
                            <a data-shake class="nav-link" href="#"><span><img src="img/icons8_help_24px.png" alt=""></span> Emergency</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><span><img src="img/icons8_online_support_50px.png" alt=""></span> Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html"><span><img src="img/icons8_user_30px_2.png" alt=""></span> Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End -->

    <!-- Login Area -->
    <section>
        <div class="container">
        <div class="row justify-content-center mt-5">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h2> Welcome to Chaya. </h2>
                        </div>
                        <div class="card-body">
                            <h3> User Account. </h3>
                            <div class="mt-4">
                            <?php

                                    $conn = oci_connect("emonreza","rezacse", "localhost/XE");
                                    if(!$conn){
                                        echo "Failed to connect to Oracle";
                                        exit();
                                    }

                                    $user_id = $_POST["nid"];
                                    $name = $_POST["fullname"];
                                    $age = $_POST["age"];
                                    $email = $_POST["email"];

                                    $phoneNumber =  $_POST["phone"];
                                    $address = $_POST["address"];
                                    $spouses_name = $_POST["spouseName"];
                                    $fathers_name = $_POST["fathersName"];
                                    $mothers_name = $_POST["mothersName"];

                                    $gender = $_POST["gender"];
                                    $birthdate = $_POST["birthdate"];
                                    $password = $_POST["pass"];
                                    $confirmpass = $_POST["passconfirm"];


                                    $query = "insert into USERS(user_id,name,age,dob,email,contact_no,address,spouses_name,fathers_name,mothers_name,gender,password,CONFIRMPASSWORD) values('$user_id','$name','$age','$birthdate','$email','$phoneNumber','$address','$spouses_name','$fathers_name','$mothers_name','$gender','$password','$confirmpass')";

                                    $stid = oci_parse($conn, $query);
                                    oci_execute($stid);

                                    echo "One value updated.";



                                    oci_close($conn);


                                    ?>
                            </div>
                            <div class="list-group mt-4">
                                <a class="list-group-item list-group-item-action" href="complain.html"> Complain Here </a>
                                <a class="list-group-item list-group-item-action" href=userInfoDisplay.php>My Information</a>
                                <a class="list-group-item list-group-item-action" href=councellor.php>Councellor Information</a>
                                <a class="list-group-item list-group-item-action" href="policeStation.php">Police Station</a>
                                <a class="list-group-item list-group-item-action" href="hospitals.html">Hospitals </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
    </section>
    <!-- End -->
       


    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-6">
                    <h4 class="footer-title">Quick Access</h4>
                    <div class="footer-content">
                        <ul>
                            <li><a href="#">How can we help you?</a></li>
                            <li><a href="#">Victim Support</a></li>
                            <li><a href="#">Police Stations</a></li>
                            <li><a href="#">Hospitals</a></li>
                            <li><a href="#">Education</a></li>
                            <li><a href="#">Blood Bank</a></li>
                            <li><a href="#">Counceling</a></li>
                            <li><a href="#">NGO</a></li>
                            <li><a href="#">Report</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-6">
                    <h4 class="footer-title">Site Language</h4>
                    <div class="footer-content">
                        <ul>
                            <li><a href="#">English</a></li>
                            <li><a class="active" href="#">বাংলা</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-6">
                    <h4 class="footer-title">Contact Us</h4>
                    <div class="footer-content">
                        <ul>
                            <li>Flat #289, Block - B, Sector - 11, Uttara Dhaka - 1207, Bangladesh</li>
                            <li>Hoteline 1 : <a href="tel:+8801XXXXXXXX">+8801XXXXXXXX</a></li>
                            <li>Hoteline 2 : <a href="tel:+8801XXXXXXXX">+8801XXXXXXXX</a></li>
                            <li>Email : <a href="mailto:mail@mail.com">mail@mail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>© Chaya 2021 | All Rights Reserved</p>
            </div>
        </div>
    </footer>
    <!-- End -->


    <script src="js/jquery3.5.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

 