jQuery(document).ready(function ($) {


    $('.fa-search, #athena-search .fa.fa-close').click( function () {
        
       $('#athena-search').toggleClass('noshow'); 
       $('#site-navigation').toggleClass('noshow'); 
        
    });

    // Homepage Overlay
    $( '#athena-overlay-trigger .fa' ).click( function() {
        
       selector = $( '#athena-overlay-trigger' );
       
       if( selector.hasClass( 'open' ) ) {
           
           $('.overlay-widget').hide();
           selector.removeClass('open animated slideInUp');
           
           
       }else {
           
           selector.addClass('open animated slideInUp');
           $('.overlay-widget').fadeIn(330);
       }
        
    });

    // scroll to top trigger
    $('.scroll-top').click(function() {
        $("html, body").animate({scrollTop: 0}, 1000 );
        return false;
    });


    // Sticky navbar
    $('#athena-header').sticky({
        topSpacing:0,
        wrapperClassName: 'smartcat-menu-wrapper',
        responsiveWidth: true,
        center:true
    });

    
    $('#athena-header').on('sticky-start', function() { 
        $(this).addClass( 'animated slideInDown' );
    });
    $('#athena-header').on('sticky-end', function() { 
        $(this).removeClass( 'animated slideInDown' );
    });
    

    // Parallax
    $(window).scroll(function () {
        
        var s = $(window).scrollTop();
        
        $('.parallax').css({ top: (s / -4) });
        $('.cameraSlide').css({ top: (s / 2) });
        
        $('.parallax-image').each( function(){
            
//            alert( ( $(this).offset().top - $(window).scrollTop() ) );
            
            var d = $(this).offset().top - $(window).scrollTop();
            
            if( d <= $(window).height() ) {
                $(this).css('background-position', '0 ' + (s / -4) + 'px');
            }
            
        });
        

        
    })

    // ------------
    var athenaWow = new WOW({
        boxClass: 'reveal',
        animateClass: 'animated'

    });

    athenaWow.init();
});