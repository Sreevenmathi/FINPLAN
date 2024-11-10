<?php 
    session_start();
   if(isset($_POST['logout'])) 
   {
      unset($_SESSION['id']);
       ?> <script type="text/javascript"> window.setTimeout(function() { window.location.href='index.php'; }, 100); </script><?php 
    }
?>