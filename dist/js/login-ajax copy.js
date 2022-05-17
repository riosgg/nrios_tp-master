$(document).ready(function() {
    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });

        $('#login-admin').on('submit', function(e) {
                e.preventDefault();
                
                var datos = $(this).serializeArray();
                
                $.ajax({
                    type: $(this).attr('method'),
                    data: datos,
                    url: $(this).attr('action'),
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        var resultado = data;
                        if(resultado.respuesta == 'exitoso') {
                            Toast.fire({
                                icon: 'success',
                                timer: 3000,
                                title: 'Bienvenid@ '+resultado.usuario+' !! '
                              }).then(function() {
                                window.location = "listStudents.php";
                            })
                        } else if(resultado.respuesta == 'error_pass') {
                            Toast.fire({
                                icon: 'error',
                                timer: 3000,
                                title:'Password Incorrecto'
                              })
                        } else {
                            Toast.fire({
                                icon: 'error',
                                timer: 3000,
                                title: resultado.email+' Incorrecto'
                              })
                        }
                    }
                })
        });
});