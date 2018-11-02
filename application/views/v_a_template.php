<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Porkes | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/icons/favicon.ico');?>"/>
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('bower_components/bootstrap/dist/css/bootstrap.min.css');?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('bower_components/font-awesome/css/font-awesome.min.css');?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('bower_components/Ionicons/css/ionicons.min.css');?>">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css');?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('bower_components/jvectormap/jquery-jvectormap.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('dist/css/AdminLTE.min.css');?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('dist/css/skins/_all-skins.min.css');?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>">
  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>M</b>LB</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><img src="<?php echo base_url('assets/img/logo.png');?>" class="img-responsive" style="padding-left: 30px; width: 140px;"></b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/img/om.jpeg');?>" class="user-image" alt="User Image">
              <span class="hidden-xs">Tomi Mishbahul</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/img/om.jpeg');?>" class="img-circle" alt="User Image">
                <p>
                  Tomi Mishbahul
                  <small>Administrator</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat" disabled>Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('C_login/logout');?>" class="btn btn-default btn-flat" onclick="return confirm('Anda yakin akan keluar dari sistem ? ')">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/img/om.jpeg');?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Tomi Mishbahul</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat">
              <i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url('C_admin/index') ?>">
            <i class="fa fa-dashboard"></i>
            Beranda
          </a>
        </li>
       <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Artikel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('C_a_artikel/add'); ?>"><i class="fa fa-edit"></i>Tambah Artikel</a></li>
            <li><a href="<?php echo base_url('C_a_artikel/detail'); ?>"><i class="fa fa-list"></i>Daftar Artikel</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Layanan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('C_a_layanan/add'); ?>"><i class="fa fa-edit"></i>Tambah Layanan</a></li>
            <li><a href="<?php echo base_url('C_a_layanan/detail'); ?>"><i class="fa fa-list"></i>Daftar Layanan</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Fasilitas Kesehatan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('C_a_faskes/add'); ?>"><i class="fa fa-edit"></i>Tambah Faskes</a></li>
            <li><a href="<?php echo base_url('C_a_faskes/detail'); ?>"><i class="fa fa-list"></i>Daftar Faskes</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Master User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('C_master_user/add'); ?>"><i class="fa fa-edit"></i>Tambah User</a></li>
            <li><a href="<?php echo base_url('C_master_user/detail'); ?>"><i class="fa fa-list"></i>Daftar User</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">

    <?php $this->load->view($content); ?>
    
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.0.1
    </div>
    <strong>Copyright &copy; 2018 Portal Kesehatan</a>.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
      
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->

      <!-- Settings tab content -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('bower_components/jquery/dist/jquery.min.js');?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('bower_components/fastclick/lib/fastclick.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('dist/js/adminlte.min.js');?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js');?>"></script>
<!-- jvectormap  -->
<script src="<?php echo base_url('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js');?>"></script>
<script src="<?php echo base_url('plugins/jvectormap/jquery-jvectormap-world-mill-en.js');?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('bower_components/jquery-slimscroll/jquery.slimscroll.min.js');?>"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('bower_components/chart.js/Chart.js');?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="<?php echo base_url('dist/js/pages/dashboard2.js');?>"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('dist/js/demo.js');?>"></script>

<!-- DataTables -->
<script src="<?php echo base_url('bower_components/datatables.net/js/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js');?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('bower_components/fastclick/lib/fastclick.js');?>"></script>

<!-- CK Editor -->
<script src="<?php echo base_url('bower_components/ckeditor/ckeditor.js');?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>"></script>



<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    if($('textarea#editor1').html() != undefined) {
      CKEDITOR.replace('editor1')
    }
    // //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5();
  });
