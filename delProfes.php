<?php 
include_once './includes/config/bd_conexion.php';
$id_borrar = $_GET['id'];
        $stmt = $conn->prepare('DELETE FROM profes WHERE id = ? ');
        $stmt->bind_param('i', $id_borrar);
        $stmt->execute();
        header("location:listProfes.php");
?>