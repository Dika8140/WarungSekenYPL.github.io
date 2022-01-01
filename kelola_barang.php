<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Warung Seken - Kelola Barang</title>

  <!-- Custom fonts for this template-->
  <link href="assetsadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="assetsadmin/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assetsadmin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="assetsadmin/index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Warung Seken <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index_admin.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="kelola_barang.php"  data-target="" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Barang</span>
        </a>
       
      </li>
       <li class="nav-item">
        <a class="nav-link" href="kelola_transaksi.php" data-toggle="" data-target="" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-dollar-sign"></i>
          <span>Transaksi</span>
        </a>
       
      </li>
      
       <li class="nav-item">
        <a class="nav-link" href="profil_perusahaan.php" data-toggle="" data-target="" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-user"></i>
          <span>Profil Perusahaan</span>
        </a>
       
      </li>

     

     
     
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="assetsadmin/#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

          

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="assetsadmin/#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Penjual
                <img class="img-profile rounded-circle" src="assetsadmin/img/admin.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                
               
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="login_admin.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

   

         <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Kelola</h1>
          <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <button  class="btn btn-sm btn-primary" data-target="#addModal" data-toggle="modal">Tambah</button>

                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Harga</th>
                      <th>Alamat</th>
                      <th>Stok</th>
                      <th>Foto</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nama</th>
                      <th>Harga</th>
                      <th>Alamat</th>
                      <th>Stok</th>
                      <th>Foto</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Novel Bekas</td>
                      <td>Rp. 30.000</td>
                      <td>KAB. Bantul - Banguntapan, Di Yogyakarta</td>
                      <td>1</td>
                      <td><img src="assets/img/chefs/novel.jpg" width="40%" class="img-fluid" alt=""></td>
                     <td><button  class="btn btn-sm btn-warning" title="Edit"  data-target="#editModal" data-toggle="modal">Edit</button> <button  class="btn btn-sm btn-danger" title="Edit" data-target="#hapus" data-toggle="modal">Hapus</button>
                       <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah ingin menghapus data ini ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body"></div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="kelola_barang.php">Hapus</a>
        </div>
      </div>
    </div>
  </div>
                  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>

        <div class="modal-body">

          <label>Nama : </label><input type="" name="" value="Novel Bekas" class="form-control">
          <br>
           <label>Harga : </label><input type="" value="Rp. 30.000" class="form-control" >
          <br>
          <label>Alamat : </label><input type="" value="KAB. Bantul - Banguntapan, Di Yogyakarta" class="form-control" >
          <br>
            <label>Stok :</label><input type="" name="" value="1" class="form-control">
            <br>
            <label>Foto :</label><input type="file" class="form-control">
            <br>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="kelola_barang.php">Edit</a>
        </div>
      </div>
    </div>
  </div>


              </td>
                    </tr>
                    <tr>
                     <td>Pompa Galon</td>
                      <td>Rp. 10.000</td>
                      <td>KAB. Bantul - Banguntapan, Di Yogyakarta</td>
                      <td>1</td>
                      <td><img src="assets/img/chefs/pompa galon.jpg" width="40%" class="img-fluid" alt=""></td>
                     <td><button  class="btn btn-sm btn-warning" title="Edit" data-target="#editModal1" data-toggle="modal">Edit</button>  <button  class="btn btn-sm btn-danger" title="Edit" data-target="#hapus" data-toggle="modal">Hapus</button>
                       <div class="modal fade" id="editModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>

        <div class="modal-body">

          <label>Nama : </label><input type="" name="" value="Pompa Galon" class="form-control">
          <br>
           <label>Harga : </label><input type="" value="Rp. 10.000" class="form-control" >
          <br>
          <label>Alamat : </label><input type="" value="KAB. Bantul - Banguntapan, Di Yogyakarta" class="form-control" >
          <br>
            <label>Stok :</label><input type="" name="" value="1" class="form-control">
            <br>
            <label>Foto :</label><input type="file" class="form-control">
            <br>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="kelola_barang.php">Edit</a>
        </div>
      </div>
    </div>
  </div>


                 
              </td>
                    </tr>
                    <tr>
                      <td>Kipas Angin</td>
                      <td>Rp. 70.000</td>
                      <td>KAB. Bantul - Banguntapan, Di Yogyakarta</td>
                      <td>1</td>
                      <td><img src="assets/img/chefs/kipas.jpeg" width="40%" class="img-fluid" alt=""></td>
                     <td><button  class="btn btn-sm btn-warning" title="Edit" data-target="#editModal2" data-toggle="modal">Edit</button> <button  class="btn btn-sm btn-danger" title="Edit" data-target="#hapus" data-toggle="modal">Hapus</button>
   <div class="modal fade" id="editModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>

        <div class="modal-body">

          <label>Nama : </label><input type="" name="" value="Kipas Angin" class="form-control">
          <br>
           <label>Harga : </label><input type="" value="Rp. 70.000" class="form-control" >
          <br>
          <label>Alamat : </label><input type="" value="KAB. Bantul - Banguntapan, Di Yogyakarta" class="form-control" >
          <br>
            <label>Stok :</label><input type="" name="" value="1" class="form-control">
            <br>
            <label>Foto :</label><input type="file" class="form-control">
            <br>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="kelola_barang.php">Edit</a>
        </div>
      </div>
    </div>
  </div>

                 
              </td>
                    </tr>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        


           </div>
         </div>
       </span>

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="assetsadmin/#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->


  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login_admin.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

   <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah ingin menghapus data ini ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body"></div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="kelola_barang.php">Hapus</a>
        </div>
      </div>
    </div>
  </div>


 <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>

        <div class="modal-body">

          <label>Nama : </label><input type="" name="" class="form-control">
          <br>
           <label>Harga : </label><input type="" class="form-control" >
          <br>
          <label>Deskripsi : </label><input type="" class="form-control" >
          <br>
            <label>Stok :</label><input type="" name="" class="form-control">
            <br>
            <label>Foto :</label><input type="file" class="form-control">
            <br>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="kelola_barang.php">Simpan</a>
        </div>
      </div>
    </div>
  </div>

 

 <!-- Bootstrap core JavaScript-->
  <script src="assetsadmin/vendor/jquery/jquery.min.js"></script>
  <script src="assetsadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assetsadmin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assetsadmin/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="assetsadmin/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="assetsadmin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="assetsadmin/js/demo/datatables-demo.js"></script>
</body>

</html>
