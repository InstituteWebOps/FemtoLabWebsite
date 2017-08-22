<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: login.php");  //redirecting to login page upon logout
   }
?>