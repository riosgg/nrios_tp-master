<?php
// Incluimos la conexion con la base de datos
include_once '../config/bd_conexion.php';

//($_POST['registro'] == 'nuevo')
{	
    $name_addm = $_POST['nameaddm'];
    $year_addm = $_POST['yearaddm'];
    $cuatri_addm = $_POST['cuatriaddm'];
    
    
	//$sql =("INSERT INTO profes (profeNombre, profeApellido, profeEmail) VALUES profeNombre='$name_addp', profeApellido='$lastname_addp', profeEmail='$email_addp'");
	
    $stmt = $conn->prepare('INSERT INTO materias (materiasNombre, materiasAño, materiasCuatri) VALUES (?, ?, ?)');
    $stmt->bind_param("sii", $name_addm, $year_addm, $cuatri_addm);
    $stmt->execute();
 

  //  header("./listProfes.php");
}