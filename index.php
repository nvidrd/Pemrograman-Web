<?php
session_start();
require 'config.php';

if (isset($_POST['login'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];

   $query =  "SELECT * FROM akun 
            WHERE username = '$username'
            OR email = '$username'";

   $result = $db->query($query);

   $row = mysqli_fetch_array($result);

   // Untuk cek var password apakah = psw pada database table akun
   if (password_verify($password, $row['psw'])) {
      $_SESSION['login'] = true;
      if ($row['level'] == 'admin') {
         echo "<script>
                alert('Welcome, $username');
                document.location.href='adm_panel.php';
                </script>";
      } else {
         echo "<script>
                alert('Welcome, $username');
                document.location.href='landing_user.php';
                </script>";
      }
   } else {
      echo "<script>
                alert('Username/Email dan password salah');
             </script>";
   }
}
?>

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
            alert('username telah digunakan silakan gunakan username lain');
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
                alert('Konfirmasi Pass Salah!');
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
   <link rel="stylesheet" href="./assets/css/slogin.css?v1">

   <!--<title>Login & Registration Form</title>-->
</head>

<body>

   <div class="container">
      <div class="forms">
         <div class="form login">
            <span class="title">Login</span>

            <form action="" method="post">
               <div class="input-field">
                  <input type="text" placeholder="Email/Username" name="username" required>
                  <i class="uil uil-envelope icon"></i>
               </div>
               <div class="input-field">
                  <input type="password" class="password" placeholder="Password" name="password" required>
                  <i class="uil uil-lock icon"></i>
                  <i class="uil uil-eye-slash showHidePw"></i>
               </div>
               <div class="input-field button">
                  <input type="submit" name="login" id="login" value="Login">
               </div>
            </form>

            <div class="login-signup">
               <span class="text">Belum punya akun?
                  <a href="./regis.php " class="text signup-link">Signup Now</a>
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