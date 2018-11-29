    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $title; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i>User</a></li>
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
                <p style="color: black"><strong><?php echo $this->session->flashdata('gagal'); ?></strong></p>
              <?php } ?>
              <h3 class="box-title"><?php echo $title; ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr role="row">
                  <th width="100px" style="text-align: center;">Foto</th>
                  <th width="100" style="text-align: center;">Username</th>
                  <th width="200px" style="text-align: center;">Level</th>
                  <th width="50px" style="text-align: center;">Status</th>
                  <th width="100px" style="text-align: center;" class="sorting">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($tabel as $key => $value) {?>
                  <tr>
                    <td align="center">
                   <img src="<?php echo base_url();?>assets/upload/user/<?php echo $value->user_foto;?>" width="100px" height="100px" style="border:1px solid #c8c7c7;"></td>
                    <td><?php echo $value->user_name ?></td>
                    <td><?php echo $value->user_level ?></td>
                    <td align="center"><span class="label label-success">Aktif</span></td>
                    <td align="center"><a href="<?php echo base_url('C_master_user/update/'.$value->user_id)?>"><button type="button" class="btn btn-primary btn-sm">Ubah</button></a> 
                    <a href="<?php echo base_url('C_master_user/delete/'.$value->user_id)?>"><button type="button" class="btn btn-danger btn-sm">Hapus</button></a></td>
                  </tr>
                <?php }?>
                </tbody>
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