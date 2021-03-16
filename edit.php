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
                  <h4>category Form</h4>
                </div>
                <div class="card-body">
                 <u><h6> <p>details</p></h6></u>
                  <form method="POST" action=" ">
                    <div class="form-group">
                    <label for="categoryname">Category name</label>
              <input type="text" class="form-control border-danger" id="categoryname" name="categoryname" placeholder="">
                    </div>
                    <div class="form-group">  
                    <label for="description">description</label>
              <input type="text" class="form-control border-danger" id="description" name="description" placeholder="">     
                      
                    </div>
                    <div class="form-group ml-md-4">   
                      <input type="submit" value="update" name="update" class="btn btn-danger">
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