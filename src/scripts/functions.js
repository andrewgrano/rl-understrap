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

closeSearchBar = function() {
    $(".searchBar,.searchBar--overlay").fadeOut();
    $("body").removeClass("searchBar--active");
};

$(document).ready(function() {
    //parallax window functionality, used on most pages
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

    //header search bar functionality
    $(".headerSearch").on("click",function(){
      $(".searchBar,.searchBar--overlay").fadeIn();
      $(".searchBar__input").focus();
      $("body").addClass("searchBar--active");
    });

    $(".searchBar--overlay").on("click",function(){
      closeSearchBar();
    });

  $(document).keyup(function(e) {
    if ( $("body").hasClass("searchBar--active") ) {
      if (e.keyCode === 27) { // esc
        closeSearchBar();
      }
    }
  });


  //scroll to "about" section on-click of "about"
  $(".js-scrollToAbout").on("click",function(e){
      $("html, body").animate({ scrollTop: $('.footerAbout').offset().top -50 }, 800);
      e.preventDefault();
  });

});
