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

});
