jQuery( document ).ready( function( $ ){

 
    $( '#customize-control-theme_color input[type=radio]' ).each( function() {

        var selector = $(this);

        if( selector.val()  === 'green' ) {

            selector.parent('label').css({ background: '#36B3A8' });


        }


    });
});