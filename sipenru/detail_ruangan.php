<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <?php
  include 'db_connection.php';
  $conn = connectDB();

  $sql = "SELECT * FROM Ruangan WHERE id = ".$_GET["id_ruangan"];
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  ?>

  <title>Detail Ruangan <?php echo $row["kode"] ?></title>

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
          <div class="row">
            <div class="col-md-3"><h3>Kode Ruangan</h3></div>
            <div class="col-md-1"><h3>:</h3></div>
            <div class="col-md-7"><h3><?php echo $row["kode"] ?></h3></div>
          </div>
          <div class="row">
            <div class="col-md-3"><h3>Nama Ruangan</h3></div>
            <div class="col-md-1"><h3>:</h3></div>
            <div class="col-md-7"><h3><?php echo $row["nama"] ?></h3></div>
          </div>
          <div class="row">
            <div class="col-md-3"><h3>Deskripsi</h3></div>
            <div class="col-md-1"><h3>:</h3></div>
            <div class="col-md-7"><h3><?php echo $row["deskripsi"] ?></h3></div>
          </div>
          <div class="row">
            <div class="col-md-3"><h3>Opsi Jam</h3></div>
            <div class="col-md-1"><h3>:</h3></div>
            <div class="col-md-7">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Tanggal</th>
                      <th>Jam Mulai</th>
                      <th>Jam Selesai</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql = "SELECT * FROM KetersediaanRuangan WHERE kode_ruangan = ".$row['kode']." ORDER BY jam_mulai asc";
                    $result1 = $conn->query($sql);
                    if ($result1->num_rows > 0) {
                      // output data of each row
                      $pilihanJam = "";
                      while($row1 = $result1->fetch_assoc()) {
                        switch ($row1["status"]) {
                          case 0:
                            $status = "<button class='btn btn-success'>Tersedia</button>";
                            break;
                          case 1:
                            $status = "<button class='btn btn-danger'>Digunakan</button>";
                            break;
                          default:
                            $status = "<button class='btn btn-warning'>Diajukan</button>";
                            break;
                        }
                        $pilihanJam .= "<tr><td>".$row1["tanggal"]."</td><td>".$row1["jam_mulai"]."</td><td>".$row1["jam_selesai"]."</td><td>".$status."</td></tr>";
                      }
                      echo $pilihanJam;
                    } else {
                      echo "<tr><td colspan='4' align='center'>- Tidak ada pilihan jam tersedia -</td></tr>";
                    }
                    ?>
                  </tbody>
                </table>
                <div class="row">
                  <div class="col-md-6">
                    <a href='#' class='btn btn-light btn-icon-split' id="tambah-ketersediaan"><span class='icon text-gray-600'><i class='fas fa-plus'></i></span><span class='text'>Tambah Ketersediaan Ruangan</span></a>
                  </div>
                  <div class="col-md-6" align="right">
                    <a href='#' class='btn btn-primary' id="simpan" onclick="simpanKetersediaan()">Simpan</a>
                  </div>
                </div>
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
    var indexBaris = 1;

    $(window).on('load', function(){
      $("#simpan").hide();
      indexBaris = ($("#dataTable").find("tr").length);
    });

    $("#tambah-ketersediaan").click(function () {
      var tds = "<tr><td><input class='form-control' type='date' id='tanggal' onchange='ketersediaanChange()' required></td>";
      tds += "<td><input placeholder='hh:mm:ss' class='form-control' type='text' id='jam_mulai' onchange='ketersediaanChange()' required></td>";
      tds += "<td><input placeholder='hh:mm:ss' class='form-control' type='text' id='jam_selesai' onchange='ketersediaanChange()' required></td>";
      tds += "<td>Tersedia</td></tr>";
      $("#dataTable > tbody:last-child").append(tds);
      $("#tambah-ketersediaan").hide();
      $("#simpan").hide();
    });

    function ketersediaanChange() {
      var tanggal = document.getElementById("tanggal").value
      var jam_mulai = document.getElementById("jam_mulai").value
      var jam_selesai = document.getElementById("jam_selesai").value
      if (tanggal == "" || jam_mulai == "" || jam_selesai == "") {
        $("#tambah-ketersediaan").hide();
        $("#simpan").hide();
      } else {
        $("#tambah-ketersediaan").show();
        $("#simpan").show();
      }
    }

    function simpanKetersediaan(){
      var id_ruangan = new URL(window.location.href).searchParams.get("id_ruangan");
      var table = document.getElementById("dataTable");
      var tanggal = [];
      var jam_mulai = [];
      var jam_selesai = [];
      for (var i = indexBaris, row; row = table.rows[i]; i++) {
        tanggal.push($(row.cells[0]).find("#tanggal").val());
        jam_mulai.push($(row.cells[1]).find("#jam_mulai").val());
        jam_selesai.push($(row.cells[2]).find("#jam_selesai").val());
      }
      $.ajax({
         type: "POST",
         url: 'insert.php',
         data:{ action:'ketersediaan', id_ruangan: id_ruangan, tanggal: tanggal, jam_mulai: jam_mulai, jam_selesai: jam_selesai },
         success:function(data) {
           alert("Berhasil menambahkan ketersediaan ruangan");
           location.reload();
         }
      });
    }
  </script>

</body>

</html>
