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