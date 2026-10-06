document.addEventListener('DOMContentLoaded', function(){
    document.addEventListener('click', function(e){
    
      const target = e.target.closest('.vakancy-block__item-top-toggle');
      if(!target) return;
      target.classList.toggle('active');
      const parent = target.closest('.vakancy-block__item');
      $(parent.querySelector('.vakancy-block__item-body')).slideToggle();

   })
})