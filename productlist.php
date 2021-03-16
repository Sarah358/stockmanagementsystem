<?php
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>product list</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet"  href="fa/css/fontawesome.min.css" />
    <link rel="stylesheet"  href="fa/css/all.css" />
</head>
<body>
    <div class="container mt-md-3">
<table class="table table-hover table-sm">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Category</th>
      <th scope="col">product name</th>
      <th scope="col">price</th>
      <th scope="col">quantity</th>
      <th scope="col">edit</th>
      <th scope="col">delete</th>

    </tr>
  </thead>
  <tbody>
      <?php
      $sqlselect="SELECT category.categoryname,product.productname,product.price,product.quantity FROM product INNER JOIN category on product.cid=category.id";
      $sqlquery=mysqli_query($dbcon,$sqlselect);
      
     $i=1;
      while($row=mysqli_fetch_array($sqlquery)){
        $categoryname=$row["categoryname"];
        $product=$row["productname"];    
        $price=$row["price"];
         $quantity=$row["quantity"];
          ?>
  
    <tr class="table-active">
      <th scope="row"><?php echo $i;?></th>
      <td><?php echo $categoryname;?></td>
      <td><?php echo $product;?></td>
      <td><?php echo $price;?></td>
      <td><?php echo $quantity;?></td>
      <td><i class="fa fa-edit" aria-hidden="true"></i></td>
      <td><i class="fa fa-trash" aria-hidden="true"></i></td>

      
    </tr>
    <?php
    $i++;
    
      }

      mysqli_close($dbcon);
      ?>
</tbody>
</table>
</div>







<script src="js/jquery.min.js"> </script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script> 
</body>
</html>