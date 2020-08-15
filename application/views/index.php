<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KBLI Book</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/img/favicon.png')?>" rel="icon">
  <link href="<?php echo base_url('assets/img/apple-touch-icon.png')?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url('assets/lib/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


  <!-- Libraries CSS Files -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="<?php echo base_url('assets/lib/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/animate/animate.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/ionicons/css/ionicons.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/lightbox/css/lightbox.min.css')?>" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">


  <style>
    .containerlogin {
      padding: 2rem 0rem;
    }

    @media (min-width: 576px){
      .modal-dialog {
        max-width: 400px;
        
        .modal-content {
          padding: 1rem;
        }
      }
    }

    .modal-header {
      .close {
        margin-top: -1.5rem;
      }
    }

    .form-title {
      margin: -2rem 0rem 2rem;
    }

    .btn-round {
      border-radius: 3rem;
    }

    .delimiter {
      padding: 1rem;  
    }

    .social-buttons {
      .btn {
        margin: 0 0.5rem 1rem;
      }
    }

    .signup-section {
      padding: 0.3rem 0rem;
    }

    #intro {
      background: #f5f8fd url("<?php echo base_url('assets/img/intro-bg2.jpg')?>") center top no-repeat;    
    }

    #intro-img2 {
      width: 500px;
      padding-top: 50px;
    }
  </style>
