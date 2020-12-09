    <!-- Dashboard content -->
    <div class="row">
      <div class="panel panel-flat col-md-12">
        <?php
        echo $this->session->flashdata('msg');
        ?>
          <div class="panel-body">
            <fieldset class="content-group">
              <legend class="text-bold"><i class="icon-stats-dots"></i> Grafik Statistik Pendaftaran Siswa Pertahun</legend>
                <center>
                <div class="form-group"><b></b>
                  <div class="input-group col-md-2">
                    <div class="input-group-addon"><i class="icon-calendar22"></i></div>
                    <select class="form-control" name="thn" onchange="thn()">
                      <?php for ($i=date('Y'); $i >=2018 ; $i--) {?>
                        <option value="<?php echo $i; ?>" <?php if($v_thn==$i){echo "selected";} ?>>Tahun <?php echo $i; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  &nbsp;
                </div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li class="active"><a href="#1" role="tab" data-toggle="tab">Pendaftar <label class="label label-default"><?php echo number_format($total_pendaftar,0,",","."); ?></label></a></li>
                  <li><a href="#2" role="tab" data-toggle="tab">Pendaftar Diverifikasi <label class="label label-info"><?php echo number_format($total_diverifikasi,0,",","."); ?></label></a></li>
                  <li><a href="#3" role="tab" data-toggle="tab">Pendaftar Diterima <label class="label label-success"><?php echo number_format($total_diterima,0,",","."); ?></label></a></li>
                  <li><a href="#4" role="tab" data-toggle="tab">Pendaftar Tidak Diterima <label class="label label-warning"><?php echo number_format($total_tidak_diterima,0,",","."); ?></label></a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane active" id="1">
                    <?php $this->load->view('admin/statistik/pendaftar'); ?>
                  </div>
                  <div class="tab-pane" id="2">
                    <?php $this->load->view('admin/statistik/diverifikasi'); ?>
                  </div>
                  <div class="tab-pane" id="3">
                    <?php $this->load->view('admin/statistik/diterima'); ?>
                  </div>
                  <div class="tab-pane" id="4">
                    <?php $this->load->view('admin/statistik/tidak_diterima'); ?>
                  </div>
                </div>

                </center>
            </fieldset>
          </div>

      </div>
    </div>
    <!-- /dashboard content -->
