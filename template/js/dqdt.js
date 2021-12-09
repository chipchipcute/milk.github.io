
//banner tren
jQuery('.bannertren').owlCarousel({
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: false,
    autoplaySpeed: 1000,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});

//banner duoi
jQuery('.bannerduoi').owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: false,
    autoplaySpeed: 1000,
    responsive: {
        0: {
            items: 3
        },
        600: {
            items: 4
        },
        1000: {
            items: 7
        }
    }
});