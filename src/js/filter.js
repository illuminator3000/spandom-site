document.addEventListener('DOMContentLoaded', function(){

    document.addEventListener('click', function(e){
       const target = e.target.closest('.catalog-filter__element-title');
       if(!target){
        return
       } 
       const parent =  target.closest('.catalog-filter__element');
       if(!parent){
        return;
       }
       $(parent.querySelector('.catalog-filter__items-container')).slideToggle();

       setTimeout(()=>{
            parent.classList.toggle('open');
       },300)
       
    })
})