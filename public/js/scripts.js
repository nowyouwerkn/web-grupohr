/* --- Navbar scroll --- */
$(window).on("scroll", function () {
  if ($(window).scrollTop() > 300) {
    $(".nav").addClass("scroll");
    $(".ten-year-logo").addClass("scroll");
  } else {
    $(".nav").removeClass("scroll");
    $(".ten-year-logo").removeClass("scroll");
  }
});

/* --- Navbar Responsive --- */
$("#menu-mobile").on("click", function () {
  toggleMenu();
});

$(".left-nav .overlay").on("click", function () {
  $("body").removeClass("toggled");
  $(".clonado").remove();
});

$(".close-btn").on("click", function () {
  $("body").removeClass("toggled");
  $(".clonado").remove();
});

function toggleMenu() {
  $("body").addClass("toggled");
}


/* Custom Cursor */
var $circle = $('.circle-cursor');

function moveCircle(e) {
  TweenLite.to($circle, 0.5, {
    css: {
      left: e.pageX,
      top: e.pageY
    }
  });
}

$(window).on('mousemove', moveCircle);