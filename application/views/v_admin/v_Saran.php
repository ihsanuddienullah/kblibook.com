<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('header');?>
    <link rel="stylesheet" href="<?php echo site_url('assets2/css/editor/select2.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets2/css/editor/datetimepicker.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets2/css/editor/bootstrap-editable.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets2/css/editor/x-editor-style.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets2/css/data-table/bootstrap-table.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets2/css/data-table/bootstrap-editable.css') ?>"> 
</head>

<body>
    <?php $this->load->view('v_admin/v_menuleft');?> 
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
            <?php $this->load->view('v_admin/v_mobileMenu');?> 
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
                                            <li><span class="bread-blod">Saran</span>
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
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#t1"> Tampil Saran</a></li>
                                
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="t1">
                                <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="sparkline13-list">
                                                
                                                <div class="sparkline13-graph">
                                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                                    <?php
                                                        
                                                        if($saran1 == 1){
                                                            echo"
                                                                <div class='alert alert-info fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                                                    Data sukses Dihapus
                                                                </div>
                                                            ";
                                                        }
                                                    ?>
                                                    		
                                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                                            data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                            <thead>
                                                                <tr>
                                                                    
                                                                    <th data-field="id">No</th>
                                                                    <th data-field="nama" >Nama</th>
                                                                    <th data-field="email" >Email</th>
                                                                    <th data-field="subjek" >Subjek</th>
                                                                    <th data-field="pesan" >Pesan</th>
                                                                    <th data-field="action">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                                $i =1;
                                                                    if( ! empty($saran)){
                                                                        
                                                                        foreach($saran as $data){
                                                                            ?>
                                                                            <tr>
                                                                            <td><?php echo$i++;?></td>
                                                                            <td><?php echo$data->nama;?></td>
                                                                            <td><?php echo$data->email;?></td>
                                                                            <td><?php echo$data->subjek;?></td>
                                                                            <td><?php echo$data->pesan;?></td>
                                                                            <td>
                                                                                
                                                                                <a href="#delete<?php echo $data->kode_saran;?>" data-toggle="modal">
                                                                                    <button type='button' class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></button>
                                                                                </a>
                                                                            </td>
                                                                            <!-- <td>
                                                                                        <a href='".base_url("index.php/Kategori/cariKate/".$data->kode_kategori)."' class='btn btn-success'><i style='color:#ffff;' class='fa fa-pencil' aria-hidden='true'></i></a>
                                                                                        <a data-confirm='Anda yakin akan menghapus data ini?' href='".base_url("index.php/Kategori/hapusKate/".$data->kode_kategori)."' class='btn btn-danger '><i style='color:#ffff;' class='fa fa-trash-o' aria-hidden='true'></i></a>
                                                                            </td> -->
                                                                            <!--Delete Modal -->
                                                                            <div id="delete<?php echo $data->kode_saran; ?>" class="modal fade" role="dialog">
                                                                                <div class="modal-dialog">
                                                                                    <form method="post" action="<?php echo base_url('index.php/Saran/hapus'); ?>">
                                                                                        <!-- Modal content-->
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                                <h4 class="modal-title">Hapus</h4>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <input type="hidden" name="delete_id" value="<?php echo $data->kode_saran; ?>">
                                                                                                <div class="alert alert-danger">Apakah anda yakin ingin menghapus  <strong>
                                                                                                        <?php echo $data->nama; ?>?</strong> </div>
                                                                                                <div class="modal-footer">
                                                                                                    <button type="submit" name="delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Ya</button>
                                                                                                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Tidak</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            </tr>
                                                                            <?php
                                                                        }
                                                                    //     echo 
                                                                    //     "<tr>
                                                                        
                                                                    //     <td>".$i++."</td>
                                                                    //     <td>".$data->nama."</td>
                                                                    //     <td>".$data->email."</td>
                                                                    //     <td>".$data->subjek."</td>
                                                                    //     <td>".$data->pesan."</td>
                                                                    //     <td>
                                                                                    
                                                                    //                 <a href='".base_url("index.php/Saran/hapus/".$data->kode_saran)."' class='btn btn-danger'><i style='color:#ffff;' class='fa fa-trash-o' aria-hidden='true'></i></a>
                                                                    //     </td>
                                                                    //     </tr>";
                                                                    //     }
                                                                    }else{
                                                                        echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
                                                                    }
                                                                ?>
                                                            </tbody>
                                                        </table>
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
