    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Layanan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-laptop"></i> Layanan</a></li>
        <li class="active">Tambah Layanan</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <p style="color: red"><strong><?php echo $this->session->flashdata('pesan'); ?></strong></p>
              <h3 class="box-title">Tambah Layanan</h3>
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
                <div class="form-group" style="padding-top: 20px">
                  <label for="layanan_foto">Unggah Gambar (Layanan)</label>
                  <br><?php echo $detail->layanan_foto; ?>
                  <input type="file" name="layanan_foto">
                </div>                
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary"><?php echo $ke; ?></button>
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