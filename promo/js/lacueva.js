( function ( $ ) {
    
    //loader
    $( document ).ready(function () {
        setTimeout(function () {
            $(".loader").fadeOut("slow");
        }, 500);
    });        
     
    /*
    nav
    */

    //abre y cierra el menu movil
    $('.toggle').on('click', function () {
        $('.main-menu').toggleClass('main-menu-open');
        $('.toggle').toggleClass('toggle-open');
    });
    
    /*
    formulario
    */
    //abre el formulario o va hacia el
    $(".main-menu li a").on("click", function ( event ) {

        //solo si hacen clic en contacto
        if ( $(this).attr('href') == '#contact' ) {
        event.preventDefault();
            //si es pantalla tablet o movil scroll down
            if ( window.innerWidth < 961) {
                $('html, body').stop().animate({
                    scrollTop: $('#contact').offset().top
                }, 'slow');
            } else {
            //si es pantalla grande muestra el formulario oculto
            $("#form").fadeIn(500).toggleClass("complete-form");
            $("html, body").animate({
                    scrollTop: 0
                }, "slow");
            }
        }

    });

    /*
    formulario
    */
    $(".toggle-form").on("click", function (event) {
        event.preventDefault();
        //si es pantalla tablet o movil scroll down
        if ( window.innerWidth < 961) {
            $('html, body').stop().animate({
                scrollTop: $('#contact').offset().top
            }, 'slow');
        } else {
        //si es pantalla grande muestra el formulario oculto
        $("#form").fadeIn(500).toggleClass("complete-form");
            $("html, body").animate({
                    scrollTop: 0
                }, "slow");
        }
        //agregamos el value al input que está oculto para el asunto
        if( $(this).attr('href') == '#mini-sitio' || $(this).attr('href') == '#landing-page' || $(this).attr('href') == '#tienda-online') {
            landing = $(this).attr('href');
            $("#landing").val(landing);
        }
    });
    //cierra el formulario en la pantalla grande
    $("div.close-form").on("click", function() {
       $("#form").fadeOut(500).addClass("complete-form");
    });
    //cierra el formulario presionando escape
    $(document).keyup(function(event){
        if(event.which==27) {
          $("#form").fadeOut(500).addClass("complete-form");
        }
    });
    
    //completa el asunto del formulario
    var landing = window.location.pathname.substring(7);

    if ( landing == 'contacto' ) {
        var nombre = window.location.search.substring(33);
        landing = nombre.split("&")[0];
    }

    $("#landing").val(landing);

    //scrollo top en agencias cuando hacen clic en contacto
    $( '.scroll' ).on( 'click', function () {
        $('html, body').stop().animate({
                scrollTop: $('#contacto').offset().top
            }, 'slow');
    });

    //pagina scroll top
    var obj = $(document);
        obj.on('scroll', function() {
        if (obj.scrollTop() > 800) {
            $(".up-nav").css("display", "block")
        } else {
            $(".up-nav").css("display", "none");
            };
        });
        //scrollTop
        $(".up-nav").on('click', function() {
            $("html, body").animate({
                scrollTop: 0
            }, "slow");
        });


}) ( jQuery );