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


$(document).on('submit', '#form-user', function(event) {
    event.preventDefault();


    /* Act on the event */

    var iName = $('#item-name').val();
    var iApe = $('#item-ape').val();
    var iDNI = $('#item-dni').val();
    var submit = $('#submit-item').val();


    if (submit == "edit") {
        $.ajax({
            url: 'data/edit_user.php',
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
                    $('#modal-item').modal('hide');
                    showAllItem();
                    $('#modal-message').modal('show');
                }
            },
            error: function() {
                eMsg('127');
            }
        });
    } //end submit
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
                    $('#modal-item').modal('hide');
                    showAllItem();
                    $('#modal-message').modal('show');
                }
            },
            error: function() {
                eMsg('127');
            }
        });
    } //end submit
});





/***
 * 
 * 
 * Sector productos
 * 
 * 
 */



/**
 * 
 * 
 * Sector ordenes
 * 
 * 
 * 
 */