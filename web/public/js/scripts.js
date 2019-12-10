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


    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function (event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
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


