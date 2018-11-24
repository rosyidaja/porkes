<section id="service" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12" style="margin-bottom:90px;" center>
        <p style="color: red"><strong><?php echo $this->session->flashdata('pesan'); ?></strong></p>
          <div class="col-md-10 col-sm-2">
          <form id="form-search-pasien" action="<?php echo base_url().'C_checkin/checkin';?>" method="POST">
            <input type="text" name="param" autofocus class="form-control br-radius-zero" id="norm_text" placeholder="Kode Booking" minlength="6"  required="required" />
            <div class="validation">

            </div>
          </div>
          <div class="col-md-2 col-sm-2">
            <button type="submit" class="btn btn-form">Checkin</button>
          </form>
          </div>
        </div>
      </div>


      </section>
  <script>
       
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
