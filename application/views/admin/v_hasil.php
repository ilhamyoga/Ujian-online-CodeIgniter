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
          Data Hasil Ujian
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Hasil Ujian</li>
        </ol>
      </section>
      <br>
      <!-- Content Page (Page Body) -->
      <section class="content">
        <div class="panel panel-info">
          <div class="panel-heading">Daftar Hasil Ujian
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
                  <table class="table table-bordered no-footer">
                    <thead>
                      <tr role="row">
                        <td width="5%" class="sorting_disabled">No</td>
                        <td width="20%" class="sorting_disabled">Nama Tes</td>
                        <td width="25%" class="sorting_disabled">Nama Guru</td>
                        <td width="20%" class="sorting_disabled">Mata Pelajaran</td>
                        <td width="10%" class="sorting_disabled">Jumlah Soal</td>
                        <td width="10%" class="sorting_disabled">Waktu</td>
                        <td width="10%" class="sorting_disabled">Aksi</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr role="row" class="odd">
                        <td>1</td>
                        <td>bhs indonesia</td>
                        <td>Erik Maulana</td>
                        <td>Bahasa Indonesia</td>
                        <td>10</td>
                        <td>10 menit</td>
                        <td>
                          <a href="http://localhost/cat_dua/adm/h_ujian/det/3" class="btn btn-info btn-xs">
                            <i class="glyphicon glyphicon-search" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Lihat Hasil
                          </a>
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
