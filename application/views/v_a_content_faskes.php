    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detail Faskes <?php echo $faskes_nama; ?>
      </h1>
      <p style="color: red"><strong><?php echo $this->session->flashdata('pesan'); ?></strong></p>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>C_a_faskes/detail"><i class="fa fa-pie-chart"></i>Faskes</a></li>
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
                    <i class="fa fa-pencil text-success cursor btn-edit" style="cursor:pointer;" data-param="dokter" data-id="<?php echo $value->faskesdetdokter_id; ?>"></i>
                    <i class="fa fa-trash text-danger cursor btn-delete" style="cursor:pointer;" data-param="dokter" data-id="<?php echo $value->faskesdetdokter_id; ?>"></i>
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
                <?php foreach ($tabel_poli as $key => $val_poli) {?>
                  <tr>
                    <td style="padding-left: 10px"> <?php echo $val_poli->faskesdetpoli_kode;?></td>
                    <td style="padding-left: 10px"> <?php echo $val_poli->faskesdetpoli_nama;?></td>
                    <td align="center" style="vertical-align: middle;">
                    <i class="fa fa-pencil text-success cursor btn-edit" style="cursor:pointer;" data-param="poli" data-id="<?php echo $val_poli->faskesdetpoli_id; ?>"></i>
                    <i class="fa fa-trash text-danger cursor btn-delete" style="cursor:pointer;" data-param="poli" data-id="<?php echo $val_poli->faskesdetpoli_id; ?>"></i>
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
                <?php foreach ($tabel_layanan as $key => $val_poli) {?>
                  <tr>
                    <td style="padding-left: 10px"> <?php echo $val_poli->faskesdetlayanan_nama;?></td>
                    <td align="center" style="vertical-align: middle;">
                    <i class="fa fa-pencil text-success cursor btn-edit" style="cursor:pointer;" data-param="layanan" data-id="<?php echo $val_poli->faskesdetlayanan_id; ?>"></i>
                    <i class="fa fa-trash text-danger cursor btn-delete" style="cursor:pointer;" data-param="layanan" data-id="<?php echo $val_poli->faskesdetlayanan_id; ?>"></i>
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

         <div class="col-xs-8">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Galeri</h3>
              <button style="float:right;" class="btn-show" data-value="galeri"> Tambah </button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                 <?php foreach ($tabel_galeri as $key => $val_galeri) {?>
                  <div class="col-xs-3">
                      <button type="button" data-param="galeri" data-id="<?php echo $val_galeri->faskesdetgaleri_id; ?>" class="close del_galeri">&times;</button>
                      <img src="<?php echo base_url();?>assets/upload/galeri/<?php echo $val_galeri->faskesdetgaleri_foto;?>" class="img-responsive">
                    </div>
                <?php } ?>
                    
                    
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
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
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