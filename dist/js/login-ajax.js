$(document).ready(function() {
    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });

        $('#login-admin').validate({
            rules: {
                email: {
                    required: true,
                    email: true,
                  },
                  password: {
                    required: true,
                    minlength: 5
                  },
            },
            messages: {
                email: {
                  required: "Por favor ingrese su email",
                  email: "Por favor ingrese un mail valido"
                },
                password: {
                  required: "Por favor ingrese su contraseña",
                  minlength: "Su password debe contener como minimo 5 caracteres"
                },
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
              error.addClass('invalid-feedback');
              element.closest('.input-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
              $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
              $(element).removeClass('is-invalid');
            },
            submitHandler: function(form) {
                var datos = $(form).serializeArray();
                
                $.ajax({
                    type: $(form).attr('method'),
                    data: datos,
                    url: $(form).attr('action'),
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
                                title: resultado.email+'  no existe'
                              })
                        }
                    }
                })
              }
            
            

        });
});