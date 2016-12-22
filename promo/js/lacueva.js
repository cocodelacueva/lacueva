( function ( $ ) {
    
    //loader
    $( document ).ready(function () {
        setTimeout(function () {
            $(".loader").fadeOut("slow");
        }, 500);
    });        
        
    /*
    formulario
    */
    $(".toggle-form").on("click", function (event) {
        event.preventDefault();
        //si es pantalla tablet o movil scroll down
        if ( window.innerWidth < 769) {
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


}) ( jQuery );