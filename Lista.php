<?php
// ****************************************************
// Program Assignment: Programa 1
// Name: Javier Estupiñan
// Date: 12-08-2015
// Description: Genera la lista Ligada
// ****************************************************
require_once('Nodo.php');

class Lista {

    private $archivo;
    private $listaGeneral;

    function Lista($_archivo) {
        $this->archivo=$_archivo;
        $this->listaGeneral = new Nodo();
        if (($gestor = fopen($this->archivo, "r")) !== FALSE) {
            while (($datos = fgetcsv($gestor , 1000, ",")) !== FALSE) {
                $li = new Nodo();
                List($li->dato,$li->datod)=$datos;
                $li->next = $this->listaGeneral;
                $this->listaGeneral = $li;
            }
        }
    }

    function getLista(){
        return $this->listaGeneral;
    }

    function imprimirLista(){
      echo "<table border='1'><tr><th>Columna 1</th><th>Columna 2</th></tr>";
      while( $this->listaGeneral->next !== null ) {
          echo "<tr><td>".$this->listaGeneral->dato."</td><td>".$this->listaGeneral->datod."</td><tr>";
          $this->listaGeneral = $this->listaGeneral->next;
      }
      echo "</table>";
    }

}
?>
