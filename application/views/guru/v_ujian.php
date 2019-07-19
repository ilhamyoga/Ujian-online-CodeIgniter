<?php include 'template/css.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <!-- Header -->
    <?php include 'template/header.php'; ?>
    <!-- SideBar -->
    <?php include 'template/sidebar_g.php'; ?>

    <!-- Content Page -->
    <div class="content-wrapper">
      <!-- Content Page (Page Header) -->
      <section class="content-header">
        <h1>
          Data Ujian
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Ujian</li>
        </ol>
      </section>
      <br>
      <!-- Content Page (Page Body) -->
      <section class="content">
        <div class="panel panel-info">
          <div class="panel-heading">Daftar Ujian
            <div class="tombol-kanan">
              <button type="button" class="btn btn-success btn-sm tombol-kanan" data-toggle="modal" data-target="#modal-default">
                <i class="glyphicon glyphicon-plus"></i> &nbsp;&nbsp;Tambah
              </button>
            </div>
          </div>
          <div class="panel-body">
            <div id="datatabel_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
              <div class="row">
                <div class="col-sm-12">
                  <table id="example1" class="table table-bordered no-footer">
                    <thead>
                      <tr role="row">
                        <th width="5%">No</th>
                        <th width="20%">Nama Tes</th>
                        <th width="15%">Mata Pelajaran</th>
                        <th width="15%">Jumlah Soal</th>
                        <th width="15%">Waktu</th>
                        <th width="15%">Pengacakan Soal</th>
                        <th width="15%">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $no = 1;
                        foreach ($data->result() as $row) {
                          $id_tes_ujian=$row->id_tes_ujian; ?>
                          <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $row->nama_ujian; ?>
                              <br>Token : <b><?php echo $row->token; ?></b> &nbsp;&nbsp; <a href="#" onclick="return refresh_token(3)" title="Perbarui Token"><i class="fa fa-refresh"></i></a>
                          </td>
                          <td><?php echo $row->nama_mapel; ?></td>
                          <td><?php echo $row->jumlah_soal; ?></td>
                          <td><?php echo $row->tgl_mulai; ?>
                              <br>(<?php echo $row->waktu; ?> menit)
                          </td>
                          <td><?php echo $row->jenis; ?></td>
                          <td>
                            <div class="btn-group">
                              <a data-toggle="modal" data-target="#modal-edit<?php echo $id_tes_ujian; ?>" class="btn btn-info btn-xs">
                                <i class="glyphicon glyphicon-pencil" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Edit
                              </a>
                              <a href="<?php echo base_url('admin/page/deleteSiswa/'.$id_tes_ujian) ?>" onclick="return confirm('Yakin data anda ingin di hapus??')" class="btn btn-danger btn-xs">
                                <i class="glyphicon glyphicon-remove" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Hapus
                              </a>
                            </div>
                          </td>
                      </tr>
                    </tbody>
                    <?php } ?>
                  </table>
                  <div id="datatabel_processing" class="dataTables_processing" style="display: none;">Processing...</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Model Content (Tambah) -->
        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Buat Ujian</h4>
              </div>
              <div class="modal-body">
                <form action="<?php echo base_url('guru/page/addUjian'); ?>" method="POST" />
                  <table class="table table-form">
                    <tbody>
                      <tr>
                        <td style="width: 25%">Nama Ujian</td>
                        <td style="width: 75%">
                          <input type="text" class="form-control" name="nama_tes" id="nama_tes" style="width: 100%" required="">
                        </td>
                      </tr>
                      <tr>
                        <td>Mata Pelajaran</td>
                        <td>
                          <select name="mapel" class="form-control" id="mapel" style="width: 100%" required="">
                            <option value="">-</option>
                            <?php foreach($mapel->result() as $row) { ?>
                              <option value="<?php echo $row->id_mapel ?>"><?php echo $row->nama_mapel ?></option>
                            <?php } ?>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Jumlah soal</td>
                        <td>
                          <input type="text" name="jumlah_soal" value="" class="form-control" id="jumlah_soal" style="width: 100%" required="">
                        </td>
                      </tr>
                      <tr>
                        <td>Tgl Mulai</td>
                        <td>
                          <input type="date" name="tgl_mulai" class="form-control" style="width: 160px; display: inline; float: left" id="tgl_mulai" required="">
                          <input type="time" name="wkt_mulai" class="form-control" style="width: 100px; display: inline; float: left" id="wkt_mulai" required="">
                        </td>
                      </tr>
                      <tr>
                        <td>Tgl Selesai</td>
                        <td>
                          <input type="date" name="tgl_selesai" class="form-control" style="width: 160px; display: inline; float: left" id="tgl_selesai" required="">
                          <input type="time" name="wkt_selesai" class="form-control" style="width: 100px; display: inline; float: left" id="wkt_selesai" required="">
                        </td>
                      </tr>
                      <tr>
                        <td>Waktu Ujian</td>
                        <td>
                          <input type="text" name="waktu" value="" class="form-control" id="waktu" placeholder="menit" required="" style="width: 100px; display: inline; float: left">
                          <div style="float: left; margin: 4px 0 0 10px"> menit</div>
                        </td>
                      </tr>
                      <tr>
                        <td>Acak Soal</td>
                        <td>
                          <select name="acak" class="form-control" id="acak" style="width: 100%" required="">
                            <option value="" selected="selected">Pengacakan Soal</option>
                            <option value="acak">Soal Diacak</option>
                            <option value="urut">Soal Diurutkan</option>
                          </select>
                        </td>
                      </tr>
                    </tbody>
                  </table>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Simpan</button>
                <button type="button" class="btn" data-dismiss="modal"><i class="fa fa-minus-circle"></i> Tutup</button>
              </div>
              </form>
            </div>
          </div>
        </div>

      </section>
    </div>

    <!-- Footer -->
    <?php include 'template/footer.php'; ?>
  </div>
  <?php include 'template/js.php'; ?>
  <script>
    $(function () {
      $('#example1').DataTable()
    })
  </script>
</body>
