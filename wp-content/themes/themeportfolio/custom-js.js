$(window).load(function(){
    setTimeout(function(){
        $('.loader').addClass('animated bounceOutUp')

        setTimeout(function(){
            $('.customheader').addClass('animated fadeIn')
            $('.content-slide').css('opacity', 1)
        },100)
    }, 1000)

    $('.container').addClass('animated fadeIn')

    setTimeout(function(){
        $('.container').removeClass('animated fadeIn').css('opacity', '1')
    }, 1000)

    if($('.singlecontent').length){
        setTimeout(function(){
            $('.entry-title').addClass('animated fadeInUp')
        }, 700)
    }
})

$('.allz').on('click', function(){
    $('.mix').removeClass('remove')
})

$('.sites').on('click', function(){
    $('.mix').removeClass('remove')
    $('.mix:not(.portfolio-site-internet)').addClass('remove')
})

$('.illus').on('click', function(){
    $('.mix').removeClass('remove')
    $('.mix:not(.portfolio-illustrations)').addClass('remove')
})

$('.photographies').on('click', function(){
    $('.mix').removeClass('remove')
    $('.mix:not(.portfolio-photographies)').addClass('remove')
})

$('.archiveportfolionav li a').addClass('fadebas')

$('.retour a').on('click', function(e){
    e.preventDefault()
    var self = $(this);
    $('body').addClass('animated fadeOutRight')
    setTimeout(function(){
        window.location.href = self.attr('href');
    },1000)
})

$('body').ready(function(){
    $('.inslide').css({height: $(window).height(), width: $(window).width()})
    /*$('#zooms .item .ins').css({height: $(window).height(), width: $(window).width() / 2})*/
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

if($('.presentation').length){
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
    $('.arrowsee').css('opacity', '0')
    setTimeout(function(){
        $('.logosvgroue').removeClass('customize')
    }, 2000)

    setTimeout(function(){
        $('.content-slide').css('opacity', '0')
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

$('.crea').hover(function(){
    $(this).find('.arrowsee').css({opacity:'1', left:'-20px'})
}, function(){
    $(this).find('.arrowsee').css({opacity:'0', left:'-60px'})
})

$('.thecontain').hover(function(){
    $(this).find('.image-portfolio').css({
        transform:'scale(1.5)',
        filter:'grayscale(100%)',
    })
    $(this).find('.fade').css({
        opacity:'0.8',
    })
    $(this).find('.titre .ina').addClass('animated fadeInUp')
}, function(){
    $(this).find('.image-portfolio').css({
        transform:'scale(1)',
        filter:'grayscale(0%)'
    })
    $(this).find('.fade').css({
        opacity:'0',
    })
    $(this).find('.titre .ina').removeClass('animated fadeInUp')
    $(this).find('.ino').removeClass('animated fadeInUp')
})

/*$("a.moreportfolio[href]").click(function(e){
    e.preventDefault()
    var self = $(this);
    $('.groszoom').css({left:'0', transition:'1s', right:''})
    setTimeout(function(){
        $('body').addClass('animated fadeOut')
    },1000)
    setTimeout(function(){
        window.location.href = self.attr('href');
    }, 2000)
});*/

$("a.fadeall[href]").click(function(e){
    e.preventDefault()
    var self = $(this);
    $('.groszoom').css({width:'0%', transition:'0.5s'})
    setTimeout(function(){
        $('.name').css({width:'0%', opacity:'0', transition:'0.5s'})
        $('.logosvgroue').css({transform:'rotate(360deg)', transition:'1s'})

        setTimeout(function(){
            $('.customheader').addClass('animated fadeOut')
        }, 1000)
    }, 500)

    setTimeout(function(){
        window.location.href = self.attr('href');
    }, 2000)
});

$("a.fadepartiel[href]").click(function(e){
    e.preventDefault()
    var self = $(this);
    $('body').addClass('animated fadeOut')

    setTimeout(function(){
        window.location.href = self.attr('href');
    }, 1000)
});

$("a.fadebas[href]").click(function(e){
    e.preventDefault()
    var self = $(this);
    $('.main-content').addClass('animated fadeOutDown')

    setTimeout(function(){
        $('body').addClass('animated fadeOut')

        setTimeout(function(){
            window.location.href = self.attr('href');
        }, 1000)
    }, 1000)
});
