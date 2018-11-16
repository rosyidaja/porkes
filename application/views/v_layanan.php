<section id="layanan" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="ser-title">Layanan</h2>
        <hr class="botm-line">
      </div>
    </div>
    <div class="row">
      <?php foreach ($tabel1 as $key => $value) {?>
      <div class="col-md-4 col-sm-4">
        <div class="service-info" align="center">
            <img src="<?php echo base_url();?>assets/upload/layanan/<?php echo $value->layanan_foto;?>" class="img-responsive" style="height: 150px; width: 150px;">
          <div class="icon-info">
            <h4><?php echo $value->layanan_judul ?></h4>
            <p><?php echo $value->layanan_deskripsi ?></p>
          </div>
        </div>
      </div>
      <?php }?>
    </div>
  </div>
</section>