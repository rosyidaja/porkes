<section id="faskes" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Fasilitas Kesehatan</h2>
          <hr class="botm-line">
        </div>

        <?php foreach ($tabel2 as $key => $value) {?>
        <div class="list-artikel col-md-4">
          <div class="panel-group">
            <div class="panel panel-success">
              <div class="panel-heading">
                <strong><?php echo $value->faskes_nama;?></strong>
              </div>
              <div class="panel-body">
                <div class="col-md-4" style="margin-left: 50px;">
                  <img alt="logo RS" class="team-img" src="<?php echo base_url();?>assets/upload/faskes/<?php echo $value->faskes_foto;?>" style="height: 150px; width: 200px;">
                </div>
              </div>
              <div class="panel-body">
                <div class="col-md-12">
                  <p><i class="fa fa-map-marker"></i> <?php echo $value->faskes_alamat;?></p>
                  <table>
                    <tr>
                      <td> <strong>Layanan</strong> </td>
                      <td> : </td>
                      <td> <?php echo $value->faskesdetlayanan_nama;?></td>
                    </tr>
                    <tr>
                      <td> <strong>Poli</strong> </td>
                      <td> : </td>
                      <td> <?php echo $value->faskesdetpoli_nama;?></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </table>
                  <div class="pull-right">
                    <a href="<?php echo base_url().'C_faskes/detail_faskes/'.$value->faskes_id;?>"><button type="button" class="btn btn-success btn-xs btn-flat"> Lihat Detail <i class="fa fa-arrow-circle-right"></i></button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    <?php }?>
  <div class="pull-right" style="padding-right: 15px;">
    <a href="<?php echo base_url().'C_faskes/index';?>" class="small-box-footer"><button type="button" class="btn btn-primary btn-xs btn-block"> Lihat Semua <i class="fa fa-arrow-circle-right"></i> </button></a>
  </div>
      </div>
    </div>
</section>