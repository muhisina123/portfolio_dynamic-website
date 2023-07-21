<?php
// var_dump($_POST);

//echo "BBBB";
// echo $_POST['dropdown'];
// echo $_POST['date'];
// echo $_POST['email'];
// echo $_POST['password'];
// echo $_POST['address'];
// echo $_POST['city'];
// echo $_POST['number'];

// if(!empty($_POST)){ 
if(isset($_POST['Register'])){ 
  /*!empty($_POST['dropdown']) && !empty($_POST['date']) && */ 
  if(!empty($_POST['dropdown']) && !empty($_POST['date']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['address']) && 
  !empty($_POST['city']) && !empty($_POST['number'])){

    //echo "On traite le formulaire";
    echo $_POST['Register'];
    $Select = $_POST['dropdown'];
    //echo $Select;
     $Date = $_POST['date'];
   // $Name=$_POST['name'];
   // $SurName=$_POST['surname'];
    $Email=$_POST['email'];
     $Password=$_POST['password'];
    $Address=$_POST['address'];
    $City=$_POST['city'];
    $Number=$_POST['number']; 

    //echo " option: $Select , date: $Date ,email  : $Email, password : $Password , Address : $Address, city  : $City ,  Number : $Number" ; 

    /* $regex = '/^(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9]).{8,}$/';
    if (!preg_match($regex, $Password)) {
        echo "invalid password";
    }else{
    //  password encryption
        $Password = password_hash($Password, PASSWORD_DEFAULT);
        echo "valid password";
    } */

    #echo "successful registration";
    //  echo "<br>";
    #echo " email  : $Email, password : $Password , Address : $Address, city  : $City ,  Number : $Number ,option: $Select, date:$Date"; 

    

    $pdo = new PDO('mysql:host=localhost;dbname=reservation;charset=utf8', 'root', '');
    //echo " email  : $Email, password : $Password , Address : $Address, city  : $City ,  Number : $Number ,option: $Select, date:$Date"; 
    $req="INSERT INTO users (service, date, email, password, address, city, phone_number) VALUES ( '$Select', '$Date', '$Email', '$Password', '$Address', '$City','$Number');
    ";
    $req_db=$pdo->prepare($req);
    $req_db->execute();
    echo "successful registration";

  } else{
    echo "* field is  obligatory";
  }


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

    <title>Sign up</title>
</head>
<body>
<div class="reservation">
  <h1>Reservation</h1>
</div>

  <div class="steps">

<form class="row g-3" action="" method="POST">
    <div class="step1"> 
      <h5>Step 1: Choose Your Service</h5>
      <select class="form-select" name="dropdown"  aria-label="Default select example">
        <option selected >Choose Service</option>
        <option   value="1.App development">1.App development</option>
        <option   value="2.ux/ui design">2.ux/ui design</option>
        <option   value="3.Web development"> 3.Web development</option>
      </select>
    </div>

    <div class="step2">
      <h5>Step 2:Date</h5>
      <div class="input-group ">
        <input class="form-control py-2 border-right-0 border" name="date"  type="date">
        <span class="input-group-append ml-n1">
          <div class="input-group-text bg-transparent"><i class="fa fa-calendar-alt"></i></div>
        </span>
      </div>

    </div>
    <div class="Identification">
    <h5 class="step3">Step 3:Identification</h5>


  <div class="col-md-6">
    <label for="inputEmail" class="form-label">Email</label>
    <input type="email" class="form-control" name="email">
  </div>

    <div class="col-md-6">
      <label for="inputPassword" class="form-label">Password</label>
      <input type="password" class="form-control" name="password">
    </div>

  <div class="col-12">
      <label for="inputAddress" class="form-label">Address</label>
      <input type="text" class="form-control" name="address" placeholder="1234 Main St">
    </div>

  <div class="col-md-6">
      <label for="inputCity" class="form-label">City</label>
      <input type="text" class="form-control" name="city">
    </div>


    <div class="col-md-2">
      <label for="inputNumber" class="form-label">Phone Number</label>
      <input type="text" class="form-control" name="number">
    </div>



    <div class="col-12 ">
    <a href=""> <button  class="btn btn-primary" name="Register" >Register</button> </a>
   

    </div>


    </div>
    </form>
    <a href="login.php" target="_blank">   <button  class="btn btn-primary"> Log in</button>  </a>

<script src="script.js">
  </script>
    
</body>
</html>