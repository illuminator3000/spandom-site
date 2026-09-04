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


   document.addEventListener('click', function(e){
      if(!e.target.closest('.favorite-btn')){
         return
      }
      const currentBtn = e.target.closest('.favorite-btn');
      if(currentBtn.classList.contains('active')){
         currentBtn.classList.remove('active');
         currentBtn.innerHTML = `  <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M17.8301 4.22656C19.5975 4.22846 21.2919 4.91794 22.542 6.14258C23.792 7.36723 24.4961 9.02747 24.498 10.7598C24.498 12.387 23.8279 14.0039 22.8213 15.5146C21.8145 17.0255 20.4687 18.4343 19.1104 19.6475C16.3934 22.0739 13.6214 23.7231 13.3994 23.8486L13.3984 23.8477C13.2803 23.9169 13.1454 23.9541 13.0078 23.9541C12.87 23.954 12.7345 23.9173 12.6162 23.8477V23.8467C12.368 23.7119 9.59885 22.0664 6.8877 19.6475C5.52792 18.4343 4.18095 17.0256 3.17383 15.5146C2.16689 14.0039 1.49707 12.387 1.49707 10.7598C1.49777 9.44967 1.90105 8.16983 2.65332 7.08691C3.40561 6.0041 4.4726 5.16761 5.71582 4.68652C6.95913 4.20542 8.32172 4.10178 9.62598 4.38867C10.9147 4.6722 12.0874 5.32511 12.9971 6.2627C13.6145 5.62616 14.3563 5.1173 15.1787 4.76758C16.0154 4.41178 16.918 4.2276 17.8301 4.22656ZM19.3799 5.9541C18.3368 5.6313 17.2158 5.64264 16.1797 5.98633C15.1436 6.33006 14.2463 6.98827 13.6182 7.86523C13.5478 7.96309 13.454 8.04263 13.3457 8.09766C13.2376 8.1526 13.1178 8.18158 12.9961 8.18164C12.8742 8.18164 12.7538 8.15268 12.6455 8.09766C12.5373 8.04263 12.4434 7.96306 12.373 7.86523C11.7445 6.98988 10.8478 6.33299 9.8125 5.99023C8.77701 5.64745 7.65648 5.63633 6.61426 5.95898C5.57231 6.28162 4.66271 6.92125 4.0166 7.78418C3.37048 8.64729 3.02147 9.68965 3.02051 10.7598C3.02051 12.0119 3.52683 13.2893 4.31934 14.5215C5.11164 15.7533 6.18763 16.9372 7.32324 18C9.57451 20.107 12.0536 21.7358 12.9971 22.3271C13.9402 21.7344 16.4201 20.1045 18.6719 17.9971C19.8075 16.9342 20.8835 15.7509 21.6758 14.5195C22.4683 13.2878 22.9746 12.011 22.9746 10.7598C22.9747 9.68876 22.6267 8.64538 21.9805 7.78125C21.3341 6.91703 20.423 6.27693 19.3799 5.9541Z" fill="white" stroke="white" stroke-width="0.0910756"></path>
            </svg>`
      }else{
         currentBtn.classList.add('active');
         currentBtn.innerHTML = `  <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M17.8301 4.22656C19.5975 4.22846 21.2919 4.91794 22.542 6.14258C23.792 7.36723 24.4961 9.02747 24.498 10.7598C24.498 12.387 23.8279 14.0039 22.8213 15.5146C21.8145 17.0255 20.4687 18.4343 19.1104 19.6475C16.3934 22.0739 13.6214 23.7231 13.3994 23.8486L13.3984 23.8477C13.2803 23.9169 13.1454 23.9541 13.0078 23.9541C12.87 23.954 12.7345 23.9173 12.6162 23.8477V23.8467C12.368 23.7119 9.59885 22.0664 6.8877 19.6475C5.52792 18.4343 4.18095 17.0256 3.17383 15.5146C2.16689 14.0039 1.49707 12.387 1.49707 10.7598C1.49777 9.44967 1.90105 8.16983 2.65332 7.08691C3.40561 6.0041 4.4726 5.16761 5.71582 4.68652C6.95913 4.20542 8.32172 4.10178 9.62598 4.38867C10.9147 4.6722 12.0874 5.32511 12.9971 6.2627C13.6145 5.62616 14.3563 5.1173 15.1787 4.76758C16.0154 4.41178 16.918 4.2276 17.8301 4.22656Z" fill="#FF0080" stroke="#FF0080" stroke-width="0.0910756" />
            </svg>`
      }
   })


   document.addEventListener('click', function(e){
     const target =  e.target.closest('.tags-switcher__item');
     if(!target){
         return;
     }
     const container = target.closest('.tags-switcher');
     if(!container){
         return
     }
     container.querySelector('.tags-switcher__item.active')?.classList.remove('active');
     target.classList.add('active')
   })

   document.addEventListener('click', function(e){
      const target = e.target.closest('.questions-item__top');
      if(!target) return;

      const parent = target.closest('.questions-item');
      $(parent.querySelector('.questions-item__body')).slideToggle();

   })
});