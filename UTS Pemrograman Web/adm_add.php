<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Panel</title>
   <link href="./assets/css/spanel.css" rel="stylesheet" />
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
               <img src="https://i.postimg.cc/yYk7T52Q/skincare-2.png" alt="...">
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
                     <a href="#" class="dropdown-item">Logout</a>
                  </div>
               </div>
            </div>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidebarCollapse">
               <!-- Navigation -->
               <ul class="navbar-nav">
                  <li class="nav-item">
                     <a class="nav-link" href="./adm_panel.php">
                        <i class="bi bi-house"></i> Dashboard
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">
                        <i class="bi bi-bar-chart"></i> Analitycs
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">
                        <i class="bi bi-chat"></i> Inventory Barang
                        <span class="badge bg-soft-primary text-primary rounded-pill d-inline-flex align-items-center ms-auto">50+</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">
                        <i class="bi bi-bookmarks"></i> Product
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">
                        <i class="bi bi-people"></i> User Accounts
                     </a>
                  </li>
               </ul>
               <!-- Divider -->
               <hr class="navbar-divider my-5 opacity-20">
               <!-- Navigation -->
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
                     <a class="nav-link" href="#">
                        <i class="bi bi-person-square"></i> Account
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">
                        <i class="bi bi-box-arrow-left"></i> Logout
                     </a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <!-- Main content -->
      <div class="h-screen flex-grow-1 overflow-y-lg-auto">
         <!-- Header -->
         <header class="bg-surface-primary border-bottom pt-6">
            <div class="container-fluid">
               <div class="mb-npx">
                  <div class="row align-items-center">
                     <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                        <!-- Title -->
                        <h1 class="h2 mb-0 ls-tight">Inventory Products</h1>
                     </div>
                     <!-- Actions -->
                     <div class="col-sm-6 col-12 text-sm-end">
                        <div class="mx-n1">
                           <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1">
                              <span class=" pe-2">
                                 <i class="bi bi-pencil"></i>
                              </span>
                              <span>Edit</span>
                           </a>
                           <a href="#" class="btn d-inline-flex btn-sm btn-primary mx-1">
                              <span class=" pe-2">
                                 <i class="bi bi-plus"></i>
                              </span>
                              <span>Create</span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <!-- Nav -->
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
         <!-- Main -->
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
                                 <span class="h6 font-semibold text-muted text-sm d-block mb-2">New Products</span>
                                 <span class="h3 font-bold mb-0">215</span>
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
                                 <span class="h6 font-semibold text-muted text-sm d-block mb-2">Total User Accounts</span>
                                 <span class="h3 font-bold mb-0">200.400</span>
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
               <div class="card shadow border-0 mb-7">
                  <div class="card-header">
                     <h5 class="mb-0">Add New Product</h5>
                  </div>
                  <div class="card-header">
                     <h5 class="mb-9">
                        <form method="post" action="adm_show.php">
                           <fieldset>
                              <table id="Tabel_inventory">
                                 <tr>
                                    <td>Nama Barang</td>
                                    <td><input type="text" name="nama_barang" id="nama_barang" required></td>
                                 </tr>
                                 <tr>
                                    <td>Kode Barcode</td>
                                    <td><input type="text" name="kode_barcode" id="kode_barcode" minlength="4" maxlength="20" required></td>
                                 </tr>
                                 <tr>
                                    <td>Quantity (pcs)</td>
                                    <td><input type="text" name="quantity" id="quantity" required></td>
                                 </tr>
                                 <tr>
                                    <td>Harga Beli/pcs (Rp)</td>
                                    <td><input type="text" name="harga_beli" id="harga_beli" required></td>
                                 </tr>
                                 <tr>
                                    <td>Harga Jual/pcs (Rp)</td>
                                    <td><input type="text" name="harga_jual" id="harga_jual" required></td>
                                 </tr>
                                 <tr>
                                    <td>Expired Date</td>
                                    <td><input type="date" name="expired" id="expired" required></td>
                                 </tr>
                              </table>
                              <br>
                              <p>
                                 <input type="submit" id="btn_simpan" value="Simpan">
                              </p>
                           </fieldset>
                        </form>

                     </h5>
                  </div>
               </div>
               <div class="card-footer border-0 py-5">
                  <span class="text-muted text-sm">Add new product into here.</span>
               </div>
            </div>
      </div>
      </main>
   </div>
   </div>

</body>

</html>