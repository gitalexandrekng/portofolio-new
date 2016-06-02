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
    startPosition: 'URLHash'
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

$('.sociallink').hover(function(){
    $(this).find('i').css({color:'#666'})
}, function(){
    $(this).find('i').css({color:''})
})

$('.crea:first').addClass('active')

$('.crea').on('click', function(){
    $('.crea').removeClass('active')
    $(this).addClass('active')
    $('.logosvgroue').addClass('customize')
    setTimeout(function(){
        $('.logosvgroue').removeClass('customize')
    }, 1000)
})

$('.crea').on('click', function(){
    setTimeout(function(){
        $('.content-slide').css('opacity', 0)
        $('.crea').css('pointer-events', 'none')

        setTimeout(function(){
            $('.content-slide').addClass('animated fadeInUp')

            setTimeout(function(){
                $('.content-slide').css('opacity', '1').removeClass('animated fadeInUp')
            }, 1000)

        }, 1000);
    }, 1)

    setTimeout(function(){
        $('.crea:not(.active)').css('pointer-events', 'auto')
    }, 2000)
})
