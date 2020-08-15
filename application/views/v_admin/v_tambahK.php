<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('header');?>
    <!-- x-editor CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo site_url('assets2/css/editor/select2.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets2/css/editor/datetimepicker.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets2/css/editor/bootstrap-editable.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets2/css/editor/x-editor-style.css') ?>">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo site_url('assets2/css/data-table/bootstrap-table.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets2/css/data-table/bootstrap-editable.css') ?>"> 



  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>

<body>
<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <?php $this->load->view('v_admin/v_menuleft');?> 
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
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
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Kategori</span>
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
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#t1"> Tambah Kategori</a></li>
                                <li><a href="#t2"> Tambah Golongan Pokok</a></li>
                                <li><a href="#t3"> Tambah Golongan</a></li>
                                <li><a href="#t4"> Tambah Sub Golongan</a></li>
                                <li><a href="#t5"> Tambah Kelompok</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="t1">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <form id="acount-infor" method="post" action="<?php echo base_url('index.php/Kategori/tambahKate'); ?>" class="acount-infor">
                                                            <div class="devit-card-custom">
                                                                <?php
                                                                    if($tambah == "ada"){
                                                                        echo"<div class='alert alert-success fade in' id='submitsukses'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Data yang diinputkan sudah ada</div>";

                                                                    }else if($tambah != ""){
                                                                        echo"
                                                                        <div class='alert alert-success fade in' id='submitsukses'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                                                                Data ";
                                                                        echo $tambah;
                                                                        echo"
                                                                            sukses ditambahkan
                                                                            </div>
                                                                        ";
                                                                    }
                                                                ?>
                                                                <div class="form-group">
                                                                    <input onkeyup="myFunction()" id="kd" type="text" class="form-control" name="kode_kategori" placeholder="kode_kategori" required="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="judul_kategori" placeholder="judul_kategori" required="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <p>Deskripsi</p>
                                                                    <textarea id="summernote" name="deskripsi_kategori" type="text" class="form-control" placeholder="deskripsi_kategori" required=""></textarea>
                                                                </div>
                                                                
                                                                <input class="btn btn-primary waves-effect waves-light"  type="submit" name="submit" value="Simpan">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade  in" id="t2">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <form id="acount-infor" method="post" action="<?php echo base_url('index.php/Kategori/tambahgolpok'); ?>" class="acount-infor">
                                                            <div class="devit-card-custom">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="kode_golonganpokok" placeholder="kode_golonganpokok" required="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="kode_kategori" class="form-control" required="">
                                                                            <option value="none" selected="" disabled="">Pilih Kategori</option>
                                                                            <?php
                                                                                if( ! empty($kategori)){ // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada
                                                                                    
                                                                                    foreach($kategori as $data){
                                                                            
                                                                                    echo 
                                                                                    "<option value='".$data->kode_kategori."'>".$data->kode_kategori."</option>";
                                                                                    }
                                                                                }else{ 

                                                                                }
                                                                            ?>
																			<!-- <option value="1">Admin</option>
																			<option value="0">Pegawai</option> -->
																		</select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="judul_golonganpokok" placeholder="judul_golonganpokok" required="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <p>Deskripsi</p>
                                                                    <textarea id="summernote1" name="deskripsi_golonganpokok" type="text" class="form-control" placeholder="deskripsi_golonganpokok" required=""></textarea>
                                                                </div>
                                                                
                                                                <input class="btn btn-primary waves-effect waves-light"  type="submit" name="submit" value="Simpan">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade  in" id="t3">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <form id="acount-infor" method="post" action="<?php echo base_url('index.php/Kategori/tambahgol'); ?>" class="acount-infor">
                                                            <div class="devit-card-custom">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="kode_golongan" placeholder="kode_golongan" required="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="kode_golonganpokok" class="form-control" required="">
																			<option value="none" selected="" disabled="">Pilih golongan pokok</option>
																			<?php
                                                                                if( ! empty($golPok)){ // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada
                                                                                    
                                                                                    foreach($golPok as $data1){
                                                                            
                                                                                    echo 
                                                                                    "<option value='".$data1->kode_golonganpokok."'>".$data1->kode_golonganpokok."</option>";
                                                                                    }
                                                                                }else{ 

                                                                                }
                                                                            ?>
																			
																		</select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="judul_golongan" placeholder="judul_golongan" required="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <p>Deskripsi</p>
                                                                    <textarea id="summernote2" name="deskripsi_golongan" type="text" class="form-control" placeholder="deskripsi_golongan" required=""></textarea>
                                                                </div>
                                                                
                                                                <input class="btn btn-primary waves-effect waves-light"  type="submit" name="submit" value="Simpan">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade  in" id="t4">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <form id="acount-infor" method="post" action="<?php echo base_url('index.php/Kategori/tambahSubgol'); ?>" class="acount-infor">
                                                            <div class="devit-card-custom">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="kode_subgolongan" placeholder="kode_subgolongan" required="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="kode_golongan" class="form-control" required="">
																			<option value="none" selected="" disabled="">Pilih Golongan</option>
																			<?php
                                                                                if( ! empty($gol)){ // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada
                                                                                    
                                                                                    foreach($gol as $data2){
                                                                            
                                                                                    echo 
                                                                                    "<option value='".$data2->kode_golongan."'>".$data2->kode_golongan."</option>";
                                                                                    }
                                                                                }else{ 

                                                                                }
                                                                            ?>
																		</select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="judul_subgolongan" placeholder="judul_subgolongan" required="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <p>Deskripsi</p>
                                                                    <textarea id="summernote3" name="deskripsi_subgolongan" type="text" class="form-control" placeholder="deskripsi_subgolongan" required=""></textarea>
                                                                </div>
                                                                
                                                                <input class="btn btn-primary waves-effect waves-light"  type="submit" name="submit" value="Simpan">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade  in" id="t5">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <form id="acount-infor" method="post" action="<?php echo base_url('index.php/Kategori/tambahKel'); ?>" class="acount-infor">
                                                            <div class="devit-card-custom">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="kode_kelompok" placeholder="kode_kelompok" required="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="kode_subgolongan" class="form-control" required="">
																			<option value="none" selected="" disabled="">Pilih sub golongan</option>
																			<?php
                                                                                if( ! empty($subGol)){ // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada
                                                                                    
                                                                                    foreach($subGol as $data3){
                                                                            
                                                                                    echo 
                                                                                    "<option value='".$data3->kode_subgolongan."'>".$data3->kode_subgolongan."</option>";
                                                                                    }
                                                                                }else{ 

                                                                                }
                                                                            ?>
																		</select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="judul_kelompok" placeholder="judul_kelompok" required="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <textarea id="contoh_pekerjaan" name="contoh_pekerjaan" type="text" class="form-control" placeholder="contoh_pekerjaan" required=""></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <p>Deskripsi</p>
                                                                    <textarea id="summernote4" name="deskripsi_kelompok" type="text" class="form-control" placeholder="deskripsi_kelompok" required=""></textarea>
                                                                </div>
                                                                
                                                                <input class="btn btn-primary waves-effect waves-light"  type="submit" name="submit" value="Simpan">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                            <p>TIM KBLI ICM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    

  <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
    $(document).ready(function() {
        $('#summernote1').summernote();
    });
    $(document).ready(function() {
        $('#summernote2').summernote();
    });
    $(document).ready(function() {
        $('#summernote3').summernote();
    });
    $(document).ready(function() {
        $('#summernote4').summernote();
    });
    function myFunction() {
        var x = document.getElementById("kd");
        x.value = x.value.toUpperCase();
    }

  </script>
    <!-- <script src="<?php echo site_url('assets2/js/vendor/jquery-1.12.4.min.js') ?>"></script> -->
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
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo site_url('assets2/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') ?>"></script>
    <script src="<?php echo site_url('assets2/js/scrollbar/mCustomScrollbar-active.js') ?>"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="<?php echo site_url('assets2/js/metisMenu/metisMenu.min.js') ?>"></script>
    <script src="<?php echo site_url('assets2/js/metisMenu/metisMenu-active.js') ?>"></script>
    <script src="<?php echo site_url('assets2/js/plugins.js') ?>"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo site_url('assets2/js/main.js') ?>"></script>
    <!-- tawk chat JS
        ============================================ -->
        <!-- data table JS
		============================================ -->
    <script src="<?php echo site_url('assets2/js/data-table/bootstrap-table.js') ?>"></script>
    <script src="<?php echo site_url('assets2/js/data-table/tableExport.js') ?>"></script>
    <script src="<?php echo site_url('assets2/js/data-table/data-table-active.js') ?>"></script>
    <script src="<?php echo site_url('assets2/js/data-table/bootstrap-table-editable.js') ?>"></script>
    <script src="<?php echo site_url('assets2/js/data-table/bootstrap-editable.js') ?>"></script>
    <script src="<?php echo site_url('assets2/js/data-table/bootstrap-table-resizable.js') ?>"></script>
    <script src="<?php echo site_url('assets2/js/data-table/colResizable-1.5.source.js') ?>"></script>
    <script src="<?php echo site_url('assets2/js/data-table/bootstrap-table-export.js') ?>"></script>
    <!--  editable JS
		============================================ -->
    <script src="<?php echo site_url('assets2/js/editable/jquery.mockjax.js') ?>"></script>
    <script src="<?php echo site_url('assets2/js/editable/mock-active.js') ?>"></script>
    <script src="<?php echo site_url('assets2/js/editable/select2.js') ?>"></script>
    <script src="<?php echo site_url('assets2/js/editable/moment.min.js') ?>"></script>
    <script src="<?php echo site_url('assets2/js/editable/bootstrap-datetimepicker.js') ?>"></script>
    <script src="<?php echo site_url('assets2/js/editable/bootstrap-editable.js') ?>"></script>
    <script src="<?php echo site_url('assets2/js/editable/xediable-active.js') ?>"></script>
    <!-- Chart JS
		============================================ -->
    <script src="js/chart/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    
</body>

</html>
