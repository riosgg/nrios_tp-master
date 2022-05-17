<?php 
include_once './includes/config/bd_conexion.php';

<input type="hidden" name="id" value="<?php echo $id; ?>">

// modified form fields
<input type="text" name="name" value="<?php echo $name; ?>">
<input type="text" name="address" value="<?php echo $address; ?>">


if($_POST['registro'] == 'actualizar'){
        $id_upda = $_GET['id'];
        $name_upda = $_POST['name'];
        $lname_upda = $_POST['lastname'];
	$email_upda = $_POST['email'];

	mysqli_query($db, "UPDATE alumnos SET alumnoNombre='$name_upda', alumnoApellido='$lname_upda' alumnoEmail='$email_upda' WHERE id=$id_upda");
	//$_SESSION['message'] = "Address updated!"; 
        
        
        $stmt = $conn->prepare("UPDATE alumnos SET alumnoNombre='$name_upda', alumnoApellido='$lname_upda' alumnoEmail='$email_upda' WHERE id=$id_upda");


        header('.index.php');
}
?>