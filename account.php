<?php
//echo "hello";

session_start(); // Start the session if it hasn't been started already
//include_once 'login.php';

if (isset($_POST['logout'])) {
  unset($_SESSION['email']); // Clear session
  // session_unset();
    //session_destroy();
    header("Location: index.php");
    exit;

}
// unset($_SESSION['email']); //clear session

// Check if the email is stored in the session
if (isset( $_SESSION['email'])) {
  //$email = $_GET['email'];  
  $email = $_SESSION['email'];
  echo "welcome ";
    echo  $email;
    // Database connection
    $pdo = new PDO('mysql:host=localhost;dbname=reservation;charset=utf8', 'root', '');

    $req = "SELECT service, date,email,password,address,city,phone_number FROM users WHERE email=:email";
    $req_db = $pdo->prepare($req);
    $req_db->execute(['email' => $email]);
    $user = $req_db->fetch(PDO::FETCH_ASSOC);
    //var_dump($user);

    if (isset($_POST['delete'])) {
        $deleteStmt = $pdo->prepare("UPDATE users SET service = ' ', date = ' ' WHERE email = :email");
        $dlt= $deleteStmt->execute(['email' => $email]);      
        var_dump($dlt);
        header("Location: account.php");
        exit;

    
    }
    if (isset($_POST['deleteAll'])) {
        $deleteStmt = $pdo->prepare("DELETE FROM users WHERE email = :email");
        $dltAll = $deleteStmt->execute(['email' => $email]);
        var_dump($dltAll);
        header("Location: form.php");
        exit;

    }
    

    if (isset($_POST['update'])) {
        $service = $_POST['service'];
        $date = $_POST['Editdate'];
        $updateStmt = $pdo->prepare("UPDATE users SET service = :service, date = :date WHERE email = :email");
        $updateStmt->execute(['service' => $service, 'date' => $date, 'email' => $email]);
        $update = $updateStmt->fetch(PDO::FETCH_ASSOC);
        var_dump($update);
        header("Location: account.php");
        exit;

     
     }
    if (isset($_POST['updateAll'])) {
        $email=$_POST['email'];
        $password =$_POST['password'];
        $address =$_POST['address'];
        $city =$_POST['city'];
        $phone_number =$_POST['phone_number'];
        $updateStmt = $pdo->prepare("UPDATE users SET email=:email, password=:password, address=:address, city=:city, phone_number=:phone_number WHERE email = :email");
        $updateStmt->execute(['email' => $email, 'password'=>$password, 'address'=>$address, 'city'=>$city, 'phone_number'=>$phone_number]);
        var_dump($updateStmt);
        header("Location: account.php");
        exit;

     }
 


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="account.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 
</head>

<body>
<div class="container">      
    <div class="div-box">
        <h2>My Appointment</h2>
        <?php if (!empty($user)): ?>
          <?php if (!empty($user['service']) && !empty($user['date'])): ?>
            <p>Service: <?= $user['service'] ?></p>
            <p>Date: <?= $user['date'] ?></p>
            <?php endif; ?>
        <?php endif; ?>
            <form method="post">
              <div class="hidden-form">
                <select name="service">
                  <option value="1.App development">1.App development</option>
                  <option value="2.ux/ui design">2.ux/ui design</option>
                  <option value="3.Web development">3.Web development</option>
                </select>
                <div class="input-group">
                  <input class="form-control py-2 border-right-0 border" name="Editdate" type="date">
                  <span class="input-group-append ml-n1">
                    <div class="input-group-text bg-transparent"><i class="fa fa-calendar-alt"></i></div>
                  </span>
                </div>
          </div>
          <div class="button-container">
          <button type="submit" name="update" class="hidden-submit-btn"><i class="fas fa-pencil-alt"></i></button>
          <button type="submit" name="update" class="hidden-submit-btn">Submit</i></button>
              <button class="delete-btn" title="Delete" name="delete"><i class="fas fa-trash"></i></button>
            </div>
          </form>
          
        
    </div>
    
    <div class="div-box">
        <h2>My account</h2>
        <?php if (!empty($user)): ?>
          <p>Email:<?= $user['email'] ?></p>
            <p>Password: <?= $user['password'] ?></p>
          <p>address: <?= $user['address'] ?></p>
          <p>city: <?= $user['city'] ?></p>
          <p>phone_number: <?= $user['phone_number'] ?></p>
        <form method="post" class="hidden-form">
        <input type="text" name="email" placeholder="Email" value="<?= $user['email'] ?>">
        <input type="password" name="password" placeholder="Password" value="<?= $user['password'] ?>">
        <input type="text" name="address" placeholder="Address" value="<?= $user['address'] ?>">
        <input type="text" name="city" placeholder="City" value="<?= $user['city'] ?>">
        <input type="text" name="phone_number" placeholder="Phone Number" value="<?= $user['phone_number'] ?>">
        <button type="submit" name="updateAll" class="hidden-submit-btn">Update</button>
        <?php endif; ?>
    <div class="button-container">
    <button class="update-btn_All" title="Update" name="updateAll"><i class="fas fa-pencil-alt"></i></button>
    <button class="delete-btn_All" title="Delete" name="deleteAll"><i class="fas fa-trash"></i></button>
  </div>
      </form>
    </div>
   
</div>

<div class="logout-button">
 <form method="post">
   <button name="logout">Log Out</button>
        </form> 
</div>

<script src="script.js">
</script>
</body>
</html>


