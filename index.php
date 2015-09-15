<?php
// ****************************************************
// Program Assignment: Programa 1
// Name: Javier Estupiñan
// Date: 12-08-2015
// Description: Inicio de la Aplicacion
// ****************************************************
require_once('Lista.php');
require_once('Operaciones.php');
$lista = new Lista('pruebas.csv');
$columnaUno = new Operaciones($lista->getLista(), 1);
$columnaDos = new Operaciones($lista->getLista(), 2);
$lista->imprimirLista();
$columnaUno->imprimirResultados();
$columnaDos->imprimirResultados();
?>
