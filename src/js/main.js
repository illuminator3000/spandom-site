document.addEventListener('DOMContentLoaded', function(){
   const headerMenuItems = document.querySelectorAll('.header-menu__item');
   console.log(headerMenuItems);
   const DELAY = 300;
   
   if(headerMenuItems.length > 0){
      headerMenuItems.forEach(function(item) {
         let timeoutId = null;
         
         item.addEventListener('mouseenter', function(e) {
            if(timeoutId) {
               clearTimeout(timeoutId);
               timeoutId = null;
            }
            
            const dropdown = this.querySelector('.dropdown-element');
            if(dropdown) {
               dropdown.classList.add('open');
            }
         });
         
         item.addEventListener('mouseleave', function(e) {
            const dropdown = this.querySelector('.dropdown-element');
            if(dropdown) {
               timeoutId = setTimeout(function() {
                  dropdown.classList.remove('open');
                  timeoutId = null;
               }, DELAY);
            }
         });
      });
   }
});