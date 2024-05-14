<?php
require $_SERVER['DOCUMENT_ROOT'] . '/partyBarService/app/class/Productos.php';
include $_SERVER['DOCUMENT_ROOT'] . '/partyBarService/app/views/parts/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/partyBarService/app/views/parts/header.php';

?>


<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../assets/img/banner.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block fondo">
        <h5 class="carousel_title">Servicio de coctelería temática.</h5>
        <p class="carousel_description">Deléitate, diviértete, disfruta.</p>
        <a href="../views/catalogo.php" class="btn btn-carousel">Cónoce nuestros paquetes</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../assets/img/banner-2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block fondo">
        <h5 class="carousel_title">¿Quieres un servicio personalizado?</h5>
        <p class="carousel_description">Si quieres un paquete hecho a tu medida envíanos un mail.</p>
        <a href="../views/contactos.php" class="btn btn-carousel">Quiero contactarme</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../assets/img/banner-3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block fondo">
        <h5 class="carousel_title">¡Nuevo Servicio para nenes!</h5>
        <p class="carousel_description">Ahora los más pequeños también podrán pasarla de 10 con la nueva tendencia en bebidas sin alcohol: mocktails.</p>
        <a href="./detalle.php?id=10" class="btn btn-carousel">Saber más</a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container nosotros">
  <h1 class="text-center mb-4 home_title" class="glitter-text">Party Bar Service</h1>
  <div class="row">
    <div class="col-md-6">
      <h2 class="subtitle">Nosotros</h2>
      <p class="parrafo">Bienvenido a Party Bar Service, tu destino para servicios de coctelería temática y experiencias únicas para fiestas y eventos. En Party Bar Service nos especializamos en crear ambientes extraordinarios y llenos de alegría, ofreciendo paquetes completos que incluyen todo lo necesario para una celebración inolvidable. Desde un bar decorado exquisitamente hasta un menú personalizado de cócteles y expertos bartenders, estamos comprometidos a brindarte la mejor experiencia para tu evento.</p>
    </div>
    <div class="col-md-6">
      <h2 class="subtitle">Creación</h2>
      <p class="parrafo">Party Bar Service nace de la pasión por crear momentos memorables y experiencias excepcionales en cada celebración. Fundada en 2010 por un grupo de amigos con experiencia en la industria de la hospitalidad y la coctelería, la empresa se estableció con la visión de ofrecer servicios de alta calidad que fusionaran creatividad, profesionalismo y diversión. Con el paso de los años, Party Bar Service ha crecido y se ha convertido en un referente en el mundo de la coctelería temática, destacando por su atención al detalle, innovación y compromiso con la satisfacción de sus clientes.</p>
    </div>
  </div>
</div>
<section>
<div class="container preguntas">
  <div class="row">
    <div class="col">
      <h2 class="text-center mb-4 subtitle">Preguntas Frecuentes</h2>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="accordion" id="faqAccordion">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            ¿Qué servicios ofrece Party Bar Service?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
            <div class="accordion-body parrafo">
            Party Bar Services ofrece servicios completos de coctelería temática para fiestas y eventos, que incluyen bar decorado, menú de cócteles personalizado y bartenders profesionales.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            ¿Cómo puedo reservar los servicios de Party Bar Service?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
            <div class="accordion-body parrafo">
            Puedes reservar nuestros servicios meidante el catálogo de la web o contactándonos por mail.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            ¿Party Bar Service se adapta a eventos de diferentes tamaños?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
            <div class="accordion-body parrafo">
            Sí, en Party Bar Service nos adaptamos a eventos de diversos tamaños, desde reuniones íntimas hasta grandes celebraciones, ofreciendo opciones personalizadas para cada ocasión.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            ¿Los bartenders de Party Bar Services son profesionales certificados?
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
            <div class="accordion-body parrafo">
            Sí, todos nuestros bartenders son profesionales certificados con amplia experiencia en el arte de la mixología, garantizando un servicio de calidad y cócteles deliciosos.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            ¿Party Bar Service ofrece opciones sin alcohol en sus servicios?
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
            <div class="accordion-body parrafo">
            Sí, en Party Bar Service también ofrecemos opciones sin alcohol en nuestros servicios de coctelería temática, asegurándonos de satisfacer las preferencias de todos los invitados.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>


<?php 

include $_SERVER['DOCUMENT_ROOT'] . '/partyBarService/app/views/parts/footer.php';

?>