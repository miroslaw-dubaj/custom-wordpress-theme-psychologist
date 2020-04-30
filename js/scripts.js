$(document).ready(function () {
  $(window).scroll(function () {
    $(".hideme").each(function (i) {
      var bottom_of_object = $(this).offset().top + $(this).outerHeight();
      var bottom_of_window = $(window).scrollTop() + $(window).height();
      if (bottom_of_window + 300 > bottom_of_object) {
        $(this).animate({ opacity: "1" }, 1500);
      }
    });
  });

  setTimeout($(".showme").animate({ opacity: "1" }, 1000), 1000)
  $("aside.sheet").delay(500)
  .queue(function (next) {
    $(this).addClass("roll-in");
    next();
  });

  $(".card.text-center").delay(500)
  .queue(function (next) {
    $(this).addClass("roll-in");
    next();
  });

  $('[data-toggle="tooltip"]').tooltip();
  setTimeout($(".hero-text .widget_text").addClass("slide-up"), 500);
  $(".hero-text .btn")
    .delay(2000)
    .queue(function (next) {
      $(this).addClass("fade-in");
      next();
    });
  $(".arrows")
    .delay(4000)
    .queue(function (next) {
      $(this).addClass("fade-in");
      next();
    });
  $(".scroll")
    .delay(3000)
    .queue(function (next) {
      $(this).addClass("fade-in");
      next();
    });
});

console.log($(".hero-text .btn"));
// IS IT WORKING
