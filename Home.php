<?php

//Name - B.B.Chathurangi
//SID  -  IT17182492

session_start();

//Check User Login Status
if (!isset ($_SESSION['LoginState'])){
    ob_start();
    header('Location: /Login.html');
    ob_end_flush();
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Required CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!--Required Javascript -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/token_request.js"></script>

    <title>Home</title>
  </head>
    <style>
        body {
            background: url(images/3.png);
        }
    </style>

  <!--Invoking a Javascript Function to Get CSRF Token and Set it in the Hidden Field of Form -->
  <body onload="tokenRequest('<?php echo $_COOKIE['Session'];?>')">
  <div class="wrapper">
    <form name="UserLoginForm" action="Token_Validation.php"  method="post">
      <input type="text" required="required" class="input-group mb-3" name="u_name" placeholder="Please Enter Your Name">
      <br>
      <input type="text" required="required" name="sid" placeholder="Please Enter Your SID">
      <br>
      <input type="hidden" id="MyToken" name="MyToken" value="" />
      <input type="hidden" id="CSRFcookie" name="CSRFcookie" value="" />
      <input type="submit"  class="btn btn-submit"value="Submit">
    </form>
  </div>
  </body>
</html>
