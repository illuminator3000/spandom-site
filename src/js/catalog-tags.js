document.addEventListener('DOMContentLoaded', function(){
    document.addEventListener('click', function(e){
        const target = e.target.closest('.catalog-tags__item');
        if(!target) return;
        // sendRequestFilterCatalog
        
        const filterUrl = target.dataset.filter;
        // Итоговый URL
        if(filterUrl){
            const smartFilter = document.querySelector('.catalog-filter');
            smartFilter.setAttribute('action',filterUrl);
            smartFilter.dispatchEvent(new Event('submit', { bubbles: true, cancelable: true }));
            smartFilter.submit();
            target.classList.toggle('active');
        }
        
    })
    
})