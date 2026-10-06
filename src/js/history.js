document.addEventListener('DOMContentLoaded', function(){
    document.addEventListener('click', function(e){
        const target = e.target.closest('.history-block__item');
        if(!target){
            return;
        }
        if(target.classList.contains('active')){
            return;
        }
        document.querySelector('.history-block__item.active').classList.remove('active');
        target.classList.add('active');

        document.querySelector('.history-info__tag').innerText = target.querySelector('.history-block__text').innerText + ' год';
    })
})