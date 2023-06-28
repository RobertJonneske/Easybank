<?php
  session_start();
  unset($_SESSION['account_no']);
?>
<!DOCTYPE html>
<html>
<head>
  <title>EasyBank</title>
  <link rel="icon" href="../img\logo.png" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/response.css">

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</head>
<body style="background-color: green;"b>

<div class="topnav" id="myTopnav">
  <img src="../img\logo.png" height="44" width="204.8">
  <a href="../index.html" class="active"><i class="fa fa-fw fa-home "></i>Home</a>
  <a href="../login/login.html" style="float: right"><i class="fa fa-fw fa-sign-in "></i>Login</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<br><br>
  <center>
    <h1>Thank you for banking with EasyBank</h1>
    <hr>
    <p>You have been logged out of Our Web-based Banking services of EasyBank</p>
    <p>Kindly close this window for security reasons. ENJOY!!</p>
  </center>
</body>
</html>
