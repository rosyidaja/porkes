    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $title; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-laptop"></i> Layanan</a></li>
        <li class="active"><?php echo $title; ?></li>
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
              <h3 class="box-title"><?php echo $title; ?></h3>
            </div>
            
            <!-- form start -->
            <form role="form" enctype="multipart/form-data" action="<?php echo base_url()."index.php/C_a_layanan/$aksi";?>" method="POST">
              <div class="box-body">
                <div class="form-group" style="width: 400px">
                <input type="hidden" name="layanan_id" value="<?php if(!empty($detail->layanan_id)){ echo $detail->layanan_id;} ?>">
                </div>
                <div class="form-group" style="width: 400px">
                  <label for="exampleInputEmail1">Judul Layanan</label>
                  <input type="text" class="form-control" name="layanan_judul" value="<?php if(!empty($detail->layanan_judul)){ echo $detail->layanan_judul;} ?>" placeholder=" Judul Layanan ..." required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity">
                </div>
                <div class="box-body" style="padding: 0px">
                  <label for="exampleInputEmail1">Isi Layanan</label>
                  <textarea id="editor1" name="layanan_deskripsi" rows="10" cols="80"><?php if(!empty($detail->layanan_deskripsi)){ echo $detail->layanan_deskripsi;} ?></textarea>
                </div>

                <div class="form-group" style="padding-top: 20px;">
                  <label for="exampleInputFile">Unggah Gambar (Layanan)</label>
                  <br>
                  <?php if(@$detail->layanan_foto == ""){ ?>
                    <img src="<?php echo base_url('assets/img/upload.jpg');?>" width="90px" height="70px" style="padding-left: 5px;">
                  <?php }
                  else { ?>
                    <img src="<?php echo base_url();?>assets/upload/layanan/<?php echo $detail->layanan_foto;?>" width="150px" height="100px" style="border:1px solid #c8c7c7;">
                 <?php } ?>
                 <br>  
                  <input type="file" name="layanan_foto" id="layanan_foto" style="padding-top: 10px;">                                                        
                </div>

               <!--  <div class="form-group" style="padding-top: 20px">
                  <label for="layanan_foto">Unggah Gambar (Layanan)</label>
                  <br><?php if(!empty($detail->layanan_foto)){ echo $detail->layanan_foto;} ?>
                  <input type="file" name="layanan_foto">
                </div>       -->          
              </div>
              <div class="box-footer" style="text-align: center;">
                <a href="<?php echo base_url('C_a_layanan/detail');?>" style="padding-right: 10px;"><button type="button" class="btn btn-success btn-xs btn-flat"><i class="fa fa-arrow-left"></i> Kembali</button></a>
                <button type="submit" class="btn btn-primary btn-xs btn-flat"><i class="fa fa-save"></i> <?php echo $ke; ?></button>
              </div>
            </form>
          </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->