<!DOCTYPE html>
<html lang="en">

  <!-- head-top-resource -->
  <?php $this->load->view($head_top_resource); ?>
  <!-- /head-top-resource -->

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!--banner-->
  <section id="banner" class="banner">
    <div class="bg-color">
      <!-- navbar -->
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo base_url('C_home/index'); ?>"><img src="<?php echo base_url('assets/img/logo.png');?>" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class=""><a href="<?php echo base_url().'C_artikel/list_artikel'; ?>">Artikel</a></li>
                <!-- <li class=""><a href="<?php echo base_url().'C_layanan'; ?>">Layanan</a></li> -->
                <li class=""><a href="<?php echo base_url().'C_faskes'; ?>">Faskes</a></li>
                <!-- <li class=""><a href="#contact">Contact</a></li> -->
              </ul>
            </div>
          </div>
        </div>
      </nav>
        <!-- /navbar -->
  </section>
    <div class="sweet-overlay"></div>
        <!-- SweetAlert box -->
  <div class="sweet-alert">
  
  <div class="icon error">
      <span class="x-mark">
          <span class="line left"></span>
          <span class="line right"></span>
      </span>
  </div>

  <div class="icon warning">
      <span class="body"></span>
      <span class="dot"></span>
  </div>

  <div class="icon info"></div>

  <div class="icon success">
      <span class="line tip"></span>
      <span class="line long"></span>
      <div class="placeholder"></div>
      <div class="fix"></div>
  </div>

  <div class="icon custom"></div>
          <!--service-->
          <?php $this->load->view($content); ?>
          <!--/ service-->
  <!--/ banner-->


  <!--footer-->
  <?php $this->load->view($footer); ?>
  <!--/ footer-->

  <?php
  if(isset($js)){
      $this->load->view($js);
  }
  ?>

  <!-- bottom_resource -->
  <?php $this->load->view($bottom_resource); ?>
  <!-- /bottom_resource -->
</body>

</html>
