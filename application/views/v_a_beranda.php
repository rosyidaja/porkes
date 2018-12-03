    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Beranda
      </h1>
      <?php if($this->session->flashdata('sukses'))
      {?>
        <br>
        <p style="color: green"><strong><?php echo $this->session->flashdata('sukses'); ?></strong></p>
      <?php } else { ?>
        <p style="color: #a94442"><strong><?php echo $this->session->flashdata('gagal'); ?></strong></p>
      <?php } ?>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <p>Selamat Datang <strong><?php echo $this->session->userdata('user')->user_nama; ?> </strong>di Sistem Admin Portal Kesehatan</p>
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