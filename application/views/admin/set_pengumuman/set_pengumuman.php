<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">
    <?php
    echo $this->session->flashdata('msg');
    ?>
    <!-- Dashboard content -->
    <div class="row">
      <!-- Basic datatable -->
      <div class="panel panel-flat">
        <div class="panel-heading">
          <h5 class="panel-title"> Setting Pengumuman</h5>
          <hr style="margin:0px;">
          <div class="heading-elements">
            <ul class="icons-list">
              <li><a data-action="collapse"></a></li>
            </ul>
          </div>

                    <br>
                    <a href="panel_admin/edit_ket" class="btn btn-primary">Edit Keterangan Lulus</a>
                    <div class="col-md-3" style="float:right;margin-right:25px;">
                      <div class="input-group">
                        <div class="input-group-addon"><i class="icon-calendar22"></i></div>
                        <select class="form-control" name="thn" onchange="thn()">
                          <?php for ($i=date('Y'); $i >=2018 ; $i--) {?>
                            <option value="<?php echo $i; ?>" <?php if($v_thn==$i){echo "selected";} ?>>Tahun <?php echo $i; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>

        </div>
        <div class="table-responsive">
        <table class="table datatable-basic table-bordered" width="100%">
          <thead>
            <tr>
              <th width="30px;">No.</th>
              <th>No. Pendaftaran</th>
              <th>NISN</th>
              <th>NIK</th>
              <th>Nama Lengkap</th>
              <th>Status Lulus</th>
              <th class="text-center" width="220">Aksi</th>
            </tr>
          </thead>
          <tbody>
              <?php
              $no = 1;
              foreach ($v_siswa->result() as $baris) {?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $baris->no_pendaftaran; ?></td>
                  <td><?php echo $baris->nisn; ?></td>
                  <td><?php echo $baris->nik; ?></td>
                  <td><?php echo $baris->nama_lengkap; ?></td>
                  <td align="center">
                    <?php if ($baris->status_pendaftaran == 'lulus') {?>
                      <label class="label label-success">Lulus</label>
                    <?php }elseif ($baris->status_pendaftaran == 'tidak lulus') {?>
                      <label class="label label-danger">Tidak Lulus</label>
                    <?php }else{ ?>
                      <label class="label label-warning">Proses</label>
                    <?php } ?>
                  </td>
                  <td align="center">
                    <?php if ($baris->status_pendaftaran == '') {?>
                      <a href="panel_admin/set_pengumuman/tdk_lulus/<?php echo $baris->no_pendaftaran; ?>" class="btn btn-warning btn-xs" title="Tidak Lulus" onclick="return confirm('Apakah Anda yakin?')"><i class="icon-cross3"></i> Tidak Lulus</a>
                      <a href="panel_admin/set_pengumuman/lulus/<?php echo $baris->no_pendaftaran; ?>" class="btn btn-success btn-xs" title="Lulus" onclick="return confirm('Apakah Anda yakin?')"><i class="icon-checkmark4"></i> Lulus</a>
                    <?php }else{ ?>
                      <a href="panel_admin/set_pengumuman/batal/<?php echo $baris->no_pendaftaran; ?>" class="btn btn-danger btn-xs" title="Batalkan" onclick="return confirm('Apakah Anda yakin?')"><i class="icon-cross3"></i> Batal</a>
                    <?php } ?>
                  </td>
                </tr>
              <?php
              } ?>
          </tbody>
        </table>
        </div>
      </div>
      <!-- /basic datatable -->
    </div>
    <!-- /dashboard content -->

<script type="text/javascript">
  function thn()
  {
    var thn = $('[name="thn"]').val();
      window.location = "panel_admin/set_pengumuman/thn/"+thn;
  }

  $('[name="thn"]').select2({
      placeholder: "- Tahun -"
  });

</script>
