document.addEventListener('DOMContentLoaded', function(){
    const statusForm = document.getElementById('getStatus');
    if(statusForm){
        const statusFormInput = statusForm.querySelector('input');
        IMask(statusFormInput, {
            mask: /^\d+$/,
        });
        statusFormInput.addEventListener('input', function(e){
            const buttonElement = this.closest('form').querySelector('button');
            if(buttonElement.classList.contains('status-btn--error') || buttonElement.classList.contains('status-btn--success')){
                buttonElement.classList.remove('status-btn--error');
                buttonElement.classList.remove('status-btn--success');
                buttonElement.innerHTML = `Найти заказ`;

                const resultBlock = document.querySelector('.status-form__result');
                resultBlock.innerHTML = `*Номер заказа можно найти в письме, которое мы присылали вам на почту после оформления заказа или в личном кабинете во вкладке «заказы»`;
            }
        })
        statusForm.addEventListener('submit', function(e){

            const resultBlock = document.querySelector('.status-form__result');
            const buttonElement = this.querySelector('button');
            e.preventDefault();
            const inputElement = this.querySelector('input');
            const inputValue = inputElement.value.trim();
            if (inputValue === '') {
                resultBlock.innerText = 'Пожалуйста, введите номер заказа. Поле не может быть пустым.';
                buttonElement.classList.add('status-btn--error');
                buttonElement.classList.remove('status-btn--success');
                buttonElement.innerHTML = `
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L6 6M11 11L6 6M6 6L1 11M6 6L11 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Не нашли
                `;
                return; 
            }
            const orderId = Number(inputValue);
            if (isNaN(orderId) || !Number.isFinite(orderId)) {
                resultBlock.innerText = 'Проверьте, пожалуйста, правильно ли вы ввели номер заказа. Номер заказа необходимо ввести целым числом без букв и других знаков.';
                buttonElement.classList.add('status-btn--error');
                buttonElement.classList.remove('status-btn--success');
                buttonElement.innerHTML = `
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L6 6M11 11L6 6M6 6L1 11M6 6L11 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Не нашли
                `;
                return; 
            }
            if (!Number.isInteger(orderId)) {
                resultBlock.innerText = 'Номер заказа должен быть целым числом. Пожалуйста, введите целое число без дробной части.';
                buttonElement.classList.add('status-btn--error');
                buttonElement.classList.remove('status-btn--success');
                buttonElement.innerHTML = `
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L6 6M11 11L6 6M6 6L1 11M6 6L11 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Не нашли
                `;
                return; 
            }
            if (orderId <= 0) {
                resultBlock.innerText = 'Номер заказа должен быть положительным числом. Пожалуйста, введите число больше 0.';
                buttonElement.classList.add('status-btn--error');
                buttonElement.classList.remove('status-btn--success');
                buttonElement.innerHTML = `
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L6 6M11 11L6 6M6 6L1 11M6 6L11 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Не нашли
                `;
                return; 
            }
            
            //find-order
            const result = {
                "success": 'true',
                "status": 'pending',
            }

            if(result.success){
                resultBlock.innerHTML = 'Статус заказа: <span>Заказ передан в службу доставки</span>';
                buttonElement.classList.add('status-btn--success');
                buttonElement.classList.remove('status-btn--error');
                buttonElement.innerHTML = `
                <svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 5L5.64286 9L14 1" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Нашли
                `;
            }else{
                resultBlock.innerText = 'Заказа не найден';
                buttonElement.classList.add('status-btn--error');
                buttonElement.innerHTML = `
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L6 6M11 11L6 6M6 6L1 11M6 6L11 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Не нашли
                `;
                return; 
            }
        })


    }
})