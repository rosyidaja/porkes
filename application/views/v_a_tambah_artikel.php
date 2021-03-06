    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $title; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i> Artikel</a></li>
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
            <form role="form" enctype="multipart/form-data" action="<?php echo base_url()."index.php/C_a_artikel/$aksi";?>" method="POST">
              <div class="box-body">
                <div class="form-group" style="width: 400px">
                <input type="hidden" name="artikel_id" value="<?php if(!empty($detail->artikel_id)){ echo $detail->artikel_id;} ?>">
                </div>
                <div class="form-group" style="width: 400px">
                  <label for="exampleInputEmail1">Judul Artikel</label>
                  <input type="text" class="form-control" name="artikel_judul" value="<?php if(!empty($detail->artikel_judul)){ echo $detail->artikel_judul;} ?>" placeholder=" Judul Artikel ..." required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity">
                </div>
                <div class="box-body" style="padding: 0px">
                  <label for="exampleInputEmail1">Isi Artikel</label>
                  <textarea id="editor1" name="artikel_isi" rows="10" cols="80"><?php if(!empty($detail->artikel_isi)){ echo $detail->artikel_isi;} ?></textarea>
                </div>
            <!-- /.box-header -->
                <div class="form-group" style="padding-top: 20px;">
                  <label for="exampleInputFile">Unggah Gambar (Artikel)</label>
                  <br>
                  <?php if(@$detail->artikel_foto == ""){ ?>
                    <img src="<?php echo base_url('assets/img/upload.jpg');?>" width="90px" height="70px" style="padding-left: 5px;">
                  <?php }
                  else { ?>
                    <img src="<?php echo base_url();?>assets/upload/artikel/<?php echo $detail->artikel_foto;?>" width="150px" height="100px" style="border:1px solid #c8c7c7;">
                 <?php } ?>
                 <br>  
                  <input type="file" name="artikel_foto" id="artikel_foto" style="padding-top: 10px;">                                                        
                </div>

                <!-- div class="form-group" style="padding-top: 20px">
                  <label for="exampleInputFile">Unggah Gambar (Artikel)</label>
                  <br><?php if(!empty($detail->artikel_foto)){ echo $detail->artikel_foto;} ?>
                  <input type="file" name="artikel_foto" id="artikel_foto">
                </div> -->
                <div class="form-group">
                  <label>Status</label>
                    <select class="form-control select2" style="width: 100px;" name="artikel_status">
                      <option selected="selected">Publish</option>
                      <option>Draft</option>
                    </select>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer" style="text-align: center;">
                <a href="<?php echo base_url('C_a_artikel/detail');?>" style="padding-right: 10px;"><button type="button" class="btn btn-success btn-xs btn-flat"><i class="fa fa-arrow-left"></i> Kembali</button></a>
                <button type="submit" class="btn btn-primary btn-xs btn-flat"><i class="fa fa-save"></i> <?php echo $ke; ?></button>
              </div>
              <!-- <div class="box-footer">
                <button type="submit" class="btn btn-primary"></button>
              </div> -->
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