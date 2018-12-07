<section id="doctor-team" class="secton-padding"  style="background-color:#eff3f8;">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <div class="jumbotron" style="margin-bottom:0; border-radius:0; background-image:url('<?php echo base_url();?>assets/upload/faskes/<?php echo $detail->faskes_background;?>'); background-size: cover;">
          <br>
          <br>
          <br>
          <br>
          <br>
          <div class="col-md-2" style="right: 50px;">
            <img src="<?php echo base_url();?>assets/upload/faskes/<?php echo $detail->faskes_foto;?>" width="150" height="150">
          </div>
          <div class="col-md-10" style="right: 20px;bottom: 10px;">
            <h3><?php echo $detail->faskes_nama; ?></h3>
          </div>
        </div>
        <div class="panel" style="border-radius:0; border:0;">
          <div class="panel-body">
            <p><i class="fa fa-map-marker small"></i> <?php echo $detail->faskes_alamat; ?></p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">

        <div class="panel">
          <div class="panel-body">

            <div class="page-header">
              <label>LOKASI</label>
            </div>

            <div style="width: 100%"><iframe width="100%" height="358" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6267349162395!2d112.75071181412841!3d-7.283241194743144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbc8eb96a8af%3A0xd0f03d3a6ab5ec!2sRS+Pura+Raharja!5e0!3m2!1sid!2sid!4v1542195370430" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Embed Google Map</a></iframe></div><br />

          </div>
        </div>

        <div class="panel">
          <div class="panel-body">

            <div class="page-header">
              <label>LAYANAN</label>
            </div>

            <div class="small">
              <?php foreach ($list_layanan as $layanan) { ?>
                <p style="color: black;"><i class="fa fa-check"></i> <?php echo $layanan->layanan_nama; ?></p>
              <?php } ?>
          </div>
        </div>

      </div>
    </div>

      <div class="col-md-9">

        <div class="panel">
          <div class="panel-body">

            <div class="page-header col-md-12">
            <p style="color: red"><strong><?php echo $this->session->flashdata('pesan'); ?></strong></p>
              <div class="col-md-3">
                <label style="padding-top: 10px;">List Antrian</label>
              </div>
              <div class="col-md-6">
              <form role="form" action="<?php echo base_url().'C_booking';?>" method="POST">
              <input type="hidden" name="faskes" value="<?php echo $this->uri->segment(3); ?>" />
                <select class="form-control" name="list_poli" required>
                    <?php 
                      foreach($list_poli as $poli){ ?>
                          <option value="<?php echo $poli->faskesdetpoli_id; ?>"><?php echo $poli->poli_nama; ?></option>
                      <?php }
                    ?>
                </select>
              </div>
              <div class="col-md-3">
                <button type="submit" class="btn btn-primary" name="submit">Booking</button>
              </div>
              </form>
            </div>

            <div class="table-responsive col-md-12">
              
              <table id="tbl_booking" class="table table-striped table-hover table-condensed table-bordered" style="color:black;">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Pasien</th>
                    <th>Nomor RM</th>
                    <th>Poli</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>

          </div>
        </div>

        <div class="panel">
          <div class="panel-body">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#home">Poli</a></li>
              <li><a data-toggle="tab" href="#menu1">Dokter</a></li>
              <li><a data-toggle="tab" href="#menu2">Galeri</a></li>
            </ul>

            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <?php foreach($list_poli as $poli){ ?>
                  <div class="col-md-3" style="padding-top: 20px;">
                    <div class="alert alert-success" style="background-color: #008d4c; padding: 0px;">
                      <h5 style="padding: 5px; text-align: center; color: white; font-family: sans-serif;"><?php echo $poli->poli_nama; ?></h5>
                    </div>
                  </div>
                <?php } ?>
              </div>

              <div id="menu1" class="tab-pane fade">
                <?php foreach($list_dokter as $dokter){ ?>
                <div class="list-artikel col-md-3 col-sm-3 col-xs-6" style="padding-top: 20px;">
                  <div class="panel-group">
                    <div class="panel panel-success" style="background-color: lavender;">
                      <div class="panel-body">
                        <div class="thumbnail" style="margin-bottom: 0px;">
                          <img src="<?php echo base_url();?>assets/upload/dokter/<?php echo $dokter->dokter_foto;?>" class="team-img" style="height: 150px; width: 150px;">
                        </div>
                      </div>
                      <div class="panel-body" style="background-color: lavender;">
                        <div class="col-md-12">
                          <div class="caption">
                            <h5 style="text-align: center;"><?php echo $dokter->dokter_nama; ?></h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php } ?>
              </div>
              <div id="menu2" class="tab-pane fade">
                <h3 style="text-align: center;">Galeri <?php echo $detail->faskes_nama; ?></h3>
                <?php foreach($list_galeri as $galeri){ ?>
                  <div class="thumbnail" style="width: 200px;">
                    <img src="<?php echo base_url();?>assets/upload/galeri/<?php echo $galeri->galeri_foto;?>" class="team-img" style="height: 150px; width: 150px; align-content: center;">
                  </div>
                <?php } ?>
              </div>
            </div>

          </div>
        </div>
      </div>

  </div>
</section>