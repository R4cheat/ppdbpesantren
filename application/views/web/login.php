<?php $ceks = $this->session->userdata('no_pendaftaran'); 
$logo = (empty($v_user->logos) || !file_exists("fotoo/".$v_user->logos) )?"img/users.jpg":"fotoo/".$v_user->logos;
?>
<div class="layer"></div>
<div class="obox">
<div class="row">
     <div class="col-lg-12">
        <div class="intro-text">
            <div class="col-md-12 bg-success hbox">
            <span class="boxtext"><i class="fa fa-sign-in"></i> Halaman Login <b>Calon Siswa</b></span>
            <span class="pull-right" style="margin-top:10px;font-size:16px">
            <a href=""><i class="fa fa-times" style="color:#fff"></i></a></span>
            </div>
            <h4 class="text-success"><br><br>
               <img src="<?=$logo;?>" width="80">
               Login Administrasi Calon Siswa
            </h4>
            <div class="col-md-12">
                <span class="text-success">Masukkan No. Pendaftaran dan Password yang diperoleh saat melakukan pendaftaran secara online.</span><br>
            </div>
            <div class="col-md-12" style="margin-top:20px">
              <?php
              echo $this->session->flashdata('msg');
              ?>
             <span class="text-success"></span>
                <form action="" method="post">
                    <div class="form-group" style="padding-left:15px;padding-right:15px">
                        <input type="text" name="username" class="inp" placeholder="No. Pendaftaran" required="true"  autofocus/>
                    </div>
                    <div class="form-group has-feedback" style="margin-top:-20px;padding-left:15px;padding-right:15px">
                        <input type="password" name="password" class="inp" placeholder="NISN" required="true" />
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <a href="" style="color:#fff;float:left;" class="btn btn-success"><i class="fa fa-remove margin-r-5"></i> Tutup</a>
                            <button type="submit" name="btnlogin" style="color:#fff;float:right;" class="btn btn-success"  ><i class="fa fa-sign-in margin-r-5"></i> Login</button>
                        </div><!-- /.col -->
                    </div>
                </form>
            </div>

        </div>
       </div>
     </div>
</div>
