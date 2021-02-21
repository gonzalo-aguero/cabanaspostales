$(document).ready(()=>{
    $('.div-portada *').addClass("animate__zoomIn");
    $('.slider').bxSlider({
        auto: true,
        speed: 1000,
        pause: 5000,
        mode: 'fade',
        touchEnabled: false,
        onSlideBefore: ()=>{
            $('.div-portada *').removeClass("animate__zoomIn").addClass("animate__fadeOut");
            $('.div-portada *').css('display','none');
        },
        onSlideAfter: ()=>{
            $('.div-portada *').removeClass("animate__fadeOut").addClass("animate__zoomIn");
            $('.div-portada *').css('display','block');
        }
    });
})