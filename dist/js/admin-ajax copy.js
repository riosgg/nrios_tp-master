$(document).ready(function() {
  // Se crea el objeto Toast que se extiende de la clase Swal del plugin SweetAlert y se definen propiedades por defecto  
  var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
  // Guardar registro nuevo y Editado
    $('#guardar-registro').on('submit', function(e) {
            // detiene todas las acciones del dom hasta que ajax reciba la respuesta de php
            e.preventDefault();
            // se serializa el array de datos con lo datos que se enviaron desde el form
            var datos = $(this).serializeArray();
            // inicia el metodo AJAX
            $.ajax({
                // Se define la propiedad TYPE que es el tipo de peticion que se va a ejecutar POST o GET, por defualt es GET de no especificar otra cosa
                // En este caso es capturada del mismo objeto capturando el atrivuto "METHOD" que viene del form
                type: $(this).attr('method'),
                // Se define la propiedad data que se le asigna el array datos definida anteriormente
                data: datos,
                // Se define la propiedad URL en esta se debe definir el path con el script que ajax debe interactuar
                // En este caso es capturada del mismo objeto capturando el atrivuto "action" que viene del form
                url: $(this).attr('action'),
                //Se define la propiedad datatype, que es el tipo de datos que esperas obtener del servidor (si no se especifica, jQuery intenta averiguar de qué tipo se trata)
                dataType: 'json',
                // La "success", función que se ejecuta cuando se obtiene una respuesta con éxito
                success: function(data) {
                    // la funcion "console.log" Captura los mensajes enviados desde el script php
                    console.log(data);
                    // se guardan los datos en el arral "resultado"
                    var resultado = data;
                    // condicion que se ejecuta si la posicion respuesta del array resultado que son los mensajes capturados del script php es = a exito
                    if(resultado.respuesta == 'exito') {
                        // Se define el modal que es heredado del plugin SweetAlert Documentacio https://sweetalert2.github.io/
                        Toast.fire({
                            icon: 'success',
                            timer: 3000,
                            title: 'Se guardo correctamente el registro ' + resultado.id_registro
                          }).then(function() {
                            window.location = "listStudents.php";
                        })
                          
                          
                    } else if(resultado.respuesta == 'error-users'){
                      Toast.fire({
                        icon: 'error',
                        timer: 3000,
                        title: 'Ya existe el usuario '
                      })

                    }
                }
              })
            });


  // Eliminar un registro

    $('.borrar_registro').on('click', function(e) {
        e.preventDefault();

        var id = $(this).attr('data-id');
        var tipo = $(this).attr('data-tipo');

        
          Swal.fire({
            icon: 'question',
            title: '¿Estás seguro?',
            showCancelButton: true,
            confirmButtonText: 'Eliminar',
            cancelButtonText: 'Cancelar'

          }).then((result) => {
            if (result.isConfirmed){
                $.ajax({
                    type:'post',
                    data: {
                        id : id,
                        registro : 'eliminar'
                    },
                    url: 'includes/models/studentsModel.php',
                    success:function(data) {
                        console.log(data);
                        var resultado = JSON.parse(data);
                        if(resultado.respuesta == 'exito') {
                          Toast.fire({
                            icon: 'success',
                            title: 'Se eliminado correctamente el registro ' + resultado.id_eliminado
                          })
                            jQuery('[data-id="'+ resultado.id_eliminado +'"]').parents('tr').remove();
                        } else {
                          Toast.fire({
                            icon: 'error',
                            title: 'No se pudo eliminar el registro'
                          })
                        }

                    }
                })
               
              }
        });
    });


});