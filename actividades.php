<?php
include_once("funciones.php");
$objeto = new Objeto;
$crud = new CRUD;

$id = $_POST['txtId'];
$nombre = $_POST['txtNombre'];
$primer_apellido = $_POST['txtPrimer_apellido'];
$segundo_apellido = $_POST['txtSegundo_apellido'];
$sexo = $_POST['txtSexo'];
$accion = $_POST['cmbAccion'];

$objeto->id = $id;
$objeto->nombre = $nombre;
$objeto->primer_apellido = $primer_apellido;
$objeto->segundo_apellido = $segundo_apellido;
$objeto->sexo = $sexo;

if ($accion=='registrar') {
    $crud->RegistrarUsuario($objeto);
    
} else if ($accion == 'eliminar') {
    $crud->EliminarUsuario($id);
} else if ($accion == 'modificar'){
    $crud->ActualizarUsuario($objeto);
}
?>