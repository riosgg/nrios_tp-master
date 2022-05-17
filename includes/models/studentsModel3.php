<?php
// Incluimos la conexion con la base de datos
include_once '../config/bd_conexion.php';

//($_POST['registro'] == 'nuevo')
{	
    $name_addc = $_POST['nameaddc'];
    
    
	//$sql =("INSERT INTO profes (profeNombre, profeApellido, profeEmail) VALUES profeNombre='$name_addp', profeApellido='$lastname_addp', profeEmail='$email_addp'");
	
    $stmt = $conn->prepare('INSERT INTO carreras (carrerasNombre) VALUES (?)');
    $stmt->bind_param("s", $name_addc);
    $stmt->execute();
 

  //  header("./listProfes.php");
}