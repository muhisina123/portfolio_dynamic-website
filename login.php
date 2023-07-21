<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

// require_once 'form.php';
//echo "BBBB";
$pdo = new PDO('mysql:host=localhost;dbname=reservation;charset=utf8', 'root', '');
// var_dump($pdo);
 //var_dump  ($_POST);

 if(isset($_POST['sign_in'])){ 
  
  if(!empty($_POST['username']) && !empty($_POST['password'])){

    //echo 'login-form data execution';
    $email = $_POST['username'];
    $_SESSION['email'] = $email;

    //echo $email;
    $password = $_POST['password'];
    //echo $password; 
    $req = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $req_db=$pdo->prepare($req);
    $req_db->execute();
    $user = $req_db->fetch(PDO::FETCH_ASSOC);
     
      //var_dump($user);
      if (!empty($user)) {
        echo $email;
       // echo "You are now logged in";
      // header("Location: account.php?email=" . urlencode($email));
       header("Location: account.php"); 
       exit;
    } else {
        echo "Wrong username/password combination";
    }
    
        
        // var_dump($user);
        
        // echo $user['prenom'];

    //  if (empty($username)) {
    //   echo "Username is required";
    // }
    // elseif (empty($password)) {
    //   echo "Password is required";
    // }
  
         }else {
      echo "username or password field needs to be filled";
         }}
   



// $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
//   	$results = mysqli_query($pdo, $query);
// if (mysqli_num_rows($results) == 1) {
//   // $_SESSION['email'] = $username;
//   echo  "You are now logged in";

// }else {
//   echo "Wrong username/password combination";
// }


// var_dump($user);

// echo $user['prenom'];
  
?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log in</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">

 </head>
 <body>
 <form  method="POST">
  <div class="mb-8">
    <label for="Email" class="form-label">Email </label>
    <input type="email" name="username" class="form-control" >
  </div>
  <div class="mb-8">
    <label for="Password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control">
  </div>
 

  <div class="mb-3 ">
  <a href="login.php" ><button type="submit" class="btn btn-primary btn-danger" name="sign_in">Sign in</button> </a>
  </div> 
  </form>

<script src="script.js">
  </script>
 </body>
 </html>