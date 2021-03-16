<?php
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet"  href="fa/css/fontawesome.min.css" />
    <link rel="stylesheet"  href="fa/css/all.css" />
</head>
<body>
<div class="container">
<div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Products Form</h4>
                </div>
                <div class="card-body">
                 <u><h6> <p>details</p></h6></u>
                  <form method="POST" action="productsave.php">
                    <div class="form-group">
             <label for="exampleFormControlInput1">Category</label>
             <select class="form-control border-primary" name="categoryname"id="sellect">
                 <?php 
                 $sqlselect="select * from category";
                 $sqlquery=mysqli_query($dbcon,$sqlselect);
                 
                 while($row=mysqli_fetch_array($sqlquery)){
                    $id=$row["id"];
                    $categoryname=$row["categoryname"];
                    ?>
                

              <option value="<?php echo $id; ?>"><?php echo $categoryname; ?></option>
              
            
               <?php 
                 }
                 mysqli_close($dbcon);

               ?>
                  </select>
                    </div>
                    <div class="form-group">  
                    <label for="exampleFormControlInput1">product</label>
              <input type="text" class="form-control border-primary" name="product" id="exampleFormControlInput1" placeholder="">     
                      
                    </div>
                    <div class="form-group">  
                    <label for="exampleFormControlInput1">price</label>
              <input type="text" class="form-control border-primary" name="price" id="exampleFormControlInput1" placeholder="">     
                      
                    </div>
                    <div class="form-group">  
                    <label for="exampleFormControlInput1">quantity</label>
              <input type="text" class="form-control border-primary" name="quantity" id="exampleFormControlInput1" placeholder="">     
                      
                    </div>
                    <div class="form-group">       
                      <input type="submit" value="Save" name="Save" class="btn btn-danger">
                    </div>
                  </form>
                </div>
              </div>
</div>


<script src="js/jquery.min.js"> </script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>