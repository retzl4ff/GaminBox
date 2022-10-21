const mario = document.querySelector(".mario");
const pipe = document.querySelector(".pipe");
const gameovertext = document.querySelector('.gameOverText')
const buttonRestart = document.querySelector('.restart-button')
const time = document.querySelector('.time')
let appendSeconds = document.querySelector('#seconds')
let url = "./index.html"
let seconds = 0
let interval
let timeout
let timeout2

function count(){
    seconds++
    appendSeconds.innerHTML = seconds 
}

interval = setInterval(count, 20)

timeout2 = setTimeout(function(){
    interval = setInterval(count, 10)
}, 15000)

const jump = () => {
    mario.classList.add('jump');

    setTimeout(() => {

        mario.classList.remove('jump');

    }, 500);
}

const loop = setInterval(() => {

    const pipePosition = pipe.offsetLeft;
    const marioPosition = +window.getComputedStyle(mario).bottom.replace('px', '');
 
    if(pipePosition <= 120 && pipePosition > 0 && marioPosition < 80) {

        pipe.style.animation = 'none';
        pipe.style.left = `${pipePosition}px`;

        mario.style.animation = 'none';
        mario.style.bottom = `${marioPosition}px`;

        mario.src = './images/game-over.png';
        mario.style.width = '75px';
        mario.style.marginLeft = '50px';
        gameovertext.classList.add('show')
        buttonRestart.classList.add('mostrar')
        clearInterval(loop);
        clearInterval(interval)
        clearInterval(interval)

        window.addEventListener('keypress', function(e){
            if(e.key === 'Enter'){
                this.location = url
            }
        })
}

}, 10)

function restarta() {
    window.location = url
}

timeout = setTimeout(altera, 15000)

timeout = setTimeout(altera2, 39000)

function altera(){
    pipe.style.animation = 'pipe-animation 1.0s infinite linear'
}

function altera2() {
    pipe.style.animation = 'pipe-animation 0.75s infinite linear'
}

document.addEventListener('keydown', jump);
