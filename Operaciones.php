<?php
// ****************************************************
// Program Assignment: Programa 1
// Name: Javier Estupiñan
// Date: 12-08-2015
// Description: Clase Principal del sistema Genera media y desviacion Estandar
// ****************************************************
class Operaciones{

    private $lista;
    private $media;
    private $columna;
    private $desviacionStandard;

    function Operaciones($_lista, $_columna){
        $this->lista=$_lista;
        $this->columna=$_columna;
        $sumaMedia = 0;
        $cantidadRegistros = 0;
        while( $_lista->next !== null ) {
            $sumaMedia+= $_columna==1 ? $_lista->dato:$_lista->datod;
            $_lista = $_lista->next;
            $cantidadRegistros++;
        }
        $this->media = $sumaMedia / $cantidadRegistros;

        $listaDesviacion=$this->lista;
        $sumaDesviacion = 0;
        while( $listaDesviacion->next !== null ) {
            $sumaDesviacion += (($_columna==1 ? $listaDesviacion->dato:$listaDesviacion->datod) - $this->media)  ** 2;
            $listaDesviacion = $listaDesviacion->next;
        }
        $this->desviacionStandard = sqrt($sumaDesviacion / ($cantidadRegistros - 1));
    }

    function getMedia($redondear=1){
        return $redondear ? round($this->media, 2):$this->media;
    }

    function getDesviacionStandard($redondear=1){
        return $redondear ? round($this->desviacionStandard, 2):$this->desviacionStandard;
    }

    function imprimirResultados(){
        echo "<br><table border='1'><thead><tr><th>Test</th><th colspan='2'>Actual Value</th></tr></thead><tbody><tr><td></td><td>Mean</td><td>Std. Dev</td></tr><tr><td>Tabla 1 Columna ".$this->columna."</td><td>".$this->getMedia()."</td><td>".$this->getDesviacionStandard()."</td></tr><tbody></table>";
    }

}
?>
