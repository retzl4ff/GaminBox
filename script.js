let url = "gamepage.html"
let timeOut
let boximage = document.getElementById('boximage')
let body = document.querySelector('body')

function timeout() {
    boximage.style.transform = 'scale(0)'
    timeOut = setTimeout(preview, 700)
}

function preview() {
    window.location = url
    clearTimeout()
}

let url1 = "login.html"

function login(){
    location = url1
}