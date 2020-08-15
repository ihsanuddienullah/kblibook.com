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
    
  </style>
</head>
<body  class="clearfix" id="intro" style="padding-top:70px; min-height: 500px;background-repeat: no-repeat;background-attachment: fixed;">
<div>
  <div class="containertable" style="margin: 0 auto;width:70%">
    <div class="row">
      <div>
      <!-- <form id="myform" method="post"  class="acount-infor add-admin formkategori">
        <h3 style="text-align: center;">Pilih Kategori</h3>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon">Search</span>
            <input type="text" name="search_text" id="search_text" placeholder="Search Contoh Pekerjaan" class="form-control" />
            
          </div>
          </br>
          <div class="form-group" align="center">
            <button type="button" name="filter" id="filter" class="btn btn-info">Filter</button>
          </div>
        </div>
        <br />  
        <table id="mytable" class="table table-border table-striped table-hover">
        <thead class="thead-dark">
          <tr>
            <th></th>
            <th scope="col">kode</th>
            <th scope="col">Kategori</th>
            <th scope="col">Deskripsi</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if( ! empty($kategori)){
              foreach($kategori as $data){
                  echo "<tr>";
                  echo "<td>".$data->kode_kategori."</td>";
                  echo "<td>".$data->kode_kategori."</td>";
                  echo "<td>".$data->judul_kategori."</td>";
                  echo "<td>".$data->deskripsi_kategori."</td>";
                  echo "</tr>";
              }
            }
          ?>
        </tbody>
        </table>
        <input style="margin: 20px; " class="btn btn-primary waves-effect waves-light float-right" type="submit" name="submit" value="Selanjutnya" >
        <a style="margin: 20px; " href="<?php echo base_url('index.php/kbli/index'); ?>" class="btn btn-danger waves-effect waves-light float-right" type="submit"  style="color:white;">Kembali</a>
        <?php
        ?>
      </form> -->
      <div class="input-group">
            <span class="input-group-addon">Search</span>
            <input type="text" name="search_text" id="search_text" placeholder="Search Contoh Pekerjaan" class="form-control" />
            
          </div>
          </br>
          <!-- <div class="form-group" align="center">
            <button type="button" name="filter" id="filter" class="btn btn-info">Filter</button>
          </div> -->
      <div id="result"></div>
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
  // function awal(){
  //   $.ajax({
  //     url  : "<?php echo site_url('sales/get_so3'); ?>",
  //     type : "POST",
  //     data:{},
              
  //       success: function(data){                 
  //       $('#badan').html(data);
  //       },
  //       error: function(data) {
  //           alert("Gagal load dash");
  //       }
  //   });
  // }

  
  
  
// $(document).ready(function (){
//   fill_datatable();  
//   function fill_datatable(query)
//   {

//         $.ajax({
//    url:"<?php echo site_url('index.php/QNA/cari')?>",
//    method:"POST",
//    data:{query:query},
//    success:function(data)
//    {
//     $('#result').html(data);
//    }
//   });
//  }
//     }
    
//     $('#search_text').keyup(function(){
//   var search = $(this).val();
//   if(search != '')
//   {
//     // fill_datatable(search);
//     alert("masuk");
//   }
//   else
//   {
//     alert("tidak");
//   }
// });

$(document).ready(function(){

load_data();

function load_data(query)
{
 $.ajax({
  url:"<?php echo site_url('index.php/QNA/cari')?>",
  method:"POST",
  data:{query:query},
  success:function(data){
   $('#result').html(data);
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



   

    