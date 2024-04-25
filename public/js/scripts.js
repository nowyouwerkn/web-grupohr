/* --- Navbar scroll --- */
$(window).on("scroll", function () {
    if ($(window).scrollTop() > 80) {
      $("nav").addClass("scroll");
    } else {
      $("nav").removeClass("scroll");
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