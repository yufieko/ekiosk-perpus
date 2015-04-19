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
                    <button class="btn btn-box-tool" id="btn-tambah-jenis" data-toggle="tooltip" title="" data-original-title="Tambah Data"><i class="fa fa-plus-circle"></i></button>
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
                    <button class="btn btn-box-tool" id="btn-tambah-koleksi" data-toggle="tooltip" title="" data-original-title="Tambah Data"><i class="fa fa-plus-circle"></i></button>
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

    <!-- Modal Tambah Buku -->
    <div class="modal modal-primary fade" id="modal-tambah-buku" tabindex="-1" role="dialog" data-backdrop="static">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-book"></i> Tambah Buku Baru </h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <span id="form-pesan-tambah"></span>
              <?php echo form_open_multipart('buku/tambah', 'id="form-tambah-buku"') ?>
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
              <?php echo form_close(); ?>
            </div><!-- /.box-body -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-simpan-buku" type="button" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
          </div>
        </div>
        <!-- Loading (remove the following to stop the loading)-->
        <!-- <div class="overlay" style="display:none">
          <i class="fa fa-refresh fa-spin"></i>
        </div> -->
        <!-- end loading -->
      </div>
    </div>
    <!-- Modal Tambah Buku -->

    <!-- Modal Tambah Jenis -->
    <div class="modal modal-primary fade" id="modal-tambah-jenis" tabindex="-1" role="dialog" data-backdrop="static">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-book"></i> Tambah Jenis Baru </h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <span id="form-pesan-tambah"></span>
              <?php echo form_open('jenis/tambah', 'id="form-tambah-jenis"') ?>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Jenis:</span>
                        <input type="text" class="form-control" id="tambah-jenis" name="tambah-jenis" placeholder="Jenis" />
                      </div><!-- /.input group -->
                    </div>
                  </div>
                </div>
              <?php echo form_close(); ?>
            </div><!-- /.box-body -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-simpan-jenis" type="button" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Tambah Jenis -->

    <!-- Modal Tambah Koleksi -->
    <div class="modal modal-primary fade" id="modal-tambah-koleksi" tabindex="-1" role="dialog" data-backdrop="static">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-book"></i> Tambah Koleksi Baru </h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <span id="form-pesan-tambah"></span>
              <?php echo form_open('koleksi/tambah', 'id="form-tambah-koleksi"') ?>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Koleksi:</span>
                        <input type="text" class="form-control" id="tambah-koleksi" name="tambah-koleksi" placeholder="Koleksi" />
                      </div><!-- /.input group -->
                    </div>
                  </div>
                </div>
              <?php echo form_close(); ?>
            </div><!-- /.box-body -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-simpan-koleksi" type="button" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Tambah Koleksi -->

    <!-- Modal Edit Buku  -->
    <div class="modal modal-primary fade" id="modal-edit-buku" tabindex="-1" role="dialog" data-backdrop="static">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-book"></i> Edit Data Buku</h4>
          </div>
          <div class="modal-body">
            <div class="box-body table-responsive">
              <span id="form-pesan-edit"></span>
              <?php echo form_open_multipart('buku/edit', 'id="form-edit-buku"') ?>
              <div class="box-body">
                <div class="row">
                  <div class="col-xs-7">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Judul:</span>
                        <input type="text" class="form-control" id="edit-judul" name="edit-judul" placeholder="Judul Buku" />
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Penulis:</span>
                        <input type="text" class="form-control" id="edit-penulis" name="edit-penulis" placeholder="Penulis Buku" />
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <textarea name="edit-teks" id="edit-teks" class="form-control textarea" placeholder="Deskripsi singkat buku" style="height: 100px;overflow:auto;resize:none"></textarea>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Penerbit:</span>
                        <input type="text" class="form-control" id="edit-penerbit" name="edit-penerbit" placeholder="Nama penerbit" />
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Buku Masuk:</span>
                        <input type="text" class="form-control" id="edit-masuk" name="edit-masuk" placeholder="Buku Masuk" value="<?=date("Y-m-d H:i:s",now());?>" />
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Status:</span>
                        <select class="form-control" id="edit-status" name="edit-status">
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
                          $js = 'class="form-control" id="edit-jenis"';
                          $opt = array();
                          foreach($listjenis as $j){
                            $opt[$j->jenis_id] = $j->jenis_teks;
                          }
                          echo form_dropdown('edit-jenis', $opt, '', $js);
                        ?>   
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Koleksi:</span>
                        <?php 
                          $js = 'class="form-control" id="edit-koleksi"';
                          $opt = array();
                          foreach($listkoleksi as $j){
                            $opt[$j->koleksi_id] = $j->koleksi_nama;
                          }
                          echo form_dropdown('edit-koleksi', $opt, '', $js);
                        ?>
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Tahun:</span>
                        <input type="text" class="form-control" id="edit-tahun" name="edit-tahun" placeholder="Tahun Terbit" />
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Letak:</span>
                        <input type="text" class="form-control" id="edit-letak" name="edit-letak" placeholder="Letak Buku" />
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Jumlah Buku:</span>
                        <input type="text" class="form-control" id="edit-jumlah" name="edit-jumlah" placeholder="Jumlah" />
                      </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <input type="file" name="edit-gambar" id="edit-gambar"/>  
                        <input type="hidden" name="edit-id" id="edit-id" readonly="" />  
                        <p class="help-block">Gambar Maks. 1MB</p>
                        <p><img id="edit-gambar-img" src="" alt="Gambar Sebelumnya" style="border-radius:40%; max-width: 100%; height: auto; width: 20%"></p>
                    </div>

                  </div>
                </div>
              </div>
              <?php echo form_close(); ?>
            </div><!-- /.box-body -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-edit-buku" type="button" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Edit Buku -->

    <!-- Modal Edit Jenis -->
    <div class="modal modal-primary fade" id="modal-edit-jenis" tabindex="-1" role="dialog" data-backdrop="static">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-book"></i> Edit Data Jenis </h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <span id="form-pesan-edit"></span>
              <?php echo form_open('jenis/edit', 'id="form-edit-jenis"') ?>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Jenis:</span>
                        <input type="hidden" name="edit-id" id="edit-id" readonly="" /> 
                        <input type="text" class="form-control" id="edit-jenis" name="edit-jenis" placeholder="Jenis" />
                      </div><!-- /.input group -->
                    </div>
                  </div>
                </div>
              <?php echo form_close(); ?>
            </div><!-- /.box-body -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-edit-jenis" type="button" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Edit Jenis -->

    <!-- Modal Edit Koleksi -->
    <div class="modal modal-primary fade" id="modal-edit-koleksi" tabindex="-1" role="dialog" data-backdrop="static">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-book"></i> Edit Data Koleksi </h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <span id="form-pesan-edit"></span>
              <?php echo form_open('koleksi/edit', 'id="form-edit-koleksi"') ?>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Jenis:</span>
                        <input type="hidden" name="edit-id" id="edit-id" readonly="" /> 
                        <input type="text" class="form-control" id="edit-koleksi" name="edit-koleksi" placeholder="Koleksi" />
                      </div><!-- /.input group -->
                    </div>
                  </div>
                </div>
              <?php echo form_close(); ?>
            </div><!-- /.box-body -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-edit-koleksi" type="button" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Edit Koleksi -->

    <!-- Modal Hapus Buku -->
    <div class="modal modal-danger fade" id="modal-hapus-buku" tabindex="-1" role="dialog" data-backdrop="static">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-book"></i> Hapus Data Buku </h4>
          </div>
          <div class="modal-body">
            <span id="form-pesan-hapus"></span>
            <?php echo form_open('buku/hapus', 'id="form-hapus-buku"') ?>
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <input type="hidden" id="hapus-id" name="hapus-id" readonly="" />
                  <input type="hidden" id="hapus-judul" name="hapus-judul" readonly="" />
                  <p>Apakah Anda yakin ingin menghapus Data Buku berikut ?</p>
                  <div class="callout callout-danger">
                    <p>ID Buku : <span class="hapus-id"> </span></p>
                    <p>Judul : <span class="hapus-judul"> </span></p>
                    <p>Penulis : <span class="hapus-penulis"> </span></p>
                  </div>
                </div>
              </div>
            </div>
            <?php echo form_close(); ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-hapus-buku" type="button" class="btn btn-primary"><i class="fa fa-check"></i> Iya, Hapus</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Hapus Buku -->

    <!-- Modal Hapus Jenis -->
    <div class="modal modal-danger fade" id="modal-hapus-jenis" tabindex="-1" role="dialog" data-backdrop="static">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-book"></i> Hapus Data Jenis </h4>
          </div>
          <div class="modal-body">
            <span id="form-pesan-hapus"></span>
            <?php echo form_open('jenis/hapus', 'id="form-hapus-jenis"') ?>
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <input type="hidden" id="hapus-id" name="hapus-id" readonly="" />
                  <input type="hidden" id="hapus-jenis" name="hapus-jenis" readonly="" />
                  <p>Apakah Anda yakin ingin menghapus Data Jenis berikut ?</p>
                  <div class="callout callout-danger">
                    <p>ID Jenis : <span class="hapus-id"> </span></p>
                    <p>Jenis : <span class="hapus-jenis"> </span></p>
                  </div>
                </div>
              </div>
            </div>
            <?php echo form_close(); ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-hapus-jenis" type="button" class="btn btn-primary"><i class="fa fa-check"></i> Iya, Hapus</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Hapus Jenis -->

    <!-- Modal Hapus Koleksi -->
    <div class="modal modal-danger fade" id="modal-hapus-koleksi" tabindex="-1" role="dialog" data-backdrop="static">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-book"></i> Hapus Data Koleksi </h4>
          </div>
          <div class="modal-body">
            <span id="form-pesan-hapus"></span>
            <?php echo form_open('koleksi/hapus', 'id="form-hapus-koleksi"') ?>
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <input type="hidden" id="hapus-id" name="hapus-id" readonly="" />
                  <input type="hidden" id="hapus-koleksi" name="hapus-koleksi" readonly="" />
                  <p>Apakah Anda yakin ingin menghapus Data Koleksi berikut ?</p>
                  <div class="callout callout-danger">
                    <p>ID Koleksi : <span class="hapus-id"> </span></p>
                    <p>Koleksi : <span class="hapus-koleksi"> </span></p>
                  </div>
                </div>
              </div>
            </div>
            <?php echo form_close(); ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button id="btn-hapus-koleksi" type="button" class="btn btn-primary"><i class="fa fa-check"></i> Iya, Hapus</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Hapus Koleksi -->

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

        $('#btn-tambah-jenis').click(function(){
            $('#form-pesan-tambah').html('');
            $('#modal-tambah-jenis').modal('show');
        });

        $('#btn-tambah-koleksi').click(function(){
            $('#form-pesan-tambah').html('');
            $('#modal-tambah-koleksi').modal('show');
        });

        $('#modal-hapus-buku').on('show.bs.modal', function (e) {
            var button = $(e.relatedTarget);
            var id = button.data('id');
            var modal = $(this);

            $.ajax({
                type: "GET",
                url: "<?=site_url('buku/getbukuwith/" + id + "');?>",
                cache: false,
                success: function (data) {
                    var obj = $.parseJSON(data);
                    //console.log(data);
                    modal.find('.hapus-judul').html(obj.buku_judul);
                    modal.find('.hapus-penulis').html(obj.buku_penulis);
                    modal.find('#hapus-id').val(obj.buku_id);
                    modal.find('#hapus-judul').val(obj.buku_judul);
                    modal.find('.hapus-id').html(obj.buku_id);
                },
                error: function(err) {
                    console.log(err);
                }
            });
        });

        $('#modal-hapus-jenis').on('show.bs.modal', function (e) {
            var button = $(e.relatedTarget);
            var id = button.data('id');
            var modal = $(this);

            $.ajax({
                type: "GET",
                url: "<?=site_url('jenis/getjeniswith/" + id + "');?>",
                cache: false,
                success: function (data) {
                    var obj = $.parseJSON(data);
                    //console.log(data);
                    modal.find('.hapus-jenis').html(obj.jenis_teks);
                    modal.find('.hapus-id').html(obj.jenis_id);
                    modal.find('#hapus-id').val(obj.jenis_id);
                    modal.find('#hapus-jenis').val(obj.jenis_teks);
                },
                error: function(err) {
                    console.log(err);
                }
            });
        });

        $('#modal-hapus-koleksi').on('show.bs.modal', function (e) {
            var button = $(e.relatedTarget);
            var id = button.data('id');
            var modal = $(this);

            $.ajax({
                type: "GET",
                url: "<?=site_url('koleksi/getkoleksiwith/" + id + "');?>",
                cache: false,
                success: function (data) {
                    var obj = $.parseJSON(data);
                    //console.log(data);
                    modal.find('.hapus-koleksi').html(obj.koleksi_nama);
                    modal.find('.hapus-id').html(obj.koleksi_id);
                    modal.find('#hapus-id').val(obj.koleksi_id);
                    modal.find('#hapus-koleksi').val(obj.koleksi_nama);
                },
                error: function(err) {
                    console.log(err);
                }
            });
        });

        $('#modal-edit-buku').on('show.bs.modal', function (e) {
            var button = $(e.relatedTarget); // Button that triggered the modal
            var id = button.data('id');
            var modal = $(this);

            $.ajax({
                type: "GET",
                url: "<?=site_url('buku/getbukuwith/" + id + "');?>",
                cache: false,
                success: function (data) {
                    var obj = $.parseJSON(data);
                    //console.log(data);
                    modal.find('#edit-judul').val(obj.buku_judul);
                    modal.find('#edit-penulis').val(obj.buku_penulis);
                    modal.find('#edit-teks').val(obj.buku_deskripsi);
                    modal.find('#edit-penerbit').val(obj.buku_penerbit);
                    modal.find('#edit-masuk').val(obj.buku_masuk);
                    modal.find('#edit-tahun').val(obj.buku_tahun);
                    modal.find('#edit-letak').val(obj.buku_letak);
                    modal.find('#edit-jumlah').val(obj.buku_jumlah);
                    modal.find('#edit-id').val(obj.buku_id);
                    modal.find('#edit-gambar-img').attr("src", "<?=base_url('public/buku');?>/" + obj.buku_gambar);

                    modal.find("#edit-status option").filter(function(){
                        return ( ($(this).val() == obj.buku_status) || ($(this).text() == obj.buku_status) );
                    }).prop('selected', true);
                    modal.find("#edit-jenis option").filter(function(){
                        return ( ($(this).val() == obj.jenis_id) || ($(this).text() == obj.jenis_id) );
                    }).prop('selected', true);
                    modal.find("#edit-koleksi option").filter(function(){
                        return ( ($(this).val() == obj.koleksi_id) || ($(this).text() == obj.koleksi_id) );
                    }).prop('selected', true);
                },
                error: function(err) {
                    console.log(err);
                }
            });
            // $(this).find('#hapus-id').text(id);
        });

        $('#modal-edit-jenis').on('show.bs.modal', function (e) {
            var button = $(e.relatedTarget); // Button that triggered the modal
            var id = button.data('id');
            var modal = $(this);

            $.ajax({
                type: "GET",
                url: "<?=site_url('jenis/getjeniswith/" + id + "');?>",
                cache: false,
                success: function (data) {
                    var obj = $.parseJSON(data);
                    //console.log(data);
                    modal.find('#edit-jenis').val(obj.jenis_teks);
                    modal.find('#edit-id').val(obj.jenis_id);
                },
                error: function(err) {
                    console.log(err);
                }
            });
        });

        $('#modal-edit-koleksi').on('show.bs.modal', function (e) {
            var button = $(e.relatedTarget); // Button that triggered the modal
            var id = button.data('id');
            var modal = $(this);

            $.ajax({
                type: "GET",
                url: "<?=site_url('koleksi/getkoleksiwith/" + id + "');?>",
                cache: false,
                success: function (data) {
                    var obj = $.parseJSON(data);
                    //console.log(data);
                    modal.find('#edit-koleksi').val(obj.koleksi_nama);
                    modal.find('#edit-id').val(obj.koleksi_id);
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

        var tblbuku = $("#tblbuku").DataTable({
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

        var tbljenis = $('#tbljenis').DataTable({
            "processing": true,
            "ajax": { 
              "url" : "<?=site_url('jenis/getjenis');?>",
              "type" : "POST"
            },
            "deferRender": true,
            "autoWidth": false,
            "columns": [
              { "data": "jenis_id" },
              { "data": "jenis_teks" },
              { "data": "Jumlah", "searchable": false },
              { "data": "Jopsi", "searchable": false, "sortable": false },
            ],
        });

        var tblkoleksi = $('#tblkoleksi').DataTable({
            "processing": true,
            "ajax": {
              "url" : "<?=site_url('koleksi/getkoleksi');?>",
              "type" : "POST"
            },
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
        $('#btn-simpan-buku').click(function(){
            $('#form-tambah-buku').submit();
            $('#btn-simpan-buku').addClass('disabled');
        });

        // Tambah jenis
        $('#btn-simpan-jenis').click(function(){
            $('#form-tambah-jenis').submit();
            $('#btn-simpan-jenis').addClass('disabled');
        });

        // Tambah koleksi
        $('#btn-simpan-koleksi').click(function(){
            $('#form-tambah-koleksi').submit();
            $('#btn-simpan-koleksi').addClass('disabled');
        });

        // edit artikel
        $('#btn-edit-buku').click(function(){
            $('#form-edit-buku').submit();
            $('#btn-edit-buku').addClass('disabled');
        });

        // edit jenis
        $('#btn-edit-jenis').click(function(){
            $('#form-edit-jenis').submit();
            $('#btn-edit-jenis').addClass('disabled');
        });

        // edit koleksi
        $('#btn-edit-koleksi').click(function(){
            $('#form-edit-koleksi').submit();
            $('#btn-edit-koleksi').addClass('disabled');
        });

        // hapus artikel
        $('#btn-hapus-buku').click(function(){
            $('#form-hapus-buku').submit();
            $('#btn-hapus-buku').addClass('disabled');
        });

        // hapus jenis
        $('#btn-hapus-jenis').click(function(){
            $('#form-hapus-jenis').submit();
            $('#btn-hapus-jenis').addClass('disabled');
        });

        // hapus koleksi
        $('#btn-hapus-koleksi').click(function(){
            $('#form-hapus-koleksi').submit();
            $('#btn-hapus-koleksi').addClass('disabled');
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
                        setTimeout(function(){ refresh_jumlah(); tblbuku.ajax.reload(); }, 2500);
                    }else{
                        $('#form-pesan-tambah').html(pesan_err(obj.pesan));
                        setTimeout(function(){$('#form-pesan-tambah').html('')}, 7000);
                    }
                    
                    $('#btn-simpan-buku').removeClass('disabled');
                }
            });
            return false;
        });

        $('#form-tambah-jenis').submit(function(){
            $.ajax({
                url:"<?=site_url('jenis/tambah')?>", type:"POST",
                data:$('#form-tambah-jenis').serialize(),
                cache: false,
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        $('#form-pesan-tambah').html(pesan_succ(obj.pesan));
                        setTimeout(function(){$('#form-pesan-tambah').html('')}, 5000);
                        setTimeout(function(){$('#modal-tambah-jenis').modal('hide')}, 2500); 
                        setTimeout(function(){ refresh_jumlah(); tbljenis.ajax.reload(); }, 2500); 
                    }else{
                        $('#form-pesan-tambah').html(pesan_err(obj.pesan));
                        setTimeout(function(){$('#form-pesan-tambah').html('')}, 7000);
                    }
                    
                    $('#btn-simpan-jenis').removeClass('disabled'); }
            });
            return false;
        });

        $('#form-tambah-koleksi').submit(function(){
            $.ajax({
                url:"<?=site_url('koleksi/tambah')?>", type:"POST",
                data:$('#form-tambah-koleksi').serialize(),
                cache: false,
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        $('#form-pesan-tambah').html(pesan_succ(obj.pesan));
                        setTimeout(function(){$('#form-pesan-tambah').html('')}, 5000);
                        setTimeout(function(){$('#modal-tambah-koleksi').modal('hide')}, 2500); 
                        setTimeout(function(){ refresh_jumlah(); tblkoleksi.ajax.reload(); }, 2500); 
                    }else{
                        $('#form-pesan-tambah').html(pesan_err(obj.pesan));
                        setTimeout(function(){$('#form-pesan-tambah').html('')}, 7000);
                    }
                    
                    $('#btn-simpan-koleksi').removeClass('disabled'); }
            });
            return false;
        });

        $('#form-edit-buku').submit(function(){
            // create a FormData Object using your form dom element
            var form = new FormData(document.getElementById('form-edit-buku'));
            //append files
            var file = document.getElementById('edit-gambar').files[0];
            if (file) {   
              form.append('edit-gambar', file);
            }

            $.ajax({
                url:"<?=site_url('buku/edit')?>",
                type:"POST",
                data:form,
                cache: false,
                contentType: false, //must, tell jQuery not to process the data
                processData: false, //must, tell jQuery not to set contentType
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        $('#form-pesan-edit').html(pesan_succ(obj.pesan));
                        setTimeout(function(){$('#form-pesan-edit').html('')}, 5000);
                        setTimeout(function(){$('#modal-edit-buku').modal('hide')}, 2500);
                        setTimeout(function(){ refresh_jumlah(); tblbuku.ajax.reload(); }, 2500);
                    }else{
                        $('#form-pesan-edit').html(pesan_err(obj.pesan));
                        setTimeout(function(){$('#form-pesan-edit').html('')}, 7000);
                    }
                    
                    $('#btn-edit-buku').removeClass('disabled');
                }
            });
            return false;
        });

        $('#form-edit-jenis').submit(function(){
            $.ajax({
                url:"<?=site_url('jenis/edit')?>",
                type:"POST",
                data:$('#form-edit-jenis').serialize(),
                cache: false,
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        $('#form-pesan-edit').html(pesan_succ(obj.pesan));
                        setTimeout(function(){$('#form-pesan-edit').html('')}, 5000);
                        setTimeout(function(){$('#modal-edit-jenis').modal('hide')}, 2500);
                        setTimeout(function(){ refresh_jumlah(); tbljenis.ajax.reload(); }, 2500);
                    }else{
                        $('#form-pesan-edit').html(pesan_err(obj.pesan));
                        setTimeout(function(){$('#form-pesan-edit').html('')}, 7000);
                    }
                    
                    $('#btn-edit-jenis').removeClass('disabled');
                }
            });
            return false;
        });

        $('#form-hapus-buku').submit(function(){
            $.ajax({
                url:"<?=site_url('buku/hapus')?>",
                type:"POST",
                data:$('#form-hapus-buku').serialize(),
                cache: false,
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        $('#form-pesan-hapus').html(pesan_succ(obj.pesan));
                        setTimeout(function(){$('#form-pesan-hapus').html('')}, 5000);
                        setTimeout(function(){$('#modal-hapus-buku').modal('hide')}, 2500);
                        setTimeout(function(){ refresh_jumlah(); tblbuku.ajax.reload(); }, 2500);
                    }else{
                        $('#form-pesan-hapus').html(pesan_err(obj.pesan));
                        setTimeout(function(){$('#form-pesan-hapus').html('')}, 7000);
                    }
                    
                    $('#btn-hapus-buku').removeClass('disabled');
                }
            });
            return false;
        });

        $('#btn-refresh').click(function(){
            refresh_jumlah();
            tblbuku.ajax.reload();
            tbljenis.ajax.reload();
            tblkoleksi.ajax.reload();
        });

      });
    </script>
    
  </body>
</html>