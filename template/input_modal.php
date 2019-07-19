<!-- Model Content (Tambah) -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tambah Data Siswa</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('admin/page/addSiswa'); ?>" method="POST" />
          <table class="table table-form">
            <tr>
              <td style="width: 25%">Nama</td>
              <td style="width: 75%">
                <input type="text" class="form-control" name="nama" id="nama" style="width: 100%" required>
              </td>
            </tr>
            <tr>
              <td style="width: 25%">Jurusan</td>
              <td style="width: 75%">
                <select class="form-control" style="width: 100%" name="jurusan" required>
                  <option value="">-</option>
                  <?php foreach($jurusan->result() as $row) { ?>
                    <option value="<?php echo $row->id_jurusan ?>"><?php echo $row->nama_jurusan?></option>
                  <?php } ?>
                </select>
              </td>
            </tr>
          </table>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Simpan</button>
        <button type="button" class="btn" data-dismiss="modal"><i class="fa fa-minus-circle"></i> Tutup</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Model Content (Edit) -->
<?php
  foreach ($data->result() as $row) {
    $id_siswa=$row->id_siswa; ?>
<div class="modal fade" id="modal-edit<?php echo $id_siswa; ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Data Siswa</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('admin/page/editSiswa'); ?>" method="POST" />
          <input type="hidden" name="id" id="id" style="width: 100%" value="<?php echo $row->id_siswa?>" required>
          <table class="table table-form">
            <tr>
              <td style="width: 25%">NIS</td>
              <td style="width: 75%">
                <input type="text" class="form-control" name="nis" id="nis" style="width: 100%" value="<?php echo $row->nis?>"  required>
              </td>
            </tr>
            <tr>
              <td style="width: 25%">Nama</td>
              <td style="width: 75%">
                <input type="text" class="form-control" name="nama" id="nama" style="width: 100%" value="<?php echo $row->nama_siswa?>" required>
              </td>
            </tr>
            <tr>
              <td style="width: 25%">Jurusan</td>
              <td style="width: 75%">
                <select class="form-control" style="width: 100%" name="jurusan" required>
                  <option value="">-</option>
                  <?php foreach($jurusan->result() as $row) { ?>
                    <option value="<?php echo $row->id_jurusan ?>" selected="selected"><?php echo $row->nama_jurusan?></option>
                  <?php } ?>
                </select>
              </td>
            </tr>
          </table>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Simpan</button>
        <button type="button" class="btn" data-dismiss="modal"><i class="fa fa-minus-circle"></i> Tutup</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php } ?>
