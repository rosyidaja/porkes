<section id="doctor-team" class="secton-padding"  style="background-color:#eff3f8;">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <div class="jumbotron" style="margin-bottom:0; border-radius:0; background-image:url('<?php echo base_url('assets/img/levina_bg.jpg');?>'); background-size: cover;">
          <br>
          <br>
          <br>
          <br>
          <br>
          <div class="col-md-2" style="right: 50px;">
            <img src="<?php echo base_url('assets/img/logoRS.png');?>" width="150" height="150">
          </div>
          <div class="col-md-10" style="right: 20px;bottom: 10px;">
            <h3><?php echo $detail->faskes_nama ?></h3>
          </div>
        </div>
        <div class="panel" style="border-radius:0; border:0;">
          <div class="panel-body">
            <p><i class="fa fa-map-marker small"></i> Jl. Kelapapati Tengah No.90, Riau , Kec. Gresik, Kabupaten Gresik, Jawa Timur 61119</p>
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

            <div style="width: 100%"><iframe width="100%" height="358" src="https://maps.google.com/maps?width=100%&amp;height=358&amp;hl=en&amp;q=surabaya+(Porkes)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Embed Google Map</a></iframe></div><br />

          </div>
        </div>

        <div class="panel">
          <div class="panel-body">

            <div class="page-header">
              <label>LAYANAN</label>
            </div>

            <div class="small">
              <p><i class="fa fa-check"></i> Ambulance</p>
              <p><i class="fa fa-check"></i> Kamar Enak Enak</p>
              <p><i class="fa fa-check"></i> Instalasi Gawat Darurat (IGD)</p>
              <p><i class="fa fa-check"></i> Klinik Bedah Kepala & Leher</p>
              <p><i class="fa fa-check"></i> Klinik Gigi & Kesehatan Cocot</p>
              <p><i class="fa fa-check"></i> Klinik Gigi & Kesehatan Cocot</p>
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
                  <option value="">Poli Umum</option>
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
              <li><a data-toggle="tab" href="#menu2">Profil</a></li>
              <li><a data-toggle="tab" href="#menu2">Rating</a></li>
            </ul>

            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <h3>HOME</h3>
                <p>Some content.</p>
              </div>
              <div id="menu1" class="tab-pane fade">
                <h3>Menu 1</h3>
                <p>Some content in menu 1.</p>
              </div>
              <div id="menu2" class="tab-pane fade">
                <h3>Menu 2</h3>
                <p>Some content in menu 2.</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>
</section>
