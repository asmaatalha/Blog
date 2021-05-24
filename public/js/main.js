const username = document.getElementById('username')
const email = document.getElementById('email')
const password = document.getElementById('password')
const form = document.getElementById('form')
const error = document.getElementById('error')



form.addEventListener('submit', (e) => {

    let mesages = [];
    if (username.value === '' || username.value == null) {
        mesages.push('Please provide your name!');
    }

    if (email.value === '' || email.value == null) {
        mesages.push('Please provide your email!');
    }

    if (password.value.length <= 6) {
        mesages.push('password must be longer than 6 characters')
    }

    if (password.value.length >= 15) {
        mesages.push('password must be less than 15 characters')
    }

    if (mesages.length > 0) {
        e.preventDefault()
        error.innerText = mesages.join(', ');
    }
    
})