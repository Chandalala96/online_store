<?php 
ob_start();
include('header.php');
include('database/db_connection.php');
?>
  
   <?php
    /* Banner */

     include('templates/_banner.php');
  
   /* End Banner */

   /*Top Sellers */ 

include('templates/_top-sellers.php');

    /*End Top Sellers */


    /*Items in stock */

    include('templates/_in-stock.php');

     /* End Items in stock */
    ?>
<?php 
 include('footer.php');
 ?>