    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Artikel
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i>Artikel</a></li>
        <li class="active">Daftar Artikel</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Artikel</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr role="row">
                  <th width="100" style="text-align: center;">Gambar</th>
                  <th width="200px" style="text-align: center;">Judul</th>
                  <th style="text-align: center;">Isi</th>
                  <th width="50px" style="text-align: center;">Status</th>
                  <th width="100px" style="text-align: center;" class="sorting">Aksi</th>
                </tr>
                </thead>
                <?php foreach ($tabel as $key => $value) {?>
                <tbody>
                <tr>
                  <td><?php echo $value->artikel_foto ?></td>
                  <!-- <img src="<?php echo $value->artikel_foto ?>" class="img-responsive"> -->
                  <td><?php echo $value->artikel_judul ?></td>
                  <td><?php echo $value->artikel_isi ?></td>
                  <td align="center"><span class="label label-success">Publish</span></td>
                  <td align="center"><a href="<?php echo base_url('C_a_artikel_detail/update/'.$value->artikel_id)?>"><button type="button" class="btn btn-primary btn-sm" name="edit">Ubah</button> </a>
                    <a href="<?php echo base_url('C_a_artikel_detail/delete/'.$value->artikel_id)?>"
        onclick="return confirm('Anda Yakin Ingin Menghapus <?php echo $value->artikel_judul; ?> ? ')"> <button type="button" class="btn btn-danger btn-sm" name="hapus">Hapus</button></td></a>
                </tr>
              </tbody>
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