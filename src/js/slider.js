document.addEventListener('DOMContentLoaded' , function(){
    
    const fsSlider = new Swiper('.fs_slider', {
        slidesPerView: 1,
        loop: true,
        breakpoints: {
        768: {
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        },
    }
    })
    const interestingSlider = new Swiper('.interesting-slider', {
        slidesPerView: 'auto',
        freeMode: true,
        spaceBetween: 14,
        speed: 400,
        grabCursor: true,
        freeModeMomentum: true,
        freeModeMomentumRatio: 0.8,
        freeModeMomentumVelocityRatio: 0.8,
        touchRatio: 1.2,
        navigation: {
        nextEl: '.navigation-button-next',
        prevEl: '.navigation-button-prev',
        },
            breakpoints: {
            1600:{
                slidesPerView: 6,
            },
        }
    })
    const categorySlider = new Swiper('.category-slider', {
        slidesPerView: 'auto',
        freeMode: true,
        spaceBetween: 14,
        speed: 400,
        grabCursor: true,
        freeModeMomentum: true,
        freeModeMomentumRatio: 0.8,
        freeModeMomentumVelocityRatio: 0.8,
        touchRatio: 1.2,
        navigation: {
        nextEl: '.navigation-button-next',
        prevEl: '.navigation-button-prev',
        },
            breakpoints: {
            1600:{
                slidesPerView: 4,
            },
        }
    })
    const productsSlider = new Swiper('.product-slider', {
        slidesPerView: 'auto',
        freeMode: true,
        spaceBetween: 14,
        speed: 400,
        grabCursor: true,
        freeModeMomentum: true,
        freeModeMomentumRatio: 0.8,
        freeModeMomentumVelocityRatio: 0.8,
        touchRatio: 1.2,
        navigation: {
        nextEl: '.navigation-button-next',
        prevEl: '.navigation-button-prev',
        },
            breakpoints: {
            1600:{
                slidesPerView: 4,
            },
        }
    })
    const advantagesSlider = new Swiper('.advantages-slider', {
        slidesPerView: 'auto',
        freeMode: true,
        spaceBetween: 14,
        speed: 400,
        grabCursor: true,
        freeModeMomentum: true,
        freeModeMomentumRatio: 0.8,
        freeModeMomentumVelocityRatio: 0.8,
        touchRatio: 1.2,
        navigation: {
        nextEl: '.navigation-button-next',
        prevEl: '.navigation-button-prev',
        },
            breakpoints: {
            1600:{
                slidesPerView: 4,
            },
        }
    })
})