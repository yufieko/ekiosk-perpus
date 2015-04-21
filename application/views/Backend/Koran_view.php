        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="icon ion-ios-paper"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Koran</span>
                  <span class="info-box-number" id="boxtotal">0</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="icon ion-android-download"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Download</span>
                  <span class="info-box-number" id="boxdownload">0</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="icon ion-android-checkmark-circle"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Publish</span>
                  <span class="info-box-number" id="boxpublish">0</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="icon ion-eye-disabled"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Draft</span>
                  <span class="info-box-number" id="boxdraft">0</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <div class="col-xs-12">
              <div id="box-tblbuku" class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Daftar Koran</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-sm btn-info" id="btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                    <button class="btn btn-sm btn-success" id="btn-tambah-koran"><i class="fa fa-plus"></i> Tambah Koran</button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="tblkoran" class="table table-bordered table-striped table-hover dt-responsive" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Uploader</th>
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Download</th>
                        <th>Status</th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                    <tfoot>
                      <tr>
                        <th>ID</th>
                        <th>Uploader</th>
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Download</th>
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

    <!-- Modal Tambah Koran -->
    <div class="modal modal-primary fade" id="modal-tambah-koran" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="icon ion-ios-paper"></i> Tambah Koran Baru </h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <span id="form-pesan-tambah-koran"></span>
              <?php echo form_open_multipart('koran/tambah', 'id="form-tambah-koran"') ?>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Judul:</span>
                        <input type="text" class="form-control" id="tambah-judul" name="tambah-judul" placeholder="Koran" value="jawapos<?=date("Ymd");?>" />
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Status:</span>
                        <select class="form-control" id="tambah-status" name="tambah-status">
                            <option value="1">Publish</option>
                            <option value="0">Draft</option>
                        </select>
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <input type="file" name="tambah-koran" id="tambah-koran"/>  
                        <p class="help-block">Ukuran Maks. 50MB</p>
                    </div>
                  </div>
                </div>
              <?php echo form_close(); ?>
            </div><!-- /.box-body -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-simpan-koran" type="button" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Tambah Koran -->

    <!-- Modal Edit Koran  -->
    <div class="modal modal-primary fade" id="modal-edit-koran" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="icon ion-ios-paper"></i> Edit Data Koran</h4>
          </div>
          <div class="modal-body">
            <div class="box-body table-responsive">
              <span id="form-pesan-edit-koran"></span>
              <?php echo form_open_multipart('koran/edit', 'id="form-edit-koran"') ?>
              <input type="hidden" id="edit-id" name="edit-id" readonly="" />
              <div class="box-body">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Judul:</span>
                        <input type="text" class="form-control" id="edit-judul" name="edit-judul" placeholder="Koran" />
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Status:</span>
                        <select class="form-control" id="edit-status" name="edit-status">
                            <option value="1">Publish</option>
                            <option value="0">Draft</option>
                        </select>
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <input type="file" name="edit-koran" id="edit-koran"/>  
                        <p class="help-block">Ukuran Maks. 50MB</p>
                    </div>
                  </div>
                </div>
              </div>
              <?php echo form_close(); ?>
            </div><!-- /.box-body -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-edit-koran" type="button" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Edit Koran -->

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

    <!-- Modal Hapus Koran -->
    <div class="modal modal-danger fade" id="modal-hapus-koran" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="icon ion-ios-paper"></i> Hapus Data Koran </h4>
          </div>
          <div class="modal-body">
            <?php echo form_open('koran/hapus', 'id="form-hapus-koran"') ?>
            <span id="form-pesan-hapus-koran"></span>
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <input type="hidden" id="hapus-id" name="hapus-id" readonly="" />
                  <input type="hidden" id="hapus-judul" name="hapus-judul" readonly="" />
                  <p>Apakah Anda yakin ingin menghapus Data Buku berikut ?</p>
                  <div class="callout callout-danger">
                    <p>ID Koran : <span class="hapus-id"> </span></p>
                    <p>Nama : <span class="hapus-judul"> </span></p>
                    <p>Tanggal : <span class="hapus-tanggal"> </span></p>
                  </div>
                </div>
              </div>
            </div>
            <?php echo form_close(); ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-hapus-koran" type="button" class="btn btn-primary"><i class="fa fa-check"></i> Iya, Hapus</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Hapus Koran -->

    <!-- Perpus App -->
    <script src="<?=base_url('public/dist/js/app.min.js');?>" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      function refresh_jumlah(){
        $.getJSON("<?=site_url('koran/get_databox')?>", function(obj) {
            $("#boxtotal").html(obj.boxtotal);
            $("#boxdownload").html(obj.boxdownload);
            $("#boxpublish").html(obj.boxpublish);
            $("#boxdraft").html(obj.boxdraft);
        });
      }

      $(document).ready(function() {
        refresh_jumlah();

        $('#btn-tambah-koran').click(function(){
            $('#modal-tambah-koran').modal('show');
        });

        $('#modal-hapus-koran').on('show.bs.modal', function (e) {
            var button = $(e.relatedTarget);
            var id = button.data('id');
            var modal = $(this);

            $.ajax({
                type: "GET",
                url: "<?=site_url('koran/getkoranwith/" + id + "');?>",
                cache: false,
                success: function (data) {
                    var obj = $.parseJSON(data);
                    //console.log(data);
                    modal.find('.hapus-judul').html(obj.berkas_pesan);
                    modal.find('.hapus-tanggal').html(obj.berkas_waktu);
                    modal.find('#hapus-id').val(obj.berkas_id);
                    modal.find('#hapus-judul').val(obj.berkas_pesan);
                    modal.find('.hapus-id').html(obj.berkas_id);
                },
                error: function(err) {
                    console.log(err);
                }
            });
        });

        $('#modal-edit-koran').on('show.bs.modal', function (e) {
            var button = $(e.relatedTarget); // Button that triggered the modal
            var id = button.data('id');
            var modal = $(this);

            $.ajax({
                type: "GET",
                url: "<?=site_url('koran/getkoranwith/" + id + "');?>",
                cache: false,
                success: function (data) {
                    var obj = $.parseJSON(data);
                    //console.log(data);
                    modal.find('#edit-judul').val(obj.berkas_pesan);
                    modal.find('#edit-id').val(obj.berkas_id);

                    modal.find("#edit-status option").filter(function(){
                        return ( ($(this).val() == obj.berkas_status) || ($(this).text() == obj.berkas_status) );
                    }).prop('selected', true);
                    
                },
                error: function(err) {
                    console.log(err);
                }
            });
            // $(this).find('#hapus-id').text(id);
        });

        $('#modal-download-koran').on('show.bs.modal', function (e) {
            var button = $(e.relatedTarget);
            var id = button.data('id');
            var modal = $(this);

            //e.preventDefault();  //stop the browser from following
            setTimeout(function(){ 
              window.location.href = "<?=site_url('koran/download/" + id + "')?>";
            }, 2500);
            setTimeout(function(){ modal.modal('hide'); }, 2500);
            setTimeout(function(){ refresh_jumlah(); tblkoran.ajax.reload( null, false ); }, 2500);
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

        var tblkoran = $("#tblkoran").DataTable({
            "processing": true,
            "ajax": {
              "url" : "<?=site_url('koran/getkoran');?>",
              "type" : "POST"
            },
            "deferRender": true,
            "autoWidth": false,
            "order": [[ 0, "desc" ]],
            "columns": [
              { "data": "berkas_id" },
              { "data": "user_login" },
              { "data": "berkas_pesan" },
              { "data": "berkas_waktu" },
              { "data": "berkas_download" },
              { "data": "Bstatus" },
              { "data": "Bopsi", "searchable": false, "sortable": false, "width": "10%" },
            ],

        });

        var tt = new $.fn.dataTable.TableTools( tblkoran );
        $( tt.fnContainer() ).insertBefore('div.dataTables_wrapper');

        // Tambah koran
        $('#btn-simpan-koran').click(function(){
            $('#form-tambah-koran').submit();
            $('#btn-simpan-koran').addClass('disabled');
        });

        // edit koran
        $('#btn-edit-koran').click(function(){
            $('#form-edit-koran').submit();
            $('#btn-edit-koran').addClass('disabled');
        });

        // hapus koran
        $('#btn-hapus-koran').click(function(){
            $('#form-hapus-koran').submit();
            $('#btn-hapus-koran').addClass('disabled');
        });

        $('#form-tambah-koran').submit(function(){
            // create a FormData Object using your form dom element
            var form = new FormData(document.getElementById('form-tambah-koran'));
            //append files
            var file = document.getElementById('tambah-koran').files[0];
            if (file) {   
              form.append('tambah-koran', file);
            }

            $.ajax({
                url:"<?=site_url('koran/tambah')?>",
                type:"POST",
                data:form,
                cache: false,
                contentType: false, //must, tell jQuery not to process the data
                processData: false, //must, tell jQuery not to set contentType
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        $('#form-pesan-tambah-koran').html(pesan_succ(obj.pesan));
                        setTimeout(function(){$('#form-pesan-tambah-koran').html('')}, 5000);
                        setTimeout(function(){$('#modal-tambah-koran').modal('hide')}, 2500);
                        setTimeout(function(){ refresh_jumlah(); tblkoran.ajax.reload( null, false ); }, 2500);
                    }else{
                        $('#form-pesan-tambah-koran').html(pesan_err(obj.pesan));
                        setTimeout(function(){$('#form-pesan-tambah-koran').html('')}, 7000);
                    }
                    
                    $('#btn-simpan-koran').removeClass('disabled');
                }
            });
            return false;
        });

        $('#form-edit-koran').submit(function(){
            // create a FormData Object using your form dom element
            var form = new FormData(document.getElementById('form-edit-koran'));
            //append files
            var file = document.getElementById('edit-koran').files[0];
            if (file) {   
              form.append('edit-koran', file);
            }

            $.ajax({
                url:"<?=site_url('koran/edit')?>",
                type:"POST",
                data:form,
                cache: false,
                contentType: false, //must, tell jQuery not to process the data
                processData: false, //must, tell jQuery not to set contentType
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        $('#form-pesan-edit-koran').html(pesan_succ(obj.pesan));
                        setTimeout(function(){$('#form-pesan-edit-koran').html('')}, 5000);
                        setTimeout(function(){$('#modal-edit-koran').modal('hide')}, 2500);
                        setTimeout(function(){ refresh_jumlah(); tblkoran.ajax.reload( null, false ); }, 2500);
                    }else{
                        $('#form-pesan-edit-koran').html(pesan_err(obj.pesan));
                        setTimeout(function(){$('#form-pesan-edit-koran').html('')}, 7000);
                    }
                    
                    $('#btn-edit-koran').removeClass('disabled');
                }
            });
            return false;
        });

        $('#form-hapus-koran').submit(function(){
            $.ajax({
                url:"<?=site_url('koran/hapus')?>",
                type:"POST",
                data:$('#form-hapus-koran').serialize(),
                cache: false,
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        $('#form-pesan-hapus-koran').html(pesan_succ(obj.pesan));
                        setTimeout(function(){$('#form-pesan-hapus-koran').html('')}, 5000);
                        setTimeout(function(){$('#modal-hapus-koran').modal('hide')}, 2500);
                        setTimeout(function(){ refresh_jumlah(); tblkoran.ajax.reload( null, false ); }, 2500);
                    }else{
                        $('#form-pesan-hapus-koran').html(pesan_err(obj.pesan));
                        setTimeout(function(){$('#form-pesan-hapus-koran').html('')}, 7000);
                    }
                    
                    $('#btn-hapus-koran').removeClass('disabled');
                }
            });
            return false;
        });

        $('#btn-refresh').click(function(){
            refresh_jumlah();
            tblkoran.ajax.reload();
        });

      });
    </script>
    
  </body>
</html>