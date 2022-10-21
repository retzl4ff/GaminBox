let gameImage = document.querySelector('#imageGame1')

gameImage.addEventListener("pointerover", function altera() {
    gameImage.setAttribute('src', 'assets/macaco-sad.gif')
})

gameImage.addEventListener("pointerout", function retorna() {
    gameImage.setAttribute('src', 'assets/mariogame-png.png')
})


