        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="icon ion-android-alert"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Log</span>
                  <span class="info-box-number" id="boxlog">0</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="icon ion-checkmark-circled"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Sudah Dibaca</span>
                  <span class="info-box-number" id="boxbaca">0</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="icon ion-information-circled"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Belum Dibaca</span>
                  <span class="info-box-number" id="boxbelum">0</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <div class="col-xs-12">
              <div id="box-table" class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Daftar Log</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-sm btn-info" id="btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                    <button class="btn btn-sm btn-success" id="btn-baca-semua"><i class="fa fa-plus"></i> Tandai Sudah Dibaca</button>
                    <button class="btn btn-sm btn-danger" id="btn-hapus-semua"><i class="fa fa-plus"></i> Hapus Semua</button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="tbllog" class="table table-bordered table-striped table-hover dt-responsive" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Menu</th>
                        <th>Isi</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                    <tfoot>
                      <tr>
                        <th>ID</th>
                        <th>Menu</th>
                        <th>Isi</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Opsi</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Versi</b> Beta 0.2
        </div>
        <strong><?=$web->web_footer;?>.</strong> All rights reserved. <i>{elapsed_time} detik</i>
      </footer>

    </div><!-- ./wrapper -->

    <!-- Modal Baca Log -->
    <div class="modal modal-primary fade" id="modal-baca-log" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-warning"></i> Baca Log </h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <span id="form-pesan-baca-log"></span>
              <?php echo form_open('log/baca', 'id="form-baca-log"') ?>
                <div class="row">
                  <div class="col-xs-12">
                    <input type="hidden" id="baca-id" name="baca-id" readonly="" />
                    <p>Apakah Anda yakin ingin menandai Log ini telah dibaca ?</p>
                    <div class="callout callout-primary">
                      <p>ID Buku : <span class="baca-id"> </span></p>
                      <p>Isi : <span class="baca-isi"> </span></p>
                      <p>Tanggal : <span class="baca-tanggal"> </span></p>
                    </div>
                  </div>
                </div>
              <?php echo form_close(); ?>
            </div><!-- /.box-body -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-baca-log" type="button" class="btn btn-primary"><i class="fa fa-check"></i> Iya, Tandai</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Baca Log -->

    <!-- Modal Baca Semua Log -->
    <div class="modal modal-primary fade" id="modal-bacasemua-log" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-warning"></i> Baca Semua Log </h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <span id="form-pesan-bacasemua-log"></span>
              <?php echo form_open('log/bacasemua', 'id="form-bacasemua-log"') ?>
                <div class="row">
                  <div class="col-xs-12">
                    <p>Apakah Anda yakin ingin menandai semua Log ini telah dibaca ?</p>
                  </div>
                </div>
              <?php echo form_close(); ?>
            </div><!-- /.box-body -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-bacasemua-log" type="button" class="btn btn-primary"><i class="fa fa-check"></i> Iya, Tandai Semua</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Baca Semua Log -->

    <!-- Modal Hapus Log -->
    <div class="modal modal-danger fade" id="modal-hapus-log" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-warning"></i> Hapus Data Log </h4>
          </div>
          <div class="modal-body">
            <span id="form-pesan-hapus-log"></span>
            <?php echo form_open('log/hapus', 'id="form-hapus-log"') ?>
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <input type="hidden" id="hapus-id" name="hapus-id" readonly="" />
                  <p>Apakah Anda yakin ingin menghapus Data Log berikut ?</p>
                  <div class="callout callout-danger">
                    <p>ID Log : <span class="hapus-id"> </span></p>
                    <p>Isi : <span class="hapus-isi"> </span></p>
                    <p>Tanggal : <span class="hapus-tanggal"> </span></p>
                  </div>
                </div>
              </div>
            </div>
            <?php echo form_close(); ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-hapus-log" type="button" class="btn btn-primary"><i class="fa fa-check"></i> Iya, Hapus</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Hapus Log -->

    <!-- Modal Hapus Semua Log -->
    <div class="modal modal-danger fade" id="modal-hapusemua-log" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-warning"></i> Hapus Semua Data Log </h4>
          </div>
          <div class="modal-body">
            <span id="form-pesan-hapusemua-log"></span>
            <?php echo form_open('log/hapusemua', 'id="form-hapusemua-log"') ?>
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <p>Apakah Anda yakin ingin menghapus Semua Data Log ?</p>
                </div>
              </div>
            </div>
            <?php echo form_close(); ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-hapusemua-log" type="button" class="btn btn-primary"><i class="fa fa-check"></i> Iya, Hapus Semua</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Hapus Semua Log -->

    <!-- Perpus App -->
    <script src="<?=base_url('public/dist/js/app.min.js');?>" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      function refresh_jumlah(){
        $.getJSON("<?=site_url('log/get_databox')?>", function(obj) {
            $("#boxlog").html(obj.boxlog);
            $("#boxbaca").html(obj.boxbaca);
            $("#boxbelum").html(obj.boxbelum);
        });
      }

      $(document).ready(function() {
        refresh_jumlah();

        $('#btn-baca-semua').click(function(){
            $('#modal-bacasemua-log').modal('show');
        });

        $('#btn-hapus-semua').click(function(){
            $('#modal-hapusemua-log').modal('show');
        });

        $('#modal-hapus-log').on('show.bs.modal', function (e) {
            var button = $(e.relatedTarget);
            var id = button.data('id');
            var modal = $(this);

            $.ajax({
                type: "GET",
                url: "<?=site_url('log/getlogwith/" + id + "');?>",
                cache: false,
                success: function (data) {
                    var obj = $.parseJSON(data);
                    //console.log(data);
                    modal.find('.hapus-id').html(obj.log_id);
                    modal.find('.hapus-isi').html(obj.log_isi);
                    modal.find('.hapus-tanggal').html(obj.log_dibuat);
                    modal.find('#hapus-id').val(obj.log_id);
                },
                error: function(err) {
                    console.log(err);
                }
            });
        });

        $('#modal-baca-log').on('show.bs.modal', function (e) {
            var button = $(e.relatedTarget);
            var id = button.data('id');
            var modal = $(this);

            $.ajax({
                type: "GET",
                url: "<?=site_url('log/getlogwith/" + id + "');?>",
                cache: false,
                success: function (data) {
                    var obj = $.parseJSON(data);
                    //console.log(data);
                    modal.find('.baca-id').html(obj.log_id);
                    modal.find('.baca-isi').html(obj.log_isi);
                    modal.find('.baca-tanggal').html(obj.log_dibuat);
                    modal.find('#baca-id').val(obj.log_id);
                },
                error: function(err) {
                    console.log(err);
                }
            });
        });


        $.fn.dataTable.TableTools.defaults.aButtons = [ 
          "xls", 
          {
              "sExtends": "pdf",
              "sPdfOrientation": "landscape",
              "sPdfMessage": "data di-generate pada <?=date('d-m-Y H:i:s',now());?>"
          }, 
          "print" 
        ];

        var tbllog = $("#tbllog").DataTable({
            "processing": true,
            "ajax": {
              "url" : "<?=site_url('log/getlog');?>",
              "type" : "POST"
            },
            "deferRender": true,
            "autoWidth": false,
            "order": [[ 0, "desc" ]],
            "columns": [
              { "data": "log_id" },
              { "data": "menu_nama" },
              { "data": "log_isi" },
              { "data": "log_dibuat" },
              { "data": "Bstatus" },
              { "data": "Bopsi", "searchable": false, "sortable": false, "width": "8%" },
            ],

        });

        var tt = new $.fn.dataTable.TableTools( tbllog );
        $( tt.fnContainer() ).insertBefore('div.dataTables_wrapper');

        // baca log
        $('#btn-baca-log').click(function(){
            $('#form-baca-log').submit();
            $('#btn-baca-log').addClass('disabled');
        });

        // baca semua log
        $('#btn-bacasemua-log').click(function(){
            $('#form-bacasemua-log').submit();
            $('#btn-bacasemua-log').addClass('disabled');
        });

        // hapus log
        $('#btn-hapus-log').click(function(){
            $('#form-hapus-log').submit();
            $('#btn-hapus-log').addClass('disabled');
        });

        // hapus semua log
        $('#btn-hapusemua-log').click(function(){
            $('#form-hapusemua-log').submit();
            $('#btn-hapusemua-log').addClass('disabled');
        });

        $('#form-baca-log').submit(function(){
            $.ajax({
                url:"<?=site_url('log/baca')?>",
                type:"POST",
                data:$('#form-baca-log').serialize(),
                cache: false,
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        $('#form-pesan-baca-log').html(pesan_succ(obj.pesan));
                        setTimeout(function(){$('#form-pesan-baca-log').html('')}, 5000);
                        setTimeout(function(){$('#modal-baca-log').modal('hide')}, 2500);
                        setTimeout(function(){ refresh_jumlah(); tbllog.ajax.reload( null, false ); }, 2500);
                    }else{
                        $('#form-pesan-baca-log').html(pesan_err(obj.pesan));
                        setTimeout(function(){$('#form-pesan-baca-log').html('')}, 7000);
                    }
                    
                    $('#btn-baca-log').removeClass('disabled');
                }
            });
            return false;
        });

        $('#form-bacasemua-log').submit(function(){
            $.ajax({
                url:"<?=site_url('log/bacasemua')?>",
                type:"POST",
                data:$('#form-bacasemua-log').serialize(),
                cache: false,
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        $('#form-pesan-bacasemua-log').html(pesan_succ(obj.pesan));
                        setTimeout(function(){$('#form-pesan-bacasemua-log').html('')}, 5000);
                        setTimeout(function(){$('#modal-bacasemua-log').modal('hide')}, 2500);
                        setTimeout(function(){ refresh_jumlah(); tbllog.ajax.reload( null, false ); }, 2500);
                    }else{
                        $('#form-pesan-bacasemua-log').html(pesan_err(obj.pesan));
                        setTimeout(function(){$('#form-pesan-bacasemua-log').html('')}, 7000);
                    }
                    
                    $('#btn-bacasemua-log').removeClass('disabled');
                }
            });
            return false;
        });

        $('#form-hapus-log').submit(function(){
            $.ajax({
                url:"<?=site_url('log/hapus')?>",
                type:"POST",
                data:$('#form-hapus-log').serialize(),
                cache: false,
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        $('#form-pesan-hapus-log').html(pesan_succ(obj.pesan));
                        setTimeout(function(){$('#form-pesan-hapus-log').html('')}, 5000);
                        setTimeout(function(){$('#modal-hapus-log').modal('hide')}, 2500);
                        setTimeout(function(){ refresh_jumlah(); tbllog.ajax.reload( null, false ); }, 2500);
                    }else{
                        $('#form-pesan-hapus-log').html(pesan_err(obj.pesan));
                        setTimeout(function(){$('#form-pesan-hapus-log').html('')}, 7000);
                    }
                    
                    $('#btn-hapus-log').removeClass('disabled');
                }
            });
            return false;
        });

        $('#form-hapusemua-log').submit(function(){
            $.ajax({
                url:"<?=site_url('log/hapusemua')?>",
                type:"POST",
                data:$('#form-hapusemua-log').serialize(),
                cache: false,
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        $('#form-pesan-hapusemua-log').html(pesan_succ(obj.pesan));
                        setTimeout(function(){$('#form-pesan-hapusemua-log').html('')}, 5000);
                        setTimeout(function(){$('#modal-hapusemua-log').modal('hide')}, 2500);
                        setTimeout(function(){ refresh_jumlah(); tbllog.ajax.reload( null, false ); }, 2500);
                    }else{
                        $('#form-pesan-hapusemua-log').html(pesan_err(obj.pesan));
                        setTimeout(function(){$('#form-pesan-hapusemua-log').html('')}, 7000);
                    }
                    
                    $('#btn-hapusemua-log').removeClass('disabled');
                }
            });
            return false;
        });

        $('#btn-refresh').click(function(){
            refresh_jumlah();
            tbllog.ajax.reload();
        });

      });
    </script>
    
  </body>
</html>