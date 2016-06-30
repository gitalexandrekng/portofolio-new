$(window).load(function(){
    setTimeout(function(){
        $('.loader').addClass('animated fadeOutDown')

        setTimeout(function(){
            $('.customheader').addClass('animated fadeIn')
            $('.content-slide').css('opacity', 1)
        },0)
    }, 100)

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

$('.archiveportfolionav li a').addClass('fadepartiel')

$('.retour a').on('click', function(e){
    e.preventDefault()
    var self = $(this);
    $('body').addClass('animated fadeOutRight')
    setTimeout(function(){
        window.location.href = self.attr('href');
    },1000)
})

$('.fixednav a').addClass('fadepartiel')

$('body').ready(function(){
    $(".archiveportfolionav .menu-customnav-container").on('inview', function(event, isInView) {
        if (isInView) {
            $('.fixednav').css({
                opacity:"0",
                top:"-80px"
            })
        } else {
            $('.fixednav').css({
                opacity:"1",
                top:"0px"
            })
        }
    });

    $('.entry-content').on('inview', function(event, isInView) {
        if (isInView) {
            $('.fixednav').css({
                opacity:"1",
                top:"0px"
            })
        } else {
            $('.fixednav').css({
                opacity:"0",
                top:"-80px"
            })
        }
    });
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

$('.burgermenuz').on('click', function(e){
    e.preventDefault();
    $('.link').toggle('slow');
})

/*$('#certifs li').prepend('<i class="fa fa-angle-right"></i>')
$('#certifs li').append('<i class="fa fa-angle-left"></i>')*/

$('.wpcf7-submit').addClass('custom-button hvr-bounce-to-top')

if($('.customheader').length && $(window).width() > 640){
    $('body').css({
        overflow:'hidden',
        maxHeight:'100vh',
    })
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

$('.shownav').on('click', function(){
    $('.showresponsive').toggle('slow')
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
    $('body').addClass('animated fadeOut')
    $('.main-content').addClass('animated fadeOutDown')
    $('.containerheader').addClass('animated fadeOutUp')
    $('.portfoliotitle').addClass('animated fadeOutUp')
    $('.aboutme').addClass('animated fadeOutUp')
    $('.formation').addClass('animated fadeOutUp')

    setTimeout(function(){
        window.location.href = self.attr('href');
    }, 1000)
});
