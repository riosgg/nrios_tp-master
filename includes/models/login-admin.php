<?php
//con la funcion isset verificamos si esta creada la variable post->login-admin
if(isset($_POST['login-admin'])) {
    // si existe asignamos los valores que vienen por post email y password en las variables usuario y password
    $usuario = $_POST['email'];
    $password = $_POST['password'];

    try {
        include_once '../config/bd_conexion.php';
        // realizamos la consulta a la base de datos en la tabla students y filtramos por los datos que coincidan con email
        $stmt = $conn->prepare("SELECT * FROM usuario WHERE userEmail = ?;");
	    $stmt->bind_param('s', $usuario);
	    $stmt->execute();
        $stmt->bind_result($id, $email, $pass);
        if($stmt->affected_rows) {
            // Si la consulta arroja un resultado los datos lo guardamos en el array existe
            $existe = $stmt->fetch();
            // Si existe tiene datos
            if($existe) {
                //realizamos la validacion de que el password que viene del formulario y el password guardado en la base de datos sean iguales
                if(password_verify($password, $pass)) {
                    //Iniciamos la session
                    session_start();
                    // Seteamos nuestras variables de secion con los datos que vienen de la base de datos
                   
                    $_SESSION['email'] = $email;
                    $_SESSION['name'] = $nameStudent;
                    $_SESSION['id'] = $id;
                    $respuesta = array(
                        'respuesta' => 'exitoso',
                        'usuario' => $nameStudent
                    );
                } else {
                    $respuesta = array(
                    'respuesta' => 'error_pass',
                    );
                }
            } else {
                $respuesta = array(
                    'respuesta' => 'error',
                    'email' => $usuario
                    
                );
            }
        }
        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
    die(json_encode($respuesta));
}
