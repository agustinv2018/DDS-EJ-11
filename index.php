<?php

require_once 'modelo/nacionalidad.php';
require_once 'modelo/persona.php';

$na = new Nacionalidad;
$na->Id = 123456;
$na->Descripcion = 'Argentino';

$p = new Persona;
$p->Nombre = 'Agustin';
$p->Direccion = 'Los Senecios 350';
$p->NumeroDocumento = '36734474';
$p->Edad = '29';
$p->Nacionalidad = $na;

$p->MostrarDatos();