</head>
<body>
  <!--==========================
  Header
  ============================-->
  <header id="header">

    <div class="container">
      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="#intro" class="scrollto"><span>KBLI BOOK</span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#about">Tentang KBLI</a></li>
          <li><a href="#services">Layanan Kami</a></li>
          <li><a href="#testimonials">Metode</a></li>
          <li><a href="#team">Tim</a></li>
          <li><a href="#footer">Kontak</a></li>
          <!--<li><a href="<?php echo base_url('index.php/login/index'); ?>"  >Admin</a></li>-->
        </ul>
      </nav><!-- .main-nav -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>KBLI Solusi<br> <span>Untuk Usaha Anda!</span></h2>
          <p style="text-align:justify">KBLI adalah Klasifikasi Baku Lapangan Usaha di Indonesia yang digunakan untuk penyusunan klasifikasi bidang usaha yang ada di Indonesia yang disusun secara sistematis. </p>
       
          <!--<p style="text-align:justify">Dasar Hukum KBLI adalah Peraturan Kepala BPS No. 19/2017 tentang Perubahan KBLI 2015. Gunakan ini untuk mempermudah kamu untuk mencari bidang usaha di OSS V 1.1 di 2020</p>-->

          <div>
            <a href="<?php echo base_url('index.php/QNA/index'); ?>" class="btn-get-started scrollto">Mulai Cari KBLI</a>
          </div>
        </div>

        <div class="col-md-6 intro-img order-md-last order-first">
          <img id="intro-img2" src="<?php echo base_url('assets/img/intro-img2.svg')?>" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

  <!--==========================
    About Us Section
  ============================-->
    <section id="about">

      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="about-img">
              <img src="<?php echo base_url('assets/img/about-img2.jpg')?>" alt="">
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content">
              <h2>Tentang KBLI</h2>
              <h3>Klasifikasi Baku Lapangan Usaha Indonesia.</h3>
              <p style="text-align:justify">Klasifikasi Baku Lapangan Usaha Indonesia (KBLI) merupakan salah satu klasifikasi baku yang diterbitkan oleh Badan Pusat Statistik (BPS) untuk aktivitas ekonomi. KBLI disusun untuk menyediakan satu set kerangka klasifikasi kegiatan ekonomi yang komprehensif di Indonesia agar dapat digunakan untuk penyeragaman pengumpulan, pengolahan, penyajian dan analisis data statistik menurut kegiatan ekonomi, serta untuk mempelajari keadaan atau perilaku ekonomi menurut kegiatan ekonomi. Dengan penyeragaman tersebut, data statistik kegiatan ekonomi dapat dibandingkan dengan format yang standar pada tingkat internasional, nasional, maupun regional. Dasar Hukum KBLI adalah Peraturan Kepala BPS No. 19/2017 tentang Perubahan KBLI 2015.</p>
              <ul>
                <li><i class="ion-android-checkmark-circle"></i>Badan Pusat Statistik, 2015, “Klasifikasi Baku Lapangan Usaha Indonesia”, Jakarta, Badan Pusat Statistik.</li>
              </ul>
            
              <a style="margin-top: 20px; " href="<?php echo base_url('index.php/kbli/download'); ?>" class="btn btn-md btn-primary waves-effect waves-light " type="submit"  style="color:white;">UNDUH BUKU KBLI</a>

            </div>
          </div>
          
        </div>
      </div>

    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Layanan Kami</h3>
        </header>

        <div class="row">
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box" style="height:350px">
              <div class="icon" style="background: #e6fdfc;"><i class="fa" style="color:#3fcdc7;">&#xf1e7;</i></div>
              <h4 class="title"><a href="#services">Sharing</a></h4>
              <p style="text-align:center" class="description">Kami membagikan informasi kepada masyarakat tentang apa itu KBLI, apa manfaat dari adanya KBLI. Sehingga masyarakat dengan mandiri dapat melakukan pengecekkan usaha yang dimilikinya.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box" style="height:350px">
              <div class="icon" style="background: #e6fdfc;"><i class="fa" style="color: #3fcdc7;">&#xf002;</i></div>
              <h4 class="title"><a href="#services">Cari Kode KBLI</a></h4>
              <p style="text-align:center" class="description">Kami menyediakan pelayanan untuk mencari kode baku lapangan usaha anda sebagai fitur utama website kami agar memudahkan anda untuk mendapatkan Kode KBLI.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box" style="height:350px">
              <div class="icon" style="background: #e6fdfc;"><i class="fa" style="color: #3fcdc7;">&#xf1d7;</i></div>
              <h4 class="title"><a href="#services">Konsultasi</a></h4>
              <p style="text-align:center" class="description">Kami menyediakan tempat untuk berkonsultasi dengan para pelaku usaha dan instansi yang bersangkutan sehingga masyarakat lebih leluasa untuk melakukan tanya jawab terkait KBLI.</p>
            </div>
          </div>
        </div>
      </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Metode Section
    ============================-->
    <section id="testimonials">
      
      <div class="container" style="height:420px;margin-top:50px">
        <header class="section-header">
          <h3>Metode</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="owl-carousel testimonials-carousel wow fadeInUp">
              
              <div class="testimonial-item">
                <img src="<?php echo base_url('assets/img/testimonial-12.jpg')?>" class="testimonial-img" alt="">
                <h3>Taksonomi</h3>
                <p>
                Taksonomi bertujuan untuk merancang sebuah visualisasi informasi agar lebih baik dengan menerapkan faktor utama dalam proses pengembangan sebuah antarmuka. Pada pengembangan system informasi yang terstruktur dan memperhatikan pertimbangan yang baik, dapat menghasilkan kualitas visualisasi yang lebih tinggi. Kerangka kerja ini juga berfungsi untuk membantu pengembangan evaluasi yang efektif dan proses penilaian sistem visualisasi informasi.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="<?php echo base_url('assets/img/testimonial-22.jpg')?>" class="testimonial-img" alt="">
                <h3>Question and Answer</h3>
                <p>
                Question and Answering System (QAS) adalah sistem dimana tiap user dapat mengajukan pertanyaan dan menjawab pertanyaan dalam berbagai topik. Dalam proses pengembangan sebuah QAS yang baik dibutuhkan pengetahuan dari berbagai disiplin ilmu yaitu seperti Natural Language Processing, Information Extraction, dan Information Retrieval.                
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="<?php echo base_url('assets/img/testimonial-32.jpg')?>" class="testimonial-img" alt="">
                <h3>Decision Tree</h3>
                <p>
                Pohon keputusan adalah struktur pohon seperti bagan alur,dimana masing-masing simpul internal merupakan tes pada atribut, setiap cabang mewakili hasil tes, label kelas diwakili oleh masing-masing simpul leaf (atau simpul terminal). Decision Tree digunakan untuk pengenalan pola dan termasuk dalam pengenalan pola secara statistik.
                </p>
              </div>

            </div>
          </div>
        </div>
      </div>

    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team" class="section-bg">
      
      <div class="container">
        <div class="section-header">
          <h3>Tim Pengembang</h3>
        </div>
        <div class="row">
          
          <div class="col-lg-4 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="<?php echo base_url('assets/img/team-12.jpg')?>" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Muhammad Ihsanuddienullah</h4>
                  <span>Front-End Developer</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="<?php echo base_url('assets/img/team-22.jpg')?>" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Muhammad Faisal Nur</h4>
                  <span>Back-End Developer</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="<?php echo base_url('assets/img/tean-13.jpg')?>" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Hendro Susanto</h4>
                  <span>Artificial Intelligent Specialist</span>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      
    </section><!-- #team -->

    <!--==========================
      Tools Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      
      <div class="container">
        <header class="section-header">
          <h3>Tools</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="<?php echo base_url('assets/img/clients/client-12.png')?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/client-22.png')?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/client-32.png')?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/client-92.png')?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/client-42.png')?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/client-52.png')?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/client-62.png')?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/client-72.png')?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/client-82.png')?>" alt="">
        </div>

      </div>
    </section><!-- #clients -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">

                <div class="col-sm-6">

                  <div class="footer-info">
                    <h3>Hubungi Kami</h3>
                    <!--<p>.</p>-->
                  </div>

                  <div class="footer-newsletter">
                    <h4>Team KBLI ICM</h4>
                    <p>Klasifikasi Baku Lapangan Usaha di Indonesia yang digunakan untuk penyusunan klasifikasi bidang usaha yang ada di Indonesia yang disusun secara sistematis. </p>
                  </div>

                </div>

                <div class="col-sm-6">
                  <div class="footer-links">
                    <h4>Ikuti Kami</h4>
                    <ul>
                      <li><a href="#">Facebook</a></li>
                      <li><a href="#">Instagram</a></li>
                      <li><a href="#">Twitter</a></li>
                    </ul>
                  </div>

                  <div class="footer-links">
                    <h4>Hubungi Kami</h4>
                    <p>
                      Telkom University <br>
                      Fakultas Informatika<br>
                      Kabupaten Bandung <br>
                      <strong>Phone:</strong> +62822 1664 9130<br>
                      <strong>Email:</strong> mfaisaln26@gmail.com<br>
                    </p>
                  </div>

                  <div class="social-links">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                  </div>

                </div>

            </div>

          </div>

          <div class="col-lg-6">

            <div class="form">
              
              <h4>Kirim Pesan</h4>
              <p> Ada saran dan kritikan? </strong> berikan saran dan kritik kepada kami demi pengembangan yang lebih baik pada kolom dibawah ini. </p>
              <form method="post" action="<?php echo base_url('index.php/kbli/tambahpesan'); ?>">
                <div class="form-group">
                  <input type="text" name="nama" class="form-control" id="name" placeholder="Nama" required="">
                  
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="">
                  
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subjek" id="subject" placeholder="Subjek" required="">
                  
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="pesan" rows="5" data-rule="required" required="" placeholder="Pesan"></textarea>
                  
                </div>
                <?php                                     
                      if($saran1 == 1){
                          echo"
                              <div class='alert alert-success fade in' id='submitsukses'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                  Saran Sukses dikirimkan
                              </div>
                          ";
                      }
                  ?>
                <div class="text-center"><button id="submitpesan" type="submit" title="Send Message" onclick="myFunction">Kirim Pesan</button></div>
              </form>
            </div>

          </div>

        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        <strong>TIM</strong> KBLI ICM
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
        
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          -->
      </div>
    </div>
  </footer><!-- #footer -->

    <!--Pop Up Login From -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-title text-center">
          <h4>Login Admin</h4>
        </div>
        <div class="d-flex flex-column text-center">
          <form>
            <div class="form-group">
              <input type="email" class="form-control" id="email1" placeholder="Username">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="password1" placeholder="Password">
            </div>
            <button type="button" class="btn btn-info btn-block btn-get-started scrollto">Login</button>
          </form>
          
          <div class="text-center text-muted delimiter"><a href="" class="text-info">Lupa Password ?</a></div>
          <div class="d-flex justify-content-center social-buttons">
            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Twitter">
              <i class="fab fa-twitter"></i>
            </button>
            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">
              <i class="fab fa-facebook"></i>
            </button>
            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Linkedin">
              <i class="fab fa-linkedin"></i>
            </button>
          </di>
        </div>
      </div>
    </div>
      <div class="modal-footer d-flex justify-content-center">
        <div class="signup-section">Login hanya untuk admin</div>
      </div>
  </div>
