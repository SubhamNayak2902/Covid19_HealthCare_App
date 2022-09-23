<?php
error_reporting(0);
include('includes/config.php');
?>
<!-- index thanmayee-->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Covid Relief Management System</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="./css/modern-business.css" rel="stylesheet">

    <style>
        .navbar-toggler {
            z-index: 1;
        }

        @media (max-width: 576px) {
            nav>.container {
                width: 100%;
            }
        }

        .carousel-item.active,
        .carousel-item-next,
        .carousel-item-prev {
            display: block;
        }

        .td {
            font-size: 4rem;
            font-weight: 400;
            overflow: hidden;
            white-space: nowrap;
            animation: typing 5s steps(24), blink 1s ease-in-out 7s infinite;
            width: 10ch;
            margin: auto;
            border-right: 4px solid rgb(43, 62, 70);
            color: black;
        }

        @keyframes typing {
            75% {
                width: 0ch;
                color: #fcf876;
            }

            100% {
                width: 20ch;
            }
        }

        @keyframes blink {
            0% {
                border-right: 4px solid rgba(255, 255, 255, 0);
            }

            100% {
                border-right: 4px solid rgb(43, 62, 70);
            }
        }

        .mb-5 {
            margin-top: -1rem;
        }

        .tb{
            font-size: 3.4rem;
            font-weight: 300;
            overflow: hidden;
            white-space: nowrap;
            animation: typing 5s steps(24), blink 1s ease-in-out 7s infinite;
            width: 20ch;
            margin: auto;
            border-right: 4px solid rgb(43, 62, 70);
            color: black;
        }

        .bingwidget {
            padding-left: 250px;
            padding-right: 250px;
            padding-bottom: 25px;
    
        }

        .bldgrp{
            margin-top: 5rem;
        }
       
        .don{
            margin-top: 7rem;
        }

        .gh{
            padding-top: 7rem;
        }

        .cov{
            padding-top: 3rem;
            padding-bottom: 3rem;
        }
        
         .fixed-bg{
            background-image: url('https://images.unsplash.com/photo-1514810771018-276192729582?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80');
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            height: 100%; 
            width: 100%;
        }
        
    </style>

</head>

<body>

    <!-- Navigation -->
    <?php include('includes/header.php'); ?>
    <?php include('includes/slider.php'); ?>

    <!-- Page Content -->
    <div class="container">

        <h1 class="my-4 mt-3 mb-5 text-center  td">WELCOME</h1>
        <h2 class="my-4 mt-5 mb-5 text-center text-primary tb ">COVID RELEIF WEBSITE</h2>
        
        
        <!--What is covid-19-->

         <div class="row cov">
            <div class="col-lg-6">
                <h2>WHAT IS COVID-19</h2>
                <p style="padding-top: 1rem;"> Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.Most people 
                infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring
                special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes,
                chronic respiratory disease, and cancer are more likely to develop serious illness.</p>
               <p>The best way to prevent and slow down transmission is to be well informed about the COVID-19 virus, the disease it causes and 
               how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. 
                The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, 
                so it’s important that you also practice respiratory etiquette</p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="https://static.toiimg.com/thumb/81833147.cms?width=804&height=603&resizemode=4&imgsize=142309" alt="">
            </div>
        </div>


        <div class="fixed-bg">
        <h1 class="my-4 mt-5 mb-5 text-center gh">LIVE COVID STATISTICS</h1>
        <div class="bingwidget" data-type="covid19" data-market="en-us" data-language="en-us" data-app="bingwidget"></div>
       </div>
        <script src="//www.bing.com/widget/bootstrap.answer.js" async=""></script>
        <!-- Marketing Icons Section -->


        <!-- Features Section -->
        <div class="row bldgrp">
            <div class="col-lg-6">
                <h2>BLOOD GROUPS</h2>
                <p> Blood group of any human being will mainly fall in any one of the following groups.</p>
                <ul>
                    <li>A positive or A negative</li>
                    <li>B positive or B negative</li>
                    <li>O positive or O negative</li>
                    <li>AB positive or AB negative.</li>
                </ul>
                <p>A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended foods to eat prior to your donation.</p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="https://www.news-medical.net/image.axd?picture=2020%2F10%2Fshutterstock_603317201-1.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4 don">
            <div class="col-md-8">
                <h4>UNIVERSAL DONORS AND RECIPIENTS</h4>
                <p>
                    The most common blood type is O, followed by type A.

                    Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="become-donar.php">Become a Donar</a>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
        <?php include('includes/footer.php'); ?>
       

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>