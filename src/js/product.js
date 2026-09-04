document.addEventListener('DOMContentLoaded', function(){
    document.addEventListener('click', function(e){
        const BasketBtn = e.target.closest('.product-card__basket-add');
        if(!BasketBtn){
            return
        }
        // id товара из data атрибута
        const id = 2;
        const result = addToBasket(id);
        let counter = BasketBtn.querySelector('span');
        if(counter){
            counter.innerText = result;
        }else{
            counter = document.createElement('span');
            counter.innerText = result;
            BasketBtn.appendChild(counter);
        }
    })

    document.addEventListener('click', function(e){
        const target = e.target.closest('.detail-product__counter-item');
        if(!target) return
        const parent = target.closest('.detail-product__counter');
        const countTarget = parent.querySelector('input[name = "count"]');
        if(target.dataset.action == 'minus'){
            if(parseInt(countTarget.value) <= 1){
                return;
            }
            countTarget.value = parseInt(countTarget.value) - 1;
        }else if(target.dataset.action == 'pluse'){

            countTarget.value = parseInt(countTarget.value) + 1;
        }
    })

    document.addEventListener('click', function(e){
        const target = e.target.closest('.detail-product__info__element__show-all');

        if(!target) return;
        
        const parent = target.closest('.detail-product__info__element');
        const list = parent.querySelector('.detail-product__info__element-list');
        list.classList.toggle('show-all');

    })

    document.addEventListener('click', function(e){
        const target = e.target.closest('.detail-product__info__element-top');
        if(!target) return;
        $(target).next().slideToggle();
        target.classList.toggle('open');
    })
    function addToBasket(id){
        // тут запрос на добавление товара в корзину 
        return 4;
    }
})