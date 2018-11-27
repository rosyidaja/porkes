    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Fasilitas Kesehatan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-pie-chart"></i> Faskes</a></li>
        <li class="active">Tambah Faskes</li>
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
                <p style="color: red"><strong><?php echo $this->session->flashdata('gagal'); ?></strong></p>
              <?php } ?>
              <h3 class="box-title">Tambah Faskes</h3>
            </div>
            
            <!-- form start -->
            <form role="form" enctype="multipart/form-data" action="<?php echo base_url()."index.php/C_a_faskes/$aksi";?>" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <input type="hidden" name="faskes_id" value="<?php if(!empty($detail->faskes_id)){ echo $detail->faskes_id;} ?>"  style="width: 400px">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Faskes</label>
                  <input type="text" class="form-control" required="" name="nama_faskes" value="<?php if(!empty($detail->faskes_nama)){ echo $detail->faskes_nama;} ?>"  placeholder=" Nama Faskes ..."  style="width: 400px">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat Faskes</label>
                  <input type="text" class="form-control" required="" name="alamat_faskes" value="<?php if(!empty($detail->faskes_alamat)){ echo $detail->faskes_alamat;} ?>" placeholder=" Alamat Faskes ..." style="width: 400px">
                </div>
                <div class="form-group">
                  <label style="width: 100px;">Provinsi</label>
                    <select class="form-control" style="width: 200px;" name="provinsi">
                    <?php if(!empty($detail->faskes_provinsi_id)){
                       echo '<option value="'.$detail->faskes_provinsi_id.'">'.$detail->propinsi_nama.'</option>';
                       } ?>
                    </select>
                </div>
                <div class="form-group">
                  <label style="width: 100px;">Kota</label>
                    <select class="form-control" name="kota" style="width: 200px;">
                    </select>
                </div>
                <div class="form-group">
                  <label style="width: 100px;">Kecamatan</label>
                    <select class="form-control" name="kecamatan" style="width: 200px;">
                    </select>
                </div>
                <div class="form-group">
                  <label style="width: 100px;">Kelurahan</label>
                    <select class="form-control" style="width: 200px;" name="kelurahan">
                    </select>
                </div>
                <div class="form-group" style="width: 400px">
                  <label for="exampleInputEmail1">Lokasi</label>
                  <input type="text" class="form-control" value="<?php if(!empty($detail->faskes_lokasi)){ echo $detail->faskes_lokasi;} ?>"  name="lokasi_faskes" placeholder=" Lokasi ...">
                </div>
                <div class="form-group" style="width: 400px">
                  <label for="exampleInputEmail1">Latitude</label>
                  <input type="text" class="form-control" name="latitude_faskes" value="<?php if(!empty($detail->faskes_latitude)){ echo $detail->faskes_latitude;} ?>" placeholder=" Latitude ...">
                </div>
                <div class="form-group" style="width: 400px">
                  <label for="exampleInputEmail1">Longitude</label>
                  <input type="text" class="form-control" name="longitude_faskes" value="<?php if(!empty($detail->faskes_longitude)){ echo $detail->faskes_longitude;} ?>" placeholder=" Longitude ...">
                </div>
                <div class="form-group" style="padding-top: 20px;">
                  <label for="exampleInputFile">Unggah Background (Faskes)</label>
                  <br>
                  <?php if(@$detail->faskes_background == ""){ ?>
                    <img src="<?php echo base_url('assets/img/upload.jpg');?>" width="90px" height="70px" style="padding-left: 5px;">
                  <?php }
                  else { ?>
                    <img src="<?php echo base_url();?>assets/upload/faskes/<?php echo $detail->faskes_background;?>" width="150px" height="100px" style="border:1px solid #c8c7c7;">
                 <?php } ?>
                 <br>  
                  <input type="file" name="faskes_background" id="bg_faskes" style="padding-top: 10px;">                                                  
                </div>
                <!-- <div class="form-group" style="padding-top: 20px">
                  <label for="exampleInputFile">Unggah Background (Faskes)</label>
                  <input type="file" name="faskes_background" id="bg_faskes">
                </div> -->
                <div class="form-group" style="padding-top: 20px;">
                  <label for="exampleInputFile">Unggah Logo (Faskes)</label>
                  <br>
                  <?php if(@$detail->faskes_foto == ""){ ?>
                    <img src="<?php echo base_url('assets/img/upload.jpg');?>" width="90px" height="70px" style="padding-left: 5px;">
                  <?php }
                  else { ?>
                    <img src="<?php echo base_url();?>assets/upload/faskes/<?php echo $detail->faskes_foto;?>" width="150px" height="100px" style="border:1px solid #c8c7c7;">
                 <?php } ?>
                 <br>  
                  <input type="file" name="faskes_foto" id="foto_faskes" style="padding-top: 10px;">                                                  
                </div>
                <!-- <div class="form-group" style="padding-top: 20px">
                  <label for="exampleInputFile">Unggah Logo (Faskes)</label>
                  <input type="file" name="faskes_foto" id="foto_faskes">
                </div> -->
                <div class="form-group">
                  <label>Status</label>
                    <select class="form-control" name="faskes_status" style="width: 160px;">
                    <?php 
                    if(!empty($detail->faskes_status)){ 
                        if($detail->faskes_status == 'Belum Terverifikasi'){ ?>
                             <option selected="selected">Belum Terverifikasi</option>
                             <option>Sudah Terverifikasi</option>
                      <?php  }else{ ?>
                              <option >Belum Terverifikasi</option>
                             <option selected="selected">Sudah Terverifikasi</option>
                        <?php }
                      }else{ ?>
                           <option selected="selected">Belum Terverifikasi</option>
                            <option>Sudah Terverifikasi</option>
                      <?php } 
                    ?>
                     
                    </select>
                </div>
              </div>
              <div class="box-footer" style="text-align: center;">
                <a href="<?php echo base_url('C_a_faskes/detail');?>" style="padding-right: 10px;"><button type="button" class="btn btn-success btn-xs btn-flat"><i class="fa fa-arrow-left"></i> Kembali</button></a>
                <button type="submit" class="btn btn-primary btn-xs btn-flat"><i class="fa fa-save"></i> <?php echo $ke; ?></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

   