document.addEventListener('DOMContentLoaded', function(){
    document.addEventListener('click', function(e){
        const target = e.target.closest('.catalog-tags__item');
        if(!target) return;
        // sendRequestFilterCatalog
        target.classList.toggle('active');
    })
    
})