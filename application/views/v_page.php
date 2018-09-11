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
        <?php $this->load->view($navbar); ?>
        <!-- /navbar -->
          <!--service-->
  <?php $this->load->view($list_artikel); ?>
  <!--/ service-->
  </section>
  <!--/ banner-->



  <!--footer-->
  <?php $this->load->view($footer); ?>
  <!--/ footer-->

  <!-- bottom_resource -->
  <?php $this->load->view($bottom_resource); ?>
  <!-- /bottom_resource -->
</body>

</html>
