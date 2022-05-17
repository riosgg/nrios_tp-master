<?php 
include_once './includes/config/bd_conexion.php';

if(isset($_POST['update']))
{	
    $id_updc = $_POST['id_registro'];
    $name_updc = $_POST['nameupdc'];
	
	//$result = mysqli_query($mysqli, "UPDATE profes SET profeNombre='$name_updp', profeApellido='$lastname_updp', profeEmail='$email_updp' WHERE profeID=$id_updp");
	header("Location: listCarreras.php");
    $stmt = $conn->prepare('UPDATE carreras SET carrerasNombre = ? WHERE id= ?');
        $stmt->bind_param("si", $name_updc, $id_updc);
        $stmt->execute();

/*
if($_POST['registro'] == 'actualizar'){
    
    $id_upda = $_POST['id_registro'];
    $name_upda = $_POST['nameupda'];
    $lastname_upda = $_POST['lnameupda'];
    $email_upda = $_POST['emailupda'];
    
    mysqli_query('UPDATE alumnos SET alumnoNombre = '$name_upda', alumnoApellido = '$lastname_upda', alumnoEmail = '$email_upda' WHERE id = '$id_upda'');
  //  $stmt->bind_param("sssi", $name, $lastname, $email, $id_upd);
   // $stmt->execute();
    header("location:listStudents.php");
*/
}