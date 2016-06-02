$('body').ready(function(){
    $('.inslide').css({height: $(window).height(), width: $(window).width()})
})

$('#head').owlCarousel({
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    items:1,
    loop:true,
    autoplay:true,
    autoplayTimeout: 2000,
});

if($('.customheader').length){
    $('body').css('overflow', 'hidden')
}
