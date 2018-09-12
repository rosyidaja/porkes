<section id="service" class="section-padding">
    <div class="container">
      <div class="row">
      <div class="col-md-12 col-sm-12" style="margin-bottom:90px;" center>
         <div class="col-md-10 col-sm-2">
                <input type="text" name="name" class="form-control br-radius-zero" id="norm_text" placeholder="No. Rekam Medis" data-rule="minlen:4" data-msg="Masukan Nomor Rekam Medis Anda" />
                <div class="validation"></div>
        </div>
        <div class="col-md-2 col-sm-2">
                <button type="submit" class="btn btn-form">Pencarian</button>                    
        </div>
             
      </div>  
</div>
    <div class="row" id="box-poli" style="display:none;">
        <div class="col-md-4 col-sm-4">
          <h2 class="ser-title">Our Service</h2>
          <hr class="botm-line">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris cillum.</p>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-stethoscope"></i>
            </div>
            <div class="icon-info">
              <h4>24 Hour Support</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-ambulance"></i>
            </div>
            <div class="icon-info">
              <h4>Emergency Services</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-user-md"></i>
            </div>
            <div class="icon-info">
              <h4>Medical Counseling</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-medkit"></i>
            </div>
            <div class="icon-info">
              <h4>Premium Healthcare</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
      function cekNorm(norm){
          //alert("Hallo World "+norm );
      }
      var norm_text = document.getElementById("norm_text");
      var norm;
      norm_text.addEventListener("keyup", function(event) {
        norm = event.target.value;
            event.preventDefault();
            if (event.keyCode === 13) {
                cekNorm(norm);
                document.getElementById("box-poli").style.display="block";
                //$("#norm_text").removeAttr("display");
            }
        });
  </script>