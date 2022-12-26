// tittle change script  starts
document.addEventListener('visibilitychange',
    function () {
        if (document.visibilityState === "visible") {
            document.title = "The Leading Navigator";
            $("#favicon").attr("href", "assets/favicon.ico");
        }
        else {
            document.title = "Come Back To TLN";
        }
    });
// tittle change script  end


// hamburger javascript starts
function fun() {
    var a = document.getElementById("navbar")
    var x = document.getElementById("menu");
    if (x.className === "fas fa-bars") {
        x.className = "fas fa-times";
    } else {
        x.className = "fas fa-bars";
    }
    if (a.className === "navbar") {
        a.className = "navbar nav-toggle";
    } else if( a.className === "navbar nav-toggle"){
       
        a.className = "navbar";
    }

}
// hamburger javascript end


function changeCss() {
    var bodyElement = document.querySelector("body");
    var navElement = document.querySelector("header");
    this.scrollY > 500 ? navElement.style.opacity = 1 : navElement.style.opacity = .5;
}
window.addEventListener("scroll", changeCss, false);


$('.carousel-item').carousel({
    interval: 200
})


$(document).ready(function () {

    $('#menu').click(function () {
        $(this).toggleClass('fa-times');
        $('.navbar').toggleClass('nav-toggle');
    });

    $(window).on('scroll load', function () {
        $('#menu').removeClass('fa-times');
        $('.navbar').removeClass('nav-toggle');

        if (window.scrollY > 60) {
            document.querySelector('#scroll-top').classList.add('active');
        } else {
            document.querySelector('#scroll-top').classList.remove('active');
        }

        // scroll spy
        $('section').each(function () {
            let height = $(this).height();
            let offset = $(this).offset().top - 200;
            let top = $(window).scrollTop();
            let id = $(this).attr('id');

            if (top > offset && top < offset + height) {
                $('.navbar ul li a').removeClass('active');
                $('.navbar').find(`[href="#${id}"]`).addClass('active');
            }
        });
    });

    // smooth scrolling
    $('a[href*="#"]').on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top,
        }, 500, 'linear')
    });
});