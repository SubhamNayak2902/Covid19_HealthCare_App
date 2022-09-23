<?php include('includes/patientheader.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <title>Patient Login</title>
    <style>
        .cont1{
            padding-left: 330px;
            background-color: white;
            margin-bottom: -30px;
        }
        .cont2{
          margin-top: -30px;
          margin-top: -30px;
          padding-top: 30px;
          margin-left: -400px;
          padding-left: 300px;
          text-align: center;
          color: #3A3B3C;
        }
.Docdetails
{
  padding-top: 50px;
  padding-bottom: 20px;
  display: inline-block;
}

.Docdetails div {
  display: inline-block;
  width: 450px;
  padding: 1.5em 3em 1.5em 3em;
  margin: .4em .5em 1em .5em; 
  background: #3A3B3C;
  color: #DCDCDC;
    font-size: 18px;
    font-weight: 50;
  border-radius: .3em;
  transition: .3s ease-out;
}
.Docdetails div:hover{
  box-shadow: 5px 5px 20px #000000 ;
}
.Docdetails div a button
{
  text-decoration: none;
  list-style: none;
}
button
{
  
  margin-top: 20px;
  color: #000000;
  background-color:RGB(0, 173, 255);
  padding: 7px 13px 7px 13px;
  box-shadow: none;
  border: none;
  border-radius: 30px; 
}
button:hover
{
  z-index: 4;
  box-shadow: 3px 3px 10px #18191A ;
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
  color: #eae5e5;
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
    
    <h1>Doctors' Details:</h1><hr>
        </div>
<div class="Docdetails">
      <div>
        <h2>Dr. Ankit Aggarwal</h2>
    Hospital Name:AIIMS<br>
    Hospital Address:New Delhi<br>
    Free Timings:7pm-9pm<br>
    <a href="mailto:ankit@gmail.com" target="_blank"><button>Make Request</button> </a>
      </div>
    <div><h2>Dr. Sunaina Sharma</h2>Hospital Name:Apollo Hospitals<br>
    Hospital Address:Chennai,TamilNadu<br>
    Free Timings:8:30pm-10pm<br><a href="mailto:sunaina@gmail.com" target="_blank"><button>Make Request</button> </a></div>
    <div><h2>Dr. Raghavendra Biswal</h2>Hospital Name:KIMS<br>
    Hospital Address:Hyderabad,Telengana<br>
    Free Timings:6am-8am<br><a href="mailto:raghav@gmail.com" target="_blank"><button>Make Request</button> </a></div>
    <div><h2>Dr. Sushmita Reddy</h2>Hospital Name: Apollo Hospitals<br>
    Hospital Address:Bangalore,Karnataka<br>
    Free Timings:7pm-9pm<br><a href="mailto:amruta@gmail.com" target="_blank"><button>Make Request</button> </a></div>
    <div><h2>Dr. Neil Mehta</h2>Hospital Name:The Medicity<br>
    Hospital Address:Gurgaon,Haryana<br>
    Free Timings:12pm-1:30pm<br><a href="mailto:neil@gmail.com" target="_blank"><button>Make Request</button> </a></div>
    <div><h2>Dr. Ankush Tripathi</h2>Hospital Name: Apollo Hospitals<br>
    Hospital Address:Mumbai,Maharastra<br>
    Free Timings:8:30pm-10pm<br><a href="mailto:ankush@gmail.com" target="_blank"><button>Make Request</button></a></div>
    <div><h2>Dr. Dhvani Lokhande</h2>Hospital Name:Apollo Hospitals<br>
    Hospital Address:Vishakapatnam,AP<br>
    Free Timings:6am-8am<br><a href="mailto:dhvani@gmail.com" target="_blank"><button>Make Request</button></a></div>
    <div><h2>Dr. Amruta Singh</h2>Hospital Name:AMRI Hospitals<br>
    Hospital Address:Bhubaneswar,Odisha<br>
    Free Timings:7pm-9pm<br><a href="mailto:sushmi@gmail.com" target="_blank"><button>Make Request</button></a></div>
    <div><h2>Dr. Shweta Shetty</h2>Hospital Name: KIMS<br>
    Address:Thiruvananthapuram,Kerala<br>
    Free Timings:8:30pm-10pm<br><a href="mailto:shweta@gmail.com" target="_blank"><button>Make Request</button></a></div>
    <div><h2>Dr. Ashish Bansal</h2>Hospital Name:AIIMS<br>
    Hospital Address:New Delhi<br>
    Free Timings:7pm-9pm<br><a href="mailto:ashish@gmail.com" target="_blank"><button>Make Request</button></a></div>
</div>
    </div>
   
        </body>
</html>