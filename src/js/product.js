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

    function addToBasket(id){
        // тут запрос на добавление товара в корзину 
        return 4;
    }
})