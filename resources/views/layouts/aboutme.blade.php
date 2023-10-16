@section('aboutme')
<section id="cta" class="cta">
    <div class="container" data-aos="zoom-out">
        <div class="row g-5">
            <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
                <h3>Quienes somos</h3>
                <p class="text-justify">
                  La Unión de ciudadanas de Colombia seccional Cali, fundada desde  17 de noviembre  de 1957, pionera en la defensa de los principios democráticos. Con su estrategia pedagógica de la Escuela de Ciudadanía, contribuye  a la formación de conciencia ciudadana que estimula el fortalecimiento de  familia y la participación activa de la mujer en el desarrollo, Socio-económico, político y cultural de Cali y el valle del Cauca. 
                </p>
                <p class="text-justify">
                  La UCC nace por el voto de la mujer, en los temas que nos afectan y en busca de la reivindicación de nuestros derechos.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
                <div class="img">
                    <img src="{{ asset('/img/ucc-about.jpg')}}" alt="UCC quienes somos" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="onfocus" class="onfocus">
  <div class="container-fluid p-0" data-aos="fade-up">
    <div class="row g-0">
      <div class="col-lg-6 video-play position-relative">
        <a href="{{$YTLink->value}}" class="glightbox play-btn"></a>
      </div>
      <div class="col-lg-6">
        <div class="content d-flex flex-column justify-content-center h-100">
          <h3>EL CONCEPTO DE FEMINISMO DESDE LA UNION DE CIUDADANAS SECCIONAL CALI.</h3>
          <p class="fst-italic">
          Cuando se habla a  las mujeres del feminismo, se asustan y creen que las feministas somos de otro planeta.
          </p>
          <ul>
            <li><i class="bi bi-check-circle"></i> Pues no, se llega a la conclusión de que esta organización hace una intersección entre el feminismo de la igualdad y el feminismo de la diferencia. </li>
            <li>
              <i class="bi bi-check-circle"></i> Basado en dos pilares. <br/>
              1- Necesidades practicas (vivienda, nutrición, vestuario). <br/>
              2. Intereses estratégicos. (Calificación, crecimiento, participación, autonomía, empoderamiento).
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection