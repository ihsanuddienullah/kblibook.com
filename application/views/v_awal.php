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
<header id="header" style="background-color: white;height:75px;padding-top:18px;box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.3);">
    <div class="container">
      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><span style="color:#413e66;font-family:'Montserrat';">TES KBLI</span></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li><a href="<?php echo base_url('index.php')?>">Home</a></li>
          <li><a href="<?php echo base_url('index.php/login/index'); ?>">Admin</a></li>
        </ul>
      </nav><!-- .main-nav -->
    </div>
  </header><!-- #header -->
<div>

<!--<form id="acount-infor" method="post" action="<?php echo base_url('index.php/QNA/jawabgolPok'); ?>" class="acount-infor add-admin formkategori">
      <table>
      <?php
      if( ! empty($kategori)){ // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada
        foreach($kategori as $data){
          echo "<input type='checkbox' name='check_list[]' alt='checkbox' value='".$data->kode_kategori."'>".$data->judul_kategori."</input></br>";
        }
      }
      ?>
      </table>
    <input class="btn btn-primary waves-effect waves-light text-center"  type="submit" name="submit" value="Next">
</form>-->

<div class="containertable" style="margin: 0 auto;width:70%">
  <div class="row">
    <div class="col-12">
    <h3 style="text-align: center;">Pilih Kategori</h3>  
    
    <button id="btclose1" type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true" >
        Cancel
    </button>
    <div id="badan">
 
 
 
    </div>
    
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
    $(document).ready(function (){
    var mytable = $('#mytable').DataTable({
        
        columnDefs: [
            {
                targets: 0,
                checkboxes: {
                selectRow: true
                }
            }
        ],
        select: {
            style: 'multi'
        },
        order: [[1, 'asc']],
        languange:{
            search:"_INPUT_",
            searchPlaceholder:"search records",
        }
    })


    // Handle form submission event
    $("#myform").on('submit', function(e){
        var form = this

        var rowsel = mytable.column(0).checkboxes.selected();

        // Iterate over all selected checkboxes
        $.each(rowsel, function(index, rowId){
            // Create a hidden element
            $(form).append(
                $('<input>').attr('type', 'hidden').attr('name', 'id[]').val(rowId)
            )
        })
        alert(rowsel[0][0]);
        a = [];
        for(i=0; i<rowsel.length; i++){
            a[i] = rowsel[i][0];
        }
        // a[0] = rowsel[0][0];
        // a[1] = "B";
        // alert(rowsel[0][0]);
        $.ajax({
                url: '<?php echo site_url('index.php/QNA/jawabgolPok')?>',
                type: 'POST',
                data: {a:a},
                success: function(data){
                //   alert('Nama anda adalah     '+response['a']);
                $('#badan').html(data).hide();
                data.find('#badan').html().hide();
                  
                },
                error: function(data) {

                    alert("Gagal");
                }

               
            });
            return false;
        // $("#view-rows").text(rowsel[0][0])
        // $("#view-form").text($(form).serialize())
        // $('input[name="id\[\]"]').remove()
        // e.preventDefault()
    })
    $("#btclose1").click(function(){
      var a="A";
      $.ajax({
                
                url: '<?php echo site_url('index.php/QNA/jawabgolPok')?>',
                type: 'POST',
                data: {a:a},
                success: function(data){
                //   alert('Nama anda adalah     '+response['a']);
                $('#badan').html(data);
                  
                },
                error: function(data) {

                    alert("Gagal");
                }

               
            });
            return false;
        });
    })
</script>



   

    