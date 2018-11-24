<footer id="footer">
    <div class="top-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">About Us</h4>
            </div>
            <div class="info-sec">
              <p>Program website ini masih dalam Prototype masih butuh waktu untuk pengembangan lebih lanjut.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Quick Links</h4>
            </div>
            <div class="info-sec">
              <ul class="quick-info">
                <li><a href="<?php echo base_url().'index.php/c_home' ?>"><i class="fa fa-circle"></i>Home</a></li>
                <li><a href="<?php echo base_url().'index.php/c_artikel'?>"><i class="fa fa-circle"></i>Artikel</a></li>
                <li><a href="<?php echo base_url().'index.php/c_faskes' ?>"><i class="fa fa-circle"></i>Fasilitas Kesehatan</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Follow us</h4>
            </div>
            <div class="info-sec">
              <ul class="social-icon">
                <li class="bglight-blue"><i class="fa fa-facebook"></i></li>
                <li class="bgred"><i class="fa fa-google-plus"></i></li>
                <li class="bgdark-blue"><i class="fa fa-linkedin"></i></li>
                <li class="bglight-blue"><i class="fa fa-twitter"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-line">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">© Copyright <a href="<?php echo base_url('C_login/index') ?>">Porkes</a>. All Rights Reserved
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="<?php echo base_url('/assets/js/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('/assets/js/jquery.easing.min.js');?>"></script>
  <script src="<?php echo base_url('/assets/js/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
  <script src="<?php echo base_url('/assets/js/sweetalert.min.js');?>"></script>
  <script src="<?php echo base_url('/assets/contactform/contactform.js');?>"></script>
  <script src="<?php echo base_url('bower_components/datatables.net/js/jquery.dataTables.min.js');?>"></script>
  <script src="<?php echo base_url('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js');?>"></script>
  
  <script>
  $(function () {
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });
  });
  var header = '';
  var msg = '';
  var status = '';
  <?php 
    if($this->session->flashdata('notification') !== null){      
      $notif = $this->session->flashdata('notification'); 
      echo " header = '".$notif['header']."';";
      echo " msg = '".$notif['message']."';";
      echo " status = '".$notif['status']."';";
   ?>
      console.log('notif');
      sweet(status,msg,header);
    <?php }else{ ?>
      console.log('none');
    <?php } ?>
  
  function sweet(header,msg,status){
    swal(header,msg,status);
  }
  </script>
