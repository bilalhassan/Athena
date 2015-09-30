jQuery( document ).ready( function( $ ){

//    $('#customize-header-actions').append('<a class="button button-primary">Upgrade to Pro</a>');

    $('#customize-info .preview-notice').html('<a class="button button-primary">Upgrade to Athena Pro</a>');


    $( '#customize-control-theme_color input[type=radio]' ).each( function() {

        var selector = $(this);

        if( selector.val()  === 'green' ) {

            selector.parent('label').css({ background: '#36B3A8' });

        }

    });
});