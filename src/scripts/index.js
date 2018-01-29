function equalizeHeights(selector) {
    var heights = new Array();

    // Loop to get all element heights
    $(".featureWidgetHead").each(function() {
        $(this).css('height', 'auto');
        // Then add size (no units) to array
        heights.push($(this).outerHeight(true));
    });

    // Find max height of all elements
    var max = Math.max.apply( Math, heights );

    // Set all heights to max height
    $(".featureWidgetHead").each(function() {
        if ($(window).width() > 575) {
            $(this).css('height', max + 'px');
        } else {
            $(this).css('height','');
        }
    });


    // Loop to get all element heights
    $(".featureWidget__desc").each(function() {
        $(this).css('height', 'auto');
        // Then add size (no units) to array
        heights.push($(this).outerHeight(true));
    });

    // Find max height of all elements
    var max = Math.max.apply( Math, heights );

    // Set all heights to max height
    $(".featureWidget__desc").each(function() {
        if ($(window).width() > 575) {
            $(this).css('height', max + 'px');
        } else {
            $(this).css('height','');
        }
    });
}

$( document ).ready(function() {
    console.log(wpurl + " is the wp url")

    $('#indexCarousel').owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        items: 1,
        dots: true,
        autoplay:true
    });

    equalizeHeights();

    //resize function from stackoverflow.com/questions/2854407/javascript-jquery-window-resize-how-to-fire-after-the-resize-is-completed#answer-2854467
    var delay = (function(){
      var timer = 0;
      return function(callback, ms){
        clearTimeout (timer);
        timer = setTimeout(callback, ms);
      };
    })();

    $(window).resize(function() {
        delay(function(){
            console.log('resized');
            equalizeHeights();
        }, 500);
    });

});
