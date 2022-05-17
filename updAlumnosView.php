<?php 
include_once './includes/config/bd_conexion.php';

if(isset($_POST['update']))
{	
    $id_upda = $_POST['id_registro'];
    $name_upda = $_POST['nameupda'];
    $lastname_upda = $_POST['lnameupda'];
    $email_upda = $_POST['emailupda'];
	
	$result = mysqli_query($mysqli, "UPDATE alumnos SET alumnoNombre='$name_upda', alumnoApellido='$lastname_upda', alumnoEmail='$email_upda' WHERE id=$id_upda");
	header("Location: listStudents.php");
    $stmt = $conn->prepare('UPDATE alumnos SET alumnoNombre = ?, alumnoApellido = ?, alumnoEmail= ? WHERE id= ?');
        $stmt->bind_param("sssi", $name_upda, $lastname_upda, $email_upda, $id_upda);
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