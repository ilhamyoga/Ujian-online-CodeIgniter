<?php include 'template/css.php'; ?>
<body>
	<nav class="navbar " style="background-color: white;">
  	<div class="container-fluid">
    	<div class="navbar-header">
      	<a class="navbar-brand" href="#">CBT - Computer Based test </a>
    	</div>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $this->session->userdata('username'); ?><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#" onclick="return rubah_password();">Ubah Password</a></li>
            <li><a href="<?php echo base_url('auth/logout') ?>" onclick="return confirm('keluar..?');">Logout</a></li>
          </ul>
        </li>
     	</ul>
	  </div>
	</nav>
<form action="<?php echo base_url('auth/confirm') ?>" method="POST">
	<div class="col-sm-8" >
  	<div class="panel panel-info" style="margin-bottom: 5px;">
    	<div class="panel-heading">
      	<b>Konfirmasi Tes </b>
    	</div>
    	<div class="panel-body" >
				<?php foreach ($data->result() as $row) { ?>
					<input type="hidden" name="id" value="<?php echo $row->id_tes_ujian; ?>">
      		<h6>Nama Tes</h6>
      		<p><?php echo $row->nama_ujian; ?></p>
      			<hr>
      		<h6>Status Tes</h6>
      		<marquee direction="up"><p style="color: red;">Active</p></marquee>
      			<hr>
      		<h6>Sub Tes</h6>
      		<p><?php echo $row->id_mapel; ?></p>
      			<hr>
      		<h6>Tanggal Tes</h6>
      		<p><?php echo $row->tgl_mulai; ?></p>
      			<hr>
      		<h6>Alokasi Waktu Tes</h6>
      		<p><?php echo $row->waktu; ?> Menit</p>
      			<hr>
      		<div class="input-group">
        		<span class="input-group-addon">Token</span>
        		<input id="token" type="text" class="form-control" name="token" required>
      		</div>
				<?php } ?>
    	</div>
  	</div>
	</div>

	<div class="col-sm-4">
  	<label class="col-sm-12 " style="background-color: #ffebcc;"><br><br>
    	<i class="glyphicon glyphicon-warning-sign" ></i> Tombol MULAI hanya akan aktif apabila waktu sekarang sudah melewati waktu mulai tes. Tekan tombol F5 untuk merefresh halaman <br><br><br>
  	</label> <br><br><br> <br><br><br><br><br>
			<button type="submit" class="col-sm-12 btn btn-success" name="mulai">MULAI</button>
	</div>
</form>

	<div class="col-md-12 footer">
		<a href="#">CBT - Computer Based Test 1.0</a><br>
	</div>
	<?php include 'template/js.php'; ?>
</body>
