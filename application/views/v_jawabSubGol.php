<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tes KBLI</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/dataTables.bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/dataTables.checkboxes.css')?>">

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
  
  <!-- link datatable -->
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

  <!-- link datatable -->

  
  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css" rel="stylesheet">
  <link href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css" rel="stylesheet">

  <style>
    .formkategori {
      margin:0 auto;
      font-weight:normal;
    }

    .containertable {
      padding: 2rem 0rem;
    }
    .h4table {
      margin: 2rem 0rem 1rem;
    }
    .table-image {
      td, th {
        vertical-align: middle;
      }
    }
    #cover-spin {
        position:fixed;
        width:100%;
        left:0;right:0;top:0;bottom:0;
        background-color: rgba(255,255,255,0.7);
        z-index:9999;
        display:none;
    }

    @-webkit-keyframes spin {
        from {-webkit-transform:rotate(0deg);}
        to {-webkit-transform:rotate(360deg);}
    }

    @keyframes spin {
        from {transform:rotate(0deg);}
        to {transform:rotate(360deg);}
    }

    #cover-spin::after {
        content:'';
        display:block;
        position:absolute;
        left:48%;top:40%;
        width:40px;height:40px;
        border-style:solid;
        border-color:black;
        border-top-color:transparent;
        border-width: 4px;
        border-radius:50%;
        -webkit-animation: spin .3s linear infinite;
        animation: spin .3s linear infinite;
    }
    
	body.modal-open {
    overflow: auto;
    }
    
    body.modal-open[style] {
        padding-right: 0px !important;
        padding-left: 0px !important;
    }

    body {
      padding-right:0px !important;
      margin-right:0px !important;
    }

    .modal::-webkit-scrollbar {
        width: 0 !important; 
    }
	  
	.modal-backdrop {
			opacity:0.5 !important;
	}
	.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  bottom: 0;
  width:25%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #f1f1f1;
  color: black;
}

.navbar a.active {
  background-color: #4CAF50;
  color: white;
}

.main {
  padding: 16px;
  margin-bottom: 30px;
}  
	  
	   @media (max-width: 375px) {
		  .tombol {
		  	margin: 0 auto;
		  }
		  
		  .logo span {
        font-size: 25px;
      }
	  }
	  
	   @media (max-width: 414px) {
	  	 .tombol {
		  	margin: 0 auto;
		  }
	  }
	  }
  </style>
</head>
<body  class="clearfix" id="intro" style="padding-top:70px; min-height: 500px;background-repeat: no-repeat;background-attachment: fixed;">
<div>
  <div class="containertable" style="margin: 0 auto;width:70%">
    <div class="row d-flex justify-content-center">
      <div>
      <div id="cover-spin" style="display:none"></div>
      <form action="<?php echo site_url('index.php/QNA/jawabKel')?>" id="myform" method="post"  class="acount-infor add-admin formkategori">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col col-lg-7">
            <div class="card ">
               <div class="card-header" style="text-align: center">
                        <strong>Proses Pencarian Kode KBLI</strong>
						  
						  <div class="progress" style="height: 20px">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 60%; color: white; text-align: center">60%</div>
