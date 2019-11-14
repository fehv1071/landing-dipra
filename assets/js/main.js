$(document).ready(function() {

    "use strict";

    // Preloader

    $(window).load(function() { // makes sure the whole site is loaded
        $('.page-preloader spinner').fadeOut(); // will first fade out the loading animation
        $('.page-preloader').delay(350).fadeOut('slow');
        // will fade out the white DIV that covers the website.
        $('body').delay(350).css({
            'overflow': 'visible'
        });
    })

    // Animated typing text

    $(".animated-text").typed({
        strings: [
            "Convértete en Asesor Financiero",
            "WhatsApp 7717463505"
        ],
        typeSpeed: 80,
        showCursor: false,
        loop: true,
    });

    // PopUp Effect

    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,

        fixedContentPos: false
    });

    $.extend(true, $.magnificPopup.defaults, {
        iframe: {
            patterns: {
                youtube: {
                    index: 'youtube.com/',
                    id: 'v=',
                    src: 'http://www.youtube.com/embed/%id%?autoplay=1'
                }
            }
        }
    });

    // Owl Clients

    $("#owl-clients").owlCarousel({

        autoPlay: 3000, //Set AutoPlay to 3 seconds

        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3]

    });

    // Owl Testimonils

    $("#owl-testimonials").owlCarousel({
        navigation: false, // Show next and prev buttons
        slideSpeed: 600,
        paginationSpeed: 400,
        singleItem: true,
        transitionStyle: "goDown",
        autoPlay: true
    });

    // Snazzy Maps
    // google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 15,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(33.5912284, -7.5210958, 17.18), // Casablanca

            // Disables the default Google Maps UI components
            disableDefaultUI: true,
            scrollwheel: false,

            // How you would like to style the map. 
            // This is where you would paste any style found on Snazzy Maps.
            styles: [{
                "stylers": [{
                    "hue": "#f23c7e"
                }, {
                    "saturation": 150
                }]
            }, {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [{
                    "lightness": 50
                }, {
                    "visibility": "simplified"
                }]
            }, {
                "featureType": "road",
                "elementType": "labels",
                "stylers": [{
                    "visibility": "off"
                }]
            }]
        };

        // Get the HTML DOM element that will contain your map 
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        // Create the Google Map using out element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);
        var myLatLng = new google.maps.LatLng(33.592501, -7.522318);
        // Custom Map Marker Icon - Customize the map-marker.png file to customize your icon
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Hello World!'
        });
    }

    $("#benelink").on('click', function(event) {

        $('html, body').animate({
            scrollTop: $("#features").offset().top
        }, 800, function() {});
    });
    $("#wantoreg").on('click', function(event) {

        $('html, body').animate({
            scrollTop: $("#home").offset().top
        }, 800, function() {});
    });

    // $(".whatsicon ").click(function() {
    //     if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    //         window.open('https://wa.me/+527717463505?text=Estoy%20interesado%20en%20ser%20asesor%20financiero%20con%20DIPRA%0A%0A_Enviado desde página web_');
    //     } else {
    //         window.open('https://web.whatsapp.com/send?phone=+527717463505&text=Estoy%20interesado%20en%20ser%20asesor%20financiero%20con%20DIPRA%0A%0A_Enviado desde página web_');
    //     }
    // });

    $(".whats-nav ").click(function() {
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            window.open('https://wa.me/+527717463505?text=Estoy%20interesado%20en%20ser%20asesor%20financiero%20con%20DIPRA%0A%0A_Enviado desde página web_');
        } else {
            window.open('https://web.whatsapp.com/send?phone=+527717463505&text=Estoy%20interesado%20en%20ser%20asesor%20financiero%20con%20DIPRA%0A%0A_Enviado desde página web_');
        }
    });


    feather.replace();



    $('.whatsicon').click(function(event) {
        modal.addClass('modal--open');
        $(".modal-background").addClass('backopen');
        event.stopPropagation();
    })

    // CLOSE THE MODAL
    $('.modal__icon--close').click(function() {
        $(this).parent('.modal').removeClass('modal--open');
        $(".modal-background").removeClass('backopen');

        alert.removeClass('alert--visible');
    })

    $(document).keyup(function(e) {
        if (e.keyCode === 27) $('.modal__icon--close').click();
    });


    $('.modal-background').click(function() {
        modal.removeClass('modal--open');
        $(".modal-background").removeClass('backopen');
    });

    modal.click(function(event) {
        event.stopPropagation();
    });

    $('.modal__icon--socials').click(function(event) {
        alert.addClass('alert--visible');
        event.stopPropagation();

        setTimeout(function() {
            alert.removeClass('alert--visible');
        }, 1700)

        setTimeout(function() {
            modal.removeClass('modal--open');
        }, 1500)
    });
});