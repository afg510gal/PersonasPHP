<?php
//LLAMADA AL MODELO
require_once("models/personas_model.php");
$per=new personas_model();
$datos=$per->get_personas();

//LLAMADA A LA VISTA
require_once("views/personas_view.phtml");
?>