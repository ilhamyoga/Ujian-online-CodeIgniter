<?php include 'template/css.php'; ?>

<body>
  <?php
    $no = 1;
    foreach ($data->result() as $row) { ?>
      <div class="se-pre-con" style="display: none;"></div>

      <nav class="navbar navbar-findcond navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand">
              <div id="clock" style="font-weight: bold" >
                <i class="glyphicon glyphicon-time"></i> 00:01:47:49
              </div>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right" style="z-index: 1000">
              <li>
                <a class="#" onclick="return simpan_akhir();">
                  <i class="glyphicon glyphicon-stop"></i> <b> Selesai </b>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="dmobile">
        <div class="col-md-9">
          <form role="form" name="_form" method="post" id="_form">
            <div class="panel panel-default">
              <div class="panel-heading">Soal Nomor :
                <div class="btn btn-info" id="soalke"> 1 </div>
              </div>
              <div class="panel-heading">Ukuran Font :
                <a href="#" style="font-size:14px;">A</a>
                <a href="#" style="font-size:18px;"> A</a>
                <a href="#" style="font-size:20px;">A</a>
              </div>
              <div class="panel-body" style="overflow: auto">
                <div class="panel-body" style="overflow: auto">
                  <div class="step" id="widget_1" style="display: block;">
                    <?php echo $row->soal; ?>
                    <div class="funkyradio">
                      <div class="funkyradio-success">
                        <input type="radio" id="opsi_A_35" name="opsi_1" value="A">
                        <label for="opsi_A_35">
                          <div class="huruf_opsi">A</div>
                          <p></p><p><?php echo $row->opsi_a; ?></p></label>
                      </div>
                    </div>
                  </div>
                  <div class="funkyradio">
                    <div class="funkyradio-success">
                      <input type="radio" id="opsi_B_35" name="opsi_1" value="B">
                      <label for="opsi_B_35"><div class="huruf_opsi">B</div> <p></p><p><?php echo $row->opsi_b; ?></p></label>
                    </div>
                  </div>
                  <div class="funkyradio">
                    <div class="funkyradio-success">
                      <input type="radio" id="opsi_C_35" name="opsi_1" value="C">
                      <label for="opsi_C_35"><div class="huruf_opsi">C</div> <p></p><p><?php echo $row->opsi_c; ?></p></label>
                    </div>
                  </div>
                  <div class="funkyradio">
                    <div class="funkyradio-success">
                      <input type="radio" id="opsi_D_35" name="opsi_1" value="D">
                      <label for="opsi_D_35"><div class="huruf_opsi">D</div> <p></p><p><?php echo $row->opsi_d; ?></p></label>
                    </div>
                  </div>
                </div>

                <div class="panel-footer text-right">
                  <a class="ragu_ragu btn btn-warning" >Ragu - Ragu </a>
                  <a class="action back btn btn-info" ><i class="glyphicon glyphicon-chevron-left"></i>Soal Sebelumnya </a>
                  <a class="action next btn btn-info" > Soal Selanjutnya <i class="glyphicon glyphicon-chevron-right"></i></a>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-3">
          <div class="panel panel-default">
            <div class="panel-heading" id="nav_soal" style="overflow: auto">
              <div class="btn btn-default col-md-12">
                <i class="fa fa-search"></i> Navigasi Soal
              </div>
            </div>
            <div class="panel-body" style="overflow: auto;"  height: "500px; ">
              <div class="col-sm-3"><button class="btn btn-default btn-lg" > 01 </button></div>
              <div class="col-sm-3"><button class="btn btn-default btn-lg" > 02 </button></div>
              <div class="col-sm-3"><button class="btn btn-default btn-lg" > 03 </button></div>
              <div class="col-sm-3"><button class="btn btn-default btn-lg" > 04 </button></div>
              <div class="col-sm-3"><button class="btn btn-default btn-lg" > 05 </button></div>
              <div class="col-sm-3"><button class="btn btn-default btn-lg" > 06 </button></div>
              <div class="col-sm-3"><button class="btn btn-default btn-lg" > 07 </button></div>
              <div class="col-sm-3"><button class="btn btn-default btn-lg" > 08 </button></div>
              <div class="col-sm-3"><button class="btn btn-default btn-lg" > 09 </button></div>
              <div class="col-sm-3"><button class="btn btn-default btn-lg" > 10 </button></div>
              <div class="col-sm-3"><button class="btn btn-default btn-lg" > 11 </button></div>
              <div class="col-sm-3"><button class="btn btn-default btn-lg" > 12 </button></div>
              <div class="col-sm-3"><button class="btn btn-default btn-lg" > 13 </button></div>
              <div class="col-sm-3"><button class="btn btn-default btn-lg" > 14 </button></div>
              <div class="col-sm-3"><button class="btn btn-default btn-lg" > 15 </button></div>
              <div class="col-sm-3"><button class="btn btn-default btn-lg" > 16 </button></div>
              <div class="col-sm-3"><button class="btn btn-default btn-lg" > 17 </button></div>
              <div class="col-sm-3"><button class="btn btn-default btn-lg" > 18 </button></div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>

  <div class="col-md-12 footer">
    <body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">
      <span id="clock"></span>
      <a href="http://localhost/cat_dua/adm">CBT - Computer Based Test 1.0</a><br>
  </div>

  <?php include 'template/js.php'; ?>

  <style type="text/css">
    body {
      background-image: url(bg.png);
    }
  </style>
</body>
