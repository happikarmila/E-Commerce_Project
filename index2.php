<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KarMotix</title>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Terimakasi<span> Sudah Memesan</span></h2>
          <p data-aos="fade-up" data-aos-delay="100"> KarMotix akan segera memproses pesanan Anda</p>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/km-1.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <!-- ======= Menu Section ======= -->
  <section id="menu" class="menu">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <p>Jenis<span> Motor Pilihan</span> Berdasarkan Merk</p>
      </div>

      <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

        <li class="nav-item">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
            <h4>Honda</h4>
          </a>
        </li><!-- End tab nav item -->

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
            <h4>Yamaha</h4>
          </a><!-- End tab nav item -->

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
            <h4>Suzuki</h4>
          </a>
        </li><!-- End tab nav item -->

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#motor-listrik">
            <h4>Kawasaki</h4>
          </a>
        </li><!-- End tab nav item -->

      </ul><br><br>

      <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

        <div class="tab-pane fade active show" id="menu-starters">


          <div class="row gy-5">

            <div class="col-lg-4 menu-item"><!-- Honda -->
              <a href="assets/img/honda/satu.jpg" class="glightbox"><img src="assets/img/honda/satu.jpg" class="menu-img img-fluid" alt=""></a>
              <h4>Honda CB150</h4>
              <p class="ingredients">
                Rp20.900.000
              </p>
              <a href="honda-cb150.php" class="btn btn-danger btn-xs">Cek Detail</a>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/honda/dua.jpg" class="glightbox"><img src="assets/img/honda/dua.jpg" class="menu-img img-fluid" alt=""></a>
              <h4>Honda BEAT</h4>
              <p class="ingredients">
                Rp17.000.000
              </p>
              <a href="honda-beat.php" class="btn btn-danger btn-xs">Cek Detail</a>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/honda/tiga.jpg" class="glightbox"><img src="assets/img/honda/tiga.jpg" class="menu-img img-fluid" alt=""></a>
              <h4>Honda Genio</h4>
              <p class="ingredients">
                Rp18.270.000
              </p>
              <a href="honda-genio.php" class="btn btn-danger btn-xs">Cek Detail</a>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/honda/empat.jpg" class="glightbox"><img src="assets/img/honda/empat.jpg" class="menu-img img-fluid" alt=""></a>
              <h4>Honda PCX</h4>
              <p class="ingredients">
                Rp43.290.000
              </p>
              <a href="honda-pcx.php" class="btn btn-danger btn-xs">Cek Detail</a>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/honda/lima.jpg" class="glightbox"><img src="assets/img/honda/lima.jpg" class="menu-img img-fluid" alt=""></a>
              <h4>Honda CBR250RR</h4>
              <p class="ingredients">
                Rp73.430.000
              </p>
              <a href="honda-cbr250rr.php" class="btn btn-danger btn-xs">Cek Detail</a>
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/honda/enam.jpg" class="glightbox"><img src="assets/img/honda/enam.jpg" class="menu-img img-fluid" alt=""></a>
              <h4>Honda CRF150L</h4>
              <p class="ingredients">
                Rp34.740.000
              </p>
              <a href="honda-crf150l.php" class="btn btn-danger btn-xs">Cek Detail</a>
              </p>
            </div><!-- Menu Item -->

          </div>
        </div><!-- End Starter Menu Content -->

        <div class="tab-pane fade" id="menu-breakfast">

          <div class="row gy-5">

            <div class="col-lg-4 menu-item">
              <a href="assets/img/yamaha/satu.jpg" class="glightbox"><img src="assets/img/yamaha/satu.jpg" class="menu-img img-fluid" alt=""></a>
              <h4>Yamaha MT-25</h4>
              <p class="ingredients">
                Rp55.940.000
              </p>
              <a href="yamaha-mt25.php" class="btn btn-danger btn-xs">Cek Detail</a>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/yamaha/dua.jpg" class="glightbox"><img src="assets/img/yamaha/dua.jpg" class="menu-img img-fluid" alt=""></a>
              <h4>Yamaha MIO Z</h4>
              <p class="ingredients">
                Rp15.800.000
              </p>
              <a href="yamaha-mioz.php" class="btn btn-danger btn-xs">Cek Detail</a>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/yamaha/tiga.jpg" class="glightbox"><img src="assets/img/yamaha/tiga.jpg" class="menu-img img-fluid" alt=""></a>
              <h4>Yamaha Byson FI</h4>
              <p class="ingredients">
                Rp22.95.000
              </p>
              <a href="yamaha-bysonfi.php" class="btn btn-danger btn-xs">Cek Detail</a>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/yamaha/empat.jpg" class="glightbox"><img src="assets/img/yamaha/empat.jpg" class="menu-img img-fluid" alt=""></a>
              <h4>Yamaha Nmax</h4>
              <p class="ingredients">
                Rp32.260.000
              </p>
              <a href="yamaha-nmax.php" class="btn btn-danger btn-xs">Cek Detail</a>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/yamaha/lima.jpg" class="glightbox"><img src="assets/img/yamaha/lima.jpg" class="menu-img img-fluid" alt=""></a>
              <h4>Yamaha XSR 155</h4>
              <p class="ingredients">
                Rp36.950.000
              </p>
              <a href="yamaha-xsr155.php" class="btn btn-danger btn-xs">Cek Detail</a>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/yamaha/enam.jpg" class="glightbox"><img src="assets/img/yamaha/enam.jpg" class="menu-img img-fluid" alt=""></a>
              <h4>Yamaha Aerox Connexted</h4>
              <p class="ingredients">
                Rp20.500.000
              </p>
              <a href="yamaha-aerok.php" class="btn btn-danger btn-xs">Cek Detail</a>
            </div><!-- Menu Item -->

          </div>
        </div><!-- End Breakfast Menu Content -->

        <div class="tab-pane fade" id="menu-lunch">

          <div class="row gy-5">

            <div class="col-lg-4 menu-item">
              <a href="assets/img/suzuki/satu.jpg" class="glightbox"><img src="assets/img/suzuki/satu.jpg" class="menu-img img-fluid" alt=""></a>
              <h4>Suzuki Smash FI</h4>
              <p class="ingredients">
                Rp16.850.000
              </p>
              <a href="suzuki-smashfi.php" class="btn btn-danger btn-xs">Cek Detail</a>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/suzuki/dua.jpg" class="glightbox"><img src="assets/img/suzuki/dua.jpg" class="menu-img img-fluid" alt=""></a>
              <h4>Suzuki Address</h4>
              <p class="ingredients">
                Rp18.800.000
              </p>
              <a href="suzuki-address.php" class="btn btn-danger btn-xs">Cek Detail</a>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/suzuki/tiga.jpg" class="glightbox"><img src="assets/img/suzuki/tiga.jpg" class="menu-img img-fluid" alt=""></a>
              <h4>Suzuki Nex Crossover</h4>
              <p class="ingredients">
                Rp19.000.000
              </p>
              <a href="suzuki-nextcross.php" class="btn btn-danger btn-xs">Cek Detail</a>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/suzuki/empat.jpg" class="glightbox"><img src="assets/img/suzuki/empat.jpg" class="menu-img img-fluid" alt=""></a>
              <h4>Suzuki Satria F150</h4>
              <p class="ingredients">
                Rp26.760.000
              </p>
              <a href="suzuki-satria.php" class="btn btn-danger btn-xs">Cek Detail</a>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/suzuki/lima.jpg" class="glightbox"><img src="assets/img/suzuki/lima.jpg" class="menu-img img-fluid" alt=""></a>
              <h4>Suzuki GSX 150 Bandit</h4>
              <p class="ingredients">
                Rp27.300.000
              </p>
              <a href="suzuki-bandit.php" class="btn btn-danger btn-xs">Cek Detail</a>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/suzuki/enam.jpg" class="glightbox"><img src="assets/img/suzuki/enam.jpg" class="menu-img img-fluid" alt=""></a>
              <h4>Suzuki GSX S150 </h4>
              <p class="ingredients">
                Rp29.800.000
              </p>
              <a href="suzuki-gsxs150.php" class="btn btn-danger btn-xs">Cek Detail</a>
            </div><!-- Menu Item -->

          </div>
        </div><!-- End Lunch Menu Content -->

        <div class="tab-pane fade" id="motor-listrik"><!-- Motor lstrik -->

          <div class="row gy-5">

            <div class="col-lg-4 menu-item">
              <a href="assets/img/kawasaki/satu.jpg" class="glightbox"><img src="assets/img/kawasaki/satu.jpg" class="menu-img img-fluid" alt=""></a>
              <h4>Kawasaki KLX 150</h4>
              <p class="ingredients">
                Rp39.500.000
              </p>
              <a href="kawasaki-klx150.php" class="btn btn-danger btn-xs">Cek Detail</a>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/kawasaki/dua.jpg" class="glightbox"><img src="assets/img/kawasaki/dua.jpg" class="menu-img img-fluid" alt=""></a>
              <h4>Kawasaki W175</h4>
              <p class="ingredients">
                Rp34.700.000
              </p>
              <a href="kawasaki-w175.php" class="btn btn-danger btn-xs">Cek Detail</a>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/kawasaki/tiga.jpg" class="glightbox"><img src="assets/img/kawasaki/tiga.jpg" class="menu-img img-fluid" alt=""></a>
              <h4>Kawasaki Ninja 250</h4>
              <p class="ingredients">
                Rp77.530.000
              </p>
              <a href="kawasaki-ninja250.php" class="btn btn-danger btn-xs">Cek Detail</a>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/kawasaki/empat.jpg" class="glightbox"><img src="assets/img/kawasaki/empat.jpg" class="menu-img img-fluid" alt=""></a>
              <h4>Kawasaki Vulcan S</h4>
              <p class="ingredients">
                Rp189.900.000
              </p>
              <a href="kawasaki-vulcans.php" class="btn btn-danger btn-xs">Cek Detail</a>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/kawasaki/lima.jpg" class="glightbox"><img src="assets/img/kawasaki/lima.jpg" class="menu-img img-fluid" alt=""></a>
              <h4>Kawasaki Z900</h4>
              <p class="ingredients">
                Rp250.000.000
              </p>
              <a href="kawasaki-z900.php" class="btn btn-danger btn-xs">Cek Detail</a>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/kawasaki/enam.jpg" class="glightbox"><img src="assets/img/kawasaki/enam.jpg" class="menu-img img-fluid" alt=""></a>
              <h4>Kawasaki Ninja H2
                <p class="ingredients">
                  Rp820.000.000
                </p>
                <a href="kawasaki-ninjah2.php" class="btn btn-danger btn-xs">Cek Detail</a>
            </div><!-- Menu Item -->

          </div>
        </div><!-- End Dinner Menu Content -->

      </div>

    </div>
  </section><!-- End Menu Section -->

  <!-- ======= Gallery Section ======= -->
  <section id="gallery" class="gallery section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>gallery</h2>
        <p>Check <span>Our Gallery</span></p>
      </div>

      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/honda/empat.jpg"><img src="assets/img/honda/empat.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/honda/dua.jpg"><img src="assets/img/honda/dua.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/yamaha/dua.jpg"><img src="assets/img/yamaha/dua.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/yamaha/lima.jpg"><img src="assets/img/yamaha/lima.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/suzuki/empat.jpg"><img src="assets/img/suzuki/empat.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/suzuki/tiga.jpg"><img src="assets/img/suzuki/tiga.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/kawasaki/tiga.jpg"><img src="assets/img/kawasaki/tiga.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/kawasaki/enam.jpg"><img src="assets/img/kawasaki/enam.jpg" class="img-fluid" alt=""></a></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Gallery Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Alamat</h4>
            <p>
              A108 Papari <br>
              Bogor, B 535022 - Kiarasari<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservasi</h4>
            <p>
              <strong>Telpon:</strong> +62 8588 7332 970<br>
              <strong>Email:</strong> karmotix@gmail.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Jam Buka</h4>
            <p>
              <strong>Senin-Sabtu: </strong>08.00 - 23.00<br>
              Minggu: Tutup
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="https://twitter.com/home?lang=id" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://www.facebook.com/nano.youknowlah" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/hkarmilla/" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/in/happi-karmila-0b08a5251/" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Karmila</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

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

</body>

</html>