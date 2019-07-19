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
        <a href="<?php echo base_url('siswa/dashboard') ?>">
          <i class="fa fa-code"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="treview">
        <a href="<?php echo base_url('siswa/dashboard/ujian') ?>">
          <i class="fa fa-pencil-square-o"></i>
          <span>Ujian</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

<!-- /.Color -->
<!--
<aside class="control-sidebar">
    <div id="control-sidebar-home-tab"></div>
</aside>
-->
