<?php include("keys/keys.php") ?>
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbsWhite" data-aos="fade-in">
        <div class="container">
          
        </div>
      </div><!-- End Breadcrumbs -->
      <div class="col-lg-12 bannerSecundario" style="text-align: center;">
        <img src="assets/img/bannerContacto.jpg">
     </div>

     
   
        <section id="contact" class="contact">
      

          <div class="container" data-aos="fade-up">
            <div class="row mt-5" style="margin-bottom: 25px;">
    
              <div class="col-lg-4">
                <div class="info">
                  <div class="address">
                    <i class="icofont-google-map"></i>
                    <h4>Dirección:</h4>
                    <p>Calle Allende No. 637,  Colonia Centro, Morelia, Michoacán. CP 58000.</p>
                  </div>
    
                  <div class="email">
                    <i class="icofont-envelope"></i>
                    <h4>Email:</h4>
                    <p>contacto@defensoresdelanaturaleza.mx</p>
                  </div>
    
                  <div class="phone">
                    <i class="icofont-phone"></i>
                    <h4>Teléfono:</h4>
                    <p> 55 3434 7719</p>
                  </div>
    
                </div>
    
              </div>
    
              <div class="col-lg-8 mt-5 mt-lg-0">
                <form method="POST" enctype=multipart/form-data action="mailer/enviar.php" class="php-email-form" id="formulario">
                  <div class="form-row">
                    <div class="col-md-6 form-group">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Tu nombre" data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 caracteres." />
                      <div class="validate"></div>
                    </div>
                    <div class="col-md-6 form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Tu Email" data-rule="email" data-msg="Por favor ingrese un email válido." />
                      <div class="validate"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Por favor ingrese al menos 8 caracteres de asunto." />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escriba algo para nosotros." placeholder="Mensaje"></textarea>
                    <div class="validate"></div>
                  </div>
                  <div class="col-md-12 form-group" style="padding: 0px;">
                    <input class="form-control" type="file" name="adjunto" id="adjunto">
                  </div>
                  <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Su mensaje ha sido enviado. Gracias!</div>
                  </div>    
                  <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
                  <input type="hidden" name="token-google" id="token-google">
                </form> 
  
              </div>
  
    
            </div>
    
            <div data-aos="fade-up" style="align-items: center;">
          
              <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.250163255785!2d-101.1974903362039!3d19.70197080597051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0e7af6197139%3A0x9c871d65b1132550!2sAllende%20637%2C%20Centro%20hist%C3%B3rico%20de%20Morelia%2C%2058000%20Morelia%2C%20Mich.!5e0!3m2!1sen!2smx!4v1628521483632!5m2!1sen!2smx"  frameborder="0" allowfullscreen></iframe>
                
            </div>
    
          </div>
    
          
        </section><!-- End Contact Section -->

      
     
    
    
   
   
        
      <script src="assets/vendor/php-email-form/validate.js"></script>
     <!--<script src="assets/js/contactoController.js"></script> -->
   
     <script>
      //  Obtiene el token que proporciona google del reCaptcha con la llave publica
       grecaptcha.ready(function() {
          grecaptcha.execute('<?php echo SITE_KEY; ?>', {action: 'submit'}).then(function(token) {
              // Add your logic to submit to your backend server here.
              $('#token-google').val(token);
              console.log(token);
          });
        });
      var serviceAPI = new ServiciosAPI();
      var formularioController = new  FormularioController();

      serviceAPI.getEntidadesSEPOMEX();
     

     </script>
   