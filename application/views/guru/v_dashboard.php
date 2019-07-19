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
          Dashboard
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>
      <br>
      <!-- Content Page (Page Body) -->
      <section class="content">
        <div class="panel panel-info">
          <div class="panel-heading">Selamat datang di Sistem Ujian Online</div>
          <div class="panel-body">
            <div class="alert alert-info">Selamat datang <b>Administrator Guru</b>. Username : <b><?php echo strtoupper($this->session->userdata('username')); ?></b></div>
          </div>
        </div>
      </section>
    </div>

    <!-- Footer -->
    <?php include 'template/footer.php'; ?>
  </div>
  <?php include 'template/js.php'; ?>
</body>
