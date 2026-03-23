   <?php 
    
        session_start(); 
        session_destroy();

        header("location:login.php");
        
    
    ?>
   <?php include_once('cabecera.php'); ?>

   

   <?php include('pie.php') ?>