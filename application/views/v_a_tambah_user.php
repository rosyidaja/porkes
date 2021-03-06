    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $ket; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i> Master User</a></li>
        <li class="active"><?php echo $ket; ?></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <?php if($this->session->flashdata('sukses'))
              {?>
                <p style="color: green"><strong><?php echo $this->session->flashdata('sukses'); ?></strong></p>
              <?php } else { ?>
                <p style="color: #a94442"><strong><?php echo $this->session->flashdata('gagal'); ?></strong></p>
              <?php } ?>
              <h3 class="box-title"><?php echo $ket; ?></h3>
            </div>
            
            <form role="form" enctype="multipart/form-data" action="<?php echo base_url('C_master_user/'.$aksi);?>" method="post">
            <?php 
              if($aksi=='create'){
            ?>      
            <!-- form start -->
              <div class="box-body">
                <div class="form-group" style="width: 400px">
                <input type="hidden" name="user_id" value="<?php if(!empty($detail->user_id)){ echo $detail->user_id;} ?>">
                </div>
                <div class="form-group" style="width: 400px">
                  <label for="exampleInputEmail1">Nama Lengkap Karyawan</label>
                  <input type="text" class="form-control" name="user_nama" placeholder=" Nama Lengkap Karyawan ..." required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity" value="<?php if(!empty($detail->user_nama)){ echo $detail->user_nama;} ?>">
                </div>
                <div class="form-group" style="width: 400px">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control" name="user_name" placeholder=" Username ..." required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity" value="<?php if(!empty($detail->user_name)){ echo $detail->user_name;} ?>">
                </div>
                <input type="hidden" name="pwd_lama" value="<?php if(!empty($detail->user_password)){ echo $detail->user_password;} ?>">
                <div class="form-group" style="width: 400px">
                  <label for="exampleInputEmail1">Password</label>
                  <input type="Password" class="form-control" name="user_password" placeholder=" Password ..." required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity">
                </div>
                <div class="form-group" style="width: 400px">
                  <label for="exampleInputEmail1">Re-Password</label>
                  <input type="Password" class="form-control" name="user_repassword" placeholder=" Re-Password ..." required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Unggah Foto (User)</label>
                  <br>
                  <?php if(@$detail->user_foto == ""){ ?>
                    <img src="<?php echo base_url('assets/img/avatar.png');?>">
                  <?php }
                  else { ?>
                    <img src="<?php echo base_url();?>assets/upload/user/<?php echo $detail->user_foto;?>" width="100px" style="border:1px solid #c8c7c7;">
                 <?php } ?>
                 <br>  
                  <input type="file" name="user_foto" id="foto_user" style="padding-top: 10px;">                                                             
                </div>  
                <div class="form-group">
                  <label>Level</label>
                    <select class="form-control select2" style="width: 145px;" name="user_level" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity">
                      <option>--- Pilih Level ---</option>
                      <option value="0">Admin</option>
                      <option value="1">Super Admin</option>
                    </select>
                </div>
                <div class="form-group">
                  <label>Faskes Terkait</label>
                    <select class="form-control select2" style="width: 145px;" name="user_faskes_id" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity">
                      <option>--- Pilih Faskes ---</option>
                      <?php foreach ($faskes as $key => $value) {
                        echo '<option value="'.$value->faskes_id.'">'.$value->faskes_nama.'</option>';
                      } ?>
                    </select>
                </div>
              </div>

              <div class="box-footer" style="text-align: center;">
                <a href="<?php echo base_url('C_master_user/detail');?>" style="padding-right: 10px;"><button type="button" class="btn btn-success btn-xs btn-flat"><i class="fa fa-arrow-left"></i> Kembali</button></a>
                <button type="submit" class="btn btn-primary btn-xs btn-flat"><i class="fa fa-save"></i> <?php echo $ket; ?></button>
              </div>

              <?php 
              }
                else if($aksi=='update_pwd'){
              ?>    

              <div class="box-body">
                <div class="form-group" style="width: 400px">
                  <input type="hidden" name="user_id" value="<?php if(!empty($detail->user_id)){ echo $detail->user_id;} ?>">
                </div>
                <div class="form-group" style="width: 400px">
                  <label>Faskes Nama</label>
                    <input disabled type="text" class="form-control" required placeholder=" Faskes Belum Terisi..." oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity" value="<?php if(!empty($detail->faskes_nama)){ echo $detail->faskes_nama;} ?>">
                </div>
                <div class="form-group" style="width: 400px">
                  <label for="exampleInputEmail1">Nama Lengkap Karyawan</label>
                    <input disabled type="text" class="form-control" name="user_nama" placeholder=" Nama Lengkap Karyawan ..." required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity" value="<?php if(!empty($detail->user_nama)){ echo $detail->user_nama;} ?>">
                </div>
                <div class="form-group" style="width: 400px">
                  <label for="exampleInputEmail1">Username</label>
                    <input disabled type="text" class="form-control" name="user_name" placeholder=" Username ..." required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity" value="<?php if(!empty($detail->user_name)){ echo $detail->user_name;} ?>">
                </div>
                <input type="hidden" name="pwd_lama" value="<?php if(!empty($detail->user_password)){ echo $detail->user_password;} ?>">
                <div class="form-group" style="width: 400px">
                  <label for="exampleInputEmail1">Password</label>
                    <input type="Password" class="form-control" name="user_password" placeholder=" Password ..." oninput="setCustomValidity">
                </div>
                <div class="form-group" style="width: 400px">
                  <label for="exampleInputEmail1">Re-Password</label>
                    <input type="Password" class="form-control" name="user_repassword" placeholder=" Re-Password ..." oninput="setCustomValidity">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Unggah Foto (User)</label>
                  <br>
                  <?php if(@$detail->user_foto == ""){ ?>
                    <img src="<?php echo base_url('assets/img/avatar.png');?>">
                  <?php }
                  else { ?>
                    <img src="<?php echo base_url();?>assets/upload/user/<?php echo $detail->user_foto;?>" width="100px" style="border:1px solid #c8c7c7;">
                 <?php } ?>
                 <br>  
                  <input type="file" name="user_foto" id="foto_user" style="padding-top: 10px;">                                                             
                </div>  

                <div class="form-group">
                  <label>Level</label>
                    <select class="form-control select2" style="width: 145px;" name="user_level" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity">
                        <?php 
                           if($detail->user_level == "1"){ ?>
                              <option value="1">Super Admin</option>
                              <option value="0">Admin</option>
                          <?php }else{ ?>
                              <option value="0">Admin</option>
                              <option value="1">Super Admin</option>
                          <?php }
                        ?>                 
                    </select>
                </div>
              </div>

              <div class="box-footer" style="text-align: center;">
                <a href="<?php echo base_url('C_master_user/detail');?>" style="padding-right: 10px;"><button type="button" class="btn btn-success btn-xs btn-flat"><i class="fa fa-arrow-left"></i> Kembali</button></a>
                <button type="submit" class="btn btn-primary btn-xs btn-flat"><i class="fa fa-save"></i> <?php echo $ket; ?></button>
              </div>

              <?php 
              }
                else if($aksi=='aksi_update_pwd_profile'){
              ?>    

              <div class="box-body">
                <div class="form-group" style="width: 400px">
                  <input type="hidden" name="user_id" value="<?php if(!empty($detail->user_id)){ echo $detail->user_id;} ?>">
                </div>
                <div class="form-group" style="width: 400px">
                  <label>Faskes Nama</label>
                    <input disabled type="text" class="form-control" required placeholder=" Faskes Belum Terisi..." oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity" value="<?php if(!empty($detail->faskes_nama)){ echo $detail->faskes_nama;} ?>">
                </div>
                <div class="form-group" style="width: 400px">
                  <label for="exampleInputEmail1">Nama Lengkap Karyawan</label>
                    <input disabled type="text" class="form-control" name="user_nama" placeholder=" Nama Lengkap Karyawan ..." required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity" value="<?php if(!empty($detail->user_nama)){ echo $detail->user_nama;} ?>">
                </div>
                <div class="form-group" style="width: 400px">
                  <label for="exampleInputEmail1">Username</label>
                    <input disabled type="text" class="form-control" name="user_name" placeholder=" Username ..." required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity" value="<?php if(!empty($detail->user_name)){ echo $detail->user_name;} ?>">
                </div>
                <input type="hidden" name="pwd_lama" value="<?php if(!empty($detail->user_password)){ echo $detail->user_password;} ?>">
                <div class="form-group" style="width: 400px">
                  <label for="exampleInputEmail1">Password</label>
                    <input type="Password" class="form-control" name="user_password" placeholder=" Password ..." required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity">
                </div>
                <div class="form-group" style="width: 400px">
                  <label for="exampleInputEmail1">Re-Password</label>
                    <input type="Password" class="form-control" name="user_repassword" placeholder=" Re-Password ..." required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Unggah Foto (User)</label>
                  <br>
                  <?php if(@$detail->user_foto == ""){ ?>
                    <img src="<?php echo base_url('assets/img/avatar.png');?>">
                  <?php }
                  else { ?>
                    <img src="<?php echo base_url();?>assets/upload/user/<?php echo $detail->user_foto;?>" width="100px" style="border:1px solid #c8c7c7;">
                 <?php } ?>
                 <br>  
                  <input type="file" name="user_foto" id="foto_user" style="padding-top: 10px;">                                                             
                </div>  
              </div>

              <div class="box-footer" style="text-align: center;">
                <a href="<?php echo base_url('C_admin/index');?>" style="padding-right: 10px;"><button type="button" class="btn btn-success btn-xs btn-flat"><i class="fa fa-arrow-left"></i> Kembali</button></a>
                <button type="submit" class="btn btn-primary btn-xs btn-flat"><i class="fa fa-save"></i> <?php echo $ket; ?></button>
              </div>

              <?php 
                }
              ?>

            </form>
          </div>
        </div>
      </div>
    </section>