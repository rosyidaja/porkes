<section id="doctor-team" class="secton-padding"  style="background-color:#eff3f8;">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <div class="panel">
          <div class="panel-body">
            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <h3><?php echo $detail->artikel_judul ?></h3>
                <div class="col-md-4" style="margin-left: 350px" >
                  <img src="<?php echo base_url();?>assets/upload/artikel/<?php echo $detail->artikel_foto;?>" class="img-responsive" style="border:1px solid #c8c7c7;">
                </div>
                <div class="col-md-11" style="padding-top: 20px">
                  <p><?php echo $detail->artikel_isi ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>