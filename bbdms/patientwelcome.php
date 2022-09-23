<?php 
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: patientlogin.php");
}

include('includes/patientheader.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <title>Patient Login</title>
    <style>
        .cont1{

            padding-left: 300px;
            background-color: #fff;
            padding-bottom: 30px;
        }
        .cont2{
            margin-top: -30px;
          margin-top: -30px;
          padding-top: 30px;
          margin-left: -400px;
          padding-left: 300px;
          text-align: center;
          color: #000000;
        }
        
        ol {

  counter-reset: li; 
  list-style: none; 
  padding: 0;
  margin-top: 50px;
  margin-left: 200px;
  margin-right: 200px;
  text-shadow: 0 1px 0 rgba(255,255,255,.5);
}

ol a {
  position: relative;
  display: block;
  padding: .4em .4em .4em 2em;
  margin: .5em 0;
  background: #3A3B3C;
  text-align: center;
  color: #aca8a8;
    font-size: 20px;
  text-decoration: none;
  border-radius: .3em;
  transition: .3s ease-out;

}

ol a:hover { color: #DCDCDC }
ol a:hover:before { transform: rotate(360deg); }
ol a:before {
  content: counter(li);
  counter-increment: li;
  position: absolute;
  left: -1.3em;
  top: 50%;
  margin-top: -1.3em;
  color: black;
  background-color: #FFB6C1;
  height: 2em;
  width: 2em;
  line-height: 2em;
  text-align: center;
  font-weight: bold;
  border-radius: 2em;
  transition: all .3s ease-out;
}
        .sidebar-container {
  position: fixed;
  width: 250px;
  height: 100%;
  left: 0;
  overflow-x: hidden;
  overflow-y: auto;
  background: #242526;
  color: #aca8a8;
            margin-top: 70px;
}

.content-container {
  padding-top: 20px;
}


.sidebar-navigation {
  padding: 0;
  list-style-type: none;
  position: relative;
}

.sidebar-navigation li {
  background-color: transparent;
  position: relative;
  display: inline-block;
  width: 100%;
  line-height: 40px;
}

.sidebar-navigation li a {
  padding: 10px 15px 10px 30px;
  display: block;
  color: #e5e0e0;
    font-size: 17px;
}

.sidebar-navigation li .fa {
  margin-right: 10px;
}

.sidebar-navigation li a:active,
.sidebar-navigation li a:hover,
.sidebar-navigation li a:focus {
  text-decoration: none;
  outline: none;
}

.sidebar-navigation li::before {
  background-color: #2574A9;
  position: absolute;
  content: '';
  height: 100%;
  left: 0;
  top: 0;
  -webkit-transition: width 0.2s ease-in;
  transition: width 0.2s ease-in;
  width: 3px;
  z-index: -1;
}

.sidebar-navigation li:hover::before {
  width: 100%;
}

.sidebar-navigation .header {
  font-size: 20px;
  text-transform: uppercase;
  background-color: #3A3B3C;
  padding: 10px 10px 10px 10px;
  margin-bottom: 10px;
    color: #aca8a8;
    text-align: center;
}

.sidebar-navigation .header::before {
  background-color: transparent;
}


    </style>
</head>
<body>

            <div class="sidebar-container">
  <ul class="sidebar-navigation">
    <li class="header">Navigation</li>
    <li>
      <a href="patientwelcome.php">
        <i class="fa fa-home" aria-hidden="true"></i> Homepage
      </a>
    </li>
    <li>
      <a href="patientrequest.php">
        <i class="fa fa-tachometer" aria-hidden="true"></i> Make a Request
      </a>
    </li> 
   
    
  </ul>
</div>

    <br><br><br><br>
    <div class="cont1">
        <div class="cont2">
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?><hr>
    
    <h2>Important Covid Resources and Links:</h2><hr>
        </div>
    <ol>
    <li><a href="https://www.cowin.gov.in/home" target="_blank">Get Vaccinated</a></li>
    <li><a href="https://covid.icmr.org.in/index.php/testing-facilities#30.8432782/66.6476503/4" target="_blank">Covid Testing Centres</a></li>
    <li><a href="https://api.whatsapp.com/send/?phone=919013151515&text=Hi&app_absent=0" target="_blank">WhatsApp Helpdesk</a></li>
    <li><a href="https://drive.google.com/file/d/1J5W2PFrNRTvDV-H3owf4CBrP9Q99aJS6/view" target="_blank">Statewise Helplines</a></li>
    <li><a href="https://vaccineindia.org/new/admin-master/public/ckeditor/kcfinder/upload/files/Remdesivir-Distributor-List.pdf" target="_blank">Nationwide Ramdesivir Supplies</a></li>
    <li><a href="https://linktr.ee/COVID19support.India" target="_blank">COVID Support</a></li>
        </ol>
    </div>
    
   
        </body>
</html>