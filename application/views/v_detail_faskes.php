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
              <p><i class="fa fa-check"></i> <?php echo $detail->faskesdetlayanan_nama; ?></p>
          </div>
        </div>

      </div>
    </div>

      <div class="col-md-9">

        <div class="panel">
          <div class="panel-body">

            <div class="page-header col-md-12">
              <div class="col-md-3">
                <label style="padding-top: 10px;">List Antrian</label>
              </div>
              <div class="col-md-6">
                <select class="form-control" name="">
                  <option value=""><?php echo $detail->faskesdetpoli_nama; ?></option>
                </select>
              </div>
              <div class="col-md-3">
                <button type="button" class="btn btn-primary" name="button"><a style="color:white;text-decoration:none;" href="<?php echo base_url().'c_booking';?>">Booking</a></button>
              </div>
            </div>

            <div class="table-responsive col-md-12">
              <table class="table table-striped table-hover table-condensed table-bordered" style="color:black;">
                <tr>
                  <th>No.</th>
                  <th>Nama Pasien</th>
                  <th>Nomor RM</th>
                  <th>Jadwal</th>
                  <th>Status</th>
                </tr>
                <tr class="small">
                  <td>1.</td>
                  <td>Tomi Mishbahul</td>
                  <td>000231</td>
                  <td>08:00 - 08:10</td>
                  <td>Dilayani</td>
                </tr>
                <tr class="small">
                  <td>2.</td>
                  <td>Archie Cakra</td>
                  <td>000091</td>
                  <td>08:10 - 08:20</td>
                  <td>Dilayani</td>
                </tr>
                <tr class="small">
                  <td>3.</td>
                  <td>Irma Y</td>
                  <td>000199</td>
                  <td>08:20 - 08:30</td>
                  <td>Daftar</td>
                </tr>
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
              <!-- <li><a data-toggle="tab" href="#menu3">Profil</a></li>
              <li><a data-toggle="tab" href="#menu4">Rating</a></li> -->
            </ul>

            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <h4>Poli Yang Tersedia : </h4>
                <p><i class="fa fa-dot-circle-o"> <?php echo $detail->faskesdetpoli_nama; ?> </i></p>
              </div>
              <div id="menu1" class="tab-pane fade">
                <h4>Dokter</h4>
                <p><?php echo $detail->faskesdetdokter_nama; ?></p>
              </div>
              <div id="menu2" class="tab-pane fade">
                <h4>Galeri <?php echo $detail->faskes_nama; ?></h4>
                <img src="<?php echo base_url();?>assets/upload/galeri/<?php echo $detail->faskesdetgaleri_foto;?>" class="img-responsive">
              </div>
            </div>

          </div>
        </div>
      </div>

  </div>
</section>
