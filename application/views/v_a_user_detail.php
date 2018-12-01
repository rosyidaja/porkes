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
                <p style="color: #a94442;"><strong><?php echo $this->session->flashdata('gagal'); ?></strong></p>
              <?php } ?>
              <div style="color: #fff; background-color: #00c0ef; background: #00a65a; padding-bottom: 5px; padding-top: 5px; padding-left: 5px;">
              <h3 class="box-title"><?php echo $title; ?></h3>
              </div>
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
                    <td style="vertical-align: middle; text-align: center;"><?php echo $value->user_name ?></td>
                    <td style="vertical-align: middle; text-align: center;">
                      <?php if(@$value->user_level == "0"){ ?>
                        <?php echo ('Admin'); ?>
                      <?php }
                      else { ?>
                        <?php echo ('Super Admin'); ?>
                      <?php } ?>
                    </td>
                    <td style="vertical-align: middle; text-align: center;"><span class="label label-success">Aktif</span></td>
                    <td style="vertical-align: middle; text-align: center;">
                      <a href="<?php echo base_url('C_master_user/update/'.$value->user_id)?>">
                        <i class="fa fa-edit text-success btn-sm btn-edit" name="edit" data-toggle="tooltip" data-placement="top" title="Edit"></i>
                      </a>
                      <a href="<?php echo base_url('C_master_user/delete/'.$value->user_id)?>" onclick="return confirm('Anda Yakin Ingin Menghapus <?php echo $value->user_nama; ?> ? ')"> 
                       <!-- <i class="fa fa-trash text-danger cursor btn-delete" style="padding-right: 15px;"></i> -->
                        <i class="fa fa-trash text-danger cursor btn-delete" name="hapus" style="padding-right: 15px;" data-toggle="tooltip" data-placement="top" title="Hapus"></i>
                    </a>
                  </td>
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