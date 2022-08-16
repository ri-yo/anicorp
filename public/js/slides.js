  document.addEventListener( 'DOMContentLoaded', function() {
    var mostWatchedSlider = new Splide( '.mostWatchedSlider', {
        type   : 'loop',
        perPage: 6,
        breakpoints: {
        1024: {
        perPage: 3,
        },
        767: {
        perPage: 2,
        },
        640: {
        perPage: 1,
        },
        },
        gap: '20px',
        padding: '3.5rem',
        pagination: false,
        rewind : true,
        });
    mostWatchedSlider.mount();

    var lastReleasesSlider = new Splide( '.lastReleasesSlider', {
        type   : 'loop',
        perPage: 6,
        breakpoints: {
        1024: {
        perPage: 3,
        },
        767: {
        perPage: 2,
        },
        640: {
        perPage: 1,
        },
        },
        gap: '20px',
        padding: '3.5rem',
        pagination: false,
        rewind : true,
        });
    lastReleasesSlider.mount();
  } );