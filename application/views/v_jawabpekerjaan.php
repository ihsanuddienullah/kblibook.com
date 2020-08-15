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
      font-weight:bold;
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
	}

    .modal::-webkit-scrollbar {
        width: 0 !important; 
    }
	  
	@media (max-width: 320px) {
      .logo span {
        font-size: 20px;
      }
    }
	  
	@media (max-width: 768px) {
      .modal-backdrop {
		  width: 100%;
		  height: 100%;
      }
    }
	  .my-custom-scrollbar {
position: relative;
height: 600px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}
  </style>
</head>
<body  class="clearfix" id="intro" style="padding-top:70px; min-height: 500px;background-repeat: no-repeat;background-attachment: fixed;">
<header id="header" style="background-color: white;height:75px;padding-top:18px;box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.3);">
  <div class="container">
    <div class="logo float-left">
      <!-- Uncomment below if you prefer to use an image logo -->
      <h1 class="text-light"><a href="<?php echo base_url('index.php')?>"><span style="color:#413e66;font-family:'Montserrat';">KBLI BOOK</span></a></h1>

      <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
    </div>

    <nav class="main-nav float-right d-lg-block">
      <ul>
        <li><a href="<?php echo base_url('index.php')?>">Home</a></li>
        <li><a href="" data-toggle="modal" data-target="#exampleModalCenter">Bantuan</a></li>
      </ul>
    </nav><!-- .main-nav -->
  </div>
</header><!-- #header -->

<div class="container">
   <br />
   <div id="cover-spin" style="display:none"></div>
   <h3 style="text-align: center;">Cari Bidang Pekerjaan</h3>  
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search Bidang Pekerjaan" class="form-control" />
    </div>
   </div>
   <div class="table-wrapper-scroll-y my-custom-scrollbar"> 
          <table  class="table table-border table-bordered table-hover">
          <thead class="thead-dark">
            <tr>

              <th scope="col">Kode</th>
              <th scope="col">Judul</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Pekerjaan</th>
            </tr>
          </thead>
          <tbody id="show_data">
          </tbody>
          </table>
        </div>
        <a style="margin: 20px" href="<?php echo base_url('index.php/QNA/index'); ?>" class="btn btn-danger waves-effect waves-light float-right" type="submit"  style="color:white;">Kembali</a>
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
// WhatsApp Chat
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
$(document).ready(function(){
  $('#coba').DataTable( {
        "scrollY":        "500px",
        "scrollCollapse": true,
        "paging":         false,
        "searching": false,
	  "ordering": false,
	  "autoWidth": false
    } );
  load_data();
  function load_data(query)
    {
      
      $.ajax({
        url:"<?php echo site_url('index.php/QNA/pilihpekerjaan')?>",
        type : "POST",
        dataType : 'json',
        data:{query:query},
        beforeSend:function(){
                    // document.getElementById('loadingGif').style.display = "block";
                    $('#cover-spin').show(0);
                },
                complete:function(){
                    // document.getElementById('loadingGif').style.display = "none";
                    $('#cover-spin').hide(0);
                },
        success:function(data){
          var html = '';
          var i;
          
            for(i=0; i<data.length; i++){
              html += '<tr>'+
                      '<td>'+data[i].kode_kelompok+'</td>'+
                      '<td>'+data[i].judul_kelompok+'</td>'+
                      '<td>'+data[i].deskripsi_kelompok+'</td>'+
                      '<td>'+data[i].contoh_pekerjaan+'</td>'+
                      '</tr>';
          
          }
          
          $('#show_data').html(html);

        },error: function(data) {
                      // $("#Moda3Add").modal('show');
                      alert("inputan tidak boleh mengandung simbol");
                  }
      })
      // alert("masuk");
      }
  $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
    load_data(search);
  }
  else
  {
    load_data();
  }
  });
});
</script>



   

    