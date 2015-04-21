<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?=$title;?> | E-kiosk Perpus Backend</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- favicon -->
    <link rel="shortcut icon" href="<?=base_url();?>public/dist/img/favicon.ico" />
    <!-- Bootstrap 3.3.2 -->
    <link href="<?=base_url('public/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="<?=base_url('public/plugins/font-awesome-4.3.0/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="<?=base_url('public/plugins/ionicons-2.0.1/css/ionicons.min.css')?>" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="<?=base_url('public/plugins/morris/morris.css')?>" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="<?=base_url('public/plugins/jvectormap/jquery-jvectormap-1.2.2.css')?>" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="<?=base_url('public/plugins/daterangepicker/daterangepicker-bs3.css')?>" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="<?=base_url('public/plugins/iCheck/all.css');?>" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Color Picker -->
    <link href="<?=base_url('public/plugins/colorpicker/bootstrap-colorpicker.min.css');?>" rel="stylesheet"/>
    <!-- Bootstrap time Picker -->
    <link href="<?=base_url('public/plugins/timepicker/bootstrap-timepicker.min.css');?>" rel="stylesheet"/>
    <!-- DATA TABLES -->
    <link href="<?=base_url('public/plugins/datatables/dataTables.bootstrap.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('public/plugins/datatables/dataTables.responsive.css');?>" rel="stylesheet" type="text/css" />

    <!-- bootstrap wysihtml5 - text editor -->
    <link href="<?=base_url('public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?=base_url('public/dist/css/AdminLTE.min.css')?>" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?=base_url('public/dist/css/skins/_all-skins.min.css')?>" rel="stylesheet" type="text/css" />

    <!-- Javascript -->
    <!-- jQuery -->
    <script src="<?=base_url('public/plugins/jQuery/jQuery-2.1.3.min.js');?>"></script>
    <!-- Bootstrap -->
    <script src="<?=base_url('public/bootstrap/js/bootstrap.min.js');?>" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="<?=base_url('public/plugins/fastclick/fastclick.min.js');?>" type="text/javascript"></script>
    <!-- Datatables -->
    <script src="<?=base_url('public/plugins/datatables/jquery.dataTables.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('public/plugins/datatables/dataTables.tableTools.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('public/plugins/datatables/dataTables.bootstrap.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('public/plugins/datatables/dataTables.responsive.min.js');?>" type="text/javascript"></script>
    
    <!-- InputMask -->
    <script src="<?=base_url('public/plugins/input-mask/jquery.inputmask.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('public/plugins/input-mask/jquery.inputmask.date.extensions.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('public/plugins/input-mask/jquery.inputmask.extensions.js');?>" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="<?=base_url('public/plugins/sparkline/jquery.sparkline.min.js');?>" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="<?=base_url('public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js');?>" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="<?=base_url('public/plugins/daterangepicker/daterangepicker.js');?>" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="<?=base_url('public/plugins/datepicker/bootstrap-datepicker.js');?>" type="text/javascript"></script>
    <!-- bootstrap time picker -->
    <script src="<?=base_url('public/plugins/timepicker/bootstrap-timepicker.min.js');?>" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="<?=base_url('public/plugins/iCheck/icheck.min.js');?>" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="<?=base_url('public/plugins/slimScroll/jquery.slimscroll.min.js');?>" type="text/javascript"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="<?=base_url('public/plugins/chartjs/Chart.min.js');?>" type="text/javascript"></script>
    <!-- CK Editor -->
    <script src="<?=base_url('public/plugins/ckeditor/ckeditor.js');?>"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <!-- <script src="<?=base_url('public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>" type="text/javascript"></script> -->
    <!-- Sparkline -->
    <script src="<?=base_url('public/plugins/sparkline/jquery.sparkline.min.js');?>" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?=base_url('public/plugins/knob/jquery.knob.js');?>" type="text/javascript"></script>
    <!-- Misc -->
    <script src="<?=base_url('public/dist/js/misc.js');?>" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            //var parent = "#parent-" + window.location.href.substring(window.location.href.lastIndexOf('/') + 1);
            //var child = "#child-" + window.location.href.substring(window.location.href.lastIndexOf('/') + 1);
            var parent = "<?=$aktif['parent'];?>";
            var child = "<?=$aktif['child'];?>";
            //alert(parent);
            //alert(child);
            $(parent).addClass("active");
            $(child).addClass("active");

            // $(document).bind("ajaxSend", function() {
            //     $("#spinner").show();
            // }).bind("ajaxStop", function() {
            //     setTimeout(function(){ $("#spinner").hide(); }, 2000);
            // }).bind("ajaxError", function() {
            //     setTimeout(function(){ $("#spinner").hide(); }, 2000);
            // });
        });
    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-black fixed">
    <div id="spinner" style="position:fixed; background: rgba(255,255,255,0.7);width: 100%;height: 100%;z-index: 999999;display: none;">
    <!-- <div id="spinner" style="position: fixed; bottom: 0; right: 0; background: white; border-radius: 5px 0px 0px 5px; padding: 10px 15px; font-size: 16px; z-index: 999999; display: none"> -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
        <i class="fa fa-refresh fa-spin" style="position: absolute; top: 50%; left: 50%; margin-left: -15px; margin-top: -15px; color: #000; font-size: 70px;"></i>
        </div>
    </div>
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="" class="logo"><b>Ekiosk</b>Perpus</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">              
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning" id="boxlognotif"><?php echo $boxlognotif; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">Anda punya <?php echo $boxlognotif; ?> log yang belum dibaca</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <?php if(!empty($daftarlog)) { foreach ($daftarlog->result() as $key) { ?>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> <?php echo substr($key->log_isi, 0, 30) . "..."; ?>
                        </a>
                      </li>
                      <?php } } ?>
                    </ul>
                  </li>
                  <li class="footer"><a href="<?=site_url('dashboard/log')?>">Lihat Semua</a></li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?=base_url();?>/public/dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?=$this->user_model->get_username();?> <i class="caret"></i></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?=base_url();?>/public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                      <?=ucfirst($this->user_model->get_username());?> - <?=ucfirst($this->user_model->get_role());?>
                      <small><?=$this->user_model->get_email();?></small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat"><i class="fa fa-user"></i>&nbsp; Profil</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?=site_url('dashboard/logout');?>" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i>&nbsp; Keluar</a>
                    </div>
                  </li>
                </ul>
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
              <img src="<?=base_url();?>/public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?=$this->user_model->get_username();?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <?php
                if(!empty($menu)){
                    echo $menu;
                }
            ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?=$title;?>
            <small><?php foreach ($menudesk as $key) { echo $key->akses_deskripsi; }; ?></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><?=$title;?></li>
          </ol>
        </section>