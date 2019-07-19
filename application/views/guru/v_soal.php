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
          <div class="panel-heading"><b>Daftar Soal</b>
            <div class="tombol-kanan">
              <a class="btn btn-success btn-sm" href="<?php echo base_url('guru/dashboard/input') ?>">
                <i class="glyphicon glyphicon-plus" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Tambah Data
              </a>
              <a href="http://localhost/cat_dua/adm/m_soal/cetak/" class="btn btn-info btn-sm" target="_blank">
                <i class="glyphicon glyphicon-print"></i> Cetak
              </a>
            </div>
          </div>
          <div class="panel-body">
            <div id="datatabel_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
              <div class="row">
                <div class="col-sm-6">
                  <div class="dataTables_length" id="datatabel_length">
                    <label>Show
                      <select name="datatabel_length" aria-controls="datatabel" class="form-control input-sm">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                      </select> entries
                    </label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div id="datatabel_filter" class="dataTables_filter">
                    <label>Search:
                      <input type="search" class="form-control input-sm" placeholder="" aria-controls="datatabel">
                    </label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-sm-12">
                  <table class="table table-bordered no-footer" id="datatabel" role="grid" aria-describedby="datatabel_info" style="width: 1078px;">
                    <thead>
                      <tr role="row">
                        <td width="5%" class="sorting_disabled" rowspan="1" colspan="1" style="width: 37px;">No</td>
                        <td width="50%" class="sorting_disabled" rowspan="1" colspan="1" style="width: 522px;">Soal</td>
                        <td width="15%" class="sorting_disabled" rowspan="1" colspan="1" style="width: 144px;">Guru</td>
                        <td width="15%" class="sorting_disabled" rowspan="1" colspan="1" style="width: 144px;">Mapel</td>
                        <td width="15%" class="sorting_disabled" rowspan="1" colspan="1" style="width: 145px;">Aksi</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr role="row" class="even">
                        <td>1</td>
                        <td>
                          <p>Biografi Mario Teguh</p>
                          <p>"Salam Super" itulah kata-kata pembuka yang biasa diucapkan oleh Mario Teguh ketika ia mulai membawakan acara di Metro TV yang bertajuk 'Mario Teguh Golden Ways'. Terkenal sebagai <em>motivator </em>terbaik di Indonesia yang memiliki kepribadian ya</p>
                        </td>
                        <td>Erik Maulana</td>
                        <td>Bahasa Indonesia</td>
                        <td>
                          <div class="btn-group">
				                    <a href="http://localhost/cat_dua/adm/m_soal/edit/51" class="btn btn-info btn-xs">
                              <i class="glyphicon glyphicon-pencil" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Edit
                            </a>
				                    <a href="http://localhost/cat_dua/adm/m_soal/hapus/51" class="btn btn-danger btn-xs">
                              <i class="glyphicon glyphicon-remove" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Hapus
                            </a>
				                  </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <div id="datatabel_processing" class="dataTables_processing" style="display: none;">Processing...</div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-5">
                  <div class="dataTables_info" id="datatabel_info" role="status" aria-live="polite">Showing 1 to 7 of 7 entries</div>
                </div>
                <div class="col-sm-7">
                  <div class="dataTables_paginate paging_simple_numbers" id="datatabel_paginate">
                    <ul class="pagination">
                      <li class="paginate_button previous disabled" id="datatabel_previous">
                        <a href="#" aria-controls="datatabel" data-dt-idx="0" tabindex="0">Previous</a>
                      </li>
                      <li class="paginate_button active">
                        <a href="#" aria-controls="datatabel" data-dt-idx="1" tabindex="0">1</a>
                      </li>
                      <li class="paginate_button next disabled" id="datatabel_next">
                        <a href="#" aria-controls="datatabel" data-dt-idx="2" tabindex="0">Next</a>
                      </li>
                    </ul>
                  </div>
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
</body>
