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
          <div class="panel-heading">Edit Soal</div>
          <div class="panel-body">
            <div class="container">
              <form>
                <?php
                  foreach ($data->result() as $row) { ?>
                <input type="hidden" name="id" id="id" style="width: 100%" value="<?php echo $row->id_soal?>" required>
                <div class="form-group">
                  <label class="">Mapel :</label>
                  <div class="selectContainer">
                    <select class="form-control" name="size">
                      <option value="">- Pilih Mapel -</option>
                      <option value="s">Matematika</option>
                      <option value="m">Bahasa Indonesia</option>
                      <option value="l">Fisika</option>
                      <option value="xl">Bahasa Inggris</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="">Guru :</label>
                  <div class="selectContainer">
                    <select class="form-control" name="size">
                      <option value="">- Pilih Nama Guru -</option>
                      <option value="s">Suparman</option>
                      <option value="m">Sumadi</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label>Soal :</label>
                  <textarea class="ckeditor" id="ckedtor"></textarea>
                </div>

                <div class="form-group">
            	     <label>Jawaban :</label>
            	     <ul class="nav nav-tabs">
            	       <li><a data-toggle="tab" href="#m1">Jawaban	A</a></li>
            	       <li><a data-toggle="tab" href="#m2">Jawaban	B</a></li>
            	       <li><a data-toggle="tab" href="#m3">Jawaban	C</a></li>
            	       <li><a data-toggle="tab" href="#m4">Jawaban	D</a></li>
            	     </ul>

            	     <div class="tab-content">
            	       <div id="m1" class="tab-pane fade in active">
            	      	  <div class="form-group">
                 	 		     <textarea class="ckeditor" id="ckeditor"></textarea>
                		    </div>
            	       </div>
            	       <div id="m2" class="tab-pane fade in active">
            	          <div class="form-group">
                 	 		     <textarea class="ckeditor" id="ckeditor"></textarea>
                		    </div>
            	       </div>
            	       <div id="m3" class="tab-pane fade in active">
            	          <div class="form-group">
                 	 		     <textarea class="ckeditor" id="ckeditor"></textarea>
                		    </div>
            	       </div>
            	       <div id="m4" class="tab-pane fade in active">
            	          <div class="form-group">
                 	 		     <textarea class="ckeditor" id="ckeditor"></textarea>
                		    </div>
            	       </div>
            	     </div>
                </div>

            	  <div class="form-group">
                  <label class="col-xs-3 control-label">Kunci Jawaban	:</label>
                  <div class="col-xs-5 selectContainer">
                    <select class="form-control" name="size" required>
                    	 <option value="">-</option>
                    	 <option value="A">A</option>
                    	 <option value="B">B</option>
                    	 <option value="C">C</option>
                    	 <option value="D">D</option>
                    </select>
                  </div>
                </div>

              <?php } ?>

                <div class="form-group">
                	 <button type="button" class="btn btn-info"><i class="fa fa-check"></i> Simpan</button>
                   <a class="btn btn-danger" href="<?php echo base_url('admin/dashboard/soal') ?>">
                     <i class="fas fa-redo-alt"></i> Kembali
                   </a>
                </div>
              </form>
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
