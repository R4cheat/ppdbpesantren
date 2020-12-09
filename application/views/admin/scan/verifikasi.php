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
          <h5 class="panel-title"> Data Scan Berkas</h5>
          <hr style="margin:0px;">
          <div class="heading-elements">
            <ul class="icons-list">
              <li><a data-action="collapse"></a></li>
            </ul>
          </div>

                    <br>
                    <a>Scan</a>
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
              <th>Nama Lengkap</th>
			  <th>Scan Ijasah/SKL</th>
			  <th>Scan Kartu Keluarga</th>
			  <th>Scan Akta</th>
            </tr>
          </thead>
          <tbody>
              <?php
              $no = 1;
              foreach ($v_siswa->result() as $baris) {
                $ijas = (empty($baris->ijasah) || !file_exists("ijs/".$baris->ijasah) )?"img/image-placeholder.jpg":"ijs/".$baris->ijasah;
                $kk = (empty($baris->kartu_keluarga) || !file_exists("kke/".$baris->kartu_keluarga) )?"img/image-placeholder.jpg":"kke/".$baris->kartu_keluarga;
                $akta = (empty($baris->aktalahir) || !file_exists("akt/".$baris->aktalahir) )?"img/image-placeholder.jpg":"akt/".$baris->aktalahir;

                ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $baris->no_pendaftaran; ?></td>
                  <td><?php echo $baris->nama_lengkap; ?></td>
				  <td><a href="<?=$ijas;?>" target="_blank"><img src="<?=$ijas;?>" alt="Upload File" class="img-responsive img-fluid" style="max-width: 8vw; margin-bottom: 1vw;"></a></td>
				  <td><a href="<?=$kk;?>" target="_blank"><img src="<?=$kk;?>" alt="Upload File" class="img-responsive img-fluid" style="max-width: 8vw; margin-bottom: 1vw;"></a></td>
				  <td><a href="<?=$akta;?>" target="_blank"><img src="<?=$akta;?>" alt="Upload File" class="img-responsive img-fluid" style="max-width: 8vw; margin-bottom: 1vw;"></a></td>
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
      window.location = "panel_admin/scan/thn/"+thn;
  }

  $('[name="thn"]').select2({
      placeholder: "- Tahun -"
  });

</script>
