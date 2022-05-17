<?php 
//include './includes/config/sesiones.php';
include_once './includes/config/bd_conexion.php';
$id = $_GET['id'];
if(!filter_var($id, FILTER_VALIDATE_INT)) {
    die("Error!");
}
include './includes/header.php';
//include './includes/nav.php';
include './includes/navbar.php';
include './includes/editProfesView.php';
include './includes/footer.php';
include './includes/script.php';


?>