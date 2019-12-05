/* ---------------------------------------------
 common scripts
 --------------------------------------------- */
// (function () {
$(function () {
    'use strict'; // use strict to start

    $(document).on("click", '#header-login', function () {
// debugger;
        let href = $(this).attr("href");
        $("#form").attr("action", href);
        $("#modalHeader h3").text('Вход');
        // $('#form-01-06').yiiActiveForm('resetForm');

        // $("#datatransport-category_id").val(0).trigger("change");
        // $("#datatransport-type_id").val(0).trigger("change");
        // $("#sup-cargo").val(0).trigger("change");
        // $("#loginform-email").val('').trigger("change");
        // $("#datatransport-volume").val('');
        // $("#datatransport-capacity").val('');
        // $("#datatransport-is_navigate").prop('checked', false);
        // $("#datatransport-description").val('');
        // $("#datatransport-other_cargo").val('');

        $("#users-login").modal("show");

        return false;
    });

    $(document).on("click", '#header-signup', function () {
// debugger;
        let href = $(this).attr("href");
        $("#form").attr("action", href);
        $("#modalHeader h3").text('Регистрация пользователя');
        // $('#form-01-06').yiiActiveForm('resetForm');

        // $("#datatransport-category_id").val(0).trigger("change");
        // $("#datatransport-type_id").val(0).trigger("change");
        // $("#sup-cargo").val(0).trigger("change");
        // $("#datatransport-amount").val('');
        // $("#datatransport-volume").val('');
        // $("#datatransport-capacity").val('');
        // $("#datatransport-is_navigate").prop('checked', false);
        // $("#datatransport-description").val('');
        // $("#datatransport-other_cargo").val('');

        $("#users-signup").modal("show");

        return false;
    });

    $(document).on("click", '#password-recovery', function () {
// debugger;
        let href = $(this).attr("href");
        $("#form-password-reset").attr("action", href);
        $("#modalHeader h3").text('Изменить пароль');
        // $('#form-01-06').yiiActiveForm('resetForm');

        // $("#datatransport-category_id").val(0).trigger("change");
        // $("#datatransport-type_id").val(0).trigger("change");
        // $("#sup-cargo").val(0).trigger("change");
        // $("#loginform-email").val('').trigger("change");
        // $("#datatransport-volume").val('');
        // $("#datatransport-capacity").val('');
        // $("#datatransport-is_navigate").prop('checked', false);
        // $("#datatransport-description").val('');
        // $("#datatransport-other_cargo").val('');

        $("#request-password-reset-token-modal").modal("show");

        return false;
    });


    /* === Stickit === */

    // (function () {
    //     $("[data-sticky_column]").stickit({
    //         scope: StickScope.Parent,
    //         top: 0
    //     });
    // }());



    // /*=== single blog carousel =====*/
    // (function () {
    //     $('.items').owlCarousel({
    //         items: 3,
    //         autoPlay: true,
    //         pagination: false
    //     });
    // }());

    /* === Instagram Widget === */

    // (function () {
    //     $('#widget-feature').owlCarousel({
    //         singleItem: true,
    //         navigation: true,
    //         navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    //         autoPlay: true,
    //         pagination: false
    //     });
    // }());

    /* === Back To Top === */

    // (function () {
    //     $(' a.back-to-top').click(function () {
    //         $('html, body').animate({scrollTop: 0}, 800);
    //         return false;
    //     });
    // }());


    /* === Footer Instagram === */

    // (function () {
    //     $('#footer-instagram').owlCarousel({
    //         items: 8,
    //         navigation: false,
    //         autoPlay: false,
    //         pagination: false
    //     });
    // }());
    /* === Search === */

    // (function () {
    //     addEventListener("load", function () {
    //         setTimeout(hideURLbar, 0);
    //     }, false);
    //
    //     function hideURLbar() {
    //         window.scrollTo(0, 1);
    //     }
    // }());
    // addEventListener("load", function () {
    //     setTimeout(hideURLbar, 0);
    // }, false);
    //
    // function hideURLbar() {
    //     window.scrollTo(0, 1);
    // }
//------------------------------------------------

    // (function () {
    //     jQuery('.top-search a').on('click', function (e) {
    //         e.preventDefault();
    //         $('.show-search').slideToggle('fast');
    //         $('.top-search a').toggleClass('sactive');
    //     });
    // }());

    //You can also use "$(window).load(function() {"
    // $(function () {
    //     $(window).load(function () {
    //         $('#JiSlider').JiSlider({
    //             color: '#fff',
    //             start:1,
    //             reverse: false
    //         }).addClass('ff')
    //     })
    // }());

// $(function () {
//     $(window).load(function () {
//             // Slideshow 4
//             $("#slider4").responsiveSlides({
//                 auto: true,
//                 pager:true,
//                 nav:true,
//                 speed: 500,
//                 namespace: "callbacks",
//                 before: function () {
//                     $('.events').append("<li>before event fired.</li>");
//                 },
//                 after: function () {
//                     $('.events').append("<li>after event fired.</li>");
//                 }
//             });
//         });
// }());

// $(function () {
//     $(window).load(function () {
//         $('.flexslider').flexslider({
//             animation: "slide",
//             start: function (slider) {
//                 $('body').removeClass('loading');
//             }
//         });
//     });
// }());

// $(function () {
//     $(window).load(function() {
//         $("#flexiselDemo1").flexisel({
//             visibleItems:3,
//             animationSpeed: 1000,
//             autoPlay: false,
//             autoPlaySpeed: 3000,
//             pauseOnHover: true,
//             enableResponsiveBreakpoints: true,
//             responsiveBreakpoints: {
//                 portrait: {
//                     changePoint:600,
//                     visibleItems: 1
//                 },
//                 landscape: {
//                     changePoint:640,
//                     visibleItems: 2
//                 },
//                 tablet: {
//                     changePoint:991,
//                     visibleItems: 2
//                 }
//             }
//         });
//     });
// }());
    // // $(function () {
    // //     (function () {
    //     // Slideshow 4
    //     jQuery("#slider4").responsiveSlides({
    //         auto: true,
    //         pager:true ,
    //         nav:false,
    //         speed: 900,
    //         namespace: "callbacks",
    //         before: function () {
    //             $('.events').append("<li>before event fired.</li>");
    //         },
    //         after: function () {
    //             $('.events').append("<li>after event fired.</li>");
    //         }
    //     });
    // }());
    //
    //
    // (function () {
    //     jQuery(document).ready(function ($) {
    //         $("#flexiselDemo3").flexisel({
    //             visibleItems: 4,
    //             itemsToScroll: 1,
    //             autoPlay: {
    //                 enable: true,
    //                 interval:2000,
    //                 pauseOnHover: true
    //             }
    //         });
    //     });
    // }());
    //
    // (function () {
    //     $(document).ready(function () {
    //         $('#horizontalTab').easyResponsiveTabs({
    //             type: 'default',
    //             width: 'auto',
    //             fit: true,
    //         });
    //     });
    // }());

    // (function () {
    //     // $(document).ready(function() {
    //         $("#owl-demo").owlCarousel({
    //             items :1,
    //             lazyLoad : true,
    //             autoPlay : false,
    //             navigation :true,
    //             navigationText :  false,
    //             pagination : true,
    //         });
    //     // });
    // }());

    // (function () {
    //     jQuery(document).ready(function ($) {
    //         window.onload = function () {
    //             document.getElementById("password1").onchange = validatePassword;
    //             document.getElementById("password2").onchange = validatePassword;
    //         }
    //         function validatePassword(){
    //             var pass2=document.getElementById("password2").value;
    //             var pass1=document.getElementById("password1").value;
    //             if(pass1!=pass2)
    //                 document.getElementById("password2").setCustomValidity("Passwords Don't Match");
    //             else
    //                 document.getElementById("password2").setCustomValidity('');
    //             //empty string means no validation error
    //         }
    //         $(".scroll").click(function (event) {
    //             event.preventDefault();
    //             $('html,body').animate({
    //                 scrollTop: $(this.hash).offset().top
    //             }, 900);
    //         });
    //     });
    // }());

    // (function () {
    //     jQuery(document).ready(function () {
    //         var defaults = {
    //             containerID: 'toTop', // fading element id
    //             containerHoverID: 'toTopHover', // fading element hover id
    //             scrollSpeed: 1100,
    //             easingType: 'linear'
    //         };
    //         $().UItoTop({
    //             easingType: 'easeOutQuart'
    //         });
    //
    //     });
    // }());
// (function () {
//     $(document).ready(function(){
//         $(".dropdown").hover(
//             function() {
//                 $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
//                 $(this).toggleClass('open');
//             },
//             function() {
//                 $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
//                 $(this).toggleClass('open');
//             }
//         );
//     });
// }());

// (function () {
//     $(document).ready(function () {
//         $('#horizontalTab').easyResponsiveTabs({
//             type: 'default', //Types: default, vertical, accordion
//             width: 'auto', //auto or any width like 600px
//             fit: true, // 100% fit in a container
//             closed: 'accordion', // Start closed if in accordion view
//             activate: function (event) { // Callback function if tab is switched
//                 var $tab = $(this);
//                 var $info = $('#tabInfo');
//                 var $name = $('span', $info);
//                 $name.text($tab.text());
//                 $info.show();
//             }
//         });
//         $('#verticalTab').easyResponsiveTabs({
//             type: 'vertical',
//             width: 'auto',
//             fit: true
//         });
//     });
// }());
//
    (function () {
        jQuery(document).ready(function () {
            $("div").on('pjax:send', function () {
                $("#pjax-reload-block").removeClass('display-none');
            });
            $("div").on('pjax:complete', function () {
                $("#pjax-reload-block").addClass('display-none');
            });

            // добавление элементов списка
            $(document).delegate("button.add-item", "click", function(e){
                var qntt = $('.list-wrapper .list-item').length;
                var lastItem = $('.list-wrapper .list-item').last();
                var classes = lastItem.attr('class');
                var firstRes = classes.split(' ');
                var secondRes = firstRes[2].split('-');
                var indexNumber = Number(secondRes[3])+1;

                var str = '';
                str += '<div class="form-group list-item field-fieldform-item-'+indexNumber+'">';
                str += '<div class="input-group control-group after-add-more">';
                str += '<input type="text" id="fieldform-item-'+indexNumber+'" class="form-control" name="FieldForm[list]['+indexNumber+']" value="">';
                str += '<div class="input-group-btn">';
                str += '<button class="btn btn-danger remove-item" type="button"><i class="fa fa-times"></i></button>';
                str += '</div>';
                str += '</div>';
                str += '</div>';

                $('.list-wrapper').append(str);
            });

            $(document).delegate('button.remove-item', 'click', function(e) {
                $(this).closest('.list-wrapper .list-item').remove();
            });
        });
    }());

// })(jQuery);
});