</div>
<!--Login-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url('assets/lib/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/lib/jquery/jquery-migrate.min.js')?>"></script>
  <script src="<?php echo base_url('assets/lib/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <script src="<?php echo base_url('assets/lib/easing/easing.min.js')?>"></script>
  <script src="<?php echo base_url('assets/lib/mobile-nav/mobile-nav.js')?>"></script>
  <script src="<?php echo base_url('assets/lib/wow/wow.min.js')?>"></script>
  <script src="<?php echo base_url('assets/lib/waypoints/waypoints.min.js')?>"></script>
  <script src="<?php echo base_url('assets/lib/counterup/counterup.min.js')?>"></script>
  <script src="<?php echo base_url('assets/lib/owlcarousel/owl.carousel.min.js')?>"></script>
  <script src="<?php echo base_url('assets/lib/isotope/isotope.pkgd.min.js')?>"></script>
  <script src="<?php echo base_url('assets/lib/lightbox/js/lightbox.min.js')?>"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url('assets/contactform/contactform.js')?>"></script>

  <!--Jquery PopUp overlay login-->
  <script src="<?php echo base_url('assets/login/jquery-popup-overlay/jquery.popupoverlay.js')?>"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url('assets/js/main.js')?>"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function(){
      $("#login").click(function(){
        $('#loginModal').modal('show');
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        });
      });
    });

    document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });
    function myFunction() {
      localStorage.setItem('scrollpos', window.scrollY);
      location.reload(); 
    }

    (function () {
            var options = {
                whatsapp: "+6282216649130", // WhatsApp number
                call_to_action: "Hubungi Kami", // Call to action
                position: "right", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
</script>
</body>
</html>