<section id="artikel" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Artikel</h2>
          <hr class="botm-line">
        </div>

        <div class="list-artikel">
        <?php foreach ($tabel as $key => $value) {?>
          <table>
            <div class="col-md-3 col-sm-3 col-xs-6">
              <div class="thumbnail">
                <img src="<?php echo base_url();?>assets/upload/artikel/<?php echo $value->artikel_foto;?>" class="team-img" style="height: 250px; width: 250px;">
                <div class="caption">
                <h4><?php echo $value->artikel_judul ?></h4>
                <p><?php echo substr($value->artikel_isi,0,100)."..." ?></p>
                <a href="<?php echo base_url('C_artikel/detail_artikel/'.$value->artikel_id)?>">Lihat Artikel</a>
                </div>
              </div>
            </div>
          </table>
          <?php }?>
        </div>
      </div>
      <div class="box-footer text-right">
        <a href="<?php echo base_url().'C_artikel/list_artikel';?>" class="uppercase">Lihat Semua</a>
      </div>
      <!-- <div class="pull-right">
        <a href="<?php echo base_url().'C_artikel/list_artikel';?>">Lihat Semua</a>
      </div> -->
    </div>
  </div>
</section>