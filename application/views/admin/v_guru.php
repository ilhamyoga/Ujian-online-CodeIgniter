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
          Data Guru
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Data Guru</li>
        </ol>
      </section>
      <br>
      <!-- Content Page (Page Body) -->
      <section class="content">
        <div class="panel panel-info">
          <div class="panel-heading">Daftar Guru
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
                        <td width="5%">No</td>
                        <td width="40%">Nama</td>
                        <td width="30%">NIP/Username</td>
                        <td width="25%">Aksi</td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
				                $no = 1;
					              foreach ($data->result() as $row) {
                          $id_guru=$row->id_guru; ?>
                          <tr>
								            <td><?php echo $no++; ?></td>
								            <td><?php echo $row->nama_guru; ?></td>
								            <td><?php echo $row->nip; ?></td>
								            <td>
                              <div class="btn-group">
                                <a data-toggle="modal" data-target="#modal-edit<?php echo $id_guru; ?>" class="btn btn-info btn-xs">
                                  <i class="glyphicon glyphicon-pencil" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Edit
                                </a>
                                <a href="<?php echo base_url('admin/page/deleteGuru/'.$row->id_guru) ?>" onclick="return confirm('Yakin data anda ingin di hapus??')" class="btn btn-danger btn-xs">
                                  <i class="glyphicon glyphicon-remove" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Hapus
                                </a>
                                <a data-toggle="modal" data-target="#modal-mapel<?php echo $id_guru; ?>" class="btn btn-success btn-xs">
                                  <i class="glyphicon glyphicon-th-list" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;MaPel Diampu
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
                <h4 class="modal-title">Tambah Data Guru</h4>
              </div>
              <div class="modal-body">
                <form action="<?php echo base_url('admin/page/addGuru'); ?>" method="POST">
                  <table class="table table-form">
                    <tr>
                      <td style="width: 25%">Nama</td>
                      <td style="width: 75%">
                        <input type="text" class="form-control" name="nama" id="nama" style="width: 100%" required>
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
            $id_guru=$row->id_guru; ?>
        <div class="modal fade" id="modal-edit<?php echo $id_guru; ?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Data Guru</h4>
              </div>
              <div class="modal-body">
                <form action="<?php echo base_url('admin/page/editGuru'); ?>" method="POST" />
                  <input type="hidden" name="id" id="id" style="width: 100%" value="<?php echo $row->id_guru?>" required>
                  <table class="table table-form">
                    <tr>
                      <td style="width: 25%">NIP</td>
                      <td style="width: 75%">
                        <input type="text" class="form-control" name="nip" id="nip" style="width: 100%" value="<?php echo $row->nip?>"  readonly>
                      </td>
                    </tr>
                    <tr>
                      <td style="width: 25%">Nama</td>
                      <td style="width: 75%">
                        <input type="text" class="form-control" name="nama" id="nama" style="width: 100%" value="<?php echo $row->nama_guru?>" required>
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

        <!-- Model Content (Mapel Diampu) -->
        <?php
          foreach ($data->result() as $row) {
            $id_guru=$row->id_guru; ?>
        <div class="modal fade" id="modal-mapel<?php echo $id_guru; ?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Mapel Diampu</h4>
              </div>
              <div class="modal-body">
                <form action="<?php echo base_url('admin/page/diampu'); ?>" method="POST" />
                  <input type="hidden" name="id" id="id" style="width: 100%" value="<?php echo $row->id_guru?>" required>
                  <table class="table table-form">
                      <?php foreach($mapel->result() as $row) { ?>
                        <tr>
                          <td>
                            <input type="checkbox" name="mapel[]" value="<?php echo $row->id_mapel; ?>">&nbsp;&nbsp;<?php echo $row->nama_mapel; ?>
                          </td>
                        </tr>
                      <?php } ?>
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
