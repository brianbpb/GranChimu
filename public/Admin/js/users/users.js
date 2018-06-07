/**
 * Created by louis on 14/04/2018.
 */


$(document).ready(function () {

    //Add User
    $('#add').click(function(){
        console.log('ENTRA');
        var token = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: 'POST',
            url: '/registerUser',
            data: {
                '_token': token,
                'name': $('input[name=name]').val(),
                'lastname': $('input[name=lastname]').val(),
                'email': $('input[name=email]').val(),
                'phone': $('input[name=phone]').val(),
                'password': $('input[name=password]').val(),
            },
            success: function(data) {
                if((data.errors)){

                } else {
                    $('#table').append("<tr " + data.id + ">"+
                    "<td>" + data.name + "</td>" +
                    "<td>" + data.lastname + "</td>" +
                    "<td>" + data.phone + "</td>" +
                    "<td>" + data.email + "</td>" +
                    "<td>" + data.created_at + "</td>" +
                    "<td><a class='show-modal btn btn-primary btn-xs' data-id='" + data.id + "'data-toggle='modal' data-target='#myModalShow'>" +
                    "<i class='fa fa-eye'></i></a>" +
                    "<a class='edit-modal btn btn-primary btn-xs' data-id='" + data.id + "'data-toggle='modal' data-target='#myModalEdit'>" +
                    "<i class='fa fa-pencil'></i></a>" +
                    "<a class='btn btn-danger btn-xs' data-id='" + data.id + "'data-toggle='modal' data-target='#myModalDelete'>" +
                    "<i class='fa fa-trash-o'></i></a>" + "</td>" +
                    "</tr>");
                }
                $('#name').val('');
                $('#lastname').val('');
                $('#email').val('');
                $('#phone').val('');
                $('#password').val('');
                $('#password-confirm').val('');
            }
        });
        });

    //Show User

    //Edit User

    $(document).on('click', '.edit-modal', function() {
        $('#footer_action_button').text(" Editar Usuario");
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Edit Usuario');
        $('#fid').val($(this).data('id'));
        $('#n').val($(this).data('name'));
        $('#lt').val($(this).data('lastname'));
        $('#e').val($(this).data('email'));
        $('#p').val($(this).data('phone'));
    });

    /*var delete_user_row_button = $("#button_delete_user");

    delete_user_row_button.on('click', function () {
        var userId = $("#data_user").attr('data-user-id');
        $('#hidden-user-id').val(userId);

        var userIdModal = $('#hidden-user-id').val();
        var token = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: 'POST',
            url: '/usersDelete',
            data: {
                id : userIdModal,
                _token : token
            },
            success:function(resp) {
                console.log('SEND');
            }, error : function(err) {
                console.log("NO SEND");
            }
        });
    });*/
});



function delete_user() {
    var user = $('#tbody_id').val();
    console.log(user);
    var userId = $('.button_delete_subUser').attr('data-subuser-id');

}