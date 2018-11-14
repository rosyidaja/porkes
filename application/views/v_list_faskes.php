<section id="doctor-team" class="section-padding">
    <div class="container-fluid">

        <div class="col-md-3">

          <div class="panel panel-info" style="background-color:#eff3f8;">

            <div class="panel-heading">
              <h3 class="ser-title">Fasilitas Kesehatan</h3>
            </div>

            <div class="panel-body">

              <div class="form-group form-inline">
                <label for="" style="margin-top: 12px;">
                  Booking
                </label>
                <div class="pull-right">
                  <label class="switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                  </label>
                </div>
              </div>

              <div class="form-group form-inline">
                <label for="" style="margin-top: 12px;">
                  Verified
                </label>
                <div class="pull-right">
                  <label class="switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                  </label>
                </div>
              </div>

              <div class="form-group form-inline">
                <label for="" style="margin-top: 12px;">
                  Foto
                </label>
                <div class="pull-right">
                  <label class="switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                  </label>
                </div>
              </div>

              <div class="form-group" style="margin-top: 30px;">
                <label for="kota">Kota</label>
                <select class="form-control" id="kota">
                  <option>Pilih Kota</option>
                </select>
              </div>
              <div class="form-group">
                <label for="email">Kecamatan</label>
                <select class="form-control" id="kota">
                  <option>Pilih Kecamatan</option>
                </select>
              </div>
              <div class="form-group">
                <label for="email">Kategori</label>
                <select class="form-control" id="kota">
                  <option>Pilih Kategori</option>
                </select>
              </div>
              <div class="form-group">
                <label for="email">Layanan</label>
                <select class="form-control" id="kota">
                  <option>Pilih Layanan</option>
                </select>
              </div>
              <div class="form-group">
                <label for="email">Poli</label>
                <select class="form-control" id="kota">
                  <option>Pilih Poli</option>
                </select>
              </div>             
            </div>
          </div>

        </div>
        <?php foreach ($tabel as $key => $value) {?>
        <div class="list-artikel col-md-9">
          <div class="panel-group">

            <div class="panel panel-success">
              <div class="panel-heading">
                <strong><?php echo $value->faskes_nama;?></strong>
              </div>
              <div class="panel-body">
                <div class="col-md-3">
                  <img alt="logo RS" class="img-responsive" src="<?php echo base_url();?>assets/upload/faskes/<?php echo $value->faskes_foto;?>" style="height: 200px; width: 200px;">
                </div>
                <div class="col-md-9">
                  <p><i class="fa fa-map-marker"></i> <?php echo $value->faskes_alamat;?></p>
                  <table>
                    <tr>
                      <td> <strong>Layanan</strong> </td>
                      <td> : </td>
                      <td><?php echo $value->faskesdetlayanan_nama;?></td>
                    </tr>
                    <tr>
                      <td> <strong>Poli</strong> </td>
                      <td> : </td>
                      <td><?php foreach ($tabel_poli as $key => $values) {?> <?php echo $values->faskesdetpoli_nama;?>,  <?php }?></td>
                    </tr>
                  </table>
                  <div class="pull-right">
                    <a href="<?php echo base_url().'C_faskes/detail_faskes';?>">Lihat Detail</a>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
       <?php }?>
      </div>
    </div>
  </section>
