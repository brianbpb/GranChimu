/**
 * Created by louis on 14/04/2018.
 */

$(document).ready(function () {
    var delete_user_row_button = $('#button_delete_user');

    delete_user_row_button.on('click', function () {
        console.log("TEST");
    });
});



function delete_user() {
    var user = $('#tbody_id').val();
    console.log(user);
    var userId = $('.button_delete_subUser').attr('data-subuser-id');

}