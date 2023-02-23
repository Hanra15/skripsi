<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title; ?></title>

  <meta content="SMK AK Nusa Bangsa" name="description">
  <meta content="SMK AK Nusa Bangsa" name="keywords">
  <meta content="Situs Pendidikan" name="subject">
  <meta content="Indonesia" name="languange">
  <meta content="Education" name="Classification">
  <meta content="Education" name="category">
  <meta content="Global" name="coverage">
  <meta content="general" name="rating">

  <!-- Favicons -->
  <link href="<?= base_url() ?>assets/img/logo-aknb.png" rel="icon">
  <link href="<?= base_url() ?>assets/img/logo-aknb.png" rel="apple-touch-icon">

  <!-- Google Fonts -->

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mamba - v4.10.0
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i><a href="mailto:smkaknusabangsa@gmail.com">smkaknusabangsa@gmail.com</a>
        <i class="bi bi-telephone phone-icon"></i><a href="tel:02517536316">(0251) 7536316</a>
      </div>
      <div class="social-links d-none d-md-block">
        <a href="https://twitter.com/smkaknusabangsa" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://web.facebook.com/smkaknusabangsa?_rdc=1&_rdr" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/smkaknusabangsa/?hl=id" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UC6MkY0eGk-jf1THZZP-rpWA" class="youtube"><i class="bi bi-youtube"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <!-- <h1><a href="index.html">Mamba</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="<?= base_url() ?>" class="logo me-auto d-flex align-items-center text-black">

          <img src="<?= base_url() ?>assets/img/logo-aknb.png" alt="" class="img-fluid">
          <ul class="list-unstyled mb-0 mx-3">
            <li>
              <h1 class="fs-6 fw-bold" style="padding-bottom:2px;">SMK AK <span style="color:#f8240e">Nusa Bangsa</span> </h1>

            </li>
            <li>
              <p class="mb-0" style="font-size: 12px;">JL. BARU KH. SOLEH ISKANDAR KM. 4, KOTA BOGOR ,16161</p>

            </li>
          </ul>







        </a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?= base_url() ?>"><i class="bi bi-house-door-fill fs-6"></i></a></li>
          <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= base_url() ?>profil/sambutan">Sambutan</a></li>
              <li><a href="<?= base_url() ?>profil/visimisi">Visi & Misi</a></li>
              <li><a href="<?= base_url() ?>profil/guru">Guru</a></li>
              <li><a href="<?= base_url() ?>profil/fasilitas">Fasilitas</a></li>
              <li><a href="<?= base_url() ?>profil/prestasi">Prestasi</a></li>
              <li><a href="<?= base_url() ?>profil/galeri">Galeri</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Program Studi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= base_url() ?>prodi/analis">Analis Kimia</a></li>
              <li><a href="<?= base_url() ?>prodi/farmasi">Farmasi</a></li>
              <li><a href="<?= base_url() ?>prodi/rpl">Rekayasa Perangkat Lunak</a></li>

            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Kegiatan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= base_url() ?>kegiatan/osis">OSIS</a></li>
              <li class="dropdown"><a href="#"><span>Ekskul</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="<?= base_url() ?>kegiatan/pramuka">Pramuka</a></li>
                  <li><a href="<?= base_url() ?>kegiatan/kir">Kelompok Ilmiah Remaja</a></li>
                  <li><a href="<?= base_url() ?>kegiatan/rohis">Rohis Ulil Albab</a></li>
                  <li><a href="<?= base_url() ?>kegiatan/teko">Teknologi Komputer</a></li>
                  <li><a href="<?= base_url() ?>kegiatan/pmr">Palang Merah Remaja</a></li>
                  <li><a href="<?= base_url() ?>kegiatan/gps">Gerakan Peduli Sahabat(GPS)</a></li>
                  <li><a href="<?= base_url() ?>kegiatan/paskibra">Paskibra</a></li>
                  <li><a href="<?= base_url() ?>kegiatan/futsal">Futsal</a></li>
                  <li><a href="<?= base_url() ?>kegiatan/taekwondo">Taekwondo</a></li>
                  <li><a href="<?= base_url() ?>kegiatan/silat">Pencak Silat</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Karya Ilmiah</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="<?= base_url() ?>karya/analis">Kimia Analis</a></li>
                  <li><a href="<?= base_url() ?>karya/farmasi">Farmasi</a></li>

                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Tahunan</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="<?= base_url() ?>ppdb">PPDB</a></li>
                  <li><a href="<?= base_url() ?>tahunan/classmeeting">Classmeeting</a></li>
                  <li><a href="<?= base_url() ?>tahunan/phbi">PHBI</a></li>
                  <li><a href="<?= base_url() ?>tahunan/reuni">Reuni Akbar</a></li>
                  <li><a href="<?= base_url() ?>tahunan/galaksi">Galaksi</a></li>
                </ul>
              </li>

            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Alumni</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= base_url() ?>alumni/kegiatan">Kegiatan Alumni</a></li>
              <li><a href="<?= base_url() ?>alumni/pendaftaran">Pendaftaran Alumni</a></li>
              <li><a href="<?= base_url() ?>alumni/galeri">Galeri Alumni</a></li>

            </ul>
          </li>
          <li><a class="nav-link scrollto" href="<?= base_url() ?>#recent-posts">Informasi</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url() ?>#contact">Hubungi Kami</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="<?= base_url() ?>ppdb" class="appointment-btn scrollto"><span class="d-none d-md-inline">PPDB</span></a>

    </div>
  </header><!-- End Header -->

  <?php echo $contents; ?>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-md-4 footer-info">
            <img src="<?= base_url() ?>assets/img/logo-aknb.png" alt="" class="img-fluid mb-3">
            <h3>SMK AK Nusa Bangsa</h3>
            <p>
              JL. BARU KH. SOLEH ISKANDAR KM. 4, KOTA BOGOR ,16161 <br>
              Tanah Sareal, Kota Bogor<br><br>

            </p>

          </div>

          <div class="col-md-2 footer-links">
            <h4>Link</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sambutan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Visi & Misi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Prestasi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Galeri</a></li>
            </ul>
          </div>

          <div class="col-md-2 footer-links">
            <h4>Informasi</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Kegiatan Sekolah</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Informasi Terkini</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Karya Ilmiah</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Alumni</a></li>

            </ul>
          </div>

          <div class="col-md-2 footer-links">
            <h4>Kompetensi Keahlian</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Kimia Analis</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Farmasi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Rekayasa Perangkat Lunak</a></li>

            </ul>
          </div>


          <div class="col-md-2 footer-newsletter">
            <h4>Kontak dan Sosial Media</h4>
            <div class="social-links mt-3">
              <a href="https://twitter.com/smkaknusabangsa" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="https://web.facebook.com/smkaknusabangsa?_rdc=1&_rdr" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/smkaknusabangsa/?hl=id" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UC6MkY0eGk-jf1THZZP-rpWA" class="youtube"><i class="bi bi-youtube"></i></i></a>
            </div>
            <p class="mt-4">
              <strong>Telepon:</strong> <br>(0251) 7536316<br>
              <strong>Email:</strong> <br> smkaknusabangsa@gmail.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>SMKAKNUSABANGSA</span></strong> 2023. All Rights Reserved
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>
  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?= base_url() ?>assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/php-email-form/validate.js"></script>


  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>assets/js/main.js"></script>

</body>

</html>