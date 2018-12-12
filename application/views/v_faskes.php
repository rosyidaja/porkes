<section id="faskes" class="section-padding" style="padding-bottom: 140px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Fasilitas Kesehatan</h2>
          <hr class="botm-line">
        </div>

        <?php foreach ($list_faskes as $key => $value) {?>
        <div class="list-artikel col-md-4" style="height: 390px;">
          <div class="panel-group" style="height: 390px;">
            <div class="panel panel-success" style="height: 390px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px;">
              <div class="panel-heading">
                <strong><?php echo $value->faskes_nama;?></strong>
              </div>
              <div class="panel-body">
                <div class="col-md-4" style="margin-left: 50px;">
                  <?php if($value->faskes_foto == "") {?>
                    <img src="<?php echo base_url('assets/img/avatar.png');?>" class="team-img" alt="logo RS">
                  <?php } else {?>
                  <img alt="logo RS" class="team-img" src="<?php echo base_url();?>assets/upload/faskes/<?php echo $value->faskes_foto;?>" style="height: 150px; width: 200px;">
                  <?php }?>
                </div>
              </div>
              <div class="panel-body" style="padding-bottom: 0px; padding-top: 10px; border-bottom: 1px solid rgba(255, 255, 255, 0.12)">
                <div class="col-md-12" style="color: black;">
                  <p style="font-size: 12px;"><i class="fa fa-map-marker"></i> <?php echo $value->faskes_alamat;?></p>
                  <table>
                    <tr>
                      <td> <strong>Layanan</strong> </td>
                      <td> : </td>
                      <td style="font-size: 14px;"> <?php echo $value->faskesdetlayanan_nama;?></td>
                    </tr>
                    <tr>
                      <td> <strong>Poli</strong> </td>
                      <td> : </td>
                      <td style="font-size: 14px;"> <?php echo $value->faskesdetpoli_nama;?></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </table>
                </div>
              </div>
              <!-- <div class="small-box bg-aqua pull-right">
                <a href="<?php echo base_url().'C_faskes/detail_faskes/'.$value->faskes_id;?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div> -->
            </div>
              <div id="footer" class="footer" style="border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;">
                <a href="<?php echo base_url().'C_faskes/detail_faskes/'.$value->faskes_id;?>" class="small-box-footer"><button type="button" class="btn btn-success btn-xs btn-block"> Lihat Detail <i class="fa fa-arrow-circle-right"></i></button></a>
              </div>
          </div>
        </div>
    <?php }?>
  <div class="pull-right" style="padding-right: 15px; padding-top: 30px;">
    <a href="<?php echo base_url().'C_faskes/index';?>" class="small-box-footer"><button type="button" class="btn btn-primary btn-xs btn-block"> Lihat Semua <i class="fa fa-arrow-circle-right"></i> </button></a>
  </div>
      </div>
    </div>
</section>