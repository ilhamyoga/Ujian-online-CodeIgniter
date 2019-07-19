<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="treview">
        <a href="<?php echo base_url('admin/dashboard') ?>">
          <i class="fa fa-code"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="treview">
        <a href="<?php echo base_url('admin/dashboard/siswa') ?>">
          <i class="fa fa-users"></i>
          <span>Data Siswa</span>
        </a>
      </li>
      <li class="treview">
        <a href="<?php echo base_url('admin/dashboard/guru') ?>">
          <i class="fa fa-user"></i>
          <span>Data Guru</span>
        </a>
      </li>
      <li class="treview">
        <a href="<?php echo base_url('admin/dashboard/jurusan') ?>">
          <i class="fa fa-shirtsinbulk"></i>
          <span>Data Jurusan</span>
        </a>
      </li>
      <li class="treview">
        <a href="<?php echo base_url('admin/dashboard/mapel') ?>">
          <i class="fa fa-database"></i>
          <span>Data Mapel</span>
        </a>
      </li>
      <li class="treview">
        <a href="<?php echo base_url('admin/dashboard/soal') ?>">
          <i class="fa fa-file-archive-o"></i>
          <span>Soal</span>
        </a>
      </li>
      <li class="treview">
        <a href="<?php echo base_url('admin/dashboard/hasil') ?>">
          <i class="fa fa-graduation-cap"></i>
          <span>Hasil Ujian</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
