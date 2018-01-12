parallax = function() {
    var plxBackground, plxBackgroundTopToPageTop, plxBackgroundTopToWindowBottom, plxBackgroundTopToWindowTop, plxSpeed, plxWindow, plxWindowTopToPageTop, plxWindowTopToWindowTop, windowInnerHeight, windowTopToPageTop;
    if ($('#js-parallax-window').length > 0) {
      plxBackground = $('#js-parallax-background');
      plxWindow = $('#js-parallax-window');
      plxWindowTopToPageTop = $(plxWindow).offset().top;
      windowTopToPageTop = $(window).scrollTop();
      plxWindowTopToWindowTop = plxWindowTopToPageTop - windowTopToPageTop;
      plxBackgroundTopToPageTop = $(plxBackground).offset().top;
      windowInnerHeight = window.innerHeight;
      plxBackgroundTopToWindowTop = plxBackgroundTopToPageTop - windowTopToPageTop;
      plxBackgroundTopToWindowBottom = windowInnerHeight - plxBackgroundTopToWindowTop;
      plxSpeed = 0.35;
      plxBackground.css('top', -(plxWindowTopToWindowTop * plxSpeed) + 'px');
    }
};

$(document).ready(function() {
    var distanceHeadertoScreenTop, headerContent, headerImg, headerTitle;
    if ($('#js-parallax-window').length) {
      parallax();
      $(".parallax-window").fadeTo("fast", 1);
    }
    $(window).scroll(function(e) {
      if ($('#js-parallax-window').length) {
        parallax();
      }
    });
});
