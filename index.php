<?php
   if(isset($_POST['login'])) {
      $admin = $_POST['email'];
      $pass_admin = $_POST['password'];

      $user = $_POST['email'];
      $pass_user = $_POST['password'];

      $login_gagal = "";

      if ($login_gagal === "" AND $admin == 'mainadmin@gmail.com' AND $pass_admin == '123') {
         $_SESSION["email"] = $admin;
         header("Location: dashboard.php");
         header("Location: adm_panel.php");
      } 
      elseif ($login_gagal === "" AND $user == 'user@gmail.com' AND $pass_user == '111') {
         $_SESSION["email"] = $user;
         header("Location: landing_user.php");
      }
      else {
         $login_gagal = "Email atau Password tidak terdaftar.";
      } 
   }
   else {
      $login_gagal = "";
      $admin = "";
      $pass_admin = "";
      $user = "";
      $pass_user = "";
   }
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <title>Login</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link href="https://fonts.googleapis.com/css?family=Nunito:600,700,900" rel="stylesheet">
   <link href="./assets/css/slogin.css" rel="stylesheet">
</head>

<body id="body">

   <div id="login-card" class="card">
      <div class="card-body">
         <h2 class="text-center" style="color: #790252; padding-top: 15px;">L O G I N</h2>
         <br>

         <?php
            // Tampilan login gagal
            if(isset($note)) {
               echo"<div class\"pesan\>$pesan</div>";
            }

            // Tampilan error
            if($login_gagal !== "") {
               echo"<div class\"gagal\>$login_gagal</div>";
            }
         ?>

         <form action="" method="POST">
            <div class="form-group">
               <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>

            <div class="form-group">
               <input type="password" class="form-control" id="email" placeholder="Enter password" name="password">
            </div>

            <button type="submit" name="login" id="button" class="btn btn-primary deep-purple btn-block ">Submit</button>
            <br><br>

            <div id="btn" class="text-center">
               <button type="button" class="btn btn-primary btn-circle btn-sm"><i class="fa fa-facebook"></i></button>
               <button type="button" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-google"></i></button>
               <button type="button" class="btn btn-info btn-circle btn-sm"><i class="fa fa-twitter"></i></button>
            </div>
         </form>
      </div>
      <div>