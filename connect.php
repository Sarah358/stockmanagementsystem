<!-- connect to the database -->

<?php
 $username="root";
 $password="";
 $hostname="localhost";
 $dbname="stockmanagement";
 $dbcon= mysqli_connect($hostname,$username,$password,$dbname);

 if(!$dbcon){
     echo "an error occured".mysqli_connect_error($dbcon);
 }
 
?>