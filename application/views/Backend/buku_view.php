        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion ion-ios-book"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Buku</span>
                  <span class="info-box-number" id="boxtotal">0</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="ion ion-log-out"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Dipinjam</span>
                  <span class="info-box-number" id="boxpinjam">0</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-pin"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Belum Dipinjam</span>
                  <span class="info-box-number" id="boxbpinjam">0</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-bookmarks"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Jenis</span>
                  <span class="info-box-number" id="boxjenis">0</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <div class="col-xs-12">
              <div id="box-tblbuku" class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Daftar Buku</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-sm btn-info" id="btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                    <button class="btn btn-sm btn-success" id="btn-tambah-buku"><i class="fa fa-plus"></i> Tambah Buku Baru</button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="tblbuku" class="table table-bordered table-striped table-hover dt-responsive" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>ID</th>
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
                        <th>ID</th>
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
                </div><!-- /.box-body -->
                <!-- Loading (remove the following to stop the loading)-->
                <div class="overlay" style="display:none">
                  <i class="fa fa-refresh fa-spin"></i>
                </div>
                <!-- end loading -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <div class="col-xs-6">
              <div class="box box-info box-solid collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title">Jenis Buku</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Toogle"><i class="fa fa-arrow-circle-down"></i></button>
                    <button class="btn btn-box-tool" data-toggle="tooltip" title="" data-original-title="Tambah Data"><i class="fa fa-plus-circle"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="tbljenis" class="table table-bordered table-hover dt-responsive" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Jenis</th>
                        <th>Jumlah Buku</th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                  </table>
                </div>
                <!-- Loading (remove the following to stop the loading)-->
                <div class="overlay" style="display:none">
                  <i class="fa fa-refresh fa-spin"></i>
                </div>
                <!-- end loading -->
              </div>
            </div>
            <div class="col-xs-6">
              <div class="box box-success box-solid collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title">Koleksi Buku</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Toogle"><i class="fa fa-arrow-circle-down"></i></button>
                    <button class="btn btn-box-tool" data-toggle="tooltip" title="" data-original-title="Tambah Data"><i class="fa fa-plus-circle"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="tblkoleksi" class="table table-bordered table-hover dt-responsive" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Koleksi</th>
                        <th>Jumlah Buku</th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 5.0</td>
                        <td>Win 95+</td>
                        <td>5</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- Loading (remove the following to stop the loading)-->
                <div class="overlay" style="display:none">
                  <i class="fa fa-refresh fa-spin"></i>
                </div>
                <!-- end loading -->
              </div>
            </div>
          </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Versi</b> Beta 0.2
        </div>
        <strong><?=$web->web_footer;?>.</strong> All rights reserved. <i>{elapsed_time} detik</i>
      </footer>

    </div><!-- ./wrapper -->

    <!-- Modal Tambah  -->
    <div class="modal modal-primary fade" id="modal-tambah-buku" data-backdrop="static">
      <div class="modal-dialog" style="width: 50%;">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-book"></i> Tambah Buku Baru </h4>
          </div>
          <div class="modal-body">
            <div class="box-body table-responsive">
              <span id="form-pesan-tambah"></span>
              <?php echo form_open_multipart('buku/tambah', 'id="form-tambah-buku"') ?>
              <div class="box-body">
                <div class="row">
                  <div class="col-xs-7">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Judul:</span>
                        <input type="text" class="form-control" id="tambah-judul" name="tambah-judul" placeholder="Judul Buku" />
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Penulis:</span>
                        <input type="text" class="form-control" id="tambah-penulis" name="tambah-penulis" placeholder="Penulis Buku" />
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <textarea name="tambah-teks" id="tambah-teks" class="form-control textarea" placeholder="Deskripsi singkat buku" style="height: 100px;overflow:auto;resize:none"></textarea>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Penerbit:</span>
                        <input type="text" class="form-control" id="tambah-penerbit" name="tambah-penerbit" placeholder="Nama penerbit" />
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Buku Masuk:</span>
                        <input type="text" class="form-control" id="tambah-masuk" name="tambah-masuk" placeholder="Buku Masuk" value="<?=date("Y-m-d H:i:s",now());?>" />
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Status:</span>
                        <select class="form-control" id="tambah-status" name="tambah-status">
                            <option value="1">Ada</option>
                            <option value="0">Tidak Ada</option>
                        </select>
                      </div><!-- /.input group -->
                    </div>
                  </div>
                  <div class="col-xs-5">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Jenis:</span>
                        <?php 
                          $js = 'class="form-control" id="tambah-jenis"';
                          $opt = array();
                          foreach($listjenis as $j){
                            $opt[$j->jenis_id] = $j->jenis_teks;
                          }
                          echo form_dropdown('tambah-jenis', $opt, '', $js);
                        ?>   
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Koleksi:</span>
                        <?php 
                          $js = 'class="form-control" id="tambah-koleksi"';
                          $opt = array();
                          foreach($listkoleksi as $j){
                            $opt[$j->koleksi_id] = $j->koleksi_nama;
                          }
                          echo form_dropdown('tambah-koleksi', $opt, '', $js);
                        ?>
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Tahun:</span>
                        <input type="text" class="form-control" id="tambah-tahun" name="tambah-tahun" placeholder="Tahun Terbit" />
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Letak:</span>
                        <input type="text" class="form-control" id="tambah-letak" name="tambah-letak" placeholder="Letak Buku" />
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Jumlah Buku:</span>
                        <input type="text" class="form-control" id="tambah-jumlah" name="tambah-jumlah" placeholder="Jumlah" />
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <input type="file" name="tambah-gambar" id="tambah-gambar"/>  
                        <p class="help-block">Gambar Maks. 1MB</p>
                    </div>

                  </div>
                </div>
              </div>
              <?php echo form_close(); ?>
            </div><!-- /.box-body -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-simpan" type="button" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
          </div>
        </div>
        <!-- Loading (remove the following to stop the loading)-->
        <!-- <div class="overlay" style="display:none">
          <i class="fa fa-refresh fa-spin"></i>
        </div> -->
        <!-- end loading -->
      </div>
    </div>

    <!-- Modal Hapus -->
    <div class="modal modal-danger fade" id="modal-hapus" data-backdrop="static">
      <div class="modal-dialog" style="width: 350px;">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-book"></i> Hapus Data </h4>
          </div>
          <div class="modal-body">
            <div class="box-body table-responsive">
              <span id="form-pesan-hapus"></span>
              <?php echo form_open('buku/hapus', 'id="form-hapus"') ?>
              <div class="box-body">
                <div class="row">
                  <div class="col-md-12">
                    <input type="hidden" id="hapus-id" name="hapus-id" />
                    <input type="hidden" id="hapus-judul" name="hapus-judul" />
                    <p>Apakah Anda yakin ingin menghapus Data Buku berikut ?</p>
                    <div class="callout callout-danger">
                      <p>Judul : <span class="hapus-judul"> </span></p>
                      <p>Penulis : <span class="hapus-penulis"> </span></p>
                    </div>
                  </div>
                </div>
              </div>
              <?php echo form_close(); ?>
            </div><!-- /.box-body -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-hapus" type="button" class="btn btn-primary"><i class="fa fa-check"></i> Iya, Hapus</button>
          </div>
        </div>
        <!-- Loading (remove the following to stop the loading)-->
        <div class="overlay" style="display:none">
          <i class="fa fa-refresh fa-spin"></i>
        </div>
        <!-- end loading -->
      </div>
    </div>

    <!-- Perpus App -->
    <script src="<?=base_url('public/dist/js/app.min.js');?>" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      function refresh_jumlah(){
        $.getJSON("<?=site_url('buku/get_databox')?>", function(obj) {
            $("#boxtotal").html(obj.boxtotal);
            $("#boxpinjam").html(obj.boxpinjam);
            $("#boxbpinjam").html(obj.boxbpinjam);
            $("#boxjenis").html(obj.boxjenis);
        });
      }

      $(document).ready(function() {
        refresh_jumlah();

        $('#btn-tambah-buku').click(function(){
            $('#form-pesan-tambah').html('');
            $('#modal-tambah-buku').modal('show');
        });

        $('#btn-hapus').click(function(){
            $('#modal-hapus').modal('show');
        });

        $('#modal-hapus').on('show.bs.modal', function (e) {
            var id = $(e.relatedTarget).attr('data-id');
            var title = $(e.relatedTarget).attr('data-title');
            $(this).find('#hapus-id').text(id);
            $(this).find('#hapus-judul').text(title);
            $(this).find('.hapus-judul').text(title);
            $(this).find('.hapus-penulis').text(title);
        });

        $('#btn-hapus').click(function(){
            //$('#form-hapus').submit();
            $('#btn-hapus').addClass('disabled');
            
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

        var tblbuku = $("#tblbuku").dataTable({
            "processing": true,
            "ajax": {
              "url" : "<?=site_url('buku/getbuku');?>",
              "type" : "POST"
            },
            "deferRender": true,
            "autoWidth": false,
            "order": [[ 0, "desc" ]],
            "columns": [
              { "data": "buku_id" },
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

        var tt = new $.fn.dataTable.TableTools( tblbuku );
        $( tt.fnContainer() ).insertBefore('div.dataTables_wrapper');

        var tbljenis = $('#tbljenis').dataTable({
            "processing": true,
            "ajax": "<?=site_url('jenis/getjenis');?>",
            "deferRender": true,
            "autoWidth": false,
            "columns": [
              { "data": "jenis_id" },
              { "data": "jenis_teks" },
              { "data": "Jumlah", "searchable": false },
              { "data": "Jopsi", "searchable": false, "sortable": false },
            ],
        });

        var tblkoleksi = $('#tblkoleksi').dataTable({
            "processing": true,
            "ajax": "<?=site_url('koleksi/getkoleksi');?>",
            "deferRender": true,
            "autoWidth": false,
            "columns": [
              { "data": "koleksi_id" },
              { "data": "koleksi_nama" },
              { "data": "Jumlah", "searchable": false },
              { "data": "Jopsi", "searchable": false, "sortable": false },
            ],
        });

        // Tambah artikel
        $('#btn-simpan').click(function(){
            $('#form-tambah-buku').submit();
            $('#btn-simpan').addClass('disabled');
        });

        $('#form-tambah-buku').submit(function(){
            // create a FormData Object using your form dom element
            var form = new FormData(document.getElementById('form-tambah-buku'));
            //append files
            var file = document.getElementById('tambah-gambar').files[0];
            if (file) {   
              form.append('tambah-gambar', file);
            }

            $.ajax({
                url:"<?=site_url('buku/tambah')?>",
                type:"POST",
                data:form,
                cache: false,
                contentType: false, //must, tell jQuery not to process the data
                processData: false, //must, tell jQuery not to set contentType
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        $('#form-pesan-tambah').html(pesan_succ(obj.pesan));
                        setTimeout(function(){$('#form-pesan-tambah').html('')}, 5000);
                        setTimeout(function(){$('#modal-tambah-buku').modal('hide')}, 2500);
                        setTimeout(function(){ refresh_jumlah(); tblbuku.ajax.reload( null, false ); }, 2500);
                    }else{
                        $('#form-pesan-tambah').html(pesan_err(obj.pesan));
                        setTimeout(function(){$('#form-pesan-tambah').html('')}, 7000);
                    }
                    
                    $('#btn-simpan').removeClass('disabled');
                }
            });
            return false;
        });

        $('#btn-refresh').click(function(){
            refresh_jumlah();
            tblbuku.ajax.reload( null, false );
            tbljenis.ajax.reload( null, false );
            tblkoleksi.ajax.reload( null, false );
        });

      });
    </script>
    
  </body>
</html>