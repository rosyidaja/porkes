<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Porkes</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/font-awesome.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/bootstrap.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/style.css');?>">
  <!-- =======================================================
    Theme Name: Medilab
    Theme URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!--banner-->
  <section id="banner" class="banner">
    <div class="bg-color">
      <!-- navbar -->
        <?php $this->load->view($navbar); ?>

      <!-- /navbar -->
        <?php $this->load->view($maps); ?>

  </section>
  <!--/ banner-->

  <!--service-->
  <?php $this->load->view($artikel); ?>
  <!--/ service-->
  
  <!--about-->
  <?php $this->load->view($layanan); ?>
  <!--/ about-->

  <!--testimonial-->
  <?php $this->load->view($faskes); ?>
  <!--/ testimonial-->

  <!--footer-->
  <?php $this->load->view($footer); ?>
  <!--/ footer-->

  <script src="<?php echo base_url('/assets/js/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('/assets/js/jquery.easing.min.js');?>"></script>
  <script src="<?php echo base_url('/assets/js/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
  <script src="<?php echo base_url('/assets/contactform/contactform.js');?>"></script>

</body>

</html>
