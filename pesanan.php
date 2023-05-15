<?php include_once("ds/db_toko_motor.php"); ?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pesanan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Logo -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="logo">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- =======================================================
  * Template Name: Yummy
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>KarMotix<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="pesanan.php">Pesanan</a></li>
          <li><a href="ds/index.php">Dashboard</a></li>
        </ul>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Book A Table Section ======= -->
  <section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <br>
        <p>Pesan<span> Motor Impianmu</span> Sekarang!</p>
      </div>
      <div class="container">
        <form method="POST" action="proses_daftar_pesanan.php">
          <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-address-card"></i><br>
                  </div>
                </div>
                <input id="nama_pelanggan" name="nama_pelanggan" placeholder="" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="text1" class="col-4 col-form-label">Alamat</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-home"></i><br>
                  </div>
                </div>
                <input id="alamat_pelanggan" name="alamat_pelanggan" placeholder="" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="select" class="col-4 col-form-label">Motor</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-angle-double-right"></i><br>
                  </div>
                </div>
                <select id="motor_id" name="motor_id" class="custom-select">
                  <option value="1">Honda CB150</option>
                  <option value="2">Honda Beat</option>
                  <option value="3">Honda Genio</option>
                  <option value="4">Honda PCX</option>
                  <option value="5">Honda CBR250RR</option>
                  <option value="6">Honda CRF150L</option>
                  <option value="7">Yamaha MT-25</option>
                  <option value="8">Yamaha MIO Z</option>
                  <option value="9">Yamaha Byson FI</option>
                  <option value="10">Yamaha Nmax</option>
                  <option value="11">Yamaha XSR 155</option>
                  <option value="12">Yamaha Aerox Connexted</option>
                  <option value="13">Suzuki Smash FI</option>
                  <option value="14">Suzuki Address</option>
                  <option value="15">Suzuki Next Crossover</option>
                  <option value="16">Suzuki Satria F150</option>
                  <option value="17">Suzuki GSX 150 Bandit</option>
                  <option value="18">Suzuki GSX S150</option>
                  <option value="19">Kawasaki KLX 150</option>
                  <option value="20">Kawasaki W175</option>
                  <option value="21">Kawasaki Ninja 250</option>
                  <option value="22">Kawasaki Vulcan S</option>
                  <option value="23">Kawasaki Z900</option>
                  <option value="24">Kawasaki Ninja H2</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="text2" class="col-4 col-form-label">Jumlah</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-angle-double-right"></i><br>
                  </div>
                </div>
                <input id="quantity" name="quantity" placeholder="" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8"><br>
              <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
            </div>
          </div>
        </form>
      </div>

      <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

      <div id="preloader"></div>

      <!-- Vendor JS Files -->
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/aos/aos.js"></script>
      <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
      <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="assets/vendor/php-email-form/validate.js"></script>

      <!-- Template Main JS File -->
      <script src="assets/js/main.js"></script>