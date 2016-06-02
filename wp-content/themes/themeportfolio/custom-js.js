$(window).load(function(){
    setTimeout(function(){
        $('.loader').addClass('animated bounceOutUp')

        setTimeout(function(){
            $('.customheader').addClass('animated fadeIn')
            $('.content-slide').css('opacity', 1)
        },100)
    }, 2000)

    $('.container').addClass('animated fadeIn')
})

$('body').ready(function(){
    $('.inslide').css({height: $(window).height(), width: $(window).width()})
    $('#zooms .item .ins').css({height: $(window).height(), width: $(window).width() / 2})
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
    }, 2000)
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

$("a.hello[href]").click(function(e){
    e.preventDefault()
    var self = $(this);
    $('.groszoom').css({width:'0%', transition:'1s'})
    setTimeout(function(){
        $('body').addClass('animated fadeOut')
    },1000)
    setTimeout(function(){
        window.location.href = self.attr('href');
    }, 2000)
});

$("a.moreportfolio[href]").click(function(e){
    e.preventDefault()
    var self = $(this);
    $('.groszoom').css({width:'100%', transition:'1s'})
    setTimeout(function(){
        $('body').addClass('animated fadeOut')
    },1000)
    setTimeout(function(){
        window.location.href = self.attr('href');
    }, 2000)
});
