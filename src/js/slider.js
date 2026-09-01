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
})