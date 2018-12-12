<section id="artikel" class="section-padding" style="background-color: darkcyan;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title" style="color: white;">Artikel</h2>
          <hr class="botm-line">
        </div>

        <?php foreach ($tabel as $key => $value) {?>
          <?php if($value->artikel_status = "P") {?>
        <div class="list-artikel col-md-3 col-sm-3 col-xs-6">
          <div class="panel-group">
            <div class="panel panel-success" style="height: 390px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px;">
              <div class="panel-body">
                <div class="thumbnail" style="margin-bottom: 0px;">
                  <img src="<?php echo base_url();?>assets/upload/artikel/<?php echo $value->artikel_foto;?>" class="team-img" style="height: 150px; width: 200px;">
                </div>
              </div>
              <div class="panel-body" style="padding-top: 0px; height: 210px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px;">
                <div class="col-md-12" style="height: 180px;">
                  <div class="caption" style="height: 30px;">
                    <h5 style="text-align: center;"><?php echo $value->artikel_judul ?></h5>
                  </div>
                  <div style="padding-top: 10px;">
                    <p><?php echo substr($value->artikel_isi,0,100)." .." ?></p>
                  </div>
                </div>
                <!-- <div class="pull-right box-button-footer">
                  <a href="<?php echo base_url('C_artikel/detail_artikel/'.$value->artikel_id)?>" class="botm-line"><button type="button" class="btn btn-success btn-xs btn-flat"> Lihat Detail <i class="fa fa-arrow-circle-right"></i></button></a>
                </div> -->
              </div>
            </div>
            <div id="footer" class="footer" style="border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;">
              <a href="<?php echo base_url().'C_artikel/detail_artikel/'.$value->artikel_id;?>" class="small-box-footer"><button type="button" class="btn btn-success btn-xs btn-block" style="border-top-right-radius: 0px; border-top-left-radius: 0px;"> Lihat Detail <i class="fa fa-arrow-circle-right"></i></button></a>
            </div>
          </div>
        </div>
      <?php } else {?>
        <?php }?>
      <?php }?>
        <div class="box-footer pull-right" style="padding-right: 15px;">
          <a href="<?php echo base_url().'C_artikel/list_artikel';?>" class="uppercase"><button type="button" class="btn btn-warning btn-xs btn-block">Lihat Semua <i class="fa fa-arrow-circle-right"></i></button></a>
        </div>
    </div>
  </div>
</section>