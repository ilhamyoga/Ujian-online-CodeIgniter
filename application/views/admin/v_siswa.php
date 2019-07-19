<?php include 'template/css.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <!-- Header -->
    <?php include 'template/header.php'; ?>
    <!-- SideBar -->
    <?php include 'template/sidebar_a.php'; ?>

    <!-- Content Page -->
    <div class="content-wrapper">
      <!-- Content Page (Page Header) -->
      <section class="content-header">
        <h1>
          Data Siswa
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Data Siswa</li>
        </ol>
      </section>
      <br>
      <!-- Content Page (Page Body) -->
      <section class="content">
        <div class="panel panel-info">
          <div class="panel-heading">Daftar Siswa
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
                        <th width="35%">Nama</th>
                        <th width="15%">NIM / Username</th>
                        <th width="20%">Kelas / Jurusan</th>
                        <th width="25%">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
				                $no = 1;
					              foreach ($data->result() as $row) {
                          $id_siswa=$row->id_siswa; ?>
                          <tr>
								            <td><?php echo $no++; ?></td>
								            <td><?php echo $row->nama_siswa; ?></td>
								            <td><?php echo $row->nis; ?></td>
								            <td><?php echo $row->nama_jurusan; ?></td>
								            <td>
                              <div class="btn-group">
                                <a data-toggle="modal" data-target="#modal-edit<?php echo $id_siswa; ?>" class="btn btn-info btn-xs">
                                  <i class="glyphicon glyphicon-pencil" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Edit
                                </a>
                                <a href="<?php echo base_url('admin/page/deleteSiswa/'.$id_siswa) ?>" onclick="return confirm('Yakin data anda ingin di hapus??')" class="btn btn-danger btn-xs">
                                  <i class="glyphicon glyphicon-remove" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Hapus
                                </a>
                              </div>
                            </td>
							            </tr>
                      <?php } ?>
                    </tbody>
                  </table>
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
                <h4 class="modal-title">Tambah Data Siswa</h4>
              </div>
              <div class="modal-body">
                <form action="<?php echo base_url('admin/page/addSiswa'); ?>" method="POST" />
                  <table class="table table-form">
                    <tr>
                      <td style="width: 25%">Nama</td>
                      <td style="width: 75%">
                        <input type="text" class="form-control" name="nama" id="nama" style="width: 100%" required>
                      </td>
                    </tr>
                    <tr>
                      <td style="width: 25%">Jurusan</td>
                      <td style="width: 75%">
                        <select class="form-control" style="width: 100%" name="jurusan" required>
                          <option value="">-</option>
                          <?php foreach($jurusan->result() as $row) { ?>
                            <option value="<?php echo $row->id_jurusan ?>"><?php echo $row->nama_jurusan?></option>
                          <?php } ?>
                        </select>
                      </td>
                    </tr>
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

        <!-- Model Content (Edit) -->
        <?php
          foreach ($data->result() as $row) {
            $id_siswa=$row->id_siswa; ?>
        <div class="modal fade" id="modal-edit<?php echo $id_siswa; ?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Data Siswa</h4>
              </div>
              <div class="modal-body">
                <form action="<?php echo base_url('admin/page/editSiswa'); ?>" method="POST" />
                  <input type="hidden" name="id" id="id" style="width: 100%" value="<?php echo $row->id_siswa?>" required>
                  <table class="table table-form">
                    <tr>
                      <td style="width: 25%">NIS</td>
                      <td style="width: 75%">
                        <input type="text" class="form-control" name="nis" id="nis" style="width: 100%" value="<?php echo $row->nis?>"  readonly>
                      </td>
                    </tr>
                    <tr>
                      <td style="width: 25%">Nama</td>
                      <td style="width: 75%">
                        <input type="text" class="form-control" name="nama" id="nama" style="width: 100%" value="<?php echo $row->nama_siswa?>" required>
                      </td>
                    </tr>
                    <tr>
                      <td style="width: 25%">Jurusan</td>
                      <td style="width: 75%">
                        <select class="form-control" style="width: 100%" name="jurusan" required>
                          <option value="">-</option>
                          <?php foreach($jurusan->result() as $row) { ?>
                            <option value="<?php echo $row->id_jurusan ?>" selected="selected"><?php echo $row->nama_jurusan?></option>
                          <?php } ?>
                        </select>
                      </td>
                    </tr>
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
        <?php } ?>

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
