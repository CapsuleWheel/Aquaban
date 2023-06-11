const tape = document.querySelector('.swiper__tape');
const counter = document.querySelector('.swiper__counter');
const containers = document.querySelectorAll('.swiper__image-container');
const dots = document.querySelectorAll('.swiper__dot');
const next = document.querySelectorAll('.swiper__next');
const prev = document.querySelectorAll('.swiper__prev');

let position = 0;
let count = 0;
let intervalId;

const move = () => {
    tape.style.transform = `translateX(${position}px)`;

    // Остановить интервал, если он уже запущен, чтобы избежать конфликта
    if (intervalId) {
        clearInterval(intervalId);
    }

    // Установить интервал на 3 секунды между переходами
    intervalId = setInterval(() => {
        // Код для перемещения вперед
        if (count === containers.length - 1) {
            position = 0;
            count = 0;
            containers[containers.length - 1].classList.remove('accent');
            containers[0].classList.add('accent');
            dots[dots.length - 1].classList.remove('accent');
            dots[0].classList.add('accent');
        } else {
            position -= 790;
            count += 1;
            containers[count - 1].classList.remove('accent');
            containers[count].classList.add('accent');
            dots[count - 1].classList.remove('accent');
            dots[count].classList.add('accent');
        }
        
        move();
    }, 3000);
};

// Вызвать функцию move() для запуска автоматического перехода
move();

next.forEach(button => {
    button.addEventListener('click', () => {

        if (count === containers.length - 1) {
            position = 0;
            count = 0;
            containers[containers.length - 1].classList.remove('accent');
            containers[0].classList.add('accent');
            dots[dots.length - 1].classList.remove('accent');
            dots[0].classList.add('accent');
        } else {
            position -= 790;
            count += 1;
            containers[count - 1].classList.remove('accent');
            containers[count].classList.add('accent');
            dots[count - 1].classList.remove('accent');
            dots[count].classList.add('accent');
        }

        // Остановить интервал при ручном переходе к изображению
        clearInterval(intervalId);

        move();
    })
})

prev.forEach(button => {
    button.addEventListener('click', () => {

        if (count === 0) {
            position = -790 * (containers.length - 1);
            count = containers.length - 1;
            containers[0].classList.remove('accent');
            containers[containers.length - 1].classList.add('accent');
            dots[0].classList.remove('accent');
            dots[dots.length - 1].classList.add('accent');
        } else {
            position += 790;
            count -= 1;
            containers[count + 1].classList.remove('accent');
            containers[count].classList.add('accent');
            dots[count + 1].classList.remove('accent');
            dots[count].classList.add('accent');
        }

        // Остановить интервал при ручном переходе к изображению
        clearInterval(intervalId);
        
        move();
    })
})
