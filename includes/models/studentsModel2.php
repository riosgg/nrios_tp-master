<?php
// Incluimos la conexion con la base de datos
include_once '../config/bd_conexion.php';

//($_POST['registro'] == 'nuevo')
{	
    $name_addp = $_POST['nameaddp'];
    $lastname_addp = $_POST['lnameaddp'];
    $email_addp = $_POST['emailaddp'];
    
    
	//$sql =("INSERT INTO profes (profeNombre, profeApellido, profeEmail) VALUES profeNombre='$name_addp', profeApellido='$lastname_addp', profeEmail='$email_addp'");
	
    $stmt = $conn->prepare('INSERT INTO profes (profeNombre, profeApellido, profeEmail) VALUES (?, ?, ?)');
    $stmt->bind_param("sss", $name_addp, $lastname_addp, $email_addp);
    $stmt->execute();
 

  //  header("./listProfes.php");
}