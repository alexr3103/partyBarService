<?php


class ServicePack{
  public $id;
  public $nombre;
  public $cocteles_paquete;
  public $precio;
  public $cantidad_invitados;
  public $bebida_por_persona;
  public $tema_barra;
  public $descripcion;
  public $imagen_bar;
  public $imagen_cocteles;



  //metodo 1: traer catalogo
   public function traer_catalogo(){
  
    $json = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/partyBarService/app/resource/productos.json'); //carga el contenido del archivo JSON como una cadena de texto
    $jsonData = json_decode($json); //lo trasnforma a una estructura de datos
   
    $catalogo = []; // Dejamos preparada la variable para que guarde el dato

    foreach ($jsonData as $value) { // recorremos el JSON
      $ServicePack = new self(); //crear una nueva instancia de estos productos
      $ServicePack->id = $value->id;
      $ServicePack->nombre = $value->nombre;
      $ServicePack->precio= $value->precio;
      $ServicePack->cantidad_invitados= $value->cantidad_invitados;
      $ServicePack->bebida_por_persona= $value->bebida_por_persona;
      $ServicePack->tema_barra= $value->tema_barra;
      $ServicePack->short_descripcion=$value->short_descripcion;
      $ServicePack->descripcion= $value->descripcion;
      $ServicePack->imagen_bar= $value->imagen_bar;
      $ServicePack->imagen_cocteles= $value->imagen_cocteles;

      $ServicePack->cocteles_paquete = [];
      foreach ($value->cocteles_paquete as $coctel) {
        $coctelito = new stdClass();
        $coctelito->nombre_coctel = $coctel->nombre_coctel;
        $coctelito->ingredientes = $coctel->ingredientes;
        $ServicePack->cocteles_paquete[] = $coctelito;
    }

      $catalogo[] = $ServicePack;
    }
    return $catalogo;
}


public function traer_detalle($idService){
        $catalogo = $this->traer_catalogo();
        foreach ($catalogo as $ServicePack) {
            if($ServicePack->id == $idService){
              return $ServicePack;
            }
        }
      return null; 
}
}


