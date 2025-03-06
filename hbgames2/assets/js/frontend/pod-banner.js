function initializePodBanner() {
    const imgs = document.querySelectorAll('.single-pod-banner');
    
    function activateImage(event) {
        if (!event.target.classList.contains('active')) {
            const actPodImgs = document.querySelectorAll('.single-pod-banner.active');
            
            actPodImgs.forEach(actPodImg => {
                if (actPodImg) {
                    actPodImg.lastElementChild.style.opacity = 0;
                    actPodImg.firstElementChild.style.marginTop = "0rem";
                    actPodImg.firstElementChild.style.height = "100%";
                    actPodImg.style.width = "19.8rem";
                    actPodImg.classList.remove('active');
                }
            });

            event.target.classList.add('active');
            event.target.style.width = "41.1rem";
            event.target.lastElementChild.style.opacity = 1;
            event.target.firstElementChild.style.marginTop = "-10rem";
            event.target.firstElementChild.style.height = "160%";
        }
    }

    imgs.forEach(img => {
        img.addEventListener('mouseenter', activateImage);
    });
}

function initializeCarousel() {
    if (window.innerWidth <= 996) {
        $('#carousel-category-products').slick({
            dots: false,
            infinite: false,
            arrows: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 996,
                    settings: {
                        slidesToShow: 2,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        infinite: true,
                        centerMode: true,
                        centerPadding: '60px',
                        slidesToShow: 1,
                        dots: true
                    }
                }
            ]
        });
    }
}

document.addEventListener('DOMContentLoaded', () => {
    initializePodBanner();
    initializeCarousel();
});