</div>
						  
                      </div>
                    <div class="card-body">
                      <h5 class="card-title" style="text-align: center">SAYA MEMILIKI USAHA TENTANG?</h5>
                    </div>
            </div>
            </br>
              <!--<div class="alert alert-secondary">
                <strong>Jawaban</strong>
              </div>-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon">Cari</span>
                <input  type="search" class="form-control" id="search" placeholder="Cari Deskripsi" />
              </div>
            </div>
            <table class="col-12">
            
            <thead>
              <tr>
                <th></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <?php
              if( ! empty($subGol)){
				  $i=1;
                foreach($subGol as $data){
                    ?>
                    <tr>
                    <td>
                    <div class="items-collection">
                        <div class=" items" style="padding-bottom: 20px;">
                          <div class="card ">
                              <div class="card-header">
                                <div class="row">
                                  <div class="col-11">
									<strong>Jawaban ke- <?php echo $i++ ?></strong>
                                    
                                    
                                  </div>
                                  <div class="col-1">
                                  <input type="checkbox" class="kode" name="check_list[]" alt="Checkbox" value="<?php echo $data->kode_subgolongan;?>">
                                  </div>
                                </div>
                                
                              </div>
                            <div class="card-body">
                              <p style="font-size:20px;font-weight: bold;">USAHA SAYA TENTANG <?php echo $data->judul_subgolongan?></p>
                              </br>
                              <div class="text-right mb-3">
                                <a href="#detail<?php echo $data->kode_subgolongan?>" data-toggle="modal" class="btn btn-info right">Lihat Detail</a>
                              </div>
                            
                            </div>
                          </div>  
                        </div>
                    <div> 
                    </td>
                    <!--Detail Modal -->
                    <div id="detail<?php echo $data->kode_subgolongan; ?>" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <p style="font-size:20px;font-weight: bold;"><?php echo $data->judul_subgolongan?></p>
                       
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body" style="font-size:15px;">
                      <p><strong>Deskripsi: </strong></br>
                      <?php echo $data->deskripsi_subgolongan?></p>  
                      
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                      </div>
                    </div>
                  </div>
                  </div>
                                                                        

                    </tr>
                    <?php
                }
              }
            ?>
            </tbody>
            </table>
              <div class="row justify-content-md-end" style="padding: 5px">
                  <div class="tombol">
					  <input style="margin: 10px; width: 110px" class="btn btn-primary waves-effect waves-light float-right" type="submit" name="submit" value="Selanjutnya" >
                    <input formaction="<?php echo base_url('index.php/QNA/index'); ?>" style="margin: 10px; width:110px" class="btn btn-danger waves-effect waves-light float-right" type="submit" value="Kembali">
                  </div>
                </div>

                <?php
                ?>
              </div>
            </div>
      </form>
      </div>
    
  </div>
</div>
</div>

	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Petunjuk Pencarian Kode KBLI</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="font-size:15px;">
          
          Berikut petunjuk untuk mencari kode KBLI usaha anda : <br>
          <ul>
            <li>Jika pilihan anda saat ini adalah menu pertama yaitu <b>Sudah Mengetahui Pekerjaan</b>, maka anda dapat mencari langsung kode KBLI yang sesuai dengan bidang pekerjaan anda.</li>
			  <li>Jika pilihan anda saat ini adalah menu kedua yaitu <b>Belum Mengetahui Pekerjaan</b>, maka anda dapat mencarinya dengan memilih beberapa kode yang memiliki deskripsi yang sesuai dengan usaha anda melalui langkah atau alur yang diberikan. <br>(Pastikan anda memilih minimal satu pilihan pada setiap prosesnya, jika tidak proses pencarian kode akan mengulang dari awal)</li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>
	
</body>
</html>
<script src="<?php echo site_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo site_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo site_url('assets/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo site_url('assets/js/dataTables.bootstrap.min.js') ?>"></script>
<script src="<?php echo site_url('assets/js/dataTables.checkboxes.min.js') ?>"></script>

<script>
$(function () {
    $('#search').on('keyup', function () {
        var pattern = $(this).val();
        $('.items-collection .items').hide();
        $('.items-collection .items').filter(function () {
            return $(this).text().match(new RegExp(pattern, 'i'));
        }).show();
    });
});
function topFunction() {
  window.location.href="<?php echo base_url('index.php/QNA/index'); ?>";
}
(function () {
          var options = {
              whatsapp: "+6282216649130", // WhatsApp number
              position: "right", // Position may be 'right' or 'left'
          };
          var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
          var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
          s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
          var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
      })();
  function awal(){
    $.ajax({
      url  : "<?php echo site_url('sales/get_so3'); ?>",
      type : "POST",
      data:{},
              
        success: function(data){                 
        $('#badan').html(data);
        },
        error: function(data) {
            alert("Gagal load dash");
        }
    });
  }
</script>