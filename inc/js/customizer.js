jQuery( document ).ready( function( $ ){

    $('#customize-info .preview-notice').html('Upgrade to Athena Pro <a class="button button-primary">Athena Pro</a>');


    $( '#customize-control-theme_color input[type=radio]' ).each( function() {

        var selector = $(this);

        if( selector.val()  === 'green' ) {

            selector.parent('label').css({ background: '#36B3A8' });

        }

    });
});