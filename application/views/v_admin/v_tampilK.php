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
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#t1"> Tampil Kategori</a></li>
                                <li><a href="#t2"> Tampil Golongan Pokok</a></li>
                                <li><a href="#t3"> Tampil Golongan</a></li>
                                <li><a href="#t4"> Tampil Sub Golongan</a></li>
                                <li><a href="#t5"> Tampil Kelompok</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="t1">
                                <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="sparkline13-list">
                                                
                                                <div class="sparkline13-graph">
                                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                                        <?php
                                                                    if($view != ""){
                                                                        echo"
                                                                        <div class='alert alert-success fade in' id='submitsukses'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                                                                Data ";
                                                                        echo $view;
                                                                        echo"
                                                                            sukses di";
                                                                        echo $title;
                                                                        echo "
                                                                            </div>
                                                                        ";
                                                                    }
                                                                ?>
                                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                                            data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                            <thead>
                                                                <tr>
                                                                    
                                                                    <th data-field="id">No</th>
                                                                    <th data-field="kat" >Kode Kategori</th>
                                                                    <th data-field="judul" >Judul Kategori</th>
                                                                    <th data-field="desk"  >Deskripsi Kategori</th>
                                                                    <th data-field="action">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                                $i =1;
                                                                    if( ! empty($kategori)){
                                                                        
                                                                        foreach($kategori as $data){
                                                            ?>

                                                                        
                                                                        <tr>
                                                                        
                                                                        <td><?php echo$i++;?></td>
                                                                        <td><?php echo$data->kode_kategori;?></td>
                                                                        <td><?php echo$data->judul_kategori;?></td>
                                                                        <td><?php echo$data->deskripsi_kategori;?></td>
                                                                        <td>
                                                                            <a href="<?php echo base_url("index.php/Kategori/cariKate/".$data->kode_kategori) ?>">
                                                                                <button type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></button>
                                                                            </a>
                                                                            <a href="#delete<?php echo $data->kode_kategori;?>" data-toggle="modal">
                                                                                <button type='button' class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></button>
                                                                            </a>
                                                                        </td>
                                                                        <!-- <td>
                                                                                    <a href='".base_url("index.php/Kategori/cariKate/".$data->kode_kategori)."' class='btn btn-success'><i style='color:#ffff;' class='fa fa-pencil' aria-hidden='true'></i></a>
                                                                                    <a data-confirm='Anda yakin akan menghapus data ini?' href='".base_url("index.php/Kategori/hapusKate/".$data->kode_kategori)."' class='btn btn-danger '><i style='color:#ffff;' class='fa fa-trash-o' aria-hidden='true'></i></a>
                                                                        </td> -->
                                                                        <!--Delete Modal -->
                                                                        <div id="delete<?php echo $data->kode_kategori; ?>" class="modal fade" role="dialog">
                                                                            <div class="modal-dialog">
                                                                                <form method="post" action="<?php echo base_url('index.php/Kategori/hapusKate'); ?>">
                                                                                    <!-- Modal content-->
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                            <h4 class="modal-title">Hapus</h4>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <input type="hidden" name="delete_id" value="<?php echo $data->kode_kategori; ?>">
                                                                                            <div class="alert alert-danger">Apakah anda yakin ingin menghapus <strong>
                                                                                                    <?php echo $data->judul_kategori; ?>?</strong> </div>
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
                                <div class="product-tab-list tab-pane fade  in" id="t2">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="sparkline13-list">
                                                
                                                <div class="sparkline13-graph">
                                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                                            data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                            <thead>
                                                                <tr>
                                                                    
                                                                    <th data-field="id">No</th>
                                                                    <th data-field="golpok" >Kode Golongan Pokok</th>
                                                                    <th data-field="kate" >Kode Kategori</th>
                                                                    <th data-field="judul" >Judul Golongan Pokok</th>
                                                                    <th data-field="desk" >Deskripsi Golongan Pokok</th>
                                                                    <th data-field="action">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $i =1;
                                                                    if( ! empty($golPok)){ 
                                                                        
                                                                        foreach($golPok as $data1){
                                                                            ?>

                                                                        
                                                                            <tr>
                                                                            
                                                                            <td><?php echo$i++;?></td>
                                                                            <td><?php echo$data1->kode_golonganpokok;?></td>
                                                                            <td><?php echo$data1->kode_kategori;?></td>
                                                                            <td><?php echo$data1->judul_golonganpokok;?></td>
                                                                            <td><?php echo$data1->deskripsi_golonganpokok;?></td>
                                                                            <td>
                                                                                <a href="<?php echo base_url("index.php/Kategori/cariGolpok/".$data1->kode_golonganpokok) ?>">
                                                                                    <button type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></button>
                                                                                </a>
                                                                                <a href="#delete2<?php echo $data1->kode_golonganpokok;?>" data-toggle="modal">
                                                                                    <button type='button' class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></button>
                                                                                </a>
                                                                            </td>
                                                                            <!-- <td>
                                                                                        <a href='".base_url("index.php/Kategori/cariKate/".$data->kode_kategori)."' class='btn btn-success'><i style='color:#ffff;' class='fa fa-pencil' aria-hidden='true'></i></a>
                                                                                        <a data-confirm='Anda yakin akan menghapus data ini?' href='".base_url("index.php/Kategori/hapusKate/".$data->kode_kategori)."' class='btn btn-danger '><i style='color:#ffff;' class='fa fa-trash-o' aria-hidden='true'></i></a>
                                                                            </td> -->
                                                                            <!--Delete Modal -->
                                                                            <div id="delete2<?php echo $data1->kode_golonganpokok; ?>" class="modal fade" role="dialog">
                                                                                <div class="modal-dialog">
                                                                                    <form method="post" action="<?php echo base_url('index.php/Kategori/hapusGolpok'); ?>">
                                                                                        <!-- Modal content-->
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                                <h4 class="modal-title">Hapus</h4>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <input type="hidden" name="delete_id" value="<?php echo $data1->kode_golonganpokok; ?>">
                                                                                                <div class="alert alert-danger">Apakah anda yakin ingin menghapus <strong>
                                                                                                        <?php echo $data1->judul_golonganpokok; ?>?</strong> </div>
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
                                <div class="product-tab-list tab-pane fade  in" id="t3">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="sparkline13-list">
                                                
                                                <div class="sparkline13-graph">
                                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                                            data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                            <thead>
                                                                <tr>
                                                                    
                                                                    <th data-field="id">No</th>
                                                                    <th data-field="gol" >Kode Golongan</th>
                                                                    <th data-field="golpok" >Kode Golongan Pokok</th>
                                                                    <th data-field="judul" >Judul Golongan</th>
                                                                    <th data-field="desk" >Deskripsi Golongan</th>
                                                                    <th data-field="action">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $i =1;
                                                                    if( ! empty($gol)){ 
                                                                        
                                                                        foreach($gol as $data2){
                                                                            ?>

                                                                        
                                                                            <tr>
                                                                            
                                                                            <td><?php echo$i++;?></td>
                                                                            <td><?php echo$data2->kode_golongan;?></td>
                                                                            <td><?php echo$data2->kode_golonganpokok;?></td>
                                                                            <td><?php echo$data2->judul_golongan;?></td>
                                                                            <td><?php echo$data2->deskripsi_golongan;?></td>
                                                                            <td>
                                                                                <a href="<?php echo base_url("index.php/Kategori/cariGol/".$data2->kode_golongan) ?>">
                                                                                    <button type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></button>
                                                                                </a>
                                                                                <a href="#delete3<?php echo $data2->kode_golongan;?>" data-toggle="modal">
                                                                                    <button type='button' class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></button>
                                                                                </a>
                                                                            </td>
                                                                            <!-- <td>
                                                                                        <a href='".base_url("index.php/Kategori/cariKate/".$data->kode_kategori)."' class='btn btn-success'><i style='color:#ffff;' class='fa fa-pencil' aria-hidden='true'></i></a>
                                                                                        <a data-confirm='Anda yakin akan menghapus data ini?' href='".base_url("index.php/Kategori/hapusKate/".$data->kode_kategori)."' class='btn btn-danger '><i style='color:#ffff;' class='fa fa-trash-o' aria-hidden='true'></i></a>
                                                                            </td> -->
                                                                            <!--Delete Modal -->
                                                                            <div id="delete3<?php echo $data2->kode_golongan; ?>" class="modal fade" role="dialog">
                                                                                <div class="modal-dialog">
                                                                                    <form method="post" action="<?php echo base_url('index.php/Kategori/hapusGol'); ?>">
                                                                                        <!-- Modal content-->
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                                <h4 class="modal-title">Hapus</h4>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <input type="hidden" name="delete_id" value="<?php echo $data2->kode_golongan; ?>">
                                                                                                <div class="alert alert-danger">Apakah anda yakin ingin menghapus <strong>
                                                                                                        <?php echo $data2->judul_golongan; ?>?</strong> </div>
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
                                <div class="product-tab-list tab-pane fade  in" id="t4">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="sparkline13-list">
                                                
                                                <div class="sparkline13-graph">
                                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                                            data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                            <thead>
                                                                <tr>
                                                                    
                                                                    <th data-field="id">No</th>
                                                                    <th data-field="subgol" >Kode Sub Golongan</th>
                                                                    <th data-field="gol" >Kode Golongan</th>
                                                                    <th data-field="judul" >Judul Sub Golongan</th>
                                                                    <th data-field="desk" >Deskripsi Sub Golongan</th>
                                                                    <th data-field="action">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $i =1;
                                                                    if( ! empty($subGol)){
                                                                        
                                                                        foreach($subGol as $data3){
                                                                            ?>

                                                                        
                                                                            <tr>
                                                                            
                                                                            <td><?php echo$i++;?></td>
                                                                            <td><?php echo$data3->kode_subgolongan;?></td>
                                                                            <td><?php echo$data3->kode_golongan;?></td>
                                                                            <td><?php echo$data3->judul_subgolongan;?></td>
                                                                            <td><?php echo$data3->deskripsi_subgolongan;?></td>
                                                                            <td>
                                                                                <a href="<?php echo base_url("index.php/Kategori/cariSubgol/".$data3->kode_subgolongan) ?>">
                                                                                    <button type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></button>
                                                                                </a>
                                                                                <a href="#delete4<?php echo $data3->kode_subgolongan;?>" data-toggle="modal">
                                                                                    <button type='button' class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></button>
                                                                                </a>
                                                                            </td>
                                                                            <!-- <td>
                                                                                        <a href='".base_url("index.php/Kategori/cariKate/".$data->kode_kategori)."' class='btn btn-success'><i style='color:#ffff;' class='fa fa-pencil' aria-hidden='true'></i></a>
                                                                                        <a data-confirm='Anda yakin akan menghapus data ini?' href='".base_url("index.php/Kategori/hapusKate/".$data->kode_kategori)."' class='btn btn-danger '><i style='color:#ffff;' class='fa fa-trash-o' aria-hidden='true'></i></a>
                                                                            </td> -->
                                                                            <!--Delete Modal -->
                                                                            <div id="delete4<?php echo $data3->kode_subgolongan; ?>" class="modal fade" role="dialog">
                                                                                <div class="modal-dialog">
                                                                                    <form method="post" action="<?php echo base_url('index.php/Kategori/hapusSubgol'); ?>">
                                                                                        <!-- Modal content-->
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                                <h4 class="modal-title">Hapus</h4>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <input type="hidden" name="delete_id" value="<?php echo $data3->kode_subgolongan; ?>">
                                                                                                <div class="alert alert-danger">Apakah anda yakin ingin menghapus <strong>
                                                                                                        <?php echo $data3->judul_subgolongan; ?>?</strong> </div>
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
                                <div class="product-tab-list tab-pane fade  in" id="t5">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="sparkline13-list">
                                                
                                                <div class="sparkline13-graph">
                                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                                            data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                            <thead>
                                                                <tr>
                                                                    
                                                                    <th data-field="id">No</th>
                                                                    <th data-field="kel" >Kode Kelompok</th>
                                                                    <th data-field="subgol" >Kode Sub Golongan</th>
                                                                    <th data-field="judul" >Judul Kelompok</th>
                                                                    <th data-field="conpkrj" >Contoh Pekerjaan</th>
                                                                    <th data-field="desk" >Deskripsi Kelompok</th>
                                                                    <th data-field="action">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $i =1;
                                                                    if( ! empty($kel)){
                                                                        
                                                                        foreach($kel as $data4){
                                                                            ?>

                                                                        
                                                                            <tr>
                                                                            
                                                                            <td><?php echo$i++;?></td>
                                                                            <td><?php echo$data4->kode_kelompok;?></td>
                                                                            <td><?php echo$data4->kode_subgolongan;?></td>
                                                                            <td><?php echo$data4->judul_kelompok;?></td>
                                                                            <td><?php echo$data4->contoh_pekerjaan;?></td>
                                                                            <td><?php echo$data4->deskripsi_kelompok;?></td>
                                                                            <td>
                                                                                <a href="<?php echo base_url("index.php/Kategori/cariKel/".$data4->kode_kelompok) ?>">
                                                                                    <button type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></button>
                                                                                </a>
                                                                                <a href="#delete5<?php echo $data4->kode_kelompok;?>" data-toggle="modal">
                                                                                    <button type='button' class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></button>
                                                                                </a>
                                                                            </td>
                                                                            <!-- <td>
                                                                                        <a href='".base_url("index.php/Kategori/cariKate/".$data->kode_kategori)."' class='btn btn-success'><i style='color:#ffff;' class='fa fa-pencil' aria-hidden='true'></i></a>
                                                                                        <a data-confirm='Anda yakin akan menghapus data ini?' href='".base_url("index.php/Kategori/hapusKate/".$data->kode_kategori)."' class='btn btn-danger '><i style='color:#ffff;' class='fa fa-trash-o' aria-hidden='true'></i></a>
                                                                            </td> -->
                                                                            <!--Delete Modal -->
                                                                            <div id="delete5<?php echo $data4->kode_kelompok; ?>" class="modal fade" role="dialog">
                                                                                <div class="modal-dialog">
                                                                                    <form method="post" action="<?php echo base_url('index.php/Kategori/hapusKel'); ?>">
                                                                                        <!-- Modal content-->
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                                <h4 class="modal-title">Hapus</h4>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <input type="hidden" name="delete_id" value="<?php echo $data4->kode_kelompok; ?>">
                                                                                                <div class="alert alert-danger">Apakah anda yakin ingin menghapus <strong>
                                                                                                        <?php echo $data4->judul_kelompok; ?>?</strong> </div>
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
	<script>
    $(document).ready(function() {
       
     $('a[data-confirm]').click(function(ev) {
          var href = $(this).attr('href');
 
          if(!$('#dataConfirmModal').length) {
           $('body').append('<div id="dataConfirmModal" class="modal fade bs-modal-sm" tableindex="-1" role="dialog" aria-labelledby="dataConfirmLabel" aria-hiden="true"><div class="modal-dialog modal-sm"><div class="modal-content"><div class="modal-header"><h4 class="modal-title" id="dataConfrimLabel">Konfirmasi</h4><button type="button" class="close" data-dismiss="modal" aria-hiden="ture">&times;</button></div><div class="modal-body"></div><div class="modal-footer"><button type="button" class="btn btn-default btn-sx" data-dismiss="modal" aria-hiden=""true"> Tidak </button><a class="btn btn-danger btn-sx" aria-hiden="true" id="dataConfirmOK"> Ya </a></div></div></div></div>');
           }
 
          $('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
 
          $('#dataConfirmOK').attr('href',href);
 
          $('#dataConfirmModal').modal({show:true});
          return false;
         });
       
    });
    </script>
</body>

</html>
