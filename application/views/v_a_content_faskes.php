    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detail Faskes [$nama Fakses]
      </h1>
      <p style="color: red"><strong><?php echo $this->session->flashdata('pesan'); ?></strong></p>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-pie-chart"></i>Faskes</a></li>
        <li class="active">Detail Faskes</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Detail Dokter</h3>
              <button style="float:right;" class="btn-show" data-value="dokter"> Tambah </button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tbl_dokter" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="100" style="text-align: center;">Foto</th>
                  <th style="text-align: center;">Nama</th>
                  <th style="text-align: center;">Telfon</th>
                  <th width="100px" style="text-align: center;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($tabel_dokter as $key => $value) {?>
                  <tr>
                    <td><img src="<?php echo base_url();?>assets/upload/dokter/<?php echo $value->faskesdetdokter_foto;?>" class="img-responsive"></td>
                    <td style="padding-left: 10px"> <?php echo $value->faskesdetdokter_nama;?></td>
                    <td style="padding-left: 10px"> <?php echo $value->faskesdetdokter_telfon;?></td>
                    <td align="center" style="vertical-align: middle;">
                    <i class="fa fa-pencil text-success cursor btn-edit" data-id="<?php echo $value->faskesdetdokter_id; ?>" id="btn_edit"></i>
                    
                    <a href="<?php echo base_url('C_a_faskes/delete/'.$value->faskesdetdokter_id)?>" onclick="return confirm('Anda Yakin Ingin Menghapus <?php echo $value->faskesdetdokter_nama; ?> ? ')"> 
                        <i class="fa fa-trash text-danger cursor btn-delete"></i>
                    </a>
                    </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

         <div class="col-xs-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Detail Poli</h3>
              <button style="float:right;" class="btn-show" data-value="poli"> Tambah </button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tbl_poli" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="100" style="text-align: center;">Kode</th>
                  <th style="text-align: center;">Nama</th>
                  <th width="100px" style="text-align: center;">Aksi</th>
                </tr>
                </thead>
                <tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <div class="row">
        <div class="col-xs-4">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Detail Layanan</h3>
              <button style="float:right;" class="btn-show" data-value="layanan"> Tambah </button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tbl_layanan" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="text-align: center;">Layanan</th>
                  <th width="100px" style="text-align: center;">Aksi</th>
                </tr>
                </thead>
                <tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

         <div class="col-xs-8">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Galeri</h3>
              <button style="float:right;" class="btn-show" data-value="galeri"> Tambah </button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->


      </div>
      <!-- /.row -->

        <!-- Modal -->
        <div id="modal-contentFaskes" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                      <h3> Form Tambah </h3>
                    </div>
                    <div class="modal-body">
                          <!-- form start -->
                        <form role="form" id="form-modal" method="POST" >
                        <div class="box-body">
                            <div class="form-group" style="width: 95%">
                              <input type="hidden" name="param" >
                              <input type="hidden" name="id" >
                              <input type="hidden" name="faskes_id" value="<?php echo $faskes_id; ?>" >
                            </div>
                            <div id="content-isi"></div>    
                        </div>
                          <div class="box-footer" style="float:right;">
                            <button id="btn-cancel" class="btn btn-default">Tutup</button>
                            <button id="submit" type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->