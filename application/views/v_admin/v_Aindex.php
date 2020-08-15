
<!doctype html>
<html class="no-js" lang="en">
<?php
    foreach($user as $data){
        $level =$data->level;
        $blokir =$data->blokir;
    }
if ($blokir==1) {


    $data_session = array(
        'level' => $level,
        'blokir' => $blokir
        );
    $this->session->set_userdata($data_session);

?>

<?php $this->load->view('header');?> 

<body>

    <?php $this->load->view('v_admin/v_menuleft');?> 
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" style="width:200px;" src="<?php echo site_url('assets2/img/logo/logo.png') ?>" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <?php $this->load->view('v_admin/v_navAtas');?> 
            <!-- Mobile Menu start -->
                <?php $this->load->view('v_admin/v_mobileMenu');?> 
            <!-- Mobile Menu end -->
            <br><br>
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <!-- <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dashboard</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="traffic-analysis-area" style:>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="social-media-edu">
                            <i class="fa fa-list-ul"></i>
                            <div class="social-edu-ctn">
                                <h4>Kategori</h4>
                                <h3> Terdapat 
                                    <?php
                                    echo $kategori;
                                    ?> kategori kode KBLI
                                </h3>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="social-media-edu twitter-cl res-mg-t-30 table-mg-t-pro-n">
                            <i class="fa fa-list-ul"></i>
                            <div class="social-edu-ctn">
                                <h4>Golongan Pokok</h4>
                                <h3>Terdapat 
                                    <?php
                                        echo $golpokok;
                                    ?> golongan pokok  kode KBLI
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="social-media-edu linkedin-cl res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <i class="fa fa-list-ul"></i>
                            <div class="social-edu-ctn">
                                <h4>Golongan</h4>
                                <h3>Terdapat 
                                    <?php
                                        echo $golongan;
                                    ?> golongan  kode KBLI
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="social-media-edu youtube-cl res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <i class="fa fa-list-ul"></i>
                            <div class="social-edu-ctn">
                                <h4>Sub Golongan</h4>
                                <h3>Terdapat 
                                    <?php
                                        echo $subgolongan;
                                    ?> sub golongan  kode KBLI
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="social-media-edu res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <i style="color:#00000;" class="fa fa-list-ul"></i>
                            <div  class="social-edu-ctn">
                                <h4>Kelompok</h4>
                                <h3>Terdapat 
                                    <?php
                                        echo $kelompok;
                                    ?> kelompok kode KBLI
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="social-media-edu twitter-cl res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <i class="fa fa-list-ul"></i>
                            <div class="social-edu-ctn">
                                <h4>Saran</h4>
                                <h3>Terdapat 
                                    <?php
                                        echo $saran;
                                    ?> Saran dari user
                                </h3>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <br>
        <br>
        
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>TIM KBLI ICM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
		============================================ -->
    <script src="<?php echo site_url('assets2/js/vendor/jquery-1.12.4.min.js') ?>"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo site_url('assets2/js/bootstrap.min.js') ?>"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?php echo site_url('assets2/js/wow.min.js') ?>"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?php echo site_url('assets2/js/jquery-price-slider.js') ?>"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo site_url('assets2/js/jquery.meanmenu.js') ?>"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?php echo site_url('assets2/js/owl.carousel.min.js') ?>"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?php echo site_url('assets2/js/jquery.sticky.js') ?>"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo site_url('assets2/js/jquery.scrollUp.min.js') ?>"></script>
    <!-- counterup JS
		============================================ -->
    <script src="<?php echo site_url('assets2/js/counterup/jquery.counterup.min.js') ?>"></script>
    <script src="<?php echo site_url('assets2/js/counterup/waypoints.min.js') ?>"></script>
    <script src="<?php echo site_url('assets2/js/counterup/counterup-active.js') ?>"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo site_url('assets2/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') ?>"></script>
    <script src="<?php echo site_url('assets2/js/scrollbar/mCustomScrollbar-active.js') ?>"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="<?php echo site_url('assets2/js/metisMenu/metisMenu.min.js') ?>"></script>
    <script src="<?php echo site_url('assets2/js/metisMenu/metisMenu-active.js') ?>"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="<?php echo site_url('assets2/js/morrisjs/raphael-min.js') ?>"></script>
    <script src="<?php echo site_url('assets2/js/morrisjs/morris.js') ?>"></script>
    <script src="<?php echo site_url('assets2/js/morrisjs/morris-active.js') ?>"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="<?php echo site_url('assets2/js/sparkline/jquery.sparkline.min.js') ?>"></script>
    <script src="<?php echo site_url('assets2/js/sparkline/jquery.charts-sparkline.js') ?>"></script>
    <script src="<?php echo site_url('assets2/js/sparkline/sparkline-active.js') ?>"></script>
    <!-- calendar JS
		============================================ -->
    <script src="<?php echo site_url('assets2/js/calendar/moment.min.js') ?>"></script>
    <script src="<?php echo site_url('assets2/js/calendar/fullcalendar.min.js') ?>"></script>
    <script src="<?php echo site_url('assets2/js/calendar/fullcalendar-active.js') ?>"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?php echo site_url('assets2/js/plugins.js') ?>"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo site_url('assets2/js/main.js') ?>"></script>
    <!-- tawk chat JS
		============================================ -->

</body>

</html>
<?php

} else {
    redirect(base_url('index.php/Login/logout'));
}
?>