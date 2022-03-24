<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="./dash_login.css">
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/css/intlTelInput.css"/>
  <script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <title>Dashboard</title>
</head>
<body class="striped">
    <div class="loader"></div>

    <br>
<h2 class="text">Welcome to the Kenya License Board of Surveyors Help Desk</h2> 
<hr>   
    <div class="main">
        <p class="sign" align="center">Sign in</p>
        <form class="form1" method="post" action="../Backend/dashboard/dash_login.php">
            <input class="un " name= firstname type="text" align="center" placeholder="Username">
            <input  class="pass" type="password" name="password" align="center" placeholder="Password">
            <button type="submit" class="submit" align="center">Sign in</button>
            <p class="forgot" align="center"><a href="#">Forgot Password?</p></a>
        </form>       
    </div>       
   
</body>
</html>