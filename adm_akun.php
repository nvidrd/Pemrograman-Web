<?php
session_start();
// jika $sessionnya sudah ada maka,
if (!isset($_SESSION['login'])) {
   echo "<script>
                alert('Akses Anda ditolak, silakan login terlebih dahulu')
                document.location.href = 'login.php'
            </script>";
};


$koneksi = mysqli_connect("localhost", "root", "", "tugas_web");

// SEARCH NAMA AKUN
require "config.php";

if (isset($_GET['search'])) {
   $keyword = $_GET['keyword'];
   $query  = mysqli_query($koneksi, "SELECT * FROM akun where
   username       LIKE '%$keyword%' OR
   email        LIKE '%$keyword%' 
   ");
} else {
   $query = mysqli_query($koneksi, "SELECT * FROM akun");
}

$akun = [];
while ($row = mysqli_fetch_assoc($query)) {
   $akun[] = $row;
}


// HITUNG JUMLAH PRODUK
$query2 = "SELECT id FROM produk ORDER BY id";
$query2_run = mysqli_query($koneksi, $query2);

$row2 = mysqli_num_rows($query2_run);

function query2($data2)
{
   global $koneksi;
   $hasil2 = mysqli_query($koneksi, $data2);
   $rows2 = [];
   while ($row2 = mysqli_fetch_assoc($hasil2)) {
      $rows2[] = $row2;
   }

   return $rows2;
}


// HITUNG JUMLAH AKUN
$query3 = "SELECT id FROM akun ORDER BY id";
$query3_run = mysqli_query($koneksi, $query3);

$row3 = mysqli_num_rows($query3_run);

function query3($data3)
{
   global $koneksi;
   $hasil3 = mysqli_query($koneksi, $data3);
   $rows3 = [];
   while ($row3 = mysqli_fetch_assoc($hasil3)) {
      $rows3[] = $row3;
   }

   return $rows3;
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Pages</title>

   <!-- CONNECT -->
   <link href="./assets/css/spanel.css" rel="stylesheet" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>

   <!-- Dashboard -->
   <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
      <!-- Vertical Navbar -->
      <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
         <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand py-lg-9 mb-lg-17 px-lg-6 me-0" href="#">
               <p>ADMIN ONLY</p>
               <!-- <img src="https://i.postimg.cc/yYk7T52Q/skincare-2.png" alt="..."> -->
            </a>
            <!-- User menu (mobile) -->
            <div class="navbar-user d-lg-none">
               <!-- Dropdown -->
               <div class="dropdown">
                  <!-- Toggle -->
                  <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <div class="avatar-parent-child">
                        <img alt="Image Placeholder" src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar- rounded-circle">
                        <span class="avatar-child avatar-badge bg-success"></span>
                     </div>
                  </a>
                  <!-- Menu -->
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarAvatar">
                     <a href="#" class="dropdown-item">Profile</a>
                     <a href="#" class="dropdown-item">Settings</a>
                     <a href="#" class="dropdown-item">Billing</a>
                     <hr class="dropdown-divider">
                     <a href="./logout.php" class="dropdown-item">Logout</a>
                  </div>
               </div>
            </div>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidebarCollapse">
               <!-------------- Navigation -------------->
               <ul class="navbar-nav">
                  <li class="nav-item">
                     <a class="nav-link" href="./adm_panel.php">
                        <i class="bi bi-house"></i> Dashboard
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="./adm_review1.php">
                        <i class="bi bi-bookmarks"></i> Product Reviews
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="./adm_akun.php">
                        <i class="bi bi-people"></i> All Accounts
                     </a>
                  </li>
               </ul>
               <!-------------- Divider -------------->
               <hr class="navbar-divider my-5 opacity-20">
               <!-------------- Navigation --------------->
               <ul class="navbar-nav mb-md-4">
                  <li>
                     <div class="nav-link text-xs font-semibold text-uppercase text-muted ls-wide" href="#">
                        Admin
                        <span class="badge bg-soft-primary text-primary rounded-pill d-inline-flex align-items-center ms-4">3+</span>
                     </div>
                  </li>
                  <li>
                     <a href="#" class="nav-link d-flex align-items-center">
                        <div class="me-4">
                           <div class="position-relative d-inline-block text-white">
                              <img alt="Image Placeholder" src="https://i.pinimg.com/originals/7a/2c/17/7a2c17c9af1c19f50b411540ffa599af.jpg" class="avatar rounded-circle">
                              <span class="position-absolute bottom-2 end-2 transform translate-x-1/2 translate-y-1/2 border-2 border-solid border-current w-3 h-3 bg-success rounded-circle"></span>
                           </div>
                        </div>
                        <div>
                           <span class="d-block text-sm font-semibold">
                              Refal Hady
                           </span>
                           <span class="d-block text-xs text-muted font-regular">
                              Admin 1
                           </span>
                        </div>
                        <div class="ms-auto">
                           <i class="bi bi-chat"></i>
                        </div>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="nav-link d-flex align-items-center">
                        <div class="me-4">
                           <div class="position-relative d-inline-block text-white">
                              <img alt="Image Placeholder" src=" https://i.pinimg.com/736x/27/3b/f7/273bf72df5c66a0925b31a214f52d673.jpg" class="avatar rounded-circle">
                              <span class="position-absolute bottom-2 end-2 transform translate-x-1/2 translate-y-1/2 border-2 border-solid border-current w-3 h-3 bg-success rounded-circle"></span>
                           </div>
                        </div>
                        <div>
                           <span class="d-block text-sm font-semibold">
                              Iqbaal Ramadhan
                           </span>
                           <span class="d-block text-xs text-muted font-regular">
                              Admin 2
                           </span>
                        </div>
                        <div class="ms-auto">
                           <i class="bi bi-chat"></i>
                        </div>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="nav-link d-flex align-items-center">
                        <div class="me-4">
                           <div class="position-relative d-inline-block text-white">
                              <img alt="..." src="https://i.pinimg.com/originals/19/85/31/1985315d84bb95dc7e57955471c0447a.jpg" class="avatar rounded-circle">
                              <span class="position-absolute bottom-2 end-2 transform translate-x-1/2 translate-y-1/2 border-2 border-solid border-current w-3 h-3 bg-danger rounded-circle"></span>
                           </div>
                        </div>
                        <div>
                           <span class="d-block text-sm font-semibold">
                              Awkarin
                           </span>
                           <span class="d-block text-xs text-muted font-regular">
                              Admin 3
                           </span>
                        </div>
                        <div class="ms-auto">
                           <i class="bi bi-chat"></i>
                        </div>
                     </a>
                  </li>
               </ul>
               <!-- Push content down -->
               <div class="mt-auto"></div>
               <!-- User (md) -->
               <ul class="navbar-nav">
                  <li class="nav-item">
                     <a class="nav-link" href="./logout.php">
                        <i class="bi bi-box-arrow-left"></i> Logout
                     </a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>



      <!-------------- Main content -------------->
      <div class="h-screen flex-grow-1 overflow-y-lg-auto">

         <!-------------- Header -------------->
         <header class="bg-surface-primary border-bottom pt-6">
            <div class="container-fluid">
               <div class="mb-npx">
                  <div class="row align-items-center">
                     <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                        <!-- Title -->
                        <h1 class="h2 mb-0 ls-tight">Accounts</h1>
                     </div>
                     <!-- Actions -->
                     <div class="col-sm-6 col-12 text-sm-end">
                        <div class="mx-n1">
                           <form action="" method="get">
                              <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1">
                                 <span class=" pe-2">
                                    <input type="text" name="keyword" id="keyword" placeholder="Cari.." autocomplete="off">
                                    <button type="submit" name="search" class="cari"> <i class="bi bi-search" style="font-size: 15px; color: white"></i></button>
                                 </span>
                                 <!-- <span>Edit</span> -->
                              </a>
                           </form>
                        </div>
                     </div>
                  </div>



                  <!-------------- Nav --------------->
                  <ul class="nav nav-tabs mt-4 overflow-x border-0">
                     <li class="nav-item ">
                        <a href="#" class="nav-link active">All files</a>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link font-regular">Shared</a>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link font-regular">File requests</a>
                     </li>
                  </ul>
               </div>
            </div>
         </header>



         <!-------------- Main -------------->
         <main class="py-6 bg-surface-secondary">
            <div class="container-fluid">
               <!-- Card stats -->
               <div class="row g-6 mb-6">
                  <div class="col-xl-3 col-sm-6 col-12">
                     <div class="card shadow border-0">
                        <div class="card-body">
                           <div class="row">
                              <div class="col">
                                 <span class="h6 font-semibold text-muted text-sm d-block mb-2">Budget</span>
                                 <span class="h3 font-bold mb-0">Rp. 1M+</span>
                              </div>
                              <div class="col-auto">
                                 <div class="icon icon-shape bg-tertiary text-white text-lg rounded-circle">
                                    <i class="bi bi-credit-card"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="mt-2 mb-0 text-sm">
                              <span class="badge badge-pill bg-soft-success text-success me-2">
                                 <i class="bi bi-arrow-up me-1"></i>13%
                              </span>
                              <span class="text-nowrap text-xs text-muted">Since last month</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12">
                     <div class="card shadow border-0">
                        <div class="card-body">
                           <div class="row">
                              <div class="col">
                                 <span class="h6 font-semibold text-muted text-sm d-block mb-2">All Products</span>
                                 <span class="h3 font-bold mb-0"><?php echo $row2; ?></span>
                              </div>
                              <div class="col-auto">
                                 <div class="icon icon-shape bg-primary text-white text-lg rounded-circle">
                                    <i class="bi bi-people"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="mt-2 mb-0 text-sm">
                              <span class="badge badge-pill bg-soft-success text-success me-2">
                                 <i class="bi bi-arrow-up me-1"></i>30%
                              </span>
                              <span class="text-nowrap text-xs text-muted">Since last month</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12">
                     <div class="card shadow border-0">
                        <div class="card-body">
                           <div class="row">
                              <div class="col">
                                 <span class="h6 font-semibold text-muted text-sm d-block mb-2">Total Accounts</span>
                                 <span class="h3 font-bold mb-0"><?php echo $row3; ?></span>
                              </div>
                              <div class="col-auto">
                                 <div class="icon icon-shape bg-info text-white text-lg rounded-circle">
                                    <i class="bi bi-clock-history"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="mt-2 mb-0 text-sm">
                              <span class="badge badge-pill bg-soft-danger text-danger me-2">
                                 <i class="bi bi-arrow-down me-1"></i>-5%
                              </span>
                              <span class="text-nowrap text-xs text-muted">Since last month</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12">
                     <div class="card shadow border-0">
                        <div class="card-body">
                           <div class="row">
                              <div class="col">
                                 <span class="h6 font-semibold text-muted text-sm d-block mb-2">Work load</span>
                                 <span class="h3 font-bold mb-0">95%</span>
                              </div>
                              <div class="col-auto">
                                 <div class="icon icon-shape bg-warning text-white text-lg rounded-circle">
                                    <i class="bi bi-minecart-loaded"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="mt-2 mb-0 text-sm">
                              <span class="badge badge-pill bg-soft-success text-success me-2">
                                 <i class="bi bi-arrow-up me-1"></i>10%
                              </span>
                              <span class="text-nowrap text-xs text-muted">Since last month</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>





               <!-------------- REAL MAIN -------------->
               <div class="card shadow border-0 mb-7">
                  <div class="card-header">
                     <h5 class="mb-0">Database Akun</h5>
                  </div>
                  <div class="table-responsive">
                     <table class="table table-hover table-nowrap">
                        <thead class="thead-light">
                           <tr style="text-align: center;">
                              <th scope="col">No.</th>
                              <th scope="col">Username</th>
                              <th scope="col">Email</th>
                              <th scope="col">Level</th>
                              <th scope="col">Action</th>
                              <th></th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $i = 1 ?>
                           <?php foreach ($query as $data) : ?>
                              <tr style="text-align: center;">
                                 <td><?php echo $i; ?>.</td>
                                 <td>
                                    <!-- <img src="img/<?= $data['gambar'] ?>" alt="" class="avatar avatar-sm rounded-circle me-2"> -->
                                    <a class="text-heading font-semibold" href="#">
                                       <?php echo $data['username']; ?>
                                    </a>
                                 </td>
                                 <td>
                                    <?php echo $data['email']; ?>
                                 </td>
                                 <td>
                                    <a class="text-heading font-semibold" href="#">
                                       <?php echo $data['level']; ?>
                                    </a>
                                 </td>
                                 <td>
                                    <a href="./adm_delAkun.php?id=<?php echo $data["id"]; ?>">
                                       <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                          <i class="bi bi-trash"></i>
                                       </button>
                                    </a>
                                 </td>
                              </tr>
                              <?php $i++; ?>
                           <?php endforeach; ?>
                        </tbody>
                     </table>
                  </div>
                  <div class="card-footer border-0 py-5">
                     <span class="text-muted text-sm">Showing <?php echo $row3; ?> items out of 250 results found</span>
                  </div>
               </div>
            </div>
         </main>
      </div>
   </div>

</body>

</html>  