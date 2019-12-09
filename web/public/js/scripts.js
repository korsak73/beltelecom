/* ---------------------------------------------
 common scripts
 --------------------------------------------- */

$(function () {
    'use strict'; // use strict to start

    $(document).ready(function () {
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 3000);

    });

    $(document).on("click", '#header-login', function () {

        // let href = $(this).attr("href");
        // $("#form-login").attr("action", href);
        $("#modalHeader h3").text('Вход');
        $("#users-login").modal("show");

        return false;
    });

    $(document).on("click", '#header-signup', function () {

        // let href = $(this).attr("href");
        // $("#form").attr("action", href);
        $("#modalHeader h3").text('Регистрация пользователя');
        $("#users-signup").modal("show");

        return false;
    });

    $(document).on("click", '#password-recovery', function () {

        // let href = $(this).attr("href");
        // $("#form-password-reset").attr("action", href);
        $("#modalHeader h3").text('Изменить пароль');
        $("#request-password-reset-token-modal").modal("show");

        return false;
    });
});


