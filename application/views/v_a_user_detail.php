    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar User
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i>User</a></li>
        <li class="active">Daftar User</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr role="row">
                  <th width="100" style="text-align: center;">Username</th>
                  <th width="200px" style="text-align: center;">Level</th>
                  <th width="50px" style="text-align: center;">Status</th>
                  <th width="100px" style="text-align: center;" class="sorting">Aksi</th>
                </tr>
                </thead>
                <?php foreach ($tabel as $key => $value) {?>
                <tbody>
                  <tr>
                    <td><?php echo $value->user_name ?></td>
                    <td><?php echo $value->user_level ?></td>
                    <td align="center"><span class="label label-success">Aktif</span></td>
                    <td align="center"><a href="<?php echo base_url('C_master_user/update_pwd/'.$value->user_id)?>"><button type="button" class="btn btn-primary btn-sm">Ubah</button></a> 
                    <a href="<?php echo base_url('C_master_user/delete/'.$value->user_id)?>"><button type="button" class="btn btn-danger btn-sm">Hapus</button></td></a>
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