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
              <p style="color: red"><strong><?php echo $this->session->flashdata('pesan'); ?></strong></p>
              <h3 class="box-title">Tambah Faskes</h3>
            </div>
            
            <!-- form start -->
            <form role="form" enctype="multipart/form-data" action="<?php echo base_url()."index.php/C_a_faskes/$aksi";?>" method="POST">
              <div class="box-body">
                <div class="form-group" style="width: 400px">
                  <input type="hidden" name="faskes_id" value="<?php if(!empty($detail->faskes_id)){ echo $detail->faskes_id;} ?>">
                </div>
                <div class="form-group" style="width: 400px">
                  <label for="exampleInputEmail1">Nama Faskes</label>
                  <input type="text" class="form-control" required="" name="nama_faskes" value="<?php if(!empty($detail->faskes_nama)){ echo $detail->faskes_nama;} ?>"  placeholder=" Nama Faskes ...">
                </div>
                <div class="form-group" style="width: 400px">
                  <label for="exampleInputEmail1">Alamat Faskes</label>
                  <input type="text" class="form-control" required="" name="alamat_faskes" value="<?php if(!empty($detail->faskes_alamat)){ echo $detail->faskes_alamat;} ?>" placeholder=" Alamat Faskes ...">
                </div>
                <div class="form-group">
                  <label>Provinsi</label>
                    <select class="form-control" style="width: 200px;" name="provinsi">
                    <?php if(!empty($detail->faskes_provinsi_id)){
                       echo '<option value="'.$detail->faskes_provinsi_id.'">'.$detail->propinsi_nama.'</option>';
                       } ?>
                    </select>
                </div>
                <div class="form-group">
                  <label>Kota</label>
                    <select class="form-control" name="kota" style="width: 200px;">
                    </select>
                </div>
                <div class="form-group">
                  <label>Kecamatan</label>
                    <select class="form-control" name="kecamatan" style="width: 200px;">
                    </select>
                </div>
                <div class="form-group">
                  <label>Kelurahan</label>
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
                <div class="form-group" style="padding-top: 20px">
                  <label for="exampleInputFile">Unggah Background (Faskes)</label>
                  <input type="file" name="faskes_background" id="bg_faskes">
                </div>
                <div class="form-group" style="padding-top: 20px">
                  <label for="exampleInputFile">Unggah Logo (Faskes)</label>
                  <input type="file" name="faskes_foto" id="foto_faskes">
                </div>
                <div class="form-group">
                  <label>Status</label>
                    <select class="form-control" name="faskes_status" style="width: 110px;">
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
              <div class="box-footer">
                <button type="submit" class="btn btn-primary"><?php echo $ke; ?></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

   