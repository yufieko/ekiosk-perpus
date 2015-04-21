<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>E-Kiosk Perpustakaan</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- favicon -->
    <link rel="shortcut icon" href="<?=base_url();?>public/dist/img/favicon.ico" />
    <!-- Bootstrap 3.3.2 -->
    <link href="<?=base_url('public/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="<?=base_url('public/plugins/font-awesome-4.3.0/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="<?=base_url('public/plugins/ionicons-2.0.1/css/ionicons.min.css')?>" rel="stylesheet" type="text/css" />
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
    
    <!-- SlimScroll 1.3.0 -->
    <script src="<?=base_url('public/plugins/slimScroll/jquery.slimscroll.min.js');?>" type="text/javascript"></script>
    <!-- Misc -->
    <script src="<?=base_url('public/dist/js/misc.js');?>" type="text/javascript"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="../../https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="../../https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="skin-blue layout-top-nav">
    <div class="wrapper">

      <header class="main-header">               
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a href="<?=site_url()?>" class="navbar-brand"><b>Ekiosk</b>Perpus</a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>
            <!-- Navbar Right Menu -->
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <?php if(empty($this->session->userdata('user_login'))) { ?>
                  <li class="active"><a href="<?=site_url();?>">Login <span class="sr-only">(current)</span></a></li>
                  <?php } else { ?>
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
                          <a href="<?=site_url('home/logout');?>" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i>&nbsp; Keluar</a>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <?php } ?>
                </ul>
              </div><!-- /.navbar-custom-menu -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Data Buku dan Koran
              <small>informasi buku & koran</small>
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-book"></i> Home</a></li>
              <li class="active">Daftar</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="callout callout-info">
              <h4>Tip!</h4>
              <p>Selamat datang di E-Kiosk Perpustakaan, Anda bisa melihat dan mencari informasi buku serta mendownload koran</p>
            </div>
            <div class="row">
              <div class="col-xs-12">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Buku</a></li>
                  <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Koran</a></li>
                  <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    
                        <table id="tblbuku" class="table table-bordered table-striped table-hover dt-responsive" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                              <th>Judul</th>
                              <th>Penulis</th>
                              <th>Jenis</th>
                              <th>Tahun</th>
                              <th>Jumlah</th>
                              <th>Pinjam</th>
                              <th>Status</th>
                              <th>Opsi</th>
                            </tr>
                          </thead>
                          <tbody></tbody>
                          <tfoot>
                            <tr>
                              <th>Judul</th>
                              <th>Penulis</th>
                              <th>Jenis</th>
                              <th>Tahun</th>
                              <th>Jumlah</th>
                              <th>Pinjam</th>
                              <th>Status</th>
                              <th>Opsi</th>
                            </tr>
                          </tfoot>
                        </table>

                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                    <?php if(empty($this->session->userdata('user_login'))) { ?>
                      <p>Anda harus login terlebih dahulu untuk mengakses koran</p>
                    <?php } else { ?>
                    <table id="tblkoran" class="table table-bordered table-striped table-hover dt-responsive" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nama</th>
                          <th>Tanggal</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                      <tbody></tbody>
                      <tfoot>
                        <tr>
                          <th>ID</th>
                          <th>Nama</th>
                          <th>Tanggal</th>
                          <th>Opsi</th>
                        </tr>
                      </tfoot>
                    </table>
                    <?php } ?>

                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div>

                
              </div><!-- /.col -->
            </div><!-- /.row -->

          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Versi</b> Beta 0.2
        </div>
        <strong><?=$web->web_footer;?>.</strong> All rights reserved. <i>{elapsed_time} detik</i>
      </footer>
    </div><!-- ./wrapper -->

    <!-- Modal Lihat Buku  -->
    <div class="modal modal-primary fade" id="modal-lihat-buku" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-book"></i> Data Buku</h4>
          </div>
          <div class="modal-body">
            <div class="box-body table-responsive">
              <span id="form-pesan-lihat-buku"></span>
              <div class="box-body">
                <div class="row">
                  <div class="col-xs-7">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Judul:</span>
                        <input type="text" class="form-control" id="lihat-judul" name="lihat-judul" placeholder="Judul Buku" readonly="" />
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Penulis:</span>
                        <input type="text" class="form-control" id="lihat-penulis" name="lihat-penulis" placeholder="Penulis Buku" readonly="" />
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <textarea name="lihat-teks" id="lihat-teks" class="form-control textarea" placeholder="Deskripsi singkat buku" readonly="" style="height: 100px;overflow:auto;resize:none"></textarea>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Penerbit:</span>
                        <input type="text" class="form-control" id="lihat-penerbit" name="lihat-penerbit" readonly="" placeholder="Nama penerbit" />
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Buku Masuk:</span>
                        <input type="text" class="form-control" id="lihat-masuk" name="lihat-masuk" placeholder="Buku Masuk" readonly=""/>
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Status:</span>
                        <input type="text" class="form-control" id="lihat-status" name="lihat-status" placeholder="Buku status" readonly=""/>
                      </div><!-- /.input group -->
                    </div>
                  </div>
                  <div class="col-xs-5">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Jenis:</span>
                        <input type="text" class="form-control" id="lihat-jenis" name="lihat-jenis" placeholder="Buku jenis" readonly=""/>
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Koleksi:</span>
                        <input type="text" class="form-control" id="lihat-koleksi" name="lihat-koleksi" placeholder="Buku koleksi" readonly=""/>
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Tahun:</span>
                        <input type="text" class="form-control" id="lihat-tahun" name="lihat-tahun" readonly="" placeholder="Tahun Terbit" />
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Letak:</span>
                        <input type="text" class="form-control" id="lihat-letak" name="lihat-letak" readonly="" placeholder="Letak Buku" />
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Jumlah Buku:</span>
                        <input type="text" class="form-control" id="lihat-jumlah" name="lihat-jumlah" readonly="" placeholder="Jumlah" />
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">  
                        <p><img id="lihat-gambar-img" src="" alt="Gambar Sebelumnya" style="border-radius:40%; max-width: 100%; height: auto; width: 20%"></p>
                    </div>

                  </div>
                </div>
              </div>
            </div><!-- /.box-body -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal lihat Buku -->

    <?php if(!empty($this->session->userdata('user_login'))) { ?>
    <!-- Modal Download Koran -->
    <div class="modal modal-primary fade" id="modal-download-koran" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="icon ion-ios-paper"></i> Download Koran </h4>
          </div>
          <div class="modal-body">
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <p>Men-download Koran   &nbsp;<i class="fa fa-refresh fa-spin"></i></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Download Koran -->
    <?php } ?>

    <!-- Perpus App -->
    <script src="<?=base_url('public/dist/js/app.min.js');?>" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        var tblbuku = $("#tblbuku").DataTable({
            "processing": true,
            "ajax": {
              "url" : "<?=site_url('home/getbuku');?>",
              "type" : "POST"
            },
            "deferRender": true,
            "autoWidth": false,
            "order": [[ 0, "desc" ]],
            "columns": [
              { "data": "buku_judul" },
              { "data": "buku_penulis" },
              { "data": "jenis_teks" },
              { "data": "buku_tahun" },
              { "data": "buku_jumlah" },
              { "data": "buku_pinjam" },
              { "data": "Bstatus" },
              { "data": "Bopsi", "searchable": false, "sortable": false, "width": "8%" },
            ],

        });

        <?php if(!empty($this->session->userdata('user_login'))) { ?>
        var tblkoran = $("#tblkoran").DataTable({
            "processing": true,
            "ajax": {
              "url" : "<?=site_url('home/getkoran');?>",
              "type" : "POST"
            },
            "deferRender": true,
            "autoWidth": false,
            "order": [[ 0, "desc" ]],
            "columns": [
              { "data": "berkas_id" },
              { "data": "berkas_pesan" },
              { "data": "berkas_waktu" },
              { "data": "Bopsi", "searchable": false, "sortable": false, "width": "10%" },
            ],

        });
        <?php } ?>

        $('#modal-lihat-buku').on('show.bs.modal', function (e) {
            var button = $(e.relatedTarget); // Button that triggered the modal
            var id = button.data('id');
            var modal = $(this);

            $.ajax({
                type: "GET",
                url: "<?=site_url('home/getbukuwith/" + id + "');?>",
                cache: false,
                success: function (data) {
                    var obj = $.parseJSON(data);
                    //console.log(data);
                    modal.find('#lihat-judul').val(obj.buku_judul);
                    modal.find('#lihat-penulis').val(obj.buku_penulis);
                    modal.find('#lihat-teks').val(obj.buku_deskripsi);
                    modal.find('#lihat-penerbit').val(obj.buku_penerbit);
                    modal.find('#lihat-masuk').val(obj.buku_masuk);
                    modal.find('#lihat-tahun').val(obj.buku_tahun);
                    modal.find('#lihat-letak').val(obj.buku_letak);
                    modal.find('#lihat-jumlah').val(obj.buku_jumlah);
                    modal.find('#lihat-status').val(obj.buku_status);
                    modal.find('#lihat-jenis').val(obj.jenis_teks);
                    modal.find('#lihat-koleksi').val(obj.koleksi_nama);
                    modal.find('#lihat-gambar-img').attr("src", "<?=base_url('public/buku');?>/" + obj.buku_gambar);
                },
                error: function(err) {
                    console.log(err);
                }
            });
            // $(this).find('#hapus-id').text(id);
        });
        
        <?php if(!empty($this->session->userdata('user_login'))) { ?>
        $('#modal-download-koran').on('show.bs.modal', function (e) {
            var button = $(e.relatedTarget);
            var id = button.data('id');
            var modal = $(this);

            //e.preventDefault();  //stop the browser from following
            setTimeout(function(){ 
              window.location.href = "<?=site_url('home/koran/" + id + "')?>";
            }, 2500);
            setTimeout(function(){ modal.modal('hide'); }, 2500);
            setTimeout(function(){ tblkoran.ajax.reload( null, false ); }, 2500);
        });
        <?php } ?>

      });
    </script>
  </body>
</html>