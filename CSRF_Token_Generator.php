<?php

//Name - B.B.Chathurangi
//SID  -  IT17182492

//Session Creation
session_start();

//Set Session Variable for Check User Login Status
$_SESSION['LoginState'] = 'SET';

//Setting a Cookie for Current Session
$sessionID = session_id();
$SessionExpiry = time()+60*60*24;
setcookie('Session', $sessionID, $SessionExpiry, '', '', '', FALSE);

//CSRF Token Generating Process
$CSRF_TOKEN = hash('sha256', $sessionID.rand(1000,10000));

//Setting a Cookie for CSRF Token
//SessionID Use as Cookie Name for CSRF Token for Map the Session ID and CSRF Token
$TokenExpiry = time()+60*60*24;
setcookie($sessionID, $CSRF_TOKEN, $TokenExpiry, '', '', '', FALSE);

header('Location: /DSCT/Home.php');
?>
