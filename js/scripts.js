$(document).ready(function () {
  $(window).scroll(function () {
    $(".hideme").each(function (i) {
      var bottom_of_object = $(this).offset().top + $(this).outerHeight();
      var bottom_of_window = $(window).scrollTop() + $(window).height();
      if (bottom_of_window + 300 > bottom_of_object) {
        $(this).animate({ opacity: "1" }, 700);
      }
    });
  });

  setTimeout($(".showme").animate({ opacity: "1" }, 700), 400)
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
    .delay(1000)
    .queue(function (next) {
      $(this).addClass("fade-in");
      next();
    });
  $(".arrows")
    .delay(2000)
    .queue(function (next) {
      $(this).addClass("fade-in");
      next();
    });
  $(".scroll")
    .delay(1500)
    .queue(function (next) {
      $(this).addClass("fade-in");
      next();
    });

  $('.list-group .list-group-item').each(function (i) {
    var textArr = $(this).text().split('–')
    $(this).click(function() {
      $('.wpcf7-form .your-subject input').val(textArr[0]);
    })
  });

  var h1Txt = $('.sheet h1').text();
  $('.col-12 .btn-lg').click(function() {
    $('.wpcf7-form .your-subject input').val(h1Txt);
  })
});

console.log($('.wpcf7-form .your-subject input'));
// IS IT WORKING
