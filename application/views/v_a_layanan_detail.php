    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Layanan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-laptop"></i>Layanan</a></li>
        <li class="active">Daftar Layanan</li>
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
              <h3 class="box-title">Daftar Layanan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="100" style="text-align: center;">Gambar</th>
                  <th style="text-align: center;">Judul</th>
                  <th style="text-align: center;">Isi</th>
                  <th width="100px" style="text-align: center;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($tabel as $key => $value) {?>
                <tr>
                  <td>
                   <img src="<?php echo base_url();?>assets/upload/layanan/<?php echo $value->layanan_foto;?>" width="100px" height="100px" style="border:1px solid #c8c7c7;"></td>
                  <td style="vertical-align: middle;"><?php echo $value->layanan_judul ?></td>
                  <td><?php echo $value->layanan_deskripsi ?></td>
                  <td align="center" style="vertical-align: middle;">
                    <a href="<?php echo base_url('C_a_layanan/update/'.$value->layanan_id)?>">
                      <i class="fa fa-edit text-success btn-sm btn-edit" name="edit" data-toggle="tooltip" data-placement="top" title="Edit"></i>
                    </a>
                    <a href="<?php echo base_url('C_a_layanan/delete/'.$value->layanan_id)?>" onclick="return confirm('Anda Yakin Ingin Menghapus <?php echo $value->layanan_judul; ?> ? ')">
                      <i class="fa fa-trash text-danger cursor btn-delete" name="hapus" style="padding-right: 15px;" data-toggle="tooltip" data-placement="top" title="Hapus"></i>
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