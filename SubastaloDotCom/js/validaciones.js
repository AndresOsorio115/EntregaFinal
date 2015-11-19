$().ready(function () {
    $("#formL").validate({
                rules: {
                    usuario: {
                        required: true,
                        minlength: 2
                    },
                    contraseña:{
                        required: true,
                        minlength: 4
                    }
        }, 
        messages: {
            nombre: {
                required: "Campo Vacio, Ingrese un nombre",
                minlength: "Ingrese mas de 2 caracteres"
            },
            contraseña: {
            required: "Campo vacio, Ingrese una contraseña",
            minlength: "Ingrese mas de 4 caracter"
            }
        }
    });
});

$().ready(function () {
    $("#formCli").validate({
                rules: {
                    nombre: {
                        required: true,
                        minlength: 3,
                        lettersonly: true
                    },
                     apellido: {
                        required: true,
                        minlength: 1,
                     },
                     cedula: {
                        required: true,
                        minlength: 1
                     },
                     direccion: {
                        required: true,
                     },
                     correo: {
                        required: true,
                        minlength: 1
                     },
                     telefono: {
                        required: true,
                        minlength: 1
                     },
                     contraseña: {
                        required: true,
                        minlength: 1
                     }
        }, 
         messages: {
            nombre: {
                required: "Campo Vacio, Ingrese un nombre",
                minlength: "Ingrese mas de 2 caracteres"
            },
            apellido: {
                required: "Campo vacio, Ingrese un telefono",
                minlength: "Ingrese mas de 1 caracter"
            },
            cedula: {
               required: "Campo vacio, Ingrese una cedula",
               minlength: "Inrese mas de 1 caracter"
            },
            direccion: {
               required: "Campo vacio, Ingrese un direccion"
            },
            correo: {
            required: "Campo vacio, Ingrese una correo",
            minlength: "Ingrese mas de 1 caracter"
            },
            telefono: {
            required: "Campo vacio, Ingrese una telefono",
            minlength: "Ingrese mas de 1 caracter"
            },
            contraseña: {
            required: "Campo vacio, Ingrese una contraseña",
            minlength: "Ingrese mas de 1 caracter"
            }
        }
    });
});


$().ready(function () {
    $("#FormEmp").validate({
                rules: {
                    nombre: {
                        required: true,
                        minlength: 2,
                        lettersonly: true
                    },
                     telefono: {
                        required: true,
                        minlength: 5,
                        number: true
                     },
                     direccion: {
                        required: true,
                        minlength: 4,
                     },
                     correo: {
                        required: true
                     },
                     contraseña: {
                        required: true,
                     }
        }, 
        messages: {
            nombre: {
                required: "Campo Vacio, Ingrese un nombre",
                lettersonly: "Nombre Invalido, Ingrese solo letras",
                minlength: "Ingrese mas de 2 caracteres"
            },
            codigo: {
                required: "Campo vacio, Ingrese un telefono",
                minlength: "Ingrese mas de 1 caracter",
                number: "invalido, Ingrese solo numeros"
            },
            precio: {
            required: "Campo vacio, Ingrese una contraseña",
            minlength: "Ingrese mas de 1 caracter",
            digits: "Ingrese  solo numeros"
            },
            fechaF: {
                required: "Campo vacio, Ingrese una fecha",
                date: "Fecha invalida, (dd/mm/aa)"
            },
            fechaE: {
                required: "Campo vacio, Ingrese una fecha",
                date: "Fecha invalida, (dd/mm/aa)"
            },
            descri: {
                required: "Campo vacio, Ingrese una descripcion",
                minlength: "Ingrese mas de 1 caracter"
            }

        }
    });
});

$().ready(function () {
    $("#formL").validate({
                rules: {
                    usuario: {
                        required: true,
                        minlength: 1
                    },
                     contraseña: {
                        required: true,
                        minlength: 1,
                     },
        }, 
        messages: {
            usuario: {
            required: "Campo vacio, Ingrese un usuario",
            minlength: "Ingrese mas de 1 caracter"  
            } 
        }
    });
});