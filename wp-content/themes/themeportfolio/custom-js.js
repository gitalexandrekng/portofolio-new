$('body').ready(function(){
    $('.inslide').css({height: $(window).height(), width: $(window).width()})
    $('#zooms .item').css({height: $('.groszoom').height(), width: $('.groszoom').width()})
})

$('#head').owlCarousel({
    animateOut: 'fadeOutDown',
    animateIn: 'fadeInDown',
    items:1,
    loop:true,
    autoplay:false,
    autoplayTimeout: 5000,
    URLhashListener:true,
});

$('#zooms').owlCarousel({
    animateOut: 'slideOutUp',
    animateIn: 'slideInUp',
    items:1,
    loop:true,
    autoplay:false,
    autoplayTimeout: 5000,
    URLhashListener:true,
    mouseDrag:false,
});

if($('.customheader').length){
    $('body').css('overflow', 'hidden')
}

$('.seemore').hover(function(){
    $('.text-see').css({opacity:'1', right:'20px'})
}, function(){
    $('.text-see').css({opacity:'0', right:'-10%'})
})

/*$('.groszoom').hover(function(){
    $(this).css('width', '50%')
}, function(){
    $(this).css('width', '45%')
})*/

$('.crea').on('click', function(){
    $('.logosvgroue').addClass('customize')
    setTimeout(function(){
        $('.logosvgroue').removeClass('customize')
    }, 1000)
})

/*$('.crea').on('click', function(){
    clearInterval(x);

    var x = setTimeout(function(){
        $('.content-slide .in').addClass('animated fadeOut')
        setTimeout(function(){
            $('.content-slide .in').removeClass('animated fadeOut')
        }, 1000)
    }, 1000);
})*/
