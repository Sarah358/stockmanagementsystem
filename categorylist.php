<?php
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>category list</title>
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
      <th scope="col">Category name</th>
      <th scope="col">description</th>
      <th scope="col">edit</th>
      <th scope="col">delete</th>

    </tr>
  </thead>
  <tbody>
      <?php
      $sqlselect="select * from category";
      $sqlquery=mysqli_query($dbcon,$sqlselect);
      
     $i=1;
      while($row=mysqli_fetch_array($sqlquery)){
          $categoryname=$row["categoryname"];
          $description=$row["description"];
          $id=$row["id"];
          ?>
  
    <tr class="table-active">
      <th scope="row"><?php echo $i;?></th>
      <td><?php echo $categoryname;?></td>
      <td><?php echo $description;?></td>
      <td><a href="edit.php?id=<?php echo $id; ?>"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
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