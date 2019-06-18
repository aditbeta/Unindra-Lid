<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Daftar Pengajuan Belum Diproses</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Sistem Penggunaan Ruangan</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Daftar Ruangan
      </div>

      <!-- Melihat Daftar Ruangan -->
      <li class="nav-item">
        <a class="nav-link" href="daftar_ruangan.php">
          <i class="fas fa-fw fa-clipboard-list"></i>
          <span>Lihat Ruangan</span></a>
      </li>

      <!-- Menambah, Menghapus, atau Mengubah Ruangan -->
      <li class="nav-item">
        <a class="nav-link" href="atur_ruangan.php">
          <i class="fas fa-fw fa-cogs"></i>
          <span>Atur Ruangan</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Pengajuan
      </div>

      <!-- Nav Item - Pengajuan Ruangan Belum Diproses -->
      <li class="nav-item">
        <a class="nav-link" href="pengajuan_ruangan.php">
          <i class="fas fa-fw fa-edit"></i>
          <span>Pengajuan Baru</span></a>
      </li>

      <!-- Nav Item - Pengajuan Ruangan Sudah Diproses -->
      <li class="nav-item">
        <a class="nav-link" href="pengajuan_terproses.php">
          <i class="fas fa-fw fa-check-circle"></i>
          <span>Pengajuan Sudah Diproses</span></a>
      </li>

      <!-- Nav Item - Daftar Pengajuan -->
      <li class="nav-item">
        <a class="nav-link" href="daftar_pengajuan.php">
          <i class="fas fa-fw fa-list-alt"></i>
          <span>Daftar Pengajuan</span></a>
      </li>

      <!-- Nav Item - Mengajukan Penggunaan Ruangan -->
      <li class="nav-item">
        <a class="nav-link" href="ajukan_penggunaan.php">
          <i class="fas fa-fw fa-plus-circle"></i>
          <span>Ajukan Penggunaan Ruangan</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

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
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search ..." aria-label="Search" aria-describedby="basic-addon2">
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
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Pemberitahuan
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Lihat Profil
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Pengaturan
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Keluar
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Daftar Pengajuan Belum Diproses</h1>

          <!-- Table data ruangan -->
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama Ruangan [Kode]</th>
                    <th>Waktu Penggunaan</th>
                    <th>Peminjam</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Keterangan</th>
                    <th>Proses</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Nama Ruangan [Kode]</th>
                    <th>Waktu Penggunaan</th>
                    <th>Peminjam</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Keterangan</th>
                    <th>Proses</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php
                  include 'db_connection.php';
                  $conn = connectDB();

                  $sql = "SELECT * FROM PenggunaanRuangan WHERE status=0";
                  $resultPenggunaan = $conn->query($sql);

                  if ($resultPenggunaan->num_rows > 0) {
                    while($rowPenggunaan = $resultPenggunaan->fetch_assoc()) {
                      $sql = "SELECT * FROM KetersediaanRuangan WHERE id='".$rowPenggunaan["id_ketersediaan"]."'";
                      $resultKetersediaan = $conn->query($sql);
                      $rowKetersediaan = $resultKetersediaan->fetch_assoc();

                      $sql = "SELECT * FROM Ruangan WHERE kode='".$rowKetersediaan["kode_ruangan"]."'";
                      $resultRuangan = $conn->query($sql);
                      $rowRuangan = $resultRuangan->fetch_assoc();
                      $ruangan = $rowRuangan["nama"]." [".$rowRuangan["kode"]."]";

                      $sql = "SELECT * FROM User WHERE id='".$rowPenggunaan["id_user"]."'";
                      $resultUser = $conn->query($sql);
                      $rowUser = $resultUser->fetch_assoc();

                      $waktu = $rowKetersediaan["tanggal"]." | ".$rowKetersediaan["jam_mulai"]."-".$rowKetersediaan["jam_selesai"];
                      $status = $rowKetersediaan["status"] == 2 ? "OK" : "X";

                      $idData = $rowPenggunaan["id"] . "," . $rowPenggunaan["id_ketersediaan"];

                      $terimaPengajuan = "<a href='#' class='btn btn-success btn-icon-split' onclick='prosesPengajuan(\"".$idData."\", 1)'><span class='icon text-white-50'><i class='fas fa-check'></i></span><span class='text'>Terima</span></a>";
                      $tolakPengajuan = "<a href='#' class='btn btn-danger btn-icon-split' onclick='prosesPengajuan(\"".$idData."\", 2)'><span class='icon text-white-50'><i class='fas fa-times'></i></span><span class='text'>Tolak</span></a>";

                      echo "<tr><td>".$rowKetersediaan["id"]."</td><td>".$ruangan."</td><td>".$waktu."</td><td>".$rowUser["nama"]."</td><td>".$rowPenggunaan["tanggal_pengajuan"]."</td><td>".$rowPenggunaan["keterangan"]."</td><td>".$tolakPengajuan." ".$terimaPengajuan."</td></tr>";
                    }
                  } else {
                    echo "<tr><td>- Tidak ada pengajuan terproses -</td></tr>";
                  }

                  closeDB($conn);
                  ?>
                </tbody>
              </table>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Sistem Penggunaan Ruangan - UNINDRA PGRI KAMPUS GEDONG 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
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
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <script>
    function prosesPengajuan(data, proses){
      // alert(data);
      var id_penggunaan = data.split(",")[0];
      var id_ketersediaan = data.split(",")[1];
      $.ajax({
         type: "POST",
         url: 'insert.php',
         data:{ action:'proses', id_penggunaan: id_penggunaan, id_ketersediaan: id_ketersediaan, proses: proses },
         success:function(data) {
           if (proses == 1) {
            alert("Berhasil menerima pengajuan dengan nomor: " + data);
           } else {
            alert("Berhasil menolak pengajuan dengan nomor: " + data);
           }
           location.reload()
         }
      });
    }
  </script>

</body>

</html>
