function openMenu() {
    $('header > nav ul').css('display','flex')
    setTimeout(()=>{
        $('header > nav ul li a').css('display','flex')
    },400)
}
function closeMenu() {
        $('header > nav ul').removeClass("animate__fadeIn").addClass("animate__fadeOut");
        setTimeout(() => {
            $('header > nav ul').css('display','none');
            $('header > nav ul').removeClass("animate__fadeOut").addClass("animate__fadeIn");
        }, 200);
}
$(document).ready(()=>{
    $('header > nav ul li a').addClass('animate__animated').addClass('animate__flipInX')
    $('#btnOpenMenu').click(()=>{
        openMenu();
    })
    $('#btnCloseMenu').click(()=>{
        closeMenu();
    })
})