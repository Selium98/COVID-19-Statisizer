
<?php
         $dbhost = 'db_host_name';
         $dbuser = 'root';
         $dbpass = '';
         $dbname = 'coronaworld_db';

         $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
      
         if(! $con ) {
            die('Could not connect: ' . mysqli_error());
         }
         
         echo 'Connected successfully';
         mysqli_close($con);
      ?>