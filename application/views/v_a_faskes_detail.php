    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Fasilitas Kesehatan
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>C_a_faskes/detail"><i class="fa fa-pie-chart"></i>Faskes</a></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <p style="color: red"><strong><?php echo $this->session->flashdata('pesan'); ?></strong></p>
              <h3 class="box-title">Daftar Faskes</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="100" style="text-align: center;">Gambar</th>
                  <th style="text-align: center;">Isi</th>
                  <th style="text-align: center;">Status</th>
                  <th width="100px" style="text-align: center;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($tabel as $key => $value) {?>
                  <tr>
                    <td style="vertical-align: middle;"><img src="<?php echo base_url();?>assets/upload/faskes/<?php echo $value->faskes_foto;?>" class="img-responsive"></td>
                    <td>
                      <table>
                      <tr>
                        <td style="padding-left: 20px"> <strong>Nama Faskes </strong> </td>
                        <td style="padding-left: 10px"> : </td>
                        <td style="padding-left: 10px"> <?php echo $value->faskes_nama;?></td>
                      </tr>
                      <tr>
                        <td style="padding-left: 20px"> <strong>Alamat </strong> </td>
                        <td style="padding-left: 10px"> : </td>
                        <td style="padding-left: 10px"><?php echo $value->faskes_alamat;?></td>
                      </tr>
                      <tr>
                        <td style="padding-left: 20px"> <strong>Layanan </strong> </td>
                        <td style="padding-left: 10px"> : </td>
                        <td style="padding-left: 10px"> <?php echo $value->faskesdetlayanan_nama;?></td>
                      </tr>
                      <tr>
                        <td style="padding-left: 20px"> <strong>Poli </strong> </td>
                        <td style="padding-left: 10px"> : </td>
                        <td style="padding-left: 10px"> <?php echo $value->faskesdetpoli_nama;?> </td>
                      </tr>
                      <tr>
                        <td style="padding-left: 20px"> <strong>Lokasi </strong> </td>
                        <td style="padding-left: 10px"> : </td>
                        <td style="padding-left: 10px"> <?php echo $value->faskes_lokasi;?></td>
                      </tr>
                      <tr>
                        <td style="padding-left: 20px"> <strong>Provinsi </strong> </td>
                        <td style="padding-left: 10px"> : </td>
                        <td style="padding-left: 10px"><?php echo $value->propinsi_nama;?></td>
                      </tr>
                    </table>
                    </td>
                    <td align="center" style="vertical-align: middle;"><span class="label label-success"><?php echo $value->faskes_status;?></span></td>
                    <td align="center" style="vertical-align: middle;">
                    <a href="<?php echo base_url('C_a_faskes/content/'.$value->faskes_id)?>">
                      <i class="fa fa-search text-success cursor btn-edit" style="padding-right: 15px;"></i>
                    </a>
                    <a href="<?php echo base_url('C_a_faskes/update/'.$value->faskes_id)?>">
                      <i class="fa fa-edit text-success cursor btn-edit" style="padding-right: 15px;"></i>
                    </a>
                    <a href="<?php echo base_url('C_a_faskes/delete/'.$value->faskes_id)?>" onclick="return confirm('Anda Yakin Ingin Menghapus <?php echo $value->faskes_nama; ?> ? ')"> 
                        <i class="fa fa-trash text-danger cursor btn-delete" style="padding-right: 15px;"></i>
                    </a>
                    </td>
                  </tr>
                <?php }?>
              </table>
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