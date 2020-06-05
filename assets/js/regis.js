/**
 * 
 * Sector Usuarios
 * 
 */
$('#add-new-user').click(function(event) {
    /* Act on the event */
    $('#modal-user').find('.modal-title').text('Agregar usuario');
    $('#modal-user').modal('show');
    $('#submit-user').val('add');
});

//uso el mismo modal para editar y para crear un usuario

$(document).on('submit', '#form-user', function(event) {
    event.preventDefault();

    /* Informacion tomada del formulario */

    var iName = $('#item-nombre').val();
    var iApe = $('#item-apellido').val();
    var iDNI = $('#item-nrodocumento').val();
    var submit = $('#submit-user').val();
    var id_usuario = $('#item-id-usuario').val();

    if (submit == "edit") {
        $.ajax({
            url: 'data/edit_user.php',
            type: 'post',
            dataType: 'json',
            data: {
                iName,
                iApe,
                iDNI,
                id_usuario
            },
            success: function(data) {
                // console.log(data);
                if (data.valid == true) {
                    $('#modal-message').find('#msg-body').text(data.msg);
                    $('#modal-user').modal('hide');
                    showAllUsers();
                    $('#modal-message').modal('show');
                } else {
                    $('#modal-message').find('#msg-body').text(data.msg);
                    $('#modal-message').modal('show');

                }
            },
            error: function() {
                alert('127');
            }
        });
    } //end edit
    else if (submit == "add") {
        $.ajax({
            url: 'data/add_user.php',
            type: 'post',
            dataType: 'json',
            data: {
                iName,
                iApe,
                iDNI
            },
            success: function(data) {
                // console.log(data);
                if (data.valid == true) {
                    $('#modal-message').find('#msg-body').text(data.msg);
                    $('#modal-user').modal('hide');
                    showAllUsers();
                    $('#modal-message').modal('show');
                } else {
                    $('#modal-message').find('#msg-body').text(data.msg);
                    $('#modal-message').modal('show');

                }
            },
            error: function() {
                //eMsg('127');
            }
        });
    } //end add
});

//temina la creacion y modificacion de usuarios.

//cuando ce cierre el modal se limpia

$("#modal-user").on('hidden.bs.modal', function() {
    //alert("Esta accion se ejecuta al cerrar el modal")
    vaciar_modal_user()

});

function vaciar_modal_user() {
    $('#item-nombre').val('');
    $('#item-apellido').val('');
    $('#item-nrodocumento').val('');
    $('#submit-user').val('');
    $('#item-id-usuario').val('');
}

// fin clean modal

//Para editar el usuario
function editModalUser(id_usuario) {


    $.ajax({
        url: 'data/get_user.php',
        type: 'post',
        dataType: 'json',
        data: {
            id_usuario
        },
        success: function(data) {
            $('#modal-user').find('.modal-title').text(data.titulo);
            $('#item-nombre').val(data.nombre);
            $('#item-apellido').val(data.apellido);
            $('#item-nrodocumento').val(data.documento);
            $('#item-id-usuario').val(data.id_usuarios);
            $('#submit-user').val(data.evento);
            $('#modal-user').modal('show');
        },
        error: function() {
            alert('Error: L56+');
        }
    });
}
//end editModal


//Mostrar todos los usuarios

function showAllUsers() {
    $.ajax({
        url: 'data/all_user.php',
        type: 'post',
        success: function(data) {
            $('#all-user').html(data);
        },
        error: function() {
            eMsg('Error llamar al administrador');
            //console.log('Fallo llamada ajax all_user.php')
        }
    });
} //fin show user
showAllUsers();


/***
 * 
 * 
 * Sector productos
 * 
 * 
 */

//Mostrar todos los Productos

function showAllproductos() {
    $.ajax({
        url: 'data/all_producto.php',
        type: 'post',
        success: function(data) {
            $('#all-producto').html(data);
        },
        error: function() {
            eMsg('Error llamar al administrador');
            //console.log('Fallo llamada ajax all_producto.php')
        }
    });
} //fin show productos
showAllproductos();


//muestro el modal para crear un producto

$('#add-new-product').click(function(event) {
    /* Act on the event */
    $('#modal-product').find('.modal-title').text('Agregar Producto');
    $('#modal-product').modal('show');
    $('#submit-product').val('add');
});

//Creo y modifico productos con el mismo modal

