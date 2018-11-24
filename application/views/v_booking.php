<section id="service" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12" style="margin-bottom:90px;" center>
          <div class="col-md-10 col-sm-2">
          <form id="form-search-pasien" action="<?php echo base_url().'C_booking/booking';?>" method="POST">
            <input type="hidden" name="faskes" value="<?php echo $faskes; ?>" />
            <input type="hidden" name="poli" value="<?php echo $list_poli; ?>" />
            <input type="text" name="param" class="form-control br-radius-zero" id="norm_text" placeholder="No. Rekam Medis / NIK" minlength="6" onkeypress="return Angkasaja(event)" required="required" oninvalid="this.setCustomValidity('Minimal Karakter adalah 6 angka')" onvalid="this.setCustomValidity('')"/>
            <div class="validation">

            </div>
          </div>
          <div class="col-md-2 col-sm-2">
            <button type="submit" class="btn btn-form">Pencarian</button>
          </form>
          </div>
        </div>
      </div>

      <div class="row" id="box-poli" style="display:none">

        <div class="col-md-12 text-center" style="margin-bottom:15px;">
          <label> <h2>Pilih poli tujuan</h2> </label>
        </div>

        <div class="list-artikel col-md-3">
          <div class="panel-group">
            <div class="panel panel-default" style="background-color: #0cb8b6;">
              <a href="#" onClick="nextJadwal('gigi')">
                <div class="panel-body">
                  <div class="col-md-3" style="padding-left: 30px;">
                    <img alt="logo RS" style="height: 40px;" src="<?php echo base_url('assets/icons/umum.png');?>">
                  </div>
                  <div class="col-md-9" style="padding-top: 5px; padding-left: 20px;">
                    <h3 style="color: black; display: inline;">Poli Umum</h3>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

        <div class="list-artikel col-md-3">
          <div class="panel-group">
            <div class="panel panel-default" style="background-color: #0cb8b6;">
              <div class="panel-body">
                <div class="col-md-3" style="padding-left: 30px;">
                  <img alt="logo RS" style="height: 40px;" src="<?php echo base_url('assets/icons/jantung.png');?>">
                </div>
                <div class="col-md-9" style="padding-top: 5px; padding-left: 20px;">
                  <h3 style="color: black; display: inline;">Poli Jantung</h3>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="list-artikel col-md-3">
          <div class="panel-group">
            <div class="panel panel-default" style="background-color: #0cb8b6;">
              <div class="panel-body">
                <div class="col-md-3" style="padding-left: 30px;">
                  <img alt="logo RS" style="height: 40px;" src="<?php echo base_url('assets/icons/saraf.png');?>">
                </div>
                <div class="col-md-9" style="padding-top: 5px; padding-left: 20px;">
                  <h3 style="color: black; display: inline;">Poli Saraf</h3>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="list-artikel col-md-3">
          <div class="panel-group">
            <div class="panel panel-default" style="background-color: #0cb8b6;">
              <div class="panel-body">
                <div class="col-md-3" style="padding-left: 30px;">
                  <img alt="logo RS" style="height: 40px;" src="<?php echo base_url('assets/icons/jiwa.png');?>">
                </div>
                <div class="col-md-9" style="padding-top: 5px; padding-left: 20px;">
                  <h3 style="color: black; display: inline;">Poli Jiwa</h3>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="list-artikel col-md-3">
          <div class="panel-group">
            <div class="panel panel-default" style="background-color: #0cb8b6;">
              <div class="panel-body">
                <div class="col-md-3" style="padding-left: 30px;">
                  <img alt="logo RS" style="height: 40px;" src="<?php echo base_url('assets/icons/jiwa.png');?>">
                </div>
                <div class="col-md-9" style="padding-top: 5px; padding-left: 20px;">
                  <h3 style="color: black; display: inline;">Poli Jiwa</h3>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="list-artikel col-md-3">
          <div class="panel-group">
            <div class="panel panel-default" style="background-color: #0cb8b6;">
              <div class="panel-body">
                <div class="col-md-3" style="padding-left: 30px;">
                  <img alt="logo RS" style="height: 40px;" src="<?php echo base_url('assets/icons/jiwa.png');?>">
                </div>
                <div class="col-md-9" style="padding-top: 5px; padding-left: 20px;">
                  <h3 style="color: black; display: inline;">Poli Jiwa</h3>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="list-artikel col-md-3">
          <div class="panel-group">
            <div class="panel panel-default" style="background-color: #0cb8b6;">
              <div class="panel-body">
                <div class="col-md-3" style="padding-left: 30px;">
                  <img alt="logo RS" style="height: 40px;" src="<?php echo base_url('assets/icons/jiwa.png');?>">
                </div>
                <div class="col-md-9" style="padding-top: 5px; padding-left: 20px;">
                  <h3 style="color: black; display: inline;">Poli Jiwa</h3>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="list-artikel col-md-3">
          <div class="panel-group">
            <div class="panel panel-default" style="background-color: #0cb8b6;">
              <div class="panel-body">
                <div class="col-md-3" style="padding-left: 30px;">
                  <img alt="logo RS" style="height: 40px;" src="<?php echo base_url('assets/icons/jiwa.png');?>">
                </div>
                <div class="col-md-9" style="padding-top: 5px; padding-left: 20px;">
                  <h3 style="color: black; display: inline;">Poli Jiwa</h3>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="list-artikel col-md-3">
          <div class="panel-group">
            <div class="panel panel-default" style="background-color: #0cb8b6;">
              <div class="panel-body">
                <div class="col-md-3" style="padding-left: 30px;">
                  <img alt="logo RS" style="height: 40px;" src="<?php echo base_url('assets/icons/jiwa.png');?>">
                </div>
                <div class="col-md-9" style="padding-top: 5px; padding-left: 20px;">
                  <h3 style="color: black; display: inline;">Poli Jiwa</h3>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="list-artikel col-md-3">
          <div class="panel-group">
            <div class="panel panel-default" style="background-color: #0cb8b6;">
              <div class="panel-body">
                <div class="col-md-3" style="padding-left: 30px;">
                  <img alt="logo RS" style="height: 40px;" src="<?php echo base_url('assets/icons/jiwa.png');?>">
                </div>
                <div class="col-md-9" style="padding-top: 5px; padding-left: 20px;">
                  <h3 style="color: black; display: inline;">Poli Jiwa</h3>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="list-artikel col-md-3">
          <div class="panel-group">
            <div class="panel panel-default" style="background-color: #0cb8b6;">
              <div class="panel-body">
                <div class="col-md-3" style="padding-left: 30px;">
                  <img alt="logo RS" style="height: 40px;" src="<?php echo base_url('assets/icons/jiwa.png');?>">
                </div>
                <div class="col-md-9" style="padding-top: 5px; padding-left: 20px;">
                  <h3 style="color: black; display: inline;">Poli Jiwa</h3>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="list-artikel col-md-3">
          <div class="panel-group">
            <div class="panel panel-default" style="background-color: #0cb8b6;">
            <a href="#">  
              <div class="panel-body">
                <div class="col-md-3" style="padding-left: 30px;">
                  <img alt="logo RS" style="height: 40px;" src="<?php echo base_url('assets/icons/jiwa.png');?>">
                </div>
                <div class="col-md-9" style="padding-top: 5px; padding-left: 20px;">
                  <h3 style="color: black; display: inline;">Poli Jiwa</h3>
                </div>
              </div>
              </a>
            </div>
          </div>
        </div>

        <div class="col-md-12 text-center">
          <button type="button" class="btn btn-primary btn-lg" name="button">Reset</button>
        </div>

      </div>

      <div class="row" id="box-jadwal" style="display:none;">

        <div class="col-md-12 text-center" style="margin-bottom:15px;">
          <label> <h2>Pilih Jadwal</h2> </label>
        </div>

        <div class="list-artikel col-md-3">
          <div class="panel-group">
            <div class="panel panel-default" style="background-color: #0cb8b6;">
              <a href="#" onClick="finishBook('sesi1')">
                <div class="panel-body">
                  <div class="col-md-12 text-center">
                    <h3 style="color: black; display: inline;">08:00 - 08:10</h3>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

        <div class="list-artikel col-md-3">
          <div class="panel-group">
            <div class="panel panel-default" style="background-color: #0cb8b6;">
              <a href="#" onClick="finishBook('sesi1')">
                <div class="panel-body">
                  <div class="col-md-12 text-center">
                    <h3 style="color: black; display: inline;">08:10 - 08:20</h3>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

        <div class="list-artikel col-md-3">
          <div class="panel-group">
            <div class="panel panel-default" style="background-color: #0cb8b6;">
              <a href="#" onClick="finishBook('sesi1')">
                <div class="panel-body">
                  <div class="col-md-12 text-center">
                    <h3 style="color: black; display: inline;">08:30 - 08:40</h3>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

        <div class="list-artikel col-md-3">
          <div class="panel-group">
            <div class="panel panel-default" style="background-color: #0cb8b6;">
              <a href="#" onClick="finishBook('sesi1')">
                <div class="panel-body">
                  <div class="col-md-12 text-center">
                    <h3 style="color: black; display: inline;">08:40 - 08:50</h3>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

        <div class="list-artikel col-md-3">
          <div class="panel-group">
            <div class="panel panel-default" style="background-color: #0cb8b6;">
              <a href="#" onClick="finishBook('sesi1')">
                <div class="panel-body">
                  <div class="col-md-12 text-center">
                    <h3 style="color: black; display: inline;">08:50 - 09:00</h3>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

        <div class="list-artikel col-md-3">
          <div class="panel-group">
            <div class="panel panel-default" style="background-color: #0cb8b6;">
              <a href="#" onClick="finishBook('sesi1')">
                <div class="panel-body">
                  <div class="col-md-12 text-center">
                    <h3 style="color: black; display: inline;">09:00 - 09:10</h3>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

        <div class="list-artikel col-md-3">
          <div class="panel-group">
            <div class="panel panel-default" style="background-color: #0cb8b6;">
              <a href="#" onClick="finishBook('sesi1')">
                <div class="panel-body">
                  <div class="col-md-12 text-center">
                    <h3 style="color: black; display: inline;">09:10 - 09:20</h3>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

        <div class="list-artikel col-md-3">
          <div class="panel-group">
            <div class="panel panel-default" style="background-color: #0cb8b6;">
              <a href="#" onClick="finishBook('sesi1')">
                <div class="panel-body">
                  <div class="col-md-12 text-center">
                    <h3 style="color: black; display: inline;">09:20 - 09:30</h3>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

        <div class="list-artikel col-md-3">
          <div class="panel-group">
            <div class="panel panel-default" style="background-color: #0cb8b6;">
              <a href="#" onClick="finishBook('sesi1')">
                <div class="panel-body">
                  <div class="col-md-12 text-center">
                    <h3 style="color: black; display: inline;">09:30 - 09:40</h3>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

        <div class="list-artikel col-md-3">
          <div class="panel-group">
            <div class="panel panel-default" style="background-color: #0cb8b6;">
              <a href="#" onClick="finishBook('sesi1')">
                <div class="panel-body">
                  <div class="col-md-12 text-center">
                    <h3 style="color: black; display: inline;">09:40 - 09:50</h3>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

        <div class="list-artikel col-md-3">
          <div class="panel-group">
            <div class="panel panel-default" style="background-color: #0cb8b6;">
              <a href="#" onClick="finishBook('sesi1')">
                <div class="panel-body">
                  <div class="col-md-12 text-center">
                    <h3 style="color: black; display: inline;">09:50 - 10:00</h3>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

        <div class="list-artikel col-md-3">
          <div class="panel-group">
            <div class="panel panel-default" style="background-color: #0cb8b6;">
              <a href="#" onClick="finishBook('sesi1')">
                <div class="panel-body">
                  <div class="col-md-12 text-center">
                    <h3 style="color: black; display: inline;">10:00 - 10:10</h3>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

        <div class="col-md-12 text-center">
          <button type="button" class="btn btn-primary btn-lg" name="button">Kembali</button>
        </div>

      </div>


       <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Konfirmasi</h4>
            </div>
            <div class="modal-body">
              <p>Apakah Anda Yakin akan melakukan pemesanan Ke Poli Umum pada Pukul 08:30 - 08:40 ?</p>
            </div>
            <div class="modal-footer">
              <button type="button" id="btn-booking" class="btn btn-ok" onClick="booking()">Booking</button>  
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
          </div>

        </div>
      </div>

    </div>

      </section>
  <script>

    function Angkasaja(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode;
      if (charCode > 31 && (charCode < 48 || charCode > 57)){
        if(charCode == 46){
          return true;
        }else{
          return false;
        }
      }else{
        return true;
      }
      
    }
   
      function booking(){
        $("#btn-booking").attr("data-dismiss", "modal");
        showPleaseWait();
        setTimeout(function(){ 
          hidePleaseWait()
          window.open('./print/p_struk_booking.html','Struk Booking','height=800,width=800,resizable=1,scrollbars=1, menubar=0');
          window.location = '<?php echo base_url(); ?>c_booking';
         }, 1000);

      }

      function finishBook(jadwal){
        $("#box-jadwal").attr("data-toggle", "modal");
        $("#box-jadwal").attr("data-target", "#myModal");
      }

      function nextJadwal(jadwal){
        document.getElementById("box-poli").style.display="none";
        document.getElementById("box-jadwal").style.display="block";

      }
    
        function showPleaseWait() {
            var modalLoading = '<div class="modal" id="pleaseWaitDialog" data-backdrop="static" data-keyboard="false role="dialog">\
                <div class="modal-dialog">\
                    <div class="modal-content">\
                        <div class="modal-header">\
                            <h4 class="modal-title">Please wait...</h4>\
                        </div>\
                        <div class="modal-body">\
                            <div class="progress">\
                              <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"\
                              aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%; height: 40px">\
                              </div>\
                            </div>\
                        </div>\
                    </div>\
                </div>\
            </div>';
            $(document.body).append(modalLoading);
            $("#pleaseWaitDialog").modal("show");
        }

        /**
        * Hides "Please wait" overlay. See function showPleaseWait().
        */
        function hidePleaseWait() {
            $("#pleaseWaitDialog").modal("hide");
        }
  </script>
