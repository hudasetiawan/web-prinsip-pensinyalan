<?php
include('koneksi.php');
session_start();
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prinsip Pensinyalan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/materi.css">
  <link rel="stylesheet" href="../assets/css/font.css">
</head>

<body>
  <nav class="navbar navbar-expand-sm" style="background-color: #C08261;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" style="pointer-events: none;">Prinsip Pensinyalan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.html">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="materi.html">Materi</a>
          </li>
        </ul>
        <!-- Tambahkan ml-auto di bawah -->
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" id="dropdown-user" href="#" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              <?php
                echo $_SESSION['username'];
              ?>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="profil.php">Profil</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" id="dropdown-logout" href="#">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container" style="margin-top: 40px;">
    <div class="row justify-content-around">
      <div class="card col-md-3 mb-4">
        <img src="../assets/img/Icon/Pengenalan.jpg" class="card-img-top">
        <h4 class="card-header">Bab 1</h4>
        <div class="card-body">
          <h5 class="card-title">Pengenalan Prinsip Pensinyalan</h5>
          <p class="card-text">Pelajari konsep dasar tentang prinsip pensinyalan yang mencakup pengertian, tujuan, dan manfaat.</p>
          <div class="button-card">
            <a href="bab_1.html" class="btn">Lihat</a>
          </div>
        </div>
      </div>

      <div class="card col-md-3 mb-4">
        <img src="../assets/img/Icon/pengantar.png" class="card-img-top">
        <h4 class="card-header">Bab 2</h4>
        <div class="card-body">
          <h5 class="card-title">Pengantar Prinsip Pensinyalan</h5>
          <p class="card-text">Temukan wawasan mendalam mengenai pengantar dan dampak dampak pemrosesan asing.</p>
          <div class="button-card">
            <a href="bab_2.html" class="btn">Lihat</a>
          </div>
        </div>
      </div>

      <div class="card col-md-3 mb-4">
        <img src="../assets/img/Icon/penelitian.jpg" class="card-img-top">
        <h4 class="card-header">Bab 3</h4>
        <div class="card-body">
          <h5 class="card-title">Penelitian & Implikasi Prinsip Pensinyalan</h5>
          <p class="card-text">Temukan wawasan mengenai penelitian dan jelajahi implikasi
            mendasar dari prinsip pensinyalan.</p>
          <div class="button-card">
            <a href="bab_3.html" class="btn">Lihat</a>
          </div>
        </div>
      </div>

      <div class="card col-md-3 mb-4">
        <img src="../assets/img/Icon/UjianAkhir.png" class="card-img-top">
        <h4 class="card-header">Final Test</h4>
        <div class="card-body">
          <h5 class="card-title">Ujian Akhir Tentang Prinsip Pensinyalan</h5>
          <p class="card-text">Tes pengetahuan tentang prinsip pensinyalan dalam pembelajaran multimedia dengan serangkaian pertanyaan.</p>
          <div class="button-card">
            <a href="UjianAkhir.html" class="btn">Lihat</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.getElementById('dropdown-logout').addEventListener('click', function (event) {
      event.preventDefault(); // Mencegah tindakan default dari link logout

      // Konfirmasi logout
      if (confirm('Apakah Anda yakin ingin logout?')) {
        // Redirect ke logout.php jika pengguna yakin untuk logout
        window.location.href = 'logout.php';
      }
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
</body>

</html>