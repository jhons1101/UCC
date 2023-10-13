@section('services')
<section id="nuestraApuesta" class="features">
<div class="container" data-aos="fade-up">

  <div class="section-header">
    <h2>Acerca de nosotras</h2>
    <h4>Nuestra apuesta</h4>
  </div>

  <ul class="nav nav-tabs row gy-4 d-flex">

    <li class="nav-item col-6 col-md-4 col-lg-2">
      <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
        <i class="bi bi-binoculars color-cyan"></i>
        <h4>1.	Feministas</h4>
      </a>
    </li><!-- End Tab 1 Nav -->

    <li class="nav-item col-6 col-md-4 col-lg-2">
      <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
        <i class="bi bi-box-seam color-indigo"></i>
        <h4>2. Metodología</h4>
      </a>
    </li><!-- End Tab 2 Nav -->

    <li class="nav-item col-6 col-md-4 col-lg-2">
      <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
        <i class="bi bi-brightness-high color-teal"></i>
        <h4>3. Proyectos</h4>
      </a>
    </li><!-- End Tab 3 Nav -->

    <li class="nav-item col-6 col-md-4 col-lg-2">
      <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
        <i class="bi bi-command color-red"></i>
        <h4>4. Sede</h4>
      </a>
    </li><!-- End Tab 4 Nav -->

    <li class="nav-item col-6 col-md-4 col-lg-2">
      <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
        <i class="bi bi-easel color-blue"></i>
        <h4>Adipiscing</h4>
      </a>
    </li><!-- End Tab 5 Nav -->

  </ul>

  <div class="tab-content">

    <div class="tab-pane active show" id="tab-1">
      <div class="row gy-4">
        <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
          <h3>Feministas</h3>
          <p>
            La UCC se fundamenta en una postura filosófico-práctica que articula el feminismo de la igualdad y el feminismo de la diferencia, es decir, una posición ideológica en la que la defensa y reivindicación colectiva de los derechos de las mujeres no deja de lado las diferencias idiosincráticas de sus simpatizantes. Lo anterior, edificado en dos grandes pilares:
          </p>
          <ul>
            <li><i class="bi bi-check-circle-fill"></i> Necesidades practicas (vivienda, nutrición, vestuario)</li>
            <li><i class="bi bi-check-circle-fill"></i> Intereses estratégicos. (Calificación, crecimiento, participación, autonomía, empoderamiento)</li>
          </ul>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
          <img src="{{ asset('/img/team/ucc-cali_1.jpg') }}" alt="Apuesta feminista" class="img-fluid">
        </div>
      </div>
    </div><!-- End Tab Content 1 -->

    <div class="tab-pane" id="tab-2">
      <div class="row gy-4">
        <div class="col-lg-8 order-2 order-lg-1">
          <h3>Propuesta metodológica</h3>
          <p>
            Las Escuelas de Ciudadanía y Género se caracterizan por un enfoque metodológico desde la IAP (investigación, acción participante). Así cada una de las participantes es profesora y alumna que investiga.
          </p>
          <p class="fst-italic">
            Respuestas inacabadas: no tenemos respuestas absolutas y aceptamos que las verdades pueden ser contextuales y subjetivas. Nos acercamos a las participantes, los fenómenos y los conceptos, desde el respeto por la diferencia y el aprendizaje dialógico.
          </p>
          <p>
            La educación popular, la IAP y sus herramientas, se utilizan como medio y fin de la trasmisión de conocimiento y la transformación positiva de conflictos a partir de problemas sociales que emergen de la vida cotidiana.
          </p>
          </ul>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 text-center">
          <img src="{{ asset('/img/team/ucc-cali_2.jpg') }}" alt="propuesta metodológica" class="img-fluid">
        </div>
      </div>
    </div><!-- End Tab Content 2 -->

    <div class="tab-pane" id="tab-3">
      <div class="row gy-4">
        <div class="col-lg-8 order-2 order-lg-1">
          <h3>Nuestros proyectos</h3>
          <ul>
            <li><i class="bi bi-check-circle-fill"></i> Fortalecimiento de Organizaciones de mujeres en seis municipios del Valle del Cauca. Con apoyo financiero de ACDI CANADÁ (2002-2004)</li>
            <li><i class="bi bi-check-circle-fill"></i> Apoyo a institucionalización de la Política Pública de lucha contra las violencias hacia las mujeres. Con el apoyo de: Secretaría de Bienestar Social, Alcaldía de Cali, abril 2013.</li>
            <li><i class="bi bi-check-circle-fill"></i> Caracterización de organizaciones de mujeres en 12 comunas de Santiago de Cali. Con el apoyo de: Secretaría de Bienestar Social, Alcaldía de Cali, Secretaría de Equidad de Género.</li>
            <li><i class="bi bi-check-circle-fill"></i> Con ONU, mujeres 2018</li>
          </ul>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 text-center">
          <img src="{{ asset('/img/team/ucc-cali_3.jpg') }}" alt="nuestros proyectos" class="img-fluid">
        </div>
      </div>
    </div><!-- End Tab Content 3 -->

    <div class="tab-pane" id="tab-4">
      <div class="row gy-4">
        <div class="col-lg-8 order-2 order-lg-1">
          <h3>Nuestra sede</h3>
          
        </div>
        <div class="col-lg-4 order-1 order-lg-2 text-center">
          <img src="{{ asset('/img/team/ucc-cali_4.jpg') }}" alt="Nuestra sede" class="img-fluid">
        </div>
      </div>
    </div><!-- End Tab Content 4 -->

    <div class="tab-pane" id="tab-5">
      <div class="row gy-4">
        <div class="col-lg-8 order-2 order-lg-1">
          <h3>Adipiscing</h3>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum
          </p>
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <ul>
            <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
          </ul>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 text-center">
          <img src="{{ asset('/img/team/ucc-cali_1.jpg') }}" alt="" class="img-fluid">
        </div>
      </div>
    </div><!-- End Tab Content 5 -->

  </div>

</div>
</section><!-- End Services Section -->


<!-- ======= Clients Section ======= -->
<section id="clients" class="clients">
  <div class="container" data-aos="zoom-out">
    
  <div class="section-header">
    <h2>Cooperantes</h2>
    <h4>Con el apoyo financiero de:</h4>
  </div>

    <div class="clients-slider swiper">
      <div class="swiper-wrapper align-items-center">
        <div class="swiper-slide"><img src="{{ asset('/img/clients/client-1.png') }}" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('/img/clients/client-2.png') }}" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('/img/clients/client-3.png') }}" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('/img/clients/client-4.png') }}" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('/img/clients/client-5.png') }}" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('/img/clients/client-6.png') }}" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('/img/clients/client-7.png') }}" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('/img/clients/client-8.png') }}" class="img-fluid" alt=""></div>
      </div>
    </div>

  </div>
</section><!-- End Clients Section -->
@endsection