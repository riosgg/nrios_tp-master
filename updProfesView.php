<?php 
include_once './includes/config/bd_conexion.php';

if(isset($_POST['update']))
{	
    $id_updp = $_POST['id_registro'];
    $name_updp = $_POST['nameupdp'];
    $lastname_updp = $_POST['lnameupdp'];
    $email_updp = $_POST['emailupdp'];
	
	//$result = mysqli_query($mysqli, "UPDATE profes SET profeNombre='$name_updp', profeApellido='$lastname_updp', profeEmail='$email_updp' WHERE profeID=$id_updp");
	header("Location: listProfes.php");
    $stmt = $conn->prepare('UPDATE profes SET profeNombre = ?, profeApellido = ?, profeEmail= ? WHERE id= ?');
        $stmt->bind_param("sssi", $name_updp, $lastname_updp, $email_updp, $id_updp);
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