<?php

header('Content-Type: application/json');

require_once 'modelosRespuestas/consultarRespuesta.php';
require_once '../../modelo/Operador.php';
require_once '../../modelo/satelite.php';



$resp= new ConsultarRespuesta();


$o= New Operador();
$o-> Nombre= 'ARSAT';
$o-> TipoEmpresa= 'Publica';
$o-> FormaLegal= 'Sociedad Anonima';

$s= New Satelite();
$s-> Id= $_GET['Id'];
$s-> Nombre= 'Arsat-1';
$s->TipoMision= 'Comucicaciones';
$s->Duracionenanios= '15';
$s->Operador= $o;






$resp->Satelite=$s;
echo json_encode ($resp);