<?php
// Incluimos la conexion con la base de datos
include_once '../config/bd_conexion.php';


    // Evaluamos con IF si en la variable post registro el valor es nuevo en caso de true se ejecuta el script que contiene
if($_POST['registro'] == 'nuevo'){

    
    /* $respuesta = array(
        'post' => $_POST,
        'file' => $_FILES['imagen']
    );
    die(json_encode($respuesta)); */
    

    // Capturamos los datos recibidos por post que nos envia el formulario
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    //Realizamos el Hash de la password
    $opciones = array(
        'cost' => 12
    );
  //  $password_hashed = password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]);
   // $stmt = "SELECT * FROM students WHERE email = '$email'";
   // $user_very = $conn->query($stmt);
   // if (mysqli_num_rows($user_very)==0) {
        # code...
    
    // con la funcion try ejecutamos el codigo en modo debug y capturamos los errores si se producen
        try {
            // creamos el obvjeto STMT y le asignamos el Objeto $conn que es el objeto creado en la conexion con la base de datos, utilizamos el metodo "prepare" de la clase mysqli para preparar la query sql
            $stmt = $conn->prepare('INSERT INTO alumnos (alumnoNombre, alumnoApellido, alumnoEmail) VALUES (?, ?, ?) ');
            // con el metodo bind_param asignamos los valores y los tipos de datos correspondientes
            $stmt->bind_param("sss", $name, $lastname, $email);
            // ejecutamos la query con "execute"
            $stmt->execute();
            // en la variable "id_insertado" capturamos el ID que nos devuelve mysql
            $id_insertado = $stmt->insert_id;
            // en esta condicion consultamos si mysql nos devuelve alguna fila afectada de ser verdadero quiere decir que se ejecuto la query y se guardaron los datos.
            if($stmt->affected_rows) {
                // generamos el array respuesta este va ser en formato json para devolverselo a ajax
                $respuesta = array(
                    'respuesta' => 'exito',
                    'id_registro' => $id_insertado,
                );
                // si lo anterior no se cumple el array va a contener el mensaje error para generar el cartel correspondiente.
            } else {
                $respuesta = array(
                    'respuesta' => 'error',
                );
            }
            // cerramos las conexiones correspondiente
            $stmt->close();
            $conn->close(); 
        }
            // con catch capturamos las exceciones $e es la excecion que devuelve el try que se ejecuto antes, si existe en el array respuesta pasamos el mensaje que contiene para mitigar el error.
        catch (Exception $e) {
            $respuesta = array(
                'respuesta' => $e->getMessage()
            );
        }

    } else {
        $respuesta = array(
            'respuesta' => 'error-users'
        );
    }
    // con "die" frenamos la ejecucion y enviamos el array respuesta con "json_encode" le retornamos a ajax la respuesta en json.
    die(json_encode($respuesta));
//}
// este script es exactamente igual que el anterior pero cambia la query ya es para actualizar, en este capturamos el id del campo que vamos a actualizar, este es enviado atravez del formulario. 
if($_POST['registro'] == 'actualizar'){
 
    $id_upd = $_GET['id'];
    //$id = $_POST['id_registro'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    
    $stmt = $conn->prepare('UPDATE alumnos SET alumnoNombre = ?, alumnoApellido = ?, alumnoEmail = ? WHERE id = ?');
    $stmt->bind_param("sssi", $name, $lastname, $email, $id_upd);
    $stmt->execute();
    header("location:listStudents.php");
    
/*
    $id = $_POST['id_registro'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    try {
        

        $stmt = $conn->prepare('UPDATE alumnos SET alumnoNombre = ?, alumnoApellido = ?, alumnoEmail = ? WHERE id = ?');
        $stmt->bind_param("sssi", $name, $lastname, $email, $id);
        $stmt->execute();
        header("location:listStudents.php");
        if($stmt->affected_rows) {
            $respuesta = array(
                'respuesta' => 'exito',
                'id_registro' => $id
            );
        } else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }

        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        $respuesta = array(
            'respuesta' => $e->getMessage()
        );
    }

    die(json_encode($respuesta));

*/
}
// en este script eliminamos un registro, para eso solo necesitamos capturar el id y en la query pasarlo al "where" para que nos borre el campo correcto unicamente, de no espeificar el where eliminara todos los campos.
if($_POST['registro'] == 'eliminar'){

    
    /*try {
        $stmt = $conn->prepare('DELETE FROM alumnos WHERE id = ? ');
        $stmt->bind_param('i', $id_borrar);
        $stmt->execute();
        if($stmt->affected_rows) {
            $respuesta = array(
                'respuesta' => 'exito',
                'id_eliminado' => $id_borrar
            );
        } else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
    } catch (Exception $e) {
        $respuesta = array(
            'respuesta' => $e->getMessage()
        );
    }*/
    die(json_encode($respuesta));
}
?>