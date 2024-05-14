<?php
require $_SERVER['DOCUMENT_ROOT'] . '/partyBarService/app/class/Productos.php';
include $_SERVER['DOCUMENT_ROOT'] . '/partyBarService/app/views/parts/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/partyBarService/app/views/parts/header.php';

$objetos = new ServicePack();
$miCatalogo = $objetos->traer_catalogo();

?>

<div class="container container-catalogo">
  <h1 class="subtitle">Paquetes:</h1>
  <p class="parrafo"> Aquí te mostramos los distintos servicios que manejamos actualmente para que puedas escoger el que mejor se adapte a tu evento.</p>
  <div class="row my-5 ">
    <?php foreach ($miCatalogo as $service) { ?>
      <div class="col-md-4 mb-4">
        <div class="card mx-auto" style="width: 20rem;">
          <div class="img-contenedor">
          <img src="<?php echo $service->imagen_bar ?>" class="img-fluid rounded img-thumbnail" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $service->nombre ?></h5>
              <p class="card-text"><?php echo $service->short_descripcion ?></p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="fa-solid fa-people-group"></i> Hasta <?php echo $service->cantidad_invitados ?> invitados.</li>
            <li class="list-group-item"><i class="fas fa-glass-cheers"></i> Bebidas por persona: <?php echo $service->bebida_por_persona ?></li>
            <li class="list-group-item"><i class="fa-solid fa-hand-holding-dollar"></i> $ <?php echo $service->precio ?></li>
          </ul>
          <div class="card-body text-end">
          <a href="./detalle.php?id=<?php echo $service->id; ?>" class="btn btn-carousel">Ver más</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<?php 

include $_SERVER['DOCUMENT_ROOT'] . '/partyBarService/app/views/parts/footer.php';

?>

