
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/partyBarService/app/class/Productos.php';
include $_SERVER['DOCUMENT_ROOT'] . '/partyBarService/app/views/parts/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/partyBarService/app/views/parts/header.php';



$idService = $_GET['id'];
$service = new ServicePack();
$detalle=$service->traer_detalle($idService);
?>

<div class="container container_detalle">
<a href="../views/catalogo.php" class="btn btn-carousel volver"><i class="fas fa-arrow-circle-left"></i> Volver al Catálogo</a>
  <?php if ($detalle) { ?>
    <div class="row align-items-start">
    <h1 class="home_title"><?php echo $detalle->nombre; ?></h1>
      <div class="col-md-6 ">
        <img src="<?php echo $detalle->imagen_cocteles; ?>" class="d-block w-100 " alt="...">
        <span class="card-title">Precio paquete: $ <?php echo $detalle->precio; ?></span>
      </div>
      <div class="col-md-6 text-justify">
        <p class="mini-detalle"><i class="fa-solid fa-people-group"></i> <?php echo $detalle->cantidad_invitados;?> Invitados <i class="fas fa-glass-cheers"></i> <?php echo $detalle->bebida_por_persona;?> Bebidas x persona <i class="fa-solid fa-tag"> Estilo: <?php echo $detalle->tema_barra;?> </i> <br> <?php echo $detalle->descripcion; ?></p>
        <h2 class="incluido_title">Cócteles incluidos:</h2>
        <ul class="list-group coctel_title">
          <?php foreach ($detalle->cocteles_paquete as $coctel) { ?>
            <li class="list-group-item" id="coctel-item"><i class="fa-solid fa-martini-glass"></i>
                <?php echo $coctel->nombre_coctel; ?>
                <h3 class="ingredientes">Ingredientes:</h3>
                <ul class="list-group list-group-horizontal flex-wrap">
                <?php foreach ($coctel->ingredientes as $composicion) { ?>
                <li class="list-group-item item-coctail"><?php echo $composicion; ?> </li>
                <?php } ?>
                </ul>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  <?php } else { ?>
    <p>Producto no encontrado</p>
  <?php } ?>
</div>

<?php 

include $_SERVER['DOCUMENT_ROOT'] . '/partyBarService/app/views/parts/footer.php';

?>