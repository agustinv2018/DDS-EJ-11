<?php
require_once 'modelo/nacionalidad.php';

class Persona 
{
    public $Nombre;
    public $Direccion;
    public $NumeroDocumento;
    public $Edad;
    public $Nacionalidad;

    public function MostrarDatos()
    {
        echo 'Nombre : ' . $this->Nombre . '<br>';
        echo 'Direccion : ' . $this->Direccion . '<br>';
        echo 'Número de Documento : ' . $this->NumeroDocumento . '<br>';
        echo 'Edad : ' . $this->Edad . '<br>';
        echo 'Id : ' . $this->Nacionalidad->Id . '<br>';
        echo 'Descripcion : ' . $this->Nacionalidad->Descripcion . '<br>';

    }
}
