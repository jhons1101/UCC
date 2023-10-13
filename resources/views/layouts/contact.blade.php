@section('contact')
<section id="contact" class="contact">
  <div class="container">

    <div class="section-header">
      <h2>Contacto</h2>
      <p>Siempre cerca de ti</p>
    </div>

  </div>

  <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1449.3223488956514!2d-76.53621879596557!3d3.4462340859702105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a7249c4a39e5%3A0xa02409cef2543767!2sUnion%20de%20ciudadanas%20cali!5e0!3m2!1ses-419!2sco!4v1694664758506!5m2!1ses-419!2sco" frameborder="0" allowfullscreen></iframe>
  </div>

  <div class="container">
    <div class="row gy-5 gx-lg-5">
      <div class="col-lg-4">
        <div class="info">
          <h3>Encuentrenos en</h3>
          <p>Puedes ponerte en contacto por cualquera de estos medios</p>
          <div class="info-item d-flex">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h4>Ubicación:</h4>
              <p>Calle 6 # 10-21 B/ Santa Rosa – Cali, Valle del Cauca</p>
            </div>
          </div><!-- End Info Item -->
          <div class="info-item d-flex">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h4>Email:</h4>
              <p>uniondeciudadanas@hotmail.com</p>
            </div>
          </div><!-- End Info Item -->
          <div class="info-item d-flex">
            <i class="bi bi-phone flex-shrink-0"></i>
            <div>
              <h4>Teléfono:</h4>
              <p>3137150027 - 3163291215</p>
            </div>
          </div><!-- End Info Item -->
        </div>
      </div>

      <div class="col-lg-8">
        <form action="/contact" method="POST">
          @csrf
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control input-rec input-lg" id="name" placeholder="Nombre completo" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control input-rec input-lg" name="email" id="email" placeholder="Correo electrónico" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control input-rec input-lg" name="subject" id="subject" placeholder="Asunto" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control input-rec" name="message" placeholder="Mensaje" required rows="5"></textarea>
          </div>
          <div class="text-center"><button type="submit" class="btn btn-primary input-rec input-lg mt-5 btn-lg">Enviar Mensaje</button></div>
        </form>
      </div>
    </div>
  </div>
</section><!-- End Contact Section -->
@endsection
