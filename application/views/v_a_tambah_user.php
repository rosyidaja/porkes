    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah User
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i> Master User</a></li>
        <li class="active">Tambah User</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <p style="color: red"><strong><?php echo $this->session->flashdata('pesan'); ?></strong></p>
              <h3 class="box-title">Tambah User</h3>
            </div>
            
            <!-- form start -->
            <form role="form" action="<?php echo base_url('C_master_user/'.$aksi);?>" method="post">
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
                <div class="form-group" style="width: 400px">
                  <label for="exampleInputEmail1">Password</label>
                  <input type="Password" class="form-control" name="user_password" placeholder=" Password ..." required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity">
                </div>
                <div class="form-group" style="width: 400px">
                  <label for="exampleInputEmail1">Re-Password</label>
                  <input type="Password" class="form-control" name="user_repassword" placeholder=" Re-Password ..." required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity">
                </div>
                <div class="form-group">
                  <label class="form-label">Foto :</label>
                  <br>
                  <?php if(@$karyawan->foto == ""){ ?>
                    <img src="<?php echo base_url('assets/img/avatar.png');?>">
                  <?php }
                  else { ?>
                    <img src="<?php echo base_url();?>assets/img/<?php echo @$karyawan->foto;?>" width="100px" style="border:1px solid #c8c7c7;">
                 <?php } ?>
                 <br>  
                  <input type="file" style="padding-top: 10px;" name="file_upload"/>                                                                
                </div>   
                <div class="form-group">
                  <label>Level</label>
                    <select class="form-control select2" style="width: 145px;" name="user_level" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity">
                      <option>--- Pilih Level ---</option>
                      <option>Admin</option>
                      <option>Super Admin</option>
                    </select>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary"><?php echo $ket; ?></button>
              </div>
            </form>
          </div>
        </div>
            <!-- /.box-body -->
      </div>
          <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->