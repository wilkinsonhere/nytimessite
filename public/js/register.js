$(document).ready(function () {

    $('#registerForm').submit(function (e) {
        e.preventDefault();

        $.ajax({
            url: '../engine/requests.php',
            method: 'post',
            data: $('#registerForm').serialize() + "&f=createAccount",
            success: function (data) {
                if(data.status == 200) {
                    $('#successModal').show();
                }
            }
        });
    });


});
