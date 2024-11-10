<?php 
    session_start();
   if(isset($_POST['logout'])) 
   {
      unset($_SESSION['aId2']);
       ?> <script type="text/javascript"> window.setTimeout(function() { window.location.href='advsr_login.php'; }, 100); </script><?php 
    }
?>