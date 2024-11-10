<?php 
    session_start();
   if(isset($_POST['logout'])) 
   {
      unset($_SESSION['aId']);
       ?> <script type="text/javascript"> window.setTimeout(function() { window.location.href='admin_login.php'; }, 100); </script><?php 
    }
?>