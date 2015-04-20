        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="icon ion-android-alert"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Log</span>
                  <span class="info-box-number" id="boxlog">0</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="ion ion-ios-book"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Buku</span>
                  <span class="info-box-number" id="boxbuku">0</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="icon ion-ios-paper"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Koran</span>
                  <span class="info-box-number" id="boxkoran">0</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="icon ion-android-download"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Download</span>
                  <span class="info-box-number" id="boxdownload">0</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- Main row -->
          <div class='row'>
            <div class='col-md-4'>
              <!-- DIRECT CHAT -->
              <div class="box box-warning direct-chat direct-chat-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Log Terbaru</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tbody>
                    <?php if(!empty($daftarlog)) { foreach ($daftarlog->result() as $key) { ?>
                    <tr>
                      <td><span class="label label-primary"><?php echo $key->log_dibuat; ?></span> <?php echo substr($key->log_isi, 0, 30) . "..."; ?></td>
                    </tr>
                    <?php } } ?>
                  </tbody></table>
                </div><!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="<?=site_url('dashboard/log');?>" class="uppercase">Lihat Semua Log</a>
                </div><!-- /.box-footer -->
              </div><!--/.direct-chat -->
            </div><!-- /.col -->
            <div class='col-md-4'>
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Koran Terbaru</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tbody>
                    <?php if(!empty($daftarkoran)) { foreach ($daftarkoran->result() as $key) { ?>
                    <tr>
                      <td><?php echo substr($key->berkas_pesan, 0, 30) . "..."; ?> <span class="label label-success"><?php echo $key->berkas_waktu; ?></span> </td>
                    </tr>
                    <?php } } ?>
                  </tbody></table>
                </div><!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="<?=site_url('dashboard/koran');?>" class="uppercase">Lihat Semua Koran</a>
                </div><!-- /.box-footer -->
              </div><!--/.box -->
            </div><!-- /.col -->
            <div class="col-md-4">
              <!-- PRODUCT LIST -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Buku Terbaru</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <ul class="products-list product-list-in-box">
                    <?php if(!empty($daftarbuku)) { foreach ($daftarbuku->result() as $key) { ?>
                    <li class="item">
                      <div class="product-img">
                        <img src="<?php echo base_url('public/buku') . '/' . $key->buku_gambar; ?>" alt="Product Image"/>
                      </div>
                      <div class="product-info">
                        <a href="javascript::;" class="product-title"><?php echo substr($key->buku_judul, 0, 25); ?> <span class="label label-info pull-right"><?php echo $key->jenis_teks;?></span></a>
                        <span class="product-description">
                          <?php echo substr($key->buku_deskripsi, 0, 30) . "..."; ?>
                        </span>
                      </div>
                    </li><!-- /.item -->
                    <?php } } ?>
                  </ul>
                </div><!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="<?=site_url('dashboard/buku');?>" class="uppercase">Lihat Semua Buku</a>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Versi</b> Beta 0.2
        </div>
        <strong><?=$web->web_footer;?>.</strong> All rights reserved.
      </footer>

    </div><!-- ./wrapper -->

    <!-- AdminLTE App -->
    <script src="<?=base_url('public/dist/js/app.min.js');?>" type="text/javascript"></script>

    <!-- page script -->
    <script type="text/javascript">
      function refresh_jumlah(){
        $.getJSON("<?=site_url('dashboard/get_databox')?>", function(obj) {
            $("#boxlog").html(obj.boxlog);
            $("#boxbuku").html(obj.boxbuku);
            $("#boxkoran").html(obj.boxkoran);
            $("#boxdownload").html(obj.boxdownload);
        });
      }

      $(document).ready(function() {
        refresh_jumlah();
      });
    </script>
    
  </body>
</html>