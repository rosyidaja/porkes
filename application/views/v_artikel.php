<section id="artikel" class="section-padding">
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
                  <img src="<?php echo base_url();?>assets/upload/artikel/<?php echo $value->artikel_foto;?>" class="team-img" style="height: 200px; width: 250px;">
                </div>
              </div>
              <div class="panel-body" style="padding-top: 0px;">
                <div class="col-md-12">
                  <div class="caption">
                    <h4><?php echo $value->artikel_judul ?></h4>
                  </div>
                  <p><?php echo $value->artikel_isi ?></p>
                  <div class="pull-right">
                    <a href="<?php echo base_url('C_artikel/detail_artikel/'.$value->artikel_id)?>"><button type="button" class="btn btn-success btn-xs btn-flat"> Lihat Detail <i class="fa fa-arrow-circle-right"></i></button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php }?>
        <div class="box-footer pull-right" style="padding-right: 15px;">
          <a href="<?php echo base_url().'C_artikel/list_artikel';?>" class="uppercase"><button type="button" class="btn btn-primary btn-xs btn-block">Lihat Semua <i class="fa fa-arrow-circle-right"></i></button></a>
        </div>

        <!-- <div class="list-artikel">
          <table>
            <div class="col-md-3 col-sm-3 col-xs-6">
              <div class="thumbnail">
                <img src="<?php echo base_url();?>assets/upload/artikel/<?php echo $value->artikel_foto;?>" class="team-img" style="height: 250px; width: 250px;">
                <div class="caption">
                  <h4><?php echo $value->artikel_judul ?></h4>
                  <p><?php echo $value->artikel_isi ?></p>
                  <a href="<?php echo base_url('C_artikel/detail_artikel/'.$value->artikel_id)?>" class="pull-right"><button type="button" class="btn btn-success btn-xs btn-flat">Lihat Artikel <i class="fa fa-arrow-circle-right"></i></button></a>
                </div>                                    
              </div>
            </div>
          </table>
        </div>
      </div>
      <div class="box-footer pull-right">
        <a href="<?php echo base_url().'C_artikel/list_artikel';?>" class="uppercase"><button type="button" class="btn btn-primary btn-xs btn-block">Lihat Semua <i class="fa fa-arrow-circle-right"></i></button></a>
      </div> -->
      <!-- <div class="pull-right">
        <a href="<?php echo base_url().'C_artikel/list_artikel';?>">Lihat Semua</a>
      </div> -->
    </div>
  </div>
</section>