function fun() {
  var e = document.getElementById("navbar"),
    a = document.getElementById("menu");
  "fas fa-bars" === a.className
    ? (a.className = "fas fa-times")
    : (a.className = "fas fa-bars"),
    "navbar" === e.className
      ? (e.className = "navbar nav-toggle")
      : "navbar nav-toggle" === e.className && (e.className = "navbar");
}
function func1() {
  var e = document.getElementById("navbar"),
    a = document.getElementById("menu");
  "fas fa-bars" === a.className
    ? (a.className = "fas fa-times")
    : (a.className = "fas fa-bars"),
    "navbar" === e.className
      ? (e.className = "navbar nav-toggle")
      : "navbar nav-toggle" === e.className && (e.className = "navbar");
}
document.addEventListener("visibilitychange", function () {
  "visible" === document.visibilityState
    ? ((document.title = "The Leading Navigator"),
      $("#favicon").attr("href", "assets/favicon.ico"))
    : (document.title = "Come Back To TLN");
}),
  $(".carousel-item").carousel({ interval: 200 });
const form = document.querySelector("form"),
  statusTxt = form.querySelector(".button-area p");
(form.onsubmit = (e) => {
  e.preventDefault(),
    (statusTxt.style.color = "#0D6EFD"),
    (statusTxt.style.display = "block"),
    (statusTxt.innerText = "Sending your message..."),
    form.classList.add("disabled");
  let a = new XMLHttpRequest();
  a.open("POST", "message.php", !0),
    (a.onload = () => {
      if (4 == a.readyState && 200 == a.status) {
        let e = a.response;
        -1 != e.indexOf("Email and message field is required!") ||
        -1 != e.indexOf("Enter a valid email address!") ||
        -1 != e.indexOf("Sorry, failed to send your message!")
          ? (statusTxt.style.color = "red")
          : (form.reset(),
            setTimeout(() => {
              statusTxt.style.display = "none";
            }, 3e3)),
          (statusTxt.innerText = e),
          form.classList.remove("disabled");
      }
    });
  let t = new FormData(form);
  a.send(t);
}),
  $(document).ready(function () {
    $("a").on("click", function (e) {
      if ("" !== this.hash) {
        e.preventDefault();
        var a = this.hash;
        $("html, body").animate(
          { scrollTop: $(a).offset().top },
          800,
          function () {
            window.location.hash = a;
          }
        );
      }
    });
  });
