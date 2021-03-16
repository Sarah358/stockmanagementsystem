<?php
include('connect.php');


$categoryname=$_POST['categoryname'];
$description=$_POST['description'];



$sqlinsert = "insert into category(categoryname,description) values('$categoryname', '$description')";

if(mysqli_query($dbcon, $sqlinsert)){
    echo "<script>window.open('categorylist.php','_self');</script>";
}
else{
    echo "an error occured while saving".mysqli_error($dbcon);
}
mysqli_close($dbcon);



?>