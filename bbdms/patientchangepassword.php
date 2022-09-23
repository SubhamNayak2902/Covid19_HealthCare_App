<?php
session_start();
 $user_name = $_SESSION['username'];

include('includes/config1.php');
 $db = new mysqli('localhost', 'root', '', 'bbdms');
  if(isset($_POST['submit'])):
  extract($_POST);
  if($old_password!="" && $password!="" && $confirm_pwd!="") :
  $user_name=$_SESSION['username'];
  // sesssion id
  $user_id=$_SESSION['id'];
  $old_pwd=md5(mysqli_real_escape_string($db,$_POST['old_password']));
  $pwd=md5(mysqli_real_escape_string($db,$_POST['password']));
  $c_pwd=md5(mysqli_real_escape_string($db,$_POST['confirm_pwd']));
  if($pwd == $c_pwd) :
  if($pwd!=$old_pwd) :
    $sql="SELECT * FROM `users` WHERE `id`='$user_id' AND `password` ='$old_pwd'";
    $db_check=$db->query($sql);
    $count=mysqli_num_rows($db_check);
  if($count==1) :
    $fetch=$db->query("UPDATE `users` SET `password` = '$pwd' WHERE `id`='$user_id'");
    $old_password=''; $password =''; $confirm_pwd = '';
    $msg_sucess = "Your new password updated successfully.";
  else:
    $error = "The password you gave is incorrect...";
  endif;
  else :
    $error = "Old password and new password are same Please try again...";
  endif;
  else:
    $error = "New password and confirm password do not matched";
  endif;
  else :
    $error = "Please fil all the fields";
  endif;   
  endif;
?> 
<html>
<head>
  <link rel="stylesheet" type="text/css" href="patientstyle.css">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
    .error{
margin-top: 6px;
margin-bottom: 5px;
color: #333333;
background-color: #DCDCDC;
display: table;
width: 100%;
padding: 10px 15px;
font-size: 15px;
font-weight: 550;
border-radius: 3px;
line-height: 14px;
  }
.green{
margin-top: 6px;
margin-bottom: 5px;
color: #333333;
background-color: #DCDCDC;
display: table;
width: 100%;
padding: 10px 15px;
font-size: 15px;
font-weight: 550;
border-radius: 3px;
line-height: 14px;
  }
  body {
    width: 100%;
    min-height: 100vh;
    background-image: url(https://static.vecteezy.com/system/resources/previews/002/088/452/non_2x/background-secure-digital-security-system-vector.jpg);
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
}
  .container
  {

    width: 500px;
    padding-left: 50px;
    padding-right: 50px;

  }


</style>
</head>
<body>
  <div class="container">
  <form method="post" autocomplete="off" id="password_form" class="login-email">
      <div style="text-align: center; font-size: 30px;margin-bottom: 20px; font-weight: 500">CHANGE PASSWORD</div>

      <div class="<?=(@$msg_sucess=="") ? 'error' : 'green' ; ?>" id="logerror">
 <?php echo @$error; ?><?php echo @$msg_sucess; ?>
</div>

      <div class="input-group">
        <input type="password" name="old_password" placeholder="Old Password" required>
      </div>
      <div class="input-group">
        <input type="password" name="password"  id="password" placeholder="New Password" class="ser" />
      </div>
      <div class="input-group">
        <input type="password" name="confirm_pwd" id="confirm_pwd" placeholder="Confirm Password" class="ser" />
      </div>
      <div class="input-group">
        <button name="submit" type="submit"  class="btn" class="submit" style="font-size: 20px"> Submit</button>
      </div>



</form>
</div>
</body>
<!-- Loading Scripts -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap-select.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/dataTables.bootstrap.min.js"></script>
  <script src="js/Chart.min.js"></script>
  <script src="js/fileinput.js"></script>
  <script src="js/chartData.js"></script>
  <script src="js/main.js"></script>
</html>