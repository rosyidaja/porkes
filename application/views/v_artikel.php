<section id="artikel" class="section-padding" style="background-color: darkcyan;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Artikel</h2>
          <hr class="botm-line">
        </div>

        <?php foreach ($tabel as $key => $value) {?>
          <div class="list-artikel col-md-3 col-sm-3 col-xs-6">
          <div class="panel-group">
            <div class="panel panel-success">
              <div class="panel-body">
                <div class="thumbnail">
                  <img src="<?php echo base_url();?>assets/upload/artikel/<?php echo $value->artikel_foto;?>" class="team-img" style="height: 150px; width: 200px;">
                </div>
              </div>
              <div class="panel-body" style="padding-top: 0px; height: 250px;">
                <div class="col-md-12" style="height: 220px;">
                  <div class="caption" style="height: 50px;">
                    <h5 style="text-align: center;"><?php echo $value->artikel_judul ?></h5>
                  </div>
                  <p><?php echo substr($value->artikel_isi,0,100)." .." ?></p>
                </div>
                <div class="pull-right box-button-footer">
                  <a href="<?php echo base_url('C_artikel/detail_artikel/'.$value->artikel_id)?>" class="botm-line"><button type="button" class="btn btn-success btn-xs btn-flat"> Lihat Detail <i class="fa fa-arrow-circle-right"></i></button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php }?>
        <div class="box-footer pull-right" style="padding-right: 15px;">
          <a href="<?php echo base_url().'C_artikel/list_artikel';?>" class="uppercase"><button type="button" class="btn btn-primary btn-xs btn-block">Lihat Semua <i class="fa fa-arrow-circle-right"></i></button></a>
        </div>
    </div>
  </div>
</section>