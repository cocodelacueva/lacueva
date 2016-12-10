( function ( $ ) {

    //loader
    $( document ).ready(function () {
        setTimeout(function () {
            $(".loader").fadeOut("slow");
        }, 100);
    });

    /*
    nav
    */

    //abre y cierra el menu movil
    $('.toggle').on('click', function () {
        $('.main-menu').toggleClass('main-menu-open');
        $('.toggle').toggleClass('toggle-open');
    });
    //cierra el menu movil cuando hacen clic en links
    $('.main-menu li a').on('click', function () {
        $('.main-menu').removeClass('main-menu-open');
        $('.toggle').removeClass('toggle-open');
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
            if ( window.innerWidth < 769) {
                $('html, body').stop().animate({
                    scrollTop: $('#contact').offset().top
                }, 'slow');
            } else {
            //si es pantalla grande muestra el formulario oculto
            $("#form").fadeIn(500).toggleClass("complete-form");
            }
        }
    });
    //abre el formulario desde el footer
    $(".toggle-form").on("click", function ( event ) {
        //si es pantalla tablet o movil scroll down
        if ( window.innerWidth > 768) {
            event.preventDefault();
            $("html, body").animate({
                    scrollTop: 0
                }, "slow");
            $("#form").fadeIn(500).toggleClass("complete-form");
        }
    });
    //abre el formulario desde el btn que está en tarifas index
    $(".tarifa-btn").on("click", function ( event ) {
      event.preventDefault();
          //si es pantalla tablet o movil scroll down
          if ( window.innerWidth < 769) {
              $('html, body').stop().animate({
                  scrollTop: $('#contact').offset().top
              }, 'slow');
          } else {
          //si es pantalla grande va hacia arriba
          $("html, body").animate({
              scrollTop: 0
          }, "slow");
          //y muestra el formulario
          $("#form").fadeIn(500).toggleClass("complete-form");
          }

    });

    //abre el formulario desde el btn que está en tarifas single
    $(".btn-tarifa-single").on("click", function ( event ) {
      console.log("hola");
      event.preventDefault();
          //si es pantalla tablet o movil scroll down
          if ( window.innerWidth < 769) {
              $('html, body').stop().animate({
                  scrollTop: $('#contact').offset().top
              }, 'slow');
          } else {
          //si es pantalla grande va hacia arriba
          $("html, body").animate({
              scrollTop: 0
          }, "slow");
          //y muestra el formulario
          $("#form").fadeIn(500).toggleClass("complete-form");
          }
    });

    //cierra el formulario en la pantalla grande
    $("div.close-form").on("click", function() {
       $("#form").fadeOut(500).addClass("complete-form");
    });

    //cierra el formulario presionando escape
    $(document).keyup(function(event){
        if(event.which==27) {
          console.log("hola");
          $("#form").fadeOut(500).addClass("complete-form");
        }
    });


    //pagina scroll top
    var obj = $(document);
            obj.on("scroll", function() {
            if (obj.scrollTop() > 800) {
                $(".up-nav").css("display", "block")
            } else {
                $(".up-nav").css("display", "none");
                };
            });
            //scrollTop
            $(".up-nav").on("click", function() {
                $("html, body").animate({
                    scrollTop: 0
                }, "slow");});


}) ( jQuery );

/**
 * Process AJAX operations.
 *
 * @package     minimal
 * @author      LaCueva.tv
 * @license     GPL-2.0+
 * @link        http://lacueva.tv/
 * @copyright   2016 LaCueva.tv
 * @since       1.0
**/

jQuery(document).ready(function( $ ){
    var loadMoreButton  = $( '.btn-mastrabajos' );
    var postsGrid       = $( '.trabajos-items' );
    var currentPage     = 1;
    var loaderAjax = $( '.img-loader-ajax' );

    loadMoreButton.click( function () {
        loaderAjax.css( 'display', 'block' );

        $.ajax( {
            type: 'POST',
            url: window.MinimalScriptsData.ajaxurl,
            data: {
                action: 'minimal_load_more_projects',
                page: currentPage + 1
            },
            success: function( response ) {
                loaderAjax.css( 'display', 'none' );
                if ( response ) {
                    currentPage++;
                    postsGrid.append( response );
                } else {
                    loadMoreButton.remove();
                    $( '#trabajos' ).append ( 'no hay más trabajos' );
                }
            }
        } );
    });
});
