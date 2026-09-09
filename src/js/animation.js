document.addEventListener('DOMContentLoaded', function() {
    const animateBlocks = document.querySelectorAll('.animate-block');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const items = entry.target.querySelectorAll('[data-animate-type="show"]');
                items.forEach((item, index) => {
                    setTimeout(() => {
                        item.classList.add('active');
                    }, index * 200);
                });
                
            }
        });
    }, {
        threshold: 0.1
    });
    
    animateBlocks.forEach(block => {
        observer.observe(block);
    });
});