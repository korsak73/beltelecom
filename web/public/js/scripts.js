/* ---------------------------------------------
 common scripts
 --------------------------------------------- */
(function () {
    'use strict'; // use strict to start

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
//------------------------------------------------

    (function () {
        jQuery('.top-search a').on('click', function (e) {
            e.preventDefault();
            $('.show-search').slideToggle('fast');
            $('.top-search a').toggleClass('sactive');
        });
    }());

    //You can also use "$(window).load(function() {"
    $(window).load(function() {
    // $(function () {
    //     (function () {
        // Slideshow 4
        jQuery("#slider4").responsiveSlides({
            auto: true,
            pager:true ,
            nav:false,
            speed: 900,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });
    }());


    (function () {
        jQuery(document).ready(function ($) {
            $("#flexiselDemo3").flexisel({
                visibleItems: 4,
                itemsToScroll: 1,
                autoPlay: {
                    enable: true,
                    interval:2000,
                    pauseOnHover: true
                }
            });
        });
    }());

    // (function () {
    //     jQuery(document).ready(function ($) {
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

})(jQuery);