</script>
<?php 
if($this->uri->segment(1) == 'C_a_faskes' &&  $this->uri->segment(2) == 'update'){
?>
<script>
  $(document).ready(function(){
    <?php echo "var baseUrl = '". base_url() . "';"; ?>
    var select2 = {
        ajax : {
            data : function (params) {
                return {
                    search: params.term // search term
                }
            },
            processResults: function (data, params) {
                return { results: data };
            }
        }
    }

    var kota_select = {  
        ajax: {
            url: baseUrl + "C_public_function/getKota" ,
            dataType: 'json',
            delay: 0,
            data: select2.ajax.data,
            processResults: select2.ajax.processResults,
            cache: true
        }
    };
    
    var provinsi_select = {  
        ajax: {
            url: baseUrl + "C_public_function/getProvinsi" ,
            dataType: 'json',
            delay: 0,
            data: select2.ajax.data,
            processResults: select2.ajax.processResults,
            cache: true
        }
    };   
    
    var kecamatan_select = {  
        ajax: {
            url: baseUrl + "C_public_function/getKecamatan" ,
            dataType: 'json',
            delay: 0,
            data: select2.ajax.data,
            processResults: select2.ajax.processResults,
            cache: true
        }
    };
    
    var kelurahan_select = {  
        ajax: {
            url: baseUrl + "C_public_function/getKelurahan" ,
            dataType: 'json',
            delay: 0,
            data: select2.ajax.data,
            processResults: select2.ajax.processResults,
            cache: true
        }
    };

      <?php echo "var propinsi_id = '". $detail->faskes_provinsi_id . "';"; ?>
      <?php echo "var propinsi_nama = '". $detail->propinsi_nama . "';"; ?>
      <?php echo "var kota_id = '". $detail->faskes_kota_id . "';"; ?>
      <?php echo "var kota_nama = '". $detail->kota_nama . "';"; ?>
      <?php echo "var kelurahan_id = '". $detail->faskes_kelurahan_id . "';"; ?>
      <?php echo "var kelurahan_nama = '". $detail->kelurahan_nama . "';"; ?>
      <?php echo "var kecamatan_id = '". $detail->faskes_kecamatan_id . "';"; ?>
      <?php echo "var kecamatan_nama = '". $detail->kecamatan_nama . "';"; ?>
      
      $("select[name=provinsi]").html('<option value="'+propinsi_id+'">'+propinsi_nama+'</option>');
      $("select[name=provinsi]").select2(provinsi_select);

      $("select[name=kelurahan]").html('<option value="'+kelurahan_id+'">'+kelurahan_nama+'</option>');
      $("select[name=kelurahan]").select2(kelurahan_select);

       $("select[name=kecamatan]").html('<option value="'+kecamatan_id+'">'+kecamatan_nama+'</option>');
       $("select[name=kecamatan]").select2(kecamatan_select);

        $("select[name=kota]").html('<option value="'+kota_id+'">'+kota_nama+'</option>');
        $("select[name=kota]").select2(kota_select);
    
});
</script>
<?php }else if($this->uri->segment(1) == 'C_a_faskes' &&  $this->uri->segment(2) == 'add'){?>
  <script>
  $(document).ready(function(){
    <?php echo "var baseUrl = '". base_url() . "';"; ?>

    var select2 = {
        ajax : {
            data : function (params) {
                return {
                    search: params.term // search term
                }
            },
            processResults: function (data, params) {
                return { results: data };
            }
        }
    }

    var kota_select = {  
        ajax: {
            url: baseUrl + "C_public_function/getKota" ,
            dataType: 'json',
            delay: 0,
            data: select2.ajax.data,
            processResults: select2.ajax.processResults,
            cache: true
        }
    };
    
    var provinsi_select = {  
        ajax: {
            url: baseUrl + "C_public_function/getProvinsi" ,
            dataType: 'json',
            delay: 0,
            data: select2.ajax.data,
            processResults: select2.ajax.processResults,
            cache: true
        }
    };   
    
    var kecamatan_select = {  
        ajax: {
            url: baseUrl + "C_public_function/getKecamatan" ,
            dataType: 'json',
            delay: 0,
            data: select2.ajax.data,
            processResults: select2.ajax.processResults,
            cache: true
        }
    };
    
    var kelurahan_select = {  
        ajax: {
            url: baseUrl + "C_public_function/getKelurahan" ,
            dataType: 'json',
            delay: 0,
            data: select2.ajax.data,
            processResults: select2.ajax.processResults,
            cache: true
        }
    };

     $("select[name=provinsi]").html('<option value="">Pilih Provinsi</option>');
      $("select[name=provinsi]").select2(provinsi_select);

      $("select[name=kelurahan]").html('<option value="">Pilih Kelurahan</option>');
      $("select[name=kelurahan]").select2(kelurahan_select);

       $("select[name=kecamatan]").html('<option value="">Pilih Kecamatan</option>');
       $("select[name=kecamatan]").select2(kecamatan_select);

        $("select[name=kota]").html('<option value="">Pilih Kota</option>');
        $("select[name=kota]").select2(kota_select);
  });
  </script>
<?php 
  } 
?>
</body>
</html>
