console.log('Hello')

let a = 20
let b = 20

console.log(a >= b)

document.addEventListener('DOMContentLoaded', (event) => {
    const incrementButtons = document.querySelectorAll('.increment_button')
    const decrementButtons = document.querySelectorAll('.decrement_button')
    const amounts = document.querySelectorAll('.amount')

    incrementButtons.forEach((button, index) => {
        button.addEventListener('click', () => {
            amounts[index].textContent = parseInt(amounts[index].textContent) + 1
        })
    })

    decrementButtons.forEach((button, index) => {
        button.addEventListener('click', () => {
            amounts[index].textContent = parseInt(amounts[index].textContent) - 1
        })
    })
})
