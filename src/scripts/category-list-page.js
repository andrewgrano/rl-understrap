function parallaxWindows(){
    $(".parallax-window").each(function() {
        var plxBackground = $(this).children(".parallax-background");
        var plxWindow = $(this);

        var plxWindowTopToPageTop = $(plxWindow).offset().top;
        var windowTopToPageTop = $(window).scrollTop();
        var plxWindowTopToWindowTop = plxWindowTopToPageTop - windowTopToPageTop;

        var plxBackgroundTopToPageTop = $(plxBackground).offset().top;
        var windowInnerHeight = window.innerHeight;
        var plxBackgroundTopToWindowTop = plxBackgroundTopToPageTop - windowTopToPageTop;
        var plxBackgroundTopToWindowBottom = windowInnerHeight - plxBackgroundTopToWindowTop;
        var plxSpeed = 0.35;


        if ( windowTopToPageTop > (plxWindowTopToPageTop - 150) ) {
            plxBackground.css('top', - (plxWindowTopToWindowTop * plxSpeed) + 'px');
        } else {
            plxBackground.css('top', '-52px');
        }
    });
}


$( document ).ready(function() {
    console.log("category list page");
    parallaxWindows();

    $("img.lazy").lazyload({
        threshold : 115,
        effect : "fadeIn"
    });


    $('body').scrollspy({ target: '#destinations__sidebar' })
    $('#destinations__sidebar').stickybits();
    $("#destinations__sidebar").mCustomScrollbar({
      theme:"minimal-dark"
    });


    $('body').on('activate.bs.scrollspy', function () {
        $("#destinations__sidebar").mCustomScrollbar("update");
        console.log(" new item became activated by the scrollspy.")
    })

    $(window).scroll(function(e) {
        parallaxWindows();
    });

});
