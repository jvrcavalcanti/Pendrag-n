const h1 = document.querySelector(".text-move")
h1.style.paddingLeft = window.innerWidth + "px"

const animation = (speed) => {
    if(parseInt(h1.style.paddingLeft) >= speed) {
        h1.style.paddingLeft = (parseInt(h1.style.paddingLeft) - speed) + "px"
    }

    if(parseInt(h1.style.paddingLeft) <= speed) {
        h1.style.paddingLeft = window.innerWidth + "px"
    }
}

setInterval(() => animation(10), 100)