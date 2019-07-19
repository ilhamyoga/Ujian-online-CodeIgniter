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

	<div class="container">
		<div class="panel panel-info" >
			<div class="panel-heading ">Data Siswa</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<tbody>
						<?php
							foreach ($user->result() as $row) { ?>
								<tr>
									<td>Nama Siswa</td>
									<td><?php echo $row->nama_siswa; ?></td>
								</tr>
								<tr>
									<td>NIS</td>
									<td><?php echo $row->nis; ?></td>
								</tr>
								<tr>
									<td>Jurusan</td>
									<td><?php echo $row->nama_jurusan; ?></td>
								</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="container">
  	<div class="panel panel-info">
    	<div class="panel-heading">Daftar Ujian / Tes</div>
    	<div class="panel-body">
      	<div style="overflow: auto">
        	<table class="table table-bordered">
						<thead>
            	<tr>
              	<th width="5%">No</th>
              	<th width="20%">Nama Tes</th>
              	<th width="20%">Mapel / Guru</th>
              	<th width="10%">Jumlah Soal</th>
              	<th width="10%">Waktu</th>
              	<th width="10%">Status</th>
              	<th width="15%">Aksi</th>
            	</tr>
          	</thead>
						<tbody>
							<?php
								$no = 1;
								foreach ($data->result() as $row) {
									$id_tes_ujian=$row->id_tes_ujian; ?>
									<tr>
										<td class="ctr"><?php echo $no++; ?></td>
										<td><?php echo $row->nama_ujian; ?></td>
										<td><?php echo $row->nama_mapel; ?>
											<br>(<?php echo $row->nama_guru; ?>)</a>
										</td>
										<td class="ctr"><?php echo $row->jumlah_soal; ?></td>
										<td class="ctr"><?php echo $row->waktu; ?> menit</td>
										<td class="ctr">Belum Ikut</td>
										<td class="ctr">
											<a href="<?php echo base_url('siswa/dashboard/konfirmasi/'.$id_tes_ujian) ?>" class="btn btn-info btn-xs">
												<i class="glyphicon glyphicon-pencil" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Ikuti Ujian
											</a>
										</td>
									</tr>
							<?php } ?>
						</tbody>
        	</table>
        </div>
      </div>
    </div>
  </div>

	<div class="col-md-12 footer">
  	<a href="#">CBT - Computer Based Test 1.0</a><br>
	</div>
	<?php include 'template/js.php'; ?>
</body>
