<?php
include('connect.php');


$categoryname=$_POST['categoryname'];
$product=$_POST['product'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];



$sqlinsert = "insert into product(cid,productname,price,quantity) values('$categoryname', '$product','$price','$quantity')";

if(mysqli_query($dbcon, $sqlinsert)){
    echo "<script>window.open('productlist.php','_self');</script>";
    
}
else{
    echo "an error occured while saving".mysqli_error($dbcon);
}
mysqli_close($dbcon);



?>