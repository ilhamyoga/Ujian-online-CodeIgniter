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
          Data Soal
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Soal</li>
        </ol>
      </section>
      <br>
      <!-- Content Page (Page Body) -->
      <section class="content">
        <div class="panel panel-info">
          <div class="panel-heading">Daftar Soal
            <div class="tombol-kanan">
              <a class="btn btn-success btn-sm" href="<?php echo base_url('admin/dashboard/input') ?>">
                <i class="glyphicon glyphicon-plus"></i> &nbsp;&nbsp;Tambah
              </a>
            </div>
          </div>
          <div class="panel-body">
            <div id="datatabel_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
              <div class="row">
                <div class="col-sm-12">
                  <table id="example1" class="table table-bordered no-footer">
                    <thead>
                      <tr role="row">
                        <th width="5%" rowspan="1" colspan="1">No</th>
                        <th width="50%" rowspan="1" colspan="1">Soal</th>
                        <th width="15%" rowspan="1" colspan="1">Guru</th>
                        <th width="15%" rowspan="1" colspan="1">Mapel</th>
                        <th width="15%" rowspan="1" colspan="1">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
				                $no = 1;
					              foreach ($data->result() as $row) {
                          $id_soal=$row->id_soal; ?>
                          <tr>
								            <td><?php echo $no++; ?></td>
								            <td><?php echo $row->soal; ?></td>
								            <td><?php echo $row->nama_guru; ?></td>
								            <td><?php echo $row->nama_mapel; ?></td>
								            <td>
                              <div class="btn-group">
                                <a href="<?php echo base_url('admin/dashboard/edit/'.$id_soal) ?>" class="btn btn-info btn-xs">
                                  <i class="glyphicon glyphicon-pencil" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Edit
                                </a>
                                <a href="<?php echo base_url('admin/page/deleteSoal/'.$id_soal) ?>" onclick="return confirm('Yakin data anda ingin di hapus??')" class="btn btn-danger btn-xs">
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
