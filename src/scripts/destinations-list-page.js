$( document ).ready(function() {

    function collapseWidetsonMobile() {
        if ($(window).width() < 768) {
             $('.destinations__widgetWraper').collapse('hide');
             console.log("HIDE");
        } else {
             $('.destinations__widgetWraper').collapse('show');
             console.log("SHOW");
        }
    }

    collapseWidetsonMobile();

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
            collapseWidetsonMobile();
        }, 500);
    });

});
