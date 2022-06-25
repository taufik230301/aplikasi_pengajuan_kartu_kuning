<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>WEB - SISPAKER</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url();?>assets/public/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/public/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/public/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url();?>assets/public/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Scaffold - v4.7.0
  * Template URL: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo me-auto">
                <h1><a href="<?=base_url();?>Login/login_user">SISPAKER</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#visi_misi">Visi dan Misi</a></li>
                    <li><a class="nav-link scrollto " href="#tata_nilai">Tata Nilai</a></li>
                    <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class="header-social-links d-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center"
                    data-aos="fade-up">
                    <div>
                        <h1>SISTEM INFORMASI PENCARI KERJA</h1>
                        <h2> Dinas Tenaga Kerja dan Transmigrasi Kabupaten
                            Ogan Ilir</h2>
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
                    <img src="<?= base_url();?>assets/logo/logo.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">


        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
                        <div class="content pt-4 pt-lg-0">
                            <h3>Tentang Disnaker Ogan Ilir</h3>
                            <p class="fst-italic">
                                Dinas Tenaga Kerja dan Transmigrasi Kabupaten
                                Ogan Ilir merupakan lembaga unsur Pemerintah Daerah Kabupaten Ogan Ilir yang
                                dipimpin oleh seorang Kepala Dinas yang berada dibawah dan bertanggung jawab
                                kepada Bupati Ogan Ilir melalui Sekretaris Daerah.
                                Untuk itu sebagai landasan hukum pembentukan Dinas Tenaga Kerja dan
                                Transmigrasi Kabupaten Ogan Ilir sesuai dengan Peraturan Daerah Kabupaten
                                Ogan Ilir Nomor 04 Tahun 2021 tentang Pembentukan dan Susunan Perangkat
                                Daerah Kabupaten Ogan Ilir.
                            </p>


                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="zoom-in">
                        <img src="<?= base_url();?>assets/public/assets/img/about.jpg" class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </section>
        <!-- ======= About Section ======= -->
        <section id="visi_misi" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6" data-aos="zoom-in">
                        <img src="<?= base_url();?>assets/public/assets/img/about.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
                        <div class="content pt-4 pt-lg-0">
                            <h3>Visi</h3>
                            <p class="fst-italic">
                                Visi Dinas Tenaga Kerja dan Transmigrasi Kabupaten Ogan Ilir
                                adalah Menjadi Lembaga yang Profesional dalam Penciptaan dan
                                Peningkatan Pengawasan Ketenagakerjaan dan Ketransmigrasian Menuju
                                Masyarakat Berkualitas dan Lebih Sejahtera.
                            </p>
                            <h3>Misi</h3>
                            <ul>
                                <li><i class="bi bi-check-circle"></i> 1. Meningkatkan Kualitas Sumber Daya Manusia
                                    (SDM) Tenaga Kerja..</li>
                                <li><i class="bi bi-check-circle"></i> 2. Pembinaan Hubungan Industrial, Perlindungan
                                    dan Pengawasan
                                    Ketenagakerjaan serta Peningkatan Kesejahteraan Pekerja.
                                    .</li>
                                <li><i class="bi bi-check-circle"></i> 3. Memberdayakan Transmigran dan Penduduk
                                    Sekitarnya menuju
                                    Masyarakat Mandiri dalam Rangka Menunjang Pembangunan Daerah.
                                </li>
                                <li><i class="bi bi-check-circle"></i> 4. Pembangunan Kawasan Transmigrasi untuk
                                    Mendukung
                                    Pembangunan Daerah secara Berkelanjutan.

                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Features Section ======= -->
        <section id="tata_nilai" class="features">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 mt-2 mb-tg-0 order-2 order-lg-1">
                        <ul class="nav nav-tabs flex-column">
                            <h3>Tata Nilai</h3>
                            <li class="nav-item" data-aos="fade-up">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                                    <h4>Integritas</h4>
                                    <p>Perilaku yang mencerminkan kesesuaian antara pikiran, perkataan dan
                                        perbuatan.</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="100">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                                    <h4> Profesionalisme</h4>
                                    <p>Sigap melaksanakan tugas sesuai dengan kemampuan serta pengetahuan
                                        dengan bertanggung jawab dan kreatifitas tinggi.</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="200">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                                    <h4>Akuntabel</h4>
                                    <p>Tata peraturan, patuh pada pimpinan, serta menjaga kesatuan hati antara
                                        pimpinan dengan karyawan demi melindungi nilai dan mencapai suatu visi.</p>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <figure>
                                    <img src="<?= base_url();?>assets/public/assets/img/features-1.png" alt=""
                                        class="img-fluid">
                                </figure>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <figure>
                                    <img src="<?= base_url();?>assets/public/assets/img/features-2.png" alt=""
                                        class="img-fluid">
                                </figure>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <figure>
                                    <img src="<?= base_url();?>assets/public/assets/img/features-3.png" alt=""
                                        class="img-fluid">
                                </figure>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <figure>
                                    <img src="<?= base_url();?>assets/public/assets/img/features-4.png" alt=""
                                        class="img-fluid">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Features Section -->



        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Info Loker Disnaker</h2>
                    <p>Berikut Informasi terupdate Lowongan Kerja terupdate 2022.</p>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <?php
                                            
                                            $id = 0;
                                            foreach($loker as $i)
                                            :
                                            $id++;
                                            $id_loker = $i['id_loker'];
                                            $id_loker = $i['id_loker'];
                                            $nama_perusahaan = $i['nama_perusahaan'];
                                            $judul = $i['judul'];
                                            $deskripsi_loker = $i['deskripsi'];
                                            $posisi = $i['posisi'];
                                            $jumlah_rekrut = $i['jumlah_rekrut'];
                                            $salary = $i['salary'];
                                            $batas_akhir = $i['batas_akhir'];
                                            $logo = $i['logo'];

                                            
                                            ?>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url();?>assets/logo/<?=$logo?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><?=$nama_perusahaan?></h4>
                                <p><?=$judul?></p>
                            </div>
                            <div class="portfolio-links">
                                <a href="<?= base_url();?>assets/logo/<?=$logo?>" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="<?=base_url();?>Web_public/loker_detail/<?=$id_loker?>" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container">

                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>Call To Action</h3>
                        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#">Call To Action</a>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->



        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Struktur Organisasi</h2>
                    <p>Struktur Organisasi Dinas Tenaga Kerja dan Transmigrasi Kabupaten
                        Ogan Ilir.</p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="zoom-in">
                            <div class="pic"><img src="<?= base_url();?>assets/public/assets/img/team/team-1.jpg"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="<?= base_url();?>assets/public/assets/img/team/team-2.jpg"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="pic"><img src="<?= base_url();?>assets/public/assets/img/team/team-3.jpg"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="pic"><img src="<?= base_url();?>assets/public/assets/img/team/team-3.jpg"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="zoom-in">
                            <div class="pic"><img src="<?= base_url();?>assets/public/assets/img/team/team-1.jpg"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="<?= base_url();?>assets/public/assets/img/team/team-2.jpg"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="pic"><img src="<?= base_url();?>assets/public/assets/img/team/team-3.jpg"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="pic"><img src="<?= base_url();?>assets/public/assets/img/team/team-3.jpg"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->






        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Hubungi Kami</h2>
                </div>

                <div class="row">

                    <div class="col-lg-12 d-flex align-items-stretch" data-aos="fade-right">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Jalan Raya Lintas Timur, KM.35 Indralaya Raya</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>(0711) 580 600</p>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.453924708487!2d104.6623877145424!3d-3.2366623976435136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b95f6795d914d%3A0xfb2899c6a5206a!2sDinas%20Tenaga%20Kerja%20dan%20Transmigrasi%20Ogan%20Ilir!5e0!3m2!1sen!2sid!4v1656026120433!5m2!1sen!2sid"
                                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>

                        </div>

                    </div>



                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-7">
                        <div class="footer-info">
                            <h3>SISPAKER</h3>
                            <p>
                                Jalan Raya Lintas Timur <br>
                                KM.35 Indralaya Raya<br><br>
                                <strong>Phone:</strong> (0711) 580 600<br>
                                <strong>Instagram:</strong> @disnaskertrans.oganilir<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-7 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>


                    <div class="col-lg-4 col-md-7 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Scaffold</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url();?>assets/public/assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url();?>assets/public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url();?>assets/public/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url();?>assets/public/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url();?>assets/public/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url();?>assets/public/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url();?>assets/public/assets/js/main.js"></script>

</body>

</html>