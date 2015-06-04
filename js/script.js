function isIE() {
    var myNav = navigator.userAgent.toLowerCase();
    return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
};


/* SMOOTH SCROLLIG
 ========================================================*/
// ;(function ($) {
//     var o = $('html');
//     if (o.hasClass('desktop')) {      
//         $(document).ready(function () {
//             $.srSmoothscroll({
//                 step: 150,
//                 speed: 800
//             });
//         });
//     }
// })(jQuery);

/* Navbar
========================================================*/
;(function ($) {
    $(window).load(function() {
        $('.rd-mobilemenu_ul').mCustomScrollbar();
        $('.rd-mobilemenu_ul').find('.opened ul').css('display', 'block');
    });
})(jQuery);

/* Stick up menu
========================================================*/
;(function ($) {
    $(document).ready(function () {
        $('.stuck').tmStickUp({});
    });
})(jQuery);

/* Orientation tablet fix
 ========================================================*/
$(function () {
    // IPad/IPhone
    var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
        ua = navigator.userAgent,

        gestureStart = function () {
            viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";
        },

        scaleFix = function () {
            if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
                viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
                document.addEventListener("gesturestart", gestureStart, false);
            }
        };

    scaleFix();
    // Menu Android
    if (window.orientation != undefined) {
        var regM = /ipod|ipad|iphone/gi,
            result = ua.match(regM);
        if (!result) {
            $('.sf-menus li').each(function () {
                if ($(">ul", this)[0]) {
                    $(">a", this).toggle(
                        function () {
                            return false;
                        },
                        function () {
                            window.location.href = $(this).attr("href");
                        }
                    );
                }
            })
        }
    }
});
var ua = navigator.userAgent.toLocaleLowerCase(),
    regV = /ipod|ipad|iphone/gi,
    result = ua.match(regV),
    userScale = "";
if (!result) {
    userScale = ",user-scalable=0"
}
document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0' + userScale + '">');

/* Select Pseudo-DOM
 ========================================================*/
;(function ($) {
    var o = $('.select');
    if (o.length > 0) {

        $(document).ready(function () {
            o.each(function() {
                var select = $(this);
                select.append('<div class="pseudo-select"></div>');
                select.append('<ul class="pseudo-dropdown"></ul>');
    
                var origin = select.find('select');
                var pseudo = select.find('.pseudo-select');
                var pseudo_dropdown = select.find('.pseudo-dropdown');
    
                origin.css('display', 'none');
    
                origin.find('option').each(function() {
                    var option = $(this);
                    pseudo_dropdown.append('<li><a href="'+option.attr('data-href')+'">'+option.text()+'</a></li>');
                });

                
                var pseudo_options = pseudo_dropdown.find('li');
                if(origin.find('option').index(origin.find('option').filter(':selected')) > 0) {
                    var selected = origin.find('option').index(origin.find('option').filter(':selected'));
                    pseudo_options.eq(selected).addClass('selected');
                }
                else {
                    pseudo_options.eq(0).addClass('selected');
                    origin.find('option')[0].setAttribute('selected', '');
                }
                pseudo.text(function(){return pseudo_dropdown.find('.selected').text();});

                pseudo.click(function() {
                    if(!select.hasClass('opened')) {
                        select.addClass('opened');
                    }
                    else {
                        select.removeClass('opened');
                    }
                });

                pseudo_options.click(function() {
                    var num_old = pseudo_options.index(pseudo_options.filter('.selected'));
                    var num = pseudo_options.index($(this));

                    pseudo_dropdown.find('.selected').removeClass('selected');
                    $(this).addClass('selected');
                    pseudo.text(function(){return pseudo_dropdown.find('.selected').text();});
                    select.removeClass('opened');

                    origin.find('option')[num_old].removeAttribute('selected')
                    origin.find('option')[num].setAttribute('selected', '')
                });

                $(document).on('click', function (e) {
                    if (select.length) {
                        if (!select.is(e.target) && select.has(e.target).length === 0) {
                            select.removeClass('opened');
                        }
                    }
                });

                select.filter('.opened').on('click', function (e) {
                    select.removeClass('opened');
                });
            });
        });

    }
})(jQuery);
