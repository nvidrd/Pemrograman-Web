<?php
require 'config.php';
if (isset($_POST['regis'])) {
   $email = $_POST['email'];
   $username = $_POST['username'];
   $password = $_POST['password'];
   $konfirmasi = $_POST['konfirmasi'];

   // Cek username telah digunakan atau belum
   $user = $db->query("SELECT * FROM akun WHERE username='$username'");

   if (mysqli_num_rows($user) > 0) {
      echo "<script>
            alert('Username/Email telah digunakan silakan menggunakan yang lain^^');
            </script>";
   } else {
      // Konfirmasi password sudah benar atau belum
      if ($password == $konfirmasi) {
         $password = password_hash($password, PASSWORD_DEFAULT);
         $query = "INSERT INTO akun(email,username,psw)
                VALUES ('$email', '$username', '$password')";
         $result = $db->query($query);

         if ($result) {
            echo "<script>
                    alert('Registrasi Berhasil');
                    document.location.href='index.php'; 
                    </script>";
         } else {
            echo "<script>
                    alert('Registrasi Gagal');
                    </script>";
         }
      } else {
         echo "<script>
                alert('Konfirmasi Password Salah!');
                </script>";
      }
   }
}
?>



<!DOCTYPE html>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- ===== Iconscout CSS ===== -->
   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

   <!-- ===== CSS ===== -->
   <link rel="stylesheet" href="./assets/css/slogin.css">

   <!--<title>Login & Registration Form</title>-->
</head>

<body>

   <div class="container-reg">
      <div class="forms">
         <div class="form login">
            <span class="title">Registration</span>

            <form action="" method="post">
            <div class="input-field">
                  <input type="text" name="username" placeholder="Enter your username" autocomplete="off" required>
                  <i class="uil uil-user"></i>
               </div>
               <div class="input-field">
                  <input type="text" name="email" placeholder="Enter your email" required>
                  <i class="uil uil-envelope icon"></i>
               </div>
               <div class="input-field">
                  <input type="password" name="password" class="password" placeholder="Create a password" required>
                  <i class="uil uil-lock icon"></i>
                  <i class="uil uil-eye-slash showHidePw"></i>
               </div>
               <div class="input-field">
                  <input type="password" name="konfirmasi" class="password" placeholder="Confirm a password" required>
                  <i class="uil uil-lock icon"></i>
                  <i class="uil uil-eye-slash showHidePw"></i>
               </div>
               <div class="input-field button">
                  <input type="submit" name="regis"value="SignUp">
               </div>
            </form>

            <div class="login-signup">
               <span class="text">Sudah punya akun?
                  <a href="./index.php" class="text signup-link">Login Now</a>
               </span>
            </div>
         </div>
      </div>
   </div>

   <script>
      const container = document.querySelector(".container"),
         pwShowHide = document.querySelectorAll(".showHidePw"),
         pwFields = document.querySelectorAll(".password");

      //   js code to show/hide password and change icon
      pwShowHide.forEach(eyeIcon => {
         eyeIcon.addEventListener("click", () => {
            pwFields.forEach(pwField => {
               if (pwField.type === "password") {
                  pwField.type = "text";

                  pwShowHide.forEach(icon => {
                     icon.classList.replace("uil-eye-slash", "uil-eye");
                  })
               } else {
                  pwField.type = "password";

                  pwShowHide.forEach(icon => {
                     icon.classList.replace("uil-eye", "uil-eye-slash");
                  })
               }
            })
         })
      })
   </script>


</body>

</html>