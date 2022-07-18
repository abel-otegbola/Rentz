// Car rent form handler

const handleActions = () => {
    let actions = document.querySelectorAll(" .action ")
    let buttons = document.querySelectorAll(" .buttons span, .buttons button ")
    let steps = document.querySelectorAll(" .actions-steps .step ")
    let indicator = document.querySelector("#step-indicator span")
    let index = 0;

    buttons[0].style.display = "none"
    buttons[2].style.display = "none"

    buttons[1].addEventListener("click", () => {
        actions[0].classList.remove("active")
        actions[1].classList.remove("active")
        actions[2].classList.remove("active")
        actions[index+1].classList.add("active")

        index++

        if(index === 1) {
            buttons[0].style.display = "block"
            buttons[2].style.display = "none"
        }

        if(index > 1) {
            buttons[1].style.display = "none"
            buttons[2].style.display = "block"
        }

        steps[index].classList.add("active")
        indicator.textContent = index+1
        
    })

    buttons[0].addEventListener("click", () => {
        index--
        actions[0].classList.remove("active")
        actions[1].classList.remove("active")
        actions[2].classList.remove("active")
        actions[index].classList.add("active")

        if(index === 1) {            
            buttons[1].style.display = "block"
            buttons[2].style.display = "none"
        }

        if(index === 0) {
            buttons[0].style.display = "none"
        }
        steps[index+1].classList.remove("active")
        indicator.textContent = index+1
    })

    // if(actions[0].className. = "active") {
    //     buttons[0].style.display = "none"
    // }
    // else {
    //     buttons[0].style.display = "block"
    // }
}

handleActions()


let actions = document.querySelector("#actions")

const closeActions = () => {
    actions.style.display = "none"
}

const openActions = () => {
    actions.style.display = "block"
}

openActions()
closeActions()