$(document).on('submit', '#form-product', function(event) {
    event.preventDefault();

    /* Informacion tomada del formulario */

    var iName = $('#item-nombre').val();
    var iCant = $('#item-cantidad').val();
    var submit = $('#submit-product').val();
    var id_producto = $('#item-id-producto').val();


    if (submit == "edit") {

        $.ajax({
            url: 'data/edit_producto.php',
            type: 'post',
            dataType: 'json',
            data: {
                iName,
                iCant,
                id_producto
            },
            success: function(data) {
                // console.log(data);
                if (data.valid == true) {
                    $('#modal-message').find('#msg-body').text(data.msg);
                    $('#modal-product').modal('hide');
                    showAllproductos();
                    $('#modal-message').modal('show');
                } else {
                    $('#modal-message').find('#msg-body').text(data.msg);
                    $('#modal-message').modal('show');

                }
            },
            error: function() {
                alert('No se pudo editar');
            }
        });
    } //end edit
    else if (submit == "add") {

        $.ajax({
            url: 'data/add_producto.php',
            type: 'post',
            dataType: 'json',
            data: {
                iName,
                iCant
            },
            success: function(data) {

                if (data.valid == true) {
                    $('#modal-message').find('#msg-body').text(data.msg);
                    $('#modal-product').modal('hide');
                    showAllproductos();
                    $('#modal-message').modal('show');
                } else {
                    $('#modal-message').find('#msg-body').text(data.msg);
                    $('#modal-message').modal('show');

                }
            },
            error: function() {
                alert('No se pudo agregar el producto')
            }
        });
    } //end add
});

//temina la creacion y modificacion de usuarios.


//limpio el modal
$("#modal-product").on('hidden.bs.modal', function() {
    //alert("Esta accion se ejecuta al cerrar el modal")
    vaciar_modal_product()

});

function vaciar_modal_product() {
    $('#item-nombre').val('');
    $('#item-cantidad').val('');
    $('#item-id-producto').val('');
    $('#submit-product').val('');
}

//fin limpio modal

//llamo el modal para editar

function editModalProduct(id_producto) {

    // $('#submit-item').val('add');
    $.ajax({
        url: 'data/get_producto.php',
        type: 'post',
        dataType: 'json',
        data: {
            id_producto
        },
        success: function(data) {
            $('#modal-product').find('.modal-title').text(data.titulo);
            $('#item-nombre').val(data.nombre);
            $('#item-cantidad').val(data.cantidad);
            $('#item-id-producto').val(data.id_producto);
            $('#submit-product').val(data.evento);
            $('#modal-product').modal('show');
        },
        error: function() {
            alert('Error: L56+');
        }
    });
} //end editModal



/**
 * 
 * 
 * Sector Guias
 * 
 * 
 * 
 */

//muestro todas las guias

function showAllGuias() {
    $.ajax({
        url: 'data/all_guias.php',
        type: 'post',
        success: function(data) {
            $('#all-guias').html(data);
        },
        error: function() {
            eMsg('Error llamar al administrador');
            //console.log('Fallo llamada ajax all_guias.php')
        }
    });
} //fin show user
showAllGuias();

//llamo el modal para crear una guia

$('#add-new-guia').click(function(event) {
    /* Act on the event */
    $('#modal-guia').find('.modal-title').text('Agregar Guia');
    $('#modal-guia').modal('show');
    $('#submit-guia').val('add');
});

$(document).on('submit', '#form-guia', function(event) {
        event.preventDefault();

        /* Informacion tomada del formulario */

        var idProducto = $('#item-producto-guia').val();
        var iCant = $('#item-cantidad').val();
        var iDetalle = $('#item-detalle').val();

        $.ajax({
            url: 'data/add_guia.php',
            type: 'post',
            dataType: 'json',
            data: {
                idProducto,
                iDetalle,
                iCant
            },
            success: function(data) {

                if (data.valid == true) {
                    $('#modal-message').find('#msg-body').text(data.msg);
                    $('#modal-guia').modal('hide');
                    showAllGuias();
                    $('#modal-message').modal('show');
                } else {
                    $('#modal-message').find('#msg-body').text(data.msg);
                    $('#modal-message').modal('show');

                }
            },
            error: function() {
                alert('No se pudo agregar el producto')
            }
        });

    }) //end add

//temina la creacion de guias


// limpio modal de las guias
$("#modal-guia").on('hidden.bs.modal', function() {
    //alert("Esta accion se ejecuta al cerrar el modal")
    vaciar_modal_guia()

});

function vaciar_modal_guia() {
    $('#item-cantidad').val('');
    $('#item-detalle').val('');
    $('#submit-guia').val('');
    $("#item-producto-guia").prop('selectedIndex', 0);
}

//fin limpio modal guias