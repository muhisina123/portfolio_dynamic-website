<?php 
//var_dump($_POST);


if(!empty($_POST)){ 
  if(!empty($_POST['inputEmail'])  && !empty($_POST['inputPassword']) && !empty($_POST['inputAddress']) && !empty($_POST['inputCity']) && !empty($_POST['inputZip'])  ){
     $Email=$_POST['inputEmail'];
     $Password=$_POST['inputPassword'];
   // $Address=$_POST['inputAddress'];
   // $City=$_POST['inputCity'];
    $Number=$_POST['inputNumber'];   // $State=$_POST['inputState']; && !empty($_POST['inputState'])

    $regex = '/^(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9]).{8,}$/';
      if (!preg_match($regex, $Password)) {
          echo "invalid password";
      }else{
      //  password encryption
          $Password = password_hash($Password, PASSWORD_DEFAULT);
      }
 echo "successful registration";
    //  echo "<br>";
  //  echo " email  : $Email, password : $Password , Address : $Address, city  : $City ,  zip : $Zip"; 
  } else{
      echo "every  field is  obligatory";
  }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"><title>Document</title>
</head>
<body >
<form class="row g-3" form action="" method="POST">
  <div class="col-md-6">
    <label for="inputEmail" class="form-label">Email</label>
    <input type="email" class="form-control"name="inputEmail">
  </div>

  <div class="col-md-6">
    <label for="inputPassword" class="form-label">Password</label>
    <input type="password" class="form-control" name="inputPassword">
  </div>

 <!-- <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" name="inputAddress" placeholder="1234 Main St">
  </div>

 <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" name="inputCity">
  </div>-->

<!--<div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select"> 
      
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>-->
  <div class="col-md-2">
    <label for="inputNumber" class="form-label">Number</label>
    <input type="text" class="form-control" name="inputNumber">
  </div>
<!--  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>-->
  <div class="col-12">
 <a href="test.php"><button type="submit" id="button" class="btn btn-primary">Sign in</button> </a>
  </div>
</form>


<script>
<link src="index.js">
</script>
</body>
</html